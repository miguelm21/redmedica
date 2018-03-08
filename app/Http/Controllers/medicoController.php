<?php

namespace App\Http\Controllers;
use App\medico;
use App\city;
use App\promoter;
use App\User;
use App\medicalCenter;
use App\specialty;
use App\photo;
use App\consulting_room;
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
      $cities = city::orderBy('name','asc')->pluck('name','name');
      $promoters = promoter::orderBy('id_promoter','asc')->pluck('id_promoter','id_promoter');
      $medicalCenter = medicalCenter::orderBy('tradename','asc')->pluck('tradename','id');
      $specialties = specialty::orderBy('name','asc')->pluck('name','id');

        return view('medico.create')->with('medicalCenter',$medicalCenter)->with('cities',$cities)->with('promoters', $promoters);
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
          $user->confirmation_code = $code;
          $user->confirmed = 'medium';
          $user->save();
          $medico = medico::find($user->medico_id);

          return redirect()->route('medico.edit',$medico->id);

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
           'city'=>'required',
           'medicalCenter_id'=>'required',
           'id_promoter'=>'nullable',
           'phone'=>'required|numeric',
           'facebook'=>'required',

        ]);

        $medico = new medico;
        $medico->fill($request->all());
        $medico->password = bcrypt($request->password);
        $medico->save();

        $code = str_random(25);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->medico_id = $medico->id;
        $user->confirmation_code = $code;
        $user->role = 'medico';
        $user->save();

        Mail::send('mails.confirmMedico',['medico'=>$medico,'user'=>$user,'code'=>$code],function($msj){
           $msj->subject('Médicos Si');
           $msj->to('eavc53189@gmail.com');

      });

         return redirect()->route('successRegMedico',$user->id)->with('user', $user);

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
        $consulting_room = consulting_room::where('medico_id',$medico->id)->get();
        $consultingIsset = consulting_room::where('medico_id',$medico->id)->count();
        $photo = photo::where('medico_id', $medico->id)->where('description', 'perfil')->first();

        return view('medico.edit')->with('medico', $medico)->with('photo', $photo)->with('consulting_room', $consulting_room)->with('consultingIsset', $consultingIsset);
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
