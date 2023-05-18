<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerAPIController extends Controller
{

    public function index(Request $request)
    {
        $owners = Owner::all();
        return $owners;

    }

    public function update($id, OwnerRequest $request)
    {
        $owner = Owner::find($id);

        if (!$owner) {
            return response()->json(['message' => 'Owner not found'], 404);
        }

        $request->validate($request->rules(), $request->messages());

        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->save();

        return response()->json(['message' => 'OK', 'data' => $owner], 200);
    }

    public function store(OwnerRequest $request){
        $request->validate($request->rules(), $request->messages());
        $owner=new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->user_Id=$request->userId;
        $owner->save();
        return response()->json(['message' => 'OK', 'data' => $owner], 200);
    }
    public function destroy($id){
        $owner=Owner::find($id);

        Owner::destroy($id);
        return response()->json(['message' => 'OK'], 200);
    }
}
