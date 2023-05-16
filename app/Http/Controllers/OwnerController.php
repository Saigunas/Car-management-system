<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{

    public function index(Request $request)
    {
        $filter=$request->session()->get('filterOwners', (object)['name'=>null]);

        // Combines name and surname for search and handles scenarios like "hn sm" for "John Smith"
        $owners = Owner::all()->filter(function ($owner) use ($filter) {
            if ($filter->name) {
                $filterStr = strtolower(preg_replace('/\s+/', ' ', $filter->name)); // replace consecutive spaces with a single space
                $nameAndSurname = strtolower($owner->name . ' ' . $owner->surname);
                return strpos($nameAndSurname, $filterStr) !== false;
            } else {
                return true;
            }
        })->sortBy('name');
        return view('owners.index', [
            'owners' => $owners,
            "filter"=>$filter
        ]);
    }
    public function edit($id){
        $owner=Owner::find($id);
        $this->authorize('update', $owner);

        return view("owners.edit",[
            "owner"=>Owner::find($id)
        ]);
    }

    public function update($id, OwnerRequest $request){
        $owner=Owner::find($id);
        $this->authorize('update', $owner);

        $request->validate($request->rules(), $request->messages());
        $owner=Owner::find($id);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.index");
    }

    public function save(OwnerRequest $request){
        $request->validate($request->rules(), $request->messages());
        $owner=new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.index");
    }
    public function delete($id){
        $owner=Owner::find($id);
        $this->authorize('delete', $owner);

        Owner::destroy($id);
        return redirect()->route("owners.index");
    }
    public function search(Request $request){
        $filterOwners=new \stdClass();
        $filterOwners->name=$request->name;

        $request->session()->put('filterOwners', $filterOwners);
        return redirect()->route('owners.index');
    }
    public function create(){
        return view("owners.create");
    }
}
