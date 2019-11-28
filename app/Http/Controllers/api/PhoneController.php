<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function getAll()
    {
        try {
            $phones = Phone::all();
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => "Success",
            'data' => $phones
        ]);
    }

    public function findById($id)
    {
        try {
            $phone = Phone::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => "Success",
            'data' => $phone
        ]);
    }

    public function delete($id)
    {
        try {
            $phone = Phone::findOrFail($id);
            $phone->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => "Success",
            'message' => 'xoa thanh cong'
        ]);
    }

    public function create(Request $request)
    {
        try {
            $phone = new Phone();
            $phone->name = $request->name;
            $phone->price = $request->price;
            $phone->save();
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => "Success",
            'data' => $phone,
            'message' => 'xoa thanh cong'
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $phone = Phone::findOrFail($id);
            $phone->name = $request->name;
            $phone->price = $request->price;
            $phone->save();
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => "Success",
            'message' => 'xoa thanh cong'
        ]);
    }
}
