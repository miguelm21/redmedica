<?php

namespace App\Http\Controllers;
use App\administrator;
use App\permission;
use App\city;
use App\user;
use Illuminate\Http\Request;

class administratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $administrators = administrator::orderBy('id','desc')->paginate(10);
        return view('administrators.index')->with('administrators', $administrators);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



     public function confirmMedico($id,$code){
      $user = User::find($id);

      if($user->confirmation_code == $code){
          $user->confirmation_code = null;
          $user->confirmed = 'medium';
          $user->save();
          $medico = medico::where('user_id',$user->id);

          return redirect()->route('medico.edit',$user->id);

      }

           $user->save();

         return redirect()->route('successRegMedico',$user->id)->with('warning', 'No se pudo verificar la autenticacion del usuario,por favor presione el boton "Reenviar Correo de Confirmación" para intentarlo Nuevamente.');

     }

    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'lastName'=>'required',
           'email'=>'required|unique:medicos|unique:users',
           'password'=>'required',
        ]);

        $administrator = new administrator;
        $administrator->fill($request->all());
        $administrator->save();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->administrator_id = $administrator->id;
        $user->role = 'Administrador';
        $user->save();

         return redirect()->route('administrators.index')->with('success', 'Se ha creado un nuevo Administrador de Forma Satisfactoria');

    }

    public function successRegMedico($id)
    {
      $user = User::find($id);
        return view('medico.successReg')->with('user', $user);
    }

    public function resendMailMedicoConfirm(Request $request){

         $code = str_random(25);
         $user = User::find($request->user_id);
         $user->confirmation_code = $code;
         $user->save();

         Mail::send('mails.confirmMedico',['user'=>$user,'code'=>$code], function($msj) use($user){
            $msj->subject('Red Medica: '.$user->name);
            $msj->to('eavc53189@gmail.com');
        });

        return redirect()->route('successRegMedico',$user->id)->with('success', 'Se ha Reenviado el mensaje de confirmación a tu Correo Electronico.')->with('user', $user);
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
      $medico = medico::find($id);
        return view('medico.edit')->with('medico', $medico);
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
