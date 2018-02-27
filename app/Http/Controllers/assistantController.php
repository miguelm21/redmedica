<?php

namespace App\Http\Controllers;
use App\assistant;
use App\medico;
use App\user;
use Mail;
use Illuminate\Http\Request;

class assistantController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */



   public function assistantReg()
   {

     return view('assistant.successReg');
   }

  public function index()
  {
    $specialties = specialty::orderBy('id','desc')->paginate(10);

    return view('specialty.specialty.index')->with('specialties', $specialties);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $medico = medico::orderBy('name','asc')->pluck('name','id');
      return view('assistant.create')->with('medico', $medico);
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
          'email'=>'required|unique:users|unique:assistants',
          'name'=>'required',
          'lastName'=>'required',
          'medico_id'=>'required',
          'modules_id'=>'nullable',////AREGLARRRRRRRRRRRRRRRRRRRRRRRRRRRR
          'phone1'=>'required',
          'phone2'=>'nullable',
          'password'=>'required',
        ]);

        $assistant = new assistant;
        $assistant->fill($request->all());
        $assistant->save();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->assistant_id = $assistant->id;

        $user->role = 'Asistente';
        $user->save();


        return view('assistant.successReg')->with('assistant', $assistant);

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
      $category = specialtyCategories::find($id);
      return view('specialty.specialtyCategories.edit')->with('category', $category);
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
    $category = specialtyCategories::find($id);

    if($request->name != $category->name){
      $request->validate([
        'name'=>'required|unique:specialty_categories',
        'description'=>'nullable',
      ]);
    }
      $category->fill($request->all());

      $category->save();


      return redirect()->route('specialty_categories.index')->with('success','La Categoria: '.$request->name. ' ha sido actualizada.' );


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
