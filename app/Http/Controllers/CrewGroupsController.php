<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrewGroups;

class CrewGroupsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CrewGroups::orderBy('id','DESC')->get();
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
        $newCGroup = new CrewGroups;
        $newCGroup->code_name = $request->cgroup["code_name"];
        $newCGroup->deck_group_id = $request->cgroup["deck_group_id"];
        $newCGroup->engine_group_id = $request->cgroup["engine_group_id"];
        $newCGroup->status = $request->cgroup["status"];
        $newCGroup->current_work = $request->cgroup["current_work"];
        $newCGroup->save();
        return $newCGroup;
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
        $existingCGroup = CrewGroups::find( $id ) ;
        if( $existingCGroup ){
            $existingCGroup->code_name = $request->cgroup["code_name"];
            $existingCGroup->deck_group_id = $request->cgroup["deck_group_id"];
            $existingCGroup->engine_group_id = $request->cgroup["engine_group_id"];
            $existingCGroup->status = $request->cgroup["status"];
            $existingCGroup->current_work = $request->cgroup["current_work"];
            $existingCGroup->save();
            return $existingCGroup;
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
        $existingCGroup = CrewGroups::find( $id ) ;
        if( $existingCGroup ){
            $existingCGroup->delete();
            return "Group data deleted" ;
        }
        return "Group data not found";
    }
}
