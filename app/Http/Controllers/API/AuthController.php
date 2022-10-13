<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        return response()->json([
            'access_token' => $tokenResult->plainTextToken,
            'token_type' => 'Bearer'
        ]);
    }

    public function register(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string'
            ],[
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email is invalid',
                'email.unique' => 'Email sudah di gunakan',
                'password.required' => 'Password is required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Invalid data',
                    'error' => $validator->errors()->first()
                ], 500);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'message' => 'Successfully created user!',
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            $content = array(
                'success' => false,
                'data' => 'something went wrong.',
                'message' => 'There was an error while processing your request: ' .
                    $e->getMessage()
            );
            return response($content)->setStatusCode(500);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function users()
    {
        $users = User::all();

        return response()->json([
            'message' => 'Success',
            'data' => $users
        ]);
    }

    public function user(Request $request)
    {
        $user = User::with(['wishlists.product.stocks', 'wishlists.product.images', 'addresses'])->where('email', $request->query('email'))->first();
        foreach ($user->wishlists as $wishlist) {
            $wishlist->product->image = $wishlist->product->images->first()->image;
            $wishlist->product->brand_name = $wishlist->product->brand()->select('name')->value('name');
        }
        if($user) {
            return response()->json([
                'message' => 'Success',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'message' => 'User not found',
                'data' => null
            ], 404);
        }
    }
}
