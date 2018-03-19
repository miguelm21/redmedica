<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\month;
use Auth;
use App\medico;
use App\event;
class medico_diaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function medico_diary_events($id)
     {
       $data = event::where('medico_id',$id)->get();

       // return view('fullCalendar.fullCalendar');
        return Response()->json($data);
     }


     public function medico_diary($id)
     {
       // $months = month::where('user_id',Auth::user()->id)->get();
       $medico = medico::find($id);
       return view('medico.diary.index')->with('medico', $medico);
       // ->with($months, 'months');
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
          'title'=>'required',
          'eventType'=>'required',
          'date_start'=>'required',
        ]);

        $hourStart = $request->hourStart.':'.$request->minsStart.':'.'00';

        $start = $request->date_start.' '.$request->hourStart.':'.$request->minsStart.':'.'00';

        if($request->date_End == Null){
          $date_End = $request->date_start;
        }else{
          $date_End = $request->date_End;
        }

        if($request->hourEnd == '--' or $request->minsEnd == '--'){
          $hourEnd = $request->hourStart.':'.$request->minsStart.':'.'00';
          $end = $date_End.' '.$request->hourStart.':'.$request->minsStart.':'.'00';

        }else{
          $end = $date_End.' '.$request->hourEnd.':'.$request->minsEnd.':'.'00';
          $hourEnd = $request->hourEnd.':'.$request->minsEnd.':'.'00';
        }

      //  \Carbon\Carbon::parse()
        $event = new event;
        $event->title = $request->title;
        $event->eventType = $request->eventType;
        $event->start = $start;
        $event->end = $end;

        $event->dateStart = $request->date_start;
        $event->dateEnd = $date_End;
        $event->hourStart = $request->hourStart;
        $event->minsStart = $request->minsStart;
        $event->hourEnd = $request->hourEnd;
        $event->minsEnd = $request->minsEnd;
        // $event->hourStart = $hourStart;
        // $event->hourEnd = $hourEnd;

        if($request->eventType == 'Normal'){
          $event->color = 'blue';
        }elseif($request->eventType == 'Importante'){
          $event->color = 'red';
        }elseif($request->eventType == 'Recordatorio'){
          $event->color = 'yellow';
        }

        $event->medico_id = $request->medico_id;
        $event->save();

        return redirect()->route('medico_diary',$request->medico_id)->with('success','Nuevo Evento Guardado');

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



      $hourStart = $request->hourStart.':'.$request->minsStart.':'.'00';

      $start = $request->date_start.' '.$request->hourStart.':'.$request->minsStart.':'.'00';

      if($request->date_End == Null){
        $date_End = $request->date_start;
      }else{
        $date_End = $request->date_End;
      }

      if($request->hourEnd == '--' or $request->minsEnd == '--'){
        $hourEnd = $request->hourStart.':'.$request->minsStart.':'.'00';
        $end = $date_End.' '.$request->hourStart.':'.$request->minsStart.':'.'00';

      }else{

        $end = $date_End.' '.$request->hourEnd.':'.$request->minsEnd.':'.'00';

        $hourEnd = $request->hourEnd.':'.$request->minsEnd.':'.'00';
      }

    //  \Carbon\Carbon::parse()
      $event = event::find($request->event_id);
      $event->title = $request->title;
      $event->eventType = $request->eventType;
      $event->start = $start;
      $event->end = $end;

      $event->dateStart = $request->date_start;
      $event->dateEnd = $date_End;
      $event->hourStart = $request->hourStart;
      $event->minsStart = $request->minsStart;
      $event->hourEnd = $request->hourEnd;
      $event->minsEnd = $request->minsEnd;
      // $event->hourStart = $hourStart;
      // $event->hourEnd = $hourEnd;

      if($request->eventType == 'Normal'){
        $event->color = 'blue';
      }elseif($request->eventType == 'Importante'){
        $event->color = 'red';
      }elseif($request->eventType == 'Recordatorio'){
        $event->color = 'yellow';
      }

      $event->medico_id = $request->medico_id;
      $event->save();

      return redirect()->route('medico_diary',$request->medico_id)->with('success','Nuevo Evento Guardado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        event::destroy($request->event_id);
        return back()->with('success', 'evento Eliminado');
    }
}
