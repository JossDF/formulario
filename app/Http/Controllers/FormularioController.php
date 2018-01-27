<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = [
            'ongoing' => 'Ongoing',
            'temporary' => 'Temporary',
            'full_time' => 'Full-timeMale',
            'part_time' => 'Part-time',
            'casual' => 'Casual',
            'other' => 'Other'
        ];
        $empresas = $this->listadoEmpresas();
        return view('formulario', compact('status','empresas'));
    }

    public function listadoEmpresas() {
        $path = storage_path() . "/json/fortune500.json";         
        $json = json_decode(file_get_contents($path), true);
        return $json['companies'];
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
        $this->validate($request, [
            'name' => 'required',
            'date_birth' => 'required',
            'address' => 'required',
            'employment_status' => 'required',
            'hour_work' => 'required',
        ]);
        return redirect()->route('formulario.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
