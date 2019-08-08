<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Package;

class PaquetesController extends Controller
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
        $packages = Package::all(); 
        return view('admin.paginas.paquetes.index',['packages'=>$packages]);
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
        //
        $paquetes = new Package();
   
        $paquetes->name = $request->name;
        $paquetes->description = $request->decription; 
        $paquetes->price = $request->price; 
        $paquetes->promo = $request->promo; 
        $paquetes->status = $request->status; 
        $paquetes->save();

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
        $paquetes = Package::find($id);
        return response()->json($paquetes);
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
        $paquetes = Package::find($id);
        $paquetes->name = $request->name;
        $paquetes->description = $request->decription; 
        $paquetes->price = $request->price; 
        $paquetes->promo = $request->promo; 
        $paquetes->status = $request->status; 
        $paquetes->save();

        return response()->json(['rpta'=>'ok']);
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


    /**
     * El cliente actualiza su paquete
     */
    public function clientPackage($client_id, $package_id)
    {
        $client = Client::where('id',$client_id)->first();
        $client->package_id = $package_id;
        $client->save(); 
        
        return redirect('/admin/precios'); 
    }

}
