<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Match;
use App\Bet;
use Auth;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
         'name'=>'required|unique:users',
         'email'=>'email|required|unique:users',
         'password'=>'required',
      ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        $match1 = Match::where('phase_id',1)->get();

        $userLast = User::all()->last();

        $partido = 0;

        foreach ($match1 as $match){
          $partido = $partido + 1;
           $bet = new Bet;
           $bet->number = $partido;
           $bet->match_id = $partido;
           $bet->phase_id = 1;
           $bet->team1 = $match->team1;
           $bet->team2 = $match->team2;

           $bet->user_id = $userLast->id;
           $bet->save();
        }

        $match2 = Match::where('phase_id',2)->get();

        $partido2 = 16;
        foreach ($match2 as $match){
         $partido2 = $partido2 + 1;
          $bet = new Bet;
          $bet->number = $partido2;
          $bet->match_id = $partido2;
          $bet->phase_id = 2;
          $bet->team1 = $match->team1;
          $bet->team2 = $match->team2;
          $bet->user_id = $userLast->id;
          $bet->save();
      }

       $match3 = Match::where('phase_id',3)->get();

      $partido3 = 32;
     foreach ($match3 as $match){
      $partido3 = $partido3 + 1;
        $bet = new Bet;
        $bet->number = $partido3;
        $bet->match_id = $partido3;
        $bet->phase_id = 3;
        $bet->team1 = $match->team1;
        $bet->team2 = $match->team2;
        $bet->user_id = $userLast->id;
        $bet->save();
    }

        return redirect()->route('user.index')->with('success', 'Usuario Agregado Correctamente');
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
      $user = User::find($id);

        return view('user.edit')->with('user', $user);
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
        $user = user::find($id);
        if($user->name != $request->name){
           $request->validate([
               'name'=>'required|unique:users'
          ]);
        }
        if($user->email != $request->email){
          $request->validate([
             'email'=>'required|unique:users'
         ]);
      }

       if($request->password != null){
          $user->password = bcrypt($request->password);
       }
       $user->name = $request->name;
       $user->email = $request->email;
       $user->save();

       return redirect()->route('user.index')->with('success', 'Usuario Editado Correctamente');

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
       public function delete($id)
     {
         User::destroy($id);

         return redirect()->route('user.index')->with('danger', 'Usuario Elimnado Correctamente');
     }

}
