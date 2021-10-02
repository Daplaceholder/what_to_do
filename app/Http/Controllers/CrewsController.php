<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crews;

class CrewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Crews::orderBy('id','DESC')->get();
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
        $newCrew = new Crews;
        $newCrew->name = $request->crew["name"];
        $newCrew->rating_id = $request->crew["rating_id"];
        $newCrew->crew_status_id = $request->crew["crew_status_id"];
        $newCrew->work_status_id = $request->crew["work_status_id"];
        $newCrew->save();
        return $newCrew;
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
        $existingCrew = Crews::find( $id ) ;
        if( $existingCrew ){
            $existingCrew->name = $request->crew["name"];
            $existingCrew->rating_id = $request->crew["rating_id"];
            $existingCrew->crew_status_id = $request->crew["crew_status_id"];
            $existingCrew->work_status_id = $request->crew["work_status_id"];
            $existingCrew->save();
            return $existingCrew;
        }
        return "Crew data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingCrew = Crews::find( $id ) ;
        if( $existingCrew ){
            $existingCrew->delete();
            return "Crew data deleted" ;
        }
        return "Crew data not found";
    }
}
