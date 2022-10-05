<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile(Request $request){
        $user = auth()->user();
        $user->name = $request->name;
        $user->save();

        return response()->json([
            'message' => 'Successfully edit profile!',
            'data' => $user
        ]);
    }
}
