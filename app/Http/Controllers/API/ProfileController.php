<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function editProfile(Request $request){
        $user = auth()->user();
        $user->name = $request->name;

        //if photo is uploaded
        if ($request->hasFile('photo')) {
            //delete existing photo first
            if($user->photo != '') Storage::disk('public')->delete($user->photo);

            $user->photo = $request->file('photo')->store('images/users', 'public');
            $user->save();
        }

        $user->save();

        return response()->json([
            'message' => 'Successfully edit profile!',
            'data' => $user
        ]);
    }
}
