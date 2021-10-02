<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\ShipmentsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ShipsController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\CrewStatusController;
use App\Http\Controllers\CrewsController;
use App\Http\Controllers\DutiesController;
use App\Http\Controllers\EngineGroupsController;
use App\Http\Controllers\DeckGroupsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/items',[ItemController::class,'index']);
Route::prefix('/item')->group( function(){
        Route::post('/store',[ItemController::class, 'store']);
        Route::put('/{id}',[ItemController::class, 'update']);
        Route::delete('/{id}',[ItemController::class, 'destroy']);
    } 
);

Route::get('/managers',[ManagersController::class,'index']);
Route::prefix('/manager')->group( function(){
        Route::post('/store',[ManagersController::class, 'store']);
        Route::put('/{id}',[ManagersController::class, 'update']);
        Route::delete('/{id}',[ManagersController::class, 'destroy']);
    } 
);

Route::get('/shipments',[ShipmentsController::class,'index']);
Route::prefix('/shipment')->group( function(){
        Route::post('/store',[ShipmentsController::class, 'store']);
        Route::put('/{id}',[ShipmentsController::class, 'update']);
        Route::delete('/{id}',[ShipmentsController::class, 'destroy']);
    } 
);

Route::get('/statuses',[StatusController::class,'index']);
Route::prefix('/status')->group( function(){
        Route::post('/store',[StatusController::class, 'store']);
        Route::put('/{id}',[StatusController::class, 'update']);
        Route::delete('/{id}',[StatusController::class, 'destroy']);
    } 
);

Route::get('/ships',[ShipsController::class,'index']);
Route::prefix('/ship')->group( function(){
        Route::post('/store',[ShipsController::class, 'store']);
        Route::put('/{id}',[ShipsController::class, 'update']);
        Route::delete('/{id}',[ShipsController::class, 'destroy']);
    } 
);

Route::get('/ratings',[RatingsController::class,'index']);
Route::prefix('/rating')->group( function(){
        Route::post('/store',[RatingsController::class, 'store']);
        Route::put('/{id}',[RatingsController::class, 'update']);
        Route::delete('/{id}',[RatingsController::class, 'destroy']);
    } 
);

Route::get('/cstatuses',[CrewStatusController::class,'index']);
Route::prefix('/cstatus')->group( function(){
        Route::post('/store',[CrewStatusController::class, 'store']);
        Route::put('/{id}',[CrewStatusController::class, 'update']);
        Route::delete('/{id}',[CrewStatusController::class, 'destroy']);
    } 
);

Route::get('/crews',[CrewsController::class,'index']);
Route::prefix('/crews')->group( function(){
        Route::post('/store',[CrewsController::class, 'store']);
        Route::put('/{id}',[CrewsController::class, 'update']);
        Route::delete('/{id}',[CrewsController::class, 'destroy']);
    } 
);

Route::get('/duties',[DutiesController::class,'index']);
Route::prefix('/duty')->group( function(){
        Route::post('/store',[DutiesController::class, 'store']);
        Route::put('/{id}',[DutiesController::class, 'update']);
        Route::delete('/{id}',[DutiesController::class, 'destroy']);
    } 
);

Route::get('/egroups',[EngineGroupsController::class,'index']);
Route::prefix('/egroup')->group( function(){
        Route::post('/store',[EngineGroupsController::class, 'store']);
        Route::put('/{id}',[EngineGroupsController::class, 'update']);
        Route::delete('/{id}',[EngineGroupsController::class, 'destroy']);
    } 
);

Route::get('/dgroups',[DeckGroupsController::class,'index']);
Route::prefix('/dgroup')->group( function(){
        Route::post('/store',[DeckGroupsController::class, 'store']);
        Route::put('/{id}',[DeckGroupsController::class, 'update']);
        Route::delete('/{id}',[DeckGroupsController::class, 'destroy']);
    } 
);

Route::get('/cgroups',[CrewGroupsController::class,'index']);
Route::prefix('/cgroup')->group( function(){
        Route::post('/store',[CrewGroupsController::class, 'store']);
        Route::put('/{id}',[CrewGroupsController::class, 'update']);
        Route::delete('/{id}',[CrewGroupsController::class, 'destroy']);
    } 
);

Route::get('/works',[WorksController::class,'index']);
Route::prefix('/work')->group( function(){
        Route::post('/store',[WorksController::class, 'store']);
        Route::put('/{id}',[WorksController::class, 'update']);
        Route::delete('/{id}',[WorksController::class, 'destroy']);
    } 
);