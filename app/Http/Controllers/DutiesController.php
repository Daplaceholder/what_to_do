<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duties;

class DutiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Duties::orderBy('id','DESC')->get();
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
        $newDuty = new Duties;
        $newDuty->name = $request->duty["name"];
        $newDuty->job_description = $request->duty["job_description"];
        $newDuty->save();
        return $newDuty;
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
        $existingDuty = Duties::find( $id ) ;
        if( $existingDuty ){
            $existingDuty->name = $request->duty["name"];
            $existingDuty->job_description = $request->duty["job_description"];
            $existingDuty->save();
            return $existingDuty;
        }
        return "Duty data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingDuty = Duties::find( $id ) ;
        if( $existingDuty ){
            $existingDuty->delete();
            return "Duty data deleted" ;
        }
        return "Duty data not found";
    }
}
