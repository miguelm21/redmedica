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
      // medico::where('name','LIKE','%'.$request->search.'%')->

      $request->validate([
        'typeSearch'=>'required'
      ]);

      $searchActive = 'Active';

      if($request->typeSearch == 'Medico'){
        $medicos = medico::SearchMedico($request->search)->orderBy('name','asc')->paginate(9);
        $medicosCount = medico::where('name','LIKE','%'.$request->search.'%')->count();
        return view('home.home')->with('medicos', $medicos)->with('medicosCount', $medicosCount)->with('searchActive', $searchActive)->with('search', $request->search);
      }

      if($request->typeSearch == 'Centro Medico'){
        $medicalCenters = medicalCenter::where('name','LIKE','%'.$request->search.'%')->paginate(10);
        $medicalCentersCount = medicalCenter::where('name','LIKE','%'.$request->search.'%')->count();
        return view('home.home')->with('medicalCenters', $medicalCenters)->with('medicalCentersCount', $medicalCentersCount)->with('searchActive', $searchActive)->with('search', $request->search);
      }

      if($request->typeSearch == 'Especialidad'){
        $specialties = specialty::where('name','LIKE','%'.$request->search.'%')->paginate(10);
         $specialtyCount = specialty::where('name','LIKE','%'.$request->search.'%')->count();

          return view('home.home')->with('specialties', $specialties)->with('specialtyCount', $specialtyCount)->with('searchActive', $searchActive)->with('search', $request->search);
      }




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
