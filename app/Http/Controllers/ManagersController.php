<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Managers;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Managers::orderBy('created_at','DESC')->get();
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
        $newManager = new Managers;
        $newManager->name = $request->manager["name"];
        $newManager->password = $request->manager["password"];
        $newManager->save();
        return $newManager;
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
        $existingManager = Managers::find( $id ) ;
        if( $existingManager ){
            $existingManager->name = $request->manager["name"];
            $existingManager->password = $request->manager["password"];
            $existingManager->save();
            return $existingManager;
        }
        return "User not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingManager = Managers::find( $id ) ;
        if( $existingManager ){
            $existingManager->delete();
            return "User Successfully deleted" ;
        }
        return "User not found";
    }
}
