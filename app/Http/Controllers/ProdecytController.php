<?php

namespace App\Http\Controllers;

use App\Http\Resources\productresource;
use App\Models\prodecyt;
use App\Models\project;
use Illuminate\Http\Request;

class ProdecytController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        //dd($request);
       // project::create($request->all());
        return productresource::collection(project::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prodecyt  $prodecyt
     * @return \Illuminate\Http\Response
     */
    public function show(prodecyt $prodecyt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodecyt  $prodecyt
     * @return \Illuminate\Http\Response
     */
    public function edit(prodecyt $prodecyt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodecyt  $prodecyt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodecyt $prodecyt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodecyt  $prodecyt
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodecyt $prodecyt)
    {
        //
    }
}
