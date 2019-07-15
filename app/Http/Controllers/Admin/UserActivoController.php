<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserActivo;

class UserActivoController extends Controller
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
        $userActivo = UserActivo::all();
        return view('admin.paginas.miposicionpuntos.index', ['userActivos' => $userActivo]);
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
        $activo = UserActivo::where('user_id', $request->user_id)->first();
        if(empty($activo))
        {
            $activo = new UserActivo();
            $activo->user_id = $request->user_id;
            $activo->state = 1;
            $activo->save();
        } 
        else{
            $activo->state = 1;
            $activo->save();
        }
        return response()->json(['rpta'=>'ok']);
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
        //
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


    public function activos()
    {    
        $current = time();
        $userActivo = UserActivo::all();
        $amount = 1;
        foreach($userActivo as $activo){     
            $last = strtotime($activo->update_at);  
            if($activo->state == 1 && $current - $last > 3600){ //se considera una hora como inactivo
                $amount = $amount + 1;
            }
        } 
        return json_encode(['rpta' => "ok", 'amount' => $amount]);
    }

}
