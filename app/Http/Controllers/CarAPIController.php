<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\CarPhoto;
use App\Models\Owner;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CarAPIController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::with(['owner'])->orderBy('brand')->get();

        return response()->json(['message' => 'OK', 'data' => [$cars]], 200);
    }

    public function update($id, CarRequest $request){
        $car = Car::with('photos')->find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        $request->validate($request->rules(), $request->messages());
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->owner_id=$request->owner_id;

        $photos = $request->file('photos');

        if ($photos) {
            foreach ($photos as $photo) {
                if ($photo->isValid()) {
                    // Upload photo
                    // $imageName = time() . '_' . $photo->getClientOriginalName();
                    // $photo->storeAs('public/images', $imageName);
                    $photo->store("/public/images");

                    // Create new CarPhoto instance
                    $carPhoto = new CarPhoto();
                    $carPhoto->Car_ID = $id;
                    $carPhoto->Image = $photo->hashName();;
                    $carPhoto->save();
                }
            }
        }

        $car->save();
        return response()->json(['message' => 'OK', 'data' => [$car, $photos]], 200);
    }

    public function store(CarRequest $request){
        $request->validate($request->rules(), $request->messages());
        $car=new Car();
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->owner_id=$request->owner_id;
        $car->save();
        return response()->json(['message' => 'OK', 'data' => [$car]], 200);
    }
    public function destroy($id){
        $car=Car::find($id);
        Car::destroy($id);
        return response()->json(['message' => 'OK'], 200);
    }
}
