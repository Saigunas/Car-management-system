<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;

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
        $owners=Owner::all();
        return view("cars.edit",[
            "car"=>Car::find($id),
            "owners" => $owners
        ]);
    }

    public function update($id, CarRequest $request){
        $request->validate($request->rules(), $request->messages());
        $car=Car::find($id);
        $car->reg_number=$request->reg_number;
        $car->brand=$request->brand;
        $car->owner_id=$request->owner_id;

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
