<?php

namespace App\Http\Controllers;
use App\medico;
use App\User;
use App\medicalCenter;
use App\specialty;
use Mail;
use Illuminate\Http\Request;
class medicoController extends Controller
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

    public function medicosList()
    {
        $medicos = medico::orderBy('id','desc')->paginate(10);
        return view('medico.medicosList')->with('medicos',$medicos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $medicalCenter = medicalCenter::orderBy('tradename','asc')->pluck('tradename','id');
      $specialties = specialty::orderBy('name','asc')->pluck('name','id');

        return view('medico.create')->with('medicalCenter',$medicalCenter)->with('specialties',$specialties);
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
           'identification'=>'required|unique:medicos',
           'name'=>'required',
           'lastName'=>'required',
           'gender'=>'required',
           'email'=>'required|unique:medicos|unique:users',
           'password'=>'required',
           'state'=>'required',
           //'specialty-id'=>'required',
           //'sub-specialty-id'=>'nullable',
           'medicalCenter_id'=>'required',
           'phone'=>'required',
           'facebook'=>'required',
        ]);

        $medico = new medico;
        $medico->fill($request->all());
        $medico->password = bcrypt($request->password);
        $medico->save();

        $medico = medico::all()->last();

        $code = str_random(25);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->medico_id = $medico->id;
        $user->confirmation_code = $code;
        $user->role = 'medico';
        $user->save();



        Mail::send('mails.confirmMedico',['data'=>'hola'],function($msj){
           $msj->subject('Médicos Si');
           $msj->to('testprogramas531@gmail.com');

      });

           return redirect()->route('successRegMedico',$user->id)->with('success', 'Se ha enviado un mensaje de confirmación a tu Correo Electronico.')->with('user', $user);

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
