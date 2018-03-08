<?php

namespace App\Http\Controllers;
use App\photo;
use Illuminate\Http\Request;

class photoController extends Controller
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
        $request->validate([
          'image'=>'image|required'
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $photos = photo::where('medico_id',$request->medico_id)->count();

        $nameP = $photos + 1;
        $namePhoto = $nameP.'.'.$extension;
        $pathSave = 'users/'.$request->email.'/photos';

        $photo = new photo;
        $photo->name = $nameP;
        $photo->path = $pathSave.'/'.$namePhoto;
        $photo->description = 'perfil';
        $photo->medico_id = $request->medico_id;
        $photo->save();

        $request->file('image')->move($pathSave,$namePhoto);

        return back()->with('success', 'Imagen Guardada Con Exito');
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
