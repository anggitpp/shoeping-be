<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function store(Request $request){
        try {
            $validator = \Validator::make($request->all(), [
                'title' => 'required',
                'subtitle' => 'required',
                'name' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                'detail' => 'required',
                'longitude' => 'required',
                'latitude' => 'required',
            ],[
                'title.required' => 'Judul harus diisi',
                'subtitle.required' => 'Sub judul harus diisi',
                'name.required' => 'Nama harus diisi',
                'phone_number.required' => 'Nomor telepon harus diisi',
                'address.required' => 'Alamat harus diisi',
                'detail.required' => 'Detail alamat harus diisi',
                'longitude.required' => 'Longitude harus diisi',
                'latitude.required' => 'Latitude harus diisi',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Invalid data',
                    'error' => $validator->errors()->first()
                ], 400);
            }

            $user = auth()->user();
            if($request->status == 'primary'){
                $user->addresses()->update(['status' => 'secondary']);
            }
            $user->addresses()->create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'detail' => $request->detail,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'status' => $request->status,
            ]);

            return response()->json([
                'message' => 'Successfully created addresses!',
                'user' => $user->addresses
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

    public function update(Request $request, $id){
        try {
            $validator = \Validator::make($request->all(), [
                'title' => 'required',
                'subtitle' => 'required',
                'name' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                'detail' => 'required',
                'longitude' => 'required',
                'latitude' => 'required',
            ],[
                'title.required' => 'Judul harus diisi ya',
                'subtitle.required' => 'Sub judul harus diisi',
                'name.required' => 'Nama harus diisi',
                'phone_number.required' => 'Nomor telepon harus diisi',
                'address.required' => 'Alamat harus diisi',
                'detail.required' => 'Detail alamat harus diisi',
                'longitude.required' => 'Longitude harus diisi',
                'latitude.required' => 'Latitude harus diisi',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Invalid data',
                    'error' => $validator->errors()->first()
                ], 400);
            }

            $user = auth()->user();
            $address = $user->addresses()->where('id', $id)->first();
            if($request->status == 'primary'){
                $user->addresses()->update(['status' => 'secondary']);
            }
            $address->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'detail' => $request->detail,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'status' => $request->status,
            ]);

            return response()->json([
                'message' => 'Successfully updated addresses!',
                'addresses' => $user->addresses
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

    public function destroy($id){
        try {
            $user = auth()->user();
            $address = $user->addresses()->where('id', $id)->first();
            $address->delete();

            return response()->json([
                'message' => 'Successfully deleted addresses!',
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
}
