<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressRequest;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserPaymentMethod;
use App\Models\UserWishlist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::withCount(['wishlists', 'addresses', 'paymentMethods'])->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('users.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Password tidak sama',
            'photo.image' => 'File harus berupa gambar',
            'photo.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'photo.max' => 'File tidak boleh lebih dari 2MB',
        ]);

        $user = User::create($request->all());
        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('images/users', 'public');
            $user->save();
        }

        return redirect()->route('users.index')->with('message', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        //create validation for name, email
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        //if photo is uploaded
        if ($request->hasFile('photo')) {
            $user->photo = $request->file('photo')->store('images/users', 'public');
            $user->save();
        }

        return redirect()->route('users.index')->with('message', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }
        $user->delete();

        return redirect()->route('users.index')->with('message', 'User deleted successfully');
    }

    public function deleteImage(int $id)
    {
        $user = User::findOrFail($id);
        Storage::disk('public')->delete($user->photo);
        $user->photo = null;
        $user->save();

        //delete photo from storage
        return redirect()->route('users.edit', $id)->with('message', 'Image deleted successfully');
    }

    public function wishlists(int $id)
    {
        $data['user'] = User::with('wishlists')->findOrFail($id);
        $data['products'] = Product::all();

        return view('users.wishlist-form', $data);
    }
    public function wishlistUpdate(Request $request, int $id)
    {
        UserWishlist::whereUserId($id)->delete();
        if(isset($request->product_id)) {
            foreach ($request->product_id as $key => $value) {
                UserWishlist::create([
                    'user_id' => $id,
                    'product_id' => $value
                ]);
            }
        }

        session()->flash('message', 'Wishlist updated successfully');

        return redirect()->route('users.index');
    }

    public function addresses(int $id)
    {
        $data['user'] = User::findOrFail($id);
        $data['addresses'] = UserAddress::with('user')->whereUserId($id)->get();

        return view('users.addresses-index', $data);
    }

    public function addressCreate(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.addresses-form', compact('user'));
    }

    public function addressStore(UserAddressRequest $request, int $id)
    {
        if($request->status == 'primary') UserAddress::where('user_id', $id)->update(['status' => 'secondary']);
        UserAddress::create($request->all() + ['user_id' => $id]);

        return redirect()->route('users.addresses.index', $id)->with('message', 'Address created successfully');
    }

    public function addressEdit(int $id, int $addressId)
    {
        $user = User::findOrFail($id);
        $address = UserAddress::findOrFail($addressId);

        return view('users.addresses-form', compact('user', 'address'));
    }

    public function addressUpdate(UserAddressRequest $request, int $id, int $addressId)
    {
        if($request->status == 'primary') UserAddress::where('user_id', $id)->update(['status' => 'secondary']);
        $address = UserAddress::findOrFail($addressId);
        $address->update($request->all() + ['user_id' => $id]);

        return redirect()->route('users.addresses.index', $id)->with('message', 'Address updated successfully');
    }

    public function addressDestroy(int $id, int $addressId)
    {
        $address = UserAddress::findOrFail($addressId);
        $address->delete();

        return redirect()->route('users.addresses.index', $id)->with('message', 'Address deleted successfully');
    }

    public function payments(int $id)
    {
        $data['user'] = User::with('paymentMethods')->findOrFail($id);
        $data['payments'] = PaymentMethod::active()->get();

        return view('users.payments-form', $data);
    }
    public function paymentUpdate(Request $request, int $id)
    {
        UserPaymentMethod::whereUserId($id)->delete();
        foreach ($request->payment_id as $key => $value) {
            UserPaymentMethod::create([
                'user_id' => $id,
                'payment_method_id' => $value
            ]);
        }

        return redirect()->route('users.index')->with('message', 'Payment method updated successfully');
    }

}
