<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;


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

     public function store(StorePatientRequest $request)
    {
        $patient = Patient::create($request->all());
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

    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patientName = $patient->name;
        $patient->delete();
        return ['message' => 'Patient ' . $patientName . ' deleted'];
    }
}
