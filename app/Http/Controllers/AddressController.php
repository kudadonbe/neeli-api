<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;

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
    public function store(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());
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
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->all());
        return $address;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $house = $address->name;
        $address->delete();
        return ['message' => $house . ' deleted'];
    }
}
