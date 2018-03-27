<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\medico;
use App\medicalCenter;
use App\specialty;
use App\medico_specialty;
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

    public function tolist(Request $request){

      $medicos = medico::where('name','LIKE','%'.$request->search.'%')->paginate(10);
      $medicosCount = medico::where('name','LIKE','%'.$request->search.'%')->count();

      $medicalCenters = medicalCenter::where('name','LIKE','%'.$request->search.'%')->paginate(10);
      $medicalCentersCount = medicalCenter::where('name','LIKE','%'.$request->search.'%')->count();

      $specialties = specialty::where('name','LIKE','%'.$request->search.'%')->paginate(10);
       $specialtyCount = specialty::where('name','LIKE','%'.$request->search.'%')->count();

      return view('home.listSearch')->with('medicos', $medicos)->with('medicalCenters', $medicalCenters)->with('medicosCount', $medicosCount)->with('medicalCentersCount', $medicalCentersCount)->with('specialties', $specialties)->with('specialtyCount', $specialtyCount);

      // $skip = $request->skip;
      // $take = 2;
      //
      // $medicos = medico::select("id","name")->where('name','LIKE','%'.$request->search.'%')->count();
      // $medicalCenters = medicalCenter::select("id","name")->where('name','LIKE','%'.$request->search.'%')->count();
      // $specialty = specialty::select("id","name")->where('name','LIKE','%'.$request->search.'%')->count();
      // $totalCount = $medicos + $medicalCenters + $specialty;
      //
      // $totalPag = floor($totalCount / $take);
      //
      // //return response()->json($totalPag);
      //
      //
      // $medicos = medico::select("id","name","role")->where('name','LIKE','%'.$request->search.'%');
      //
      // $medicalCenters = medicalCenter::select("id","name","role")->where('name','LIKE','%'.$request->search.'%');
      //
      // $data = specialty::select("id","name","role")->where('name','LIKE','%'.$request->search.'%')->union($medicos)->union($medicalCenters)->skip($skip)->take($take)->get();
      //
      // //return response()->json($take);
      // return view('home.listSearch')->with('data', $data)->with('take', $take);
    }


    public function tolist2(Request $request){

      $skip = $request->skip;
      $take = 3;

      //return response()->json($skip);

      $medicos = medico::select("id","name")->where('name','LIKE','%'.$request->search.'%');

      $medicalCenters = medicalCenter::select("id","name")->where('name','LIKE','%'.$request->search.'%');

      $data = specialty::select("id","name")->where('name','LIKE','%'.$request->search.'%')->union($medicos)->union($medicalCenters)->skip($skip)->take($take)->get();


      return view('home.listSearch')->with('data', $data)->with('take', $take);
    }

    // public function tolist(Request $request){
    //
    //   $medicos = medico::where('name','LIKE','%'.$request->search.'%')->get();
    //
    //
    //   $medicalCenters = medicalCenter::where('name','LIKE','%'.$request->search.'%')->get();
    //
    //
    //   return view('home.listSearch')->with('medicos',$medicos)->with('medicalCenters',$medicalCenters);
    // }

    public function prueba(){

    }
}
