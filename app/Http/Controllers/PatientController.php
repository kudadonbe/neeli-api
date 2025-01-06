<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Patient::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StorePatientRequest $request)
    // {
    //     //
    // }

     public function store(Request $request)
    {
        $feilds = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'national_id' => 'required',
            'address_id' => 'required',
        ]);

        $patient = Patient::create($feilds);

        return $patient;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return $patient;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $feilds = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'national_id' => 'required',
            'address_id' => 'required',
        ]);

        $patient->update($feilds);

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return [
            'message' => 'Patient deleted successfully'
        ];
    }
}
