<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\medico;
use App\medicalCenter;
use DB;
use Auth;
class HomeController extends Controller
{
    public function home(){
      if(auth::check()){
        $user = user::find(Auth::user()->id);
        return view('home.home')->with('user', $user);
      }

      return view('home.home');

    }

    public function tolist2(Request $request){
      $medicos = DB::table('medical_centers')
            ->join('medicos', 'medical_centers.id', '=', 'medicalCenter_id')
            ->select('medicos.*', 'medical_centers.tradeName', 'medicos.name')
            ->where('medicos.name','Edwar')
            ->get();
      return $medicos;
    }

    public function tolist(Request $request){

      $medicos = medico::where('name','LIKE','%'.$request->search.'%')->get();

      $medicalCenters = medicalCenter::where('tradename','LIKE','%'.$request->search.'%')->get();

      return view('home.listSearch')->with('medicos',$medicos)->with('medicalCenters',$medicalCenters);
    }

    public function prueba(){

    }
}
