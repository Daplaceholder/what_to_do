<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Works::orderBy('id','DESC')->get();
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
        $newWork = new Works;
        $newWork->work_code = $request->work["work_code"];
        $newWork->client = $request->work["client"];
        $newWork->crew_group_id = $request->work["crew_group_id"];
        $newWork->ship_id = $request->work["ship_id"];
        $newWork->remarks = $request->work["remarks"];
        $newWork->save();
        return $newWork;
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
        $existingWork = Works::find( $id ) ;
        if( $existingWork ){
            $existingWork->work_code = $request->work["work_code"];
            $existingWork->client = $request->work["client"];
            $existingWork->crew_group_id = $request->work["crew_group_id"];
            $existingWork->ship_id = $request->work["ship_id"];
            $existingWork->remarks = $request->work["remarks"];
            $existingWork->save();
            return $existingWork;
        }
        return "Work data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingWork = Works::find( $id ) ;
        if( $existingWork ){
            $existingWork->delete();
            return "Work data deleted" ;
        }
        return "Work data not found";
    }
}
