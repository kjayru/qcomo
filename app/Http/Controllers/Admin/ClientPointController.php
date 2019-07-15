<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClientPoint; 


class ClientPointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
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
        $clientPoint = ClientPoint::where('client_id',$request->id)->first();
        if(empty($clientPoint)){
            $clientPoint = new ClientPoint();
            $clientPoint->client_id = $request->id;
            $clientPoint->amount = $request->puntos;
            $clientPoint->point_used = 0;
            $clientPoint->point_enabled = $request->puntos;
        }
        else
        {
            $clientPoint->client_id = $request->id;
            $clientPoint->amount = $clientPoint->amount + $request->puntos;
            $clientPoint->point_used = $clientPoint->point_used + 0;
            $clientPoint->point_enabled = $clientPoint->point_enabled + $request->puntos;
        }
        $clientPoint->save();

        return response()->json(['rpta' => 'ok','msg'=>'Compra de puntos realizado con exito','client_point'=>$clientPoint]);
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
    public function update(Request $request)
    {
        //
        $clientPoint = ClientPoint::where('client_id',$request->id)->first();
        if(!empty($clientPoint))
        {
            if( $clientPoint->point_enabled < $request->puntos ){
                return response()->json(['rpta' => 'faill','msg'=>'Punto a adicionar es mayor que los disponibles']);        
            }
 
            $clientPoint->point_used = $clientPoint->point_used + $request->puntos;
            $clientPoint->point_enabled = $clientPoint->point_enabled - $request->puntos;
            $clientPoint->save();
        } 
        return response()->json(['rpta' => 'ok','msg'=>'Compra de puntos realizado con exito','client_point'=>$clientPoint]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
