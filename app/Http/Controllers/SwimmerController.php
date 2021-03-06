<?php

namespace App\Http\Controllers;

use App\Models\Swimmer;
use Illuminate\Http\Request;
use App\Http\Requests\SwimmerRequest;

class SwimmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $swimmers =Swimmer::with('schoolClass')->with('school')->get();
       // dd($swimmers);
        return view('swimmersList',compact('swimmers'));
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
     * @param  \Illuminate\Http\SwimmerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SwimmerRequest $request)
    {
        Swimmer::create($request->all());
        return back()->with('success', 'Uczeń dodany.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Swimmer $swimmer)
    {
        return view('editSwimmer',compact('swimmer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Swimmerequest  $request
     * @param  int  $swimmer
     * @return \Illuminate\Http\Response
     */
    public function update(SwimmerRequest $request, Swimmer $swimmer)
    {
        //dd($swimmer);
        $swimmer->update($request->all());
        return back()->with('success', 'Zmiany zapisane.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
