<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ships;

class ShipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ships::orderBy('id','DESC')->get();
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
        $newShip = new Ships;
        $newShip->code = $request->ship["code"];
        $newShip->status = $request->ship["status"];
        $newShip->save();
        return $newShip;
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
        $existingShip = Ships::find( $id ) ;
        if( $existingShip ){
            $existingShip->ship = $request->ship["code"];
            $existingShip->ship = $request->ship["status"];
            $existingShip->save();
            return $existingShip;
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
        $existingShip = Ships::find( $id ) ;
        if( $existingShip ){
            $existingShip->delete();
            return "Ship data deleted" ;
        }
        return "Ship data not found";
    }
}
