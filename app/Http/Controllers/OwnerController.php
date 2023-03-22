<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

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
        return view("owners.edit",[
            "owner"=>Owner::find($id)
        ]);
    }

    public function update($id, Request $request){
        $owner=Owner::find($id);
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.index");
    }

    public function save(Request $request){
        $owner=new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route("owners.index");
    }
    public function delete($id){
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
    /*




    */
/*
    public function show(Owner $owner)
    {
        return view('owners.show', ['owner' => $owner]);
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:owners',
            'phone_number' => 'required|unique:owners',
        ]);

        $owner = Owner::create($validatedData);

        return redirect()->route('owners.show', ['owner' => $owner]);
    }

    public function edit(Owner $owner)
    {
        return view('owners.edit', ['owner' => $owner]);
    }

    public function update(Request $request, Owner $owner)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:owners,email,'.$owner->id,
            'phone_number' => 'required|unique:owners,phone_number,'.$owner->id,
        ]);

        $owner->update($validatedData);

        return redirect()->route('owners.show', ['owner' => $owner]);
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('owners.index');
    }
*/
}
