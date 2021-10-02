<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipments;

class ShipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Shipments::orderBy('status_id','DESC')->get();
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
        $newShipment = new Shipments;
        $newShipment->status_id = $request->shipment["status_id"];
        $newShipment->crew_group_id = $request->shipment["crew_group_id"];
        $newShipment->route_id = $request->shipment["route_id"];
        $newShipment->work_group_id = $request->shipment["work_group_id"];
        $newShipment->save();
        return $newShipment;
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
        $existingShipment = Shipments::find( $id ) ;
        if( $existingShipment ){
            $existingShipment->status_id = $request->shipment["status_id"];
            $existingShipment->save();
            return $existingShipment;
        }
        return "Shipment data not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingManager = Shipments::find( $id ) ;
        if( $existingManager ){
            $existingManager->delete();
            return "Shipment data deleted" ;
        }
        return "Shipment data not found";
    }
}
