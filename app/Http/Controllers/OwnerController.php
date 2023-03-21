<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();

        return view('owners.index', ['owners' => $owners]);
    }
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
