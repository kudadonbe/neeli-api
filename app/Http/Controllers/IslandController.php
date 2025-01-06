<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIslandRequest;
use App\Http\Requests\UpdateIslandRequest;
use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Island::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $feilds = $request->validate([
            'name' => 'required',
            'atoll' => 'required',
        ]);
        $island = Island::create($feilds);
        return $island;
    }

    /**
     * Display the specified resource.
     */
    public function show(Island $island)
    {
        //
        return $island;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Island $island)
    {
        $feilds = $request->validate([
            'name' => 'required',
            'atoll' => 'required',
        ]);

        $island->update($feilds);

        return $island;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Island $island)
    {
        $island->delete();

        return [
            'message' => 'Island deleted successfully'
        ];
    }
}
