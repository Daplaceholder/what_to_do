<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrewStatus;

class CrewStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CrewStatus::orderBy('id','DESC')->get();
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
        $newCStatus = new CrewStatus;
        $newCStatus->crew_status_name = $request->crew_status["crew_status_name"];
        $newCStatus->save();
        return $newCStatus;
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
        $existingCrewStatus = CrewStatus::find( $id ) ;
        if( $existingCrewStatus ){
            $existingCrewStatus->crew_status_name = $request->crew_status["crew_status_name"];
            $existingCrewStatus->save();
            return $existingCrewStatus;
        }
        return "Status data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingCrewStatus = CrewStatus::find( $id ) ;
        if( $existingCrewStatus ){
            $existingCrewStatus->delete();
            return "Status data deleted" ;
        }
        return "Status data not found";
    }
}
