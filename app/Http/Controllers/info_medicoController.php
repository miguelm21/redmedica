<?php

namespace App\Http\Controllers;
use App\info_medico;
use Illuminate\Http\Request;

class info_medicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function info_medicoCreate($id)
    {

        return view('medico.info_medico.create')->with('medico_id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'type'=>'required',
          'institution'=>'required',
          'specialty'=>'required',
          'from'=>'required',
          'state'=>'required',
          'until'=>'required',
          'aditional'=>'nullable',
        ]);

        if($request->type == 'other'){
          $request->validate([
            'other'=>'required'
          ]);

        }

        $info_medico = new info_medico;
        $info_medico->fill($request->all());
        if($request->type == 'other'){
          $info_medico->type = $request->other;
        }
        $info_medico->save();

        return redirect()->route('medico.edit',$request->medico_id)->with('success','Se ha Agregado una nueva Especialidad/Carrera, de forma satisfactoria.');
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
