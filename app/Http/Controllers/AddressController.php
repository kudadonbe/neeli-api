<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Address::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'island_id' => 'required',
        ]);
        $address = Address::create($fields);
        return $address;
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
        return $address;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $fields = $request->validate([
            'name' => 'required',
            'island_id' => 'required',
        ]);

        $address->update($fields);

        return $address;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return ['message' => 'Address deleted'];
    }
}
