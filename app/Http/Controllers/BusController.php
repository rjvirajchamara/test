<?php

namespace App\Http\Controllers;

use App\Http\Requests\storbus;
use App\Http\Resources\bus as ResourcesBus;
use App\Http\Resources\BusResource;
use App\Models\bus;
use Illuminate\Http\Request;

class BusController extends Controller
{

    public function index()
    {
        return BusResource::collection(bus::all());
    }


    public function store(storbus $request)
    {

    }


    public function show(bus $bus)
    {

    }


    public function update(Request $request, bus $bus)
    {
        //
    }



    public function destroy(bus $bus)
    {
        //
    }
}
