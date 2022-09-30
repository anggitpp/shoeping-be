<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentMethodRequest;
use App\Models\PaymentMethod;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PaymentMethodController extends Controller
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
        $payments = PaymentMethod::all();

        return view('payment-methods.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('payment-methods.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PaymentMethodRequest $request
     * @return RedirectResponse
     */
    public function store(PaymentMethodRequest $request)
    {
        $promo = PaymentMethod::create($request->all());

        if ($request->hasFile('image')) {
            $promo->image = $request->file('image')->store('images/payments', 'public');
            $promo->save();
        }

        session()->flash('message', 'Payment method berhasil ditambahkan');

        return redirect()->route('payment-methods.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $payment = PaymentMethod::findOrFail($id);

        return view('payment-methods.form', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PaymentMethodRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(PaymentMethodRequest $request, int $id)
    {
        $payments = PaymentMethod::findOrFail($id);

        $payments->update($request->all());

        if ($request->hasFile('image')) {
            $payments->image = $request->file('image')->store('images/payments', 'public');
            $payments->save();
        }

        session()->flash('message', 'Payment method berhasil diubah');

        return redirect()->route('payment-methods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $payment = PaymentMethod::findOrFail($id);

        $payment->delete();

        if ($payment->image) {
            Storage::disk('public')->delete($payment->image);
        }

        session()->flash('message', 'Payment method berhasil dihapus');

        return redirect()->route('payment-methods.index');
    }

    public function deleteImage($id){
        $payment = PaymentMethod::findOrFail($id);
        $payment->image = null;
        $payment->save();

        if ($payment->image) {
            Storage::disk('public')->delete($payment->image);
        }

        return redirect()->route('payment-methods.edit', $id)->with('success', 'Gambar berhasil dihapus');
    }
}
