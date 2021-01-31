<?php

namespace App\Http\Controllers;

use App\Models\counter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $counter = counter::get();
        return response(['counter' => $counter], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $counter = counter::create($request->all());
        return response($counter, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(counter $counter)
    {
        //
        return response($counter, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(counter $counter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, counter $counter)
    {
        //
        $counter->update($request->all());
        return response($counter, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(counter $counter)
    {
        //
        $counter->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
