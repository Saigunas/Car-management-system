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

class CarController extends Controller
{
    public function index(Request $request)
    {
        $filter=$request->session()->get('filterCars', (object)[
            'reg_number'=>null,
            'brand'=>null,
            'owner_id'=>null
        ]);

        $owners=Owner::all();
        $cars = Car::with(['owner'])->filter($filter)->orderBy('brand')->get();

        return view('cars.index', [
            'cars' => $cars,
            'owners' => $owners,
            "filter"=>$filter
        ]);
    }
    public function edit($id){
        $car = Car::with('photos')->find($id);
        $this->authorize('update', $car);

        $owners=Owner::all();

        return view("cars.edit",[
            "car"=>$car,
            "owners" => $owners,
        ]);
    }

    public function update($id, CarRequest $request){
        $car = Car::with('photos')->find($id);
        $this->authorize('update', $car);

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
        return redirect()->route("cars.index");
    }

    public function save(CarRequest $request){
        $request->validate($request->rules(), $request->messages());
        $car=new Car();
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->owner_id=$request->owner_id;
        $car->save();
        return redirect()->route("cars.index");
    }
    public function delete($id){
        $car=Car::find($id);
        $this->authorize('delete', $car);
        Car::destroy($id);
        return redirect()->route("cars.index");
    }
    public function search(Request $request)
    {
        $filterCars = new \stdClass();

        $filterCars->reg_number = $request->reg_number;
        $filterCars->brand = $request->brand;
        $filterCars->owner_id = $request->owner_id;

        $request->session()->put('filterCars', $filterCars);

        return redirect()->route('cars.index');
    }
    public function create(){
        $owners=Owner::all();
        return view("cars.create",[
            "owners" => $owners,
        ]);
    }
}
