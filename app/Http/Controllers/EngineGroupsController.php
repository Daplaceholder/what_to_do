<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineGroups;

class EngineGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EngineGroups::orderBy('id','DESC')->get();
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
        $newEGroup = new EngineGroups;
        $newEGroup->group_code = $request->egroup["group_code"];
        $newEGroup->duty_id = $request->egroup["duty_id"];
        $newEGroup->crew_id = $request->egroup["crew_id"];
        $newEGroup->save();
        return $newEGroup;
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
        $existingEGroup = EngineGroups::find( $id ) ;
        if( $existingEGroup ){
            $existingEGroup->group_code = $request->egroup["group_code"];
            $existingEGroup->duty_id = $request->egroup["duty_id"];
            $existingEGroup->crew_id = $request->egroup["crew_id"];
            $existingEGroup->save();
            return $existingEGroup;
        }
        return "Group data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingEGroup = EngineGroups::find( $id ) ;
        if( $existingEGroup ){
            $existingEGroup->delete();
            return "Group data deleted" ;
        }
        return "Group data not found";
    }
}
