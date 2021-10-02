<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeckGroups;

class DeckGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeckGroups::orderBy('id','DESC')->get();
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
        $newDGroup = new DeckGroups;
        $newDGroup->group_code = $request->dgroup["group_code"];
        $newDGroup->duty_id = $request->dgroup["duty_id"];
        $newDGroup->crew_id = $request->dgroup["crew_id"];
        $newDGroup->save();
        return $newDGroup;
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
        $existingDGroup = DeckGroups::find( $id ) ;
        if( $existingDGroup ){
            $existingDGroup->group_code = $request->dgroup["group_code"];
            $existingDGroup->duty_id = $request->dgroup["duty_id"];
            $existingDGroup->crew_id = $request->dgroup["crew_id"];
            $existingDGroup->save();
            return $existingDGroup;
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
        $existingDGroup = DeckGroups::find( $id ) ;
        if( $existingDGroup ){
            $existingDGroup->delete();
            return "Group data deleted" ;
        }
        return "Group data not found";
    }
}
