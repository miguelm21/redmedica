<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\medico;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
class LoginController extends Controller
{


      public function loginRedirect(){

        if(Auth::user()->hasRole('medico')){
          $medico = medico::find(Auth::user()->medico_id);
          if($medico->state == 'medium'){
            return redirect()->route('data_primordial_medico',$medico->id);
          }else{
            return redirect()->route('medico_diary',$medico->id);
          }
        }else{
          return redirect()->route('home');
        }

      }

    public function login2(){
      $credentials = $this->validate(request(),[
        'email'=>'email|required|string',
        'password'=> 'required|string'
      ]);

     if(Auth::attempt($credentials)){
       return response()->json('true');
     }
     return response()->json('false');

    }

    public function logout(){

      Auth::logout();

      return redirect()->route('home');

    }
}
