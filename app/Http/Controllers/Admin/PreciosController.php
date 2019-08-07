<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BuyedClientPoint;
use App\User;
use App\RoleUser;
use App\Package;
use App\Client;
use Auth;

class PreciosController extends Controller
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

        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $role = RoleUser::where('user_id', $user_id)->first();
        $pointsBuyed = BuyedClientPoint::where(['client_id'=>$user_id,'statebuyed_id'=>3])->get();

        $precioTotal = 0;
        $consumoTotal = 0;
        foreach( $pointsBuyed as $pointBuyed )
        { 
            $consumoTotal = $consumoTotal + $pointBuyed->points;
        }
        
        $clients = [];
        if($role->id == 1){
            $clients = Client::all();
            return view('admin.paginas.precios.selectclient',['clients'=>$clients]);
        }
        else{

            $client = $user->userClientAdmin->client;
            $package = Package::where('id',$client->package_id)->first();
            $precioTotal = $package->price;

            $combos = Package::all();
            $comboactual = $client->package_id;
            return view('admin.paginas.precios.index',['combos'=>$combos,
            'name_client'=>$client->name,
            'logo_client'=>$client->logo,
            'combo_actual'=>$comboactual,
            'points_buyed'=>$pointsBuyed,
            'client_id'=>$user->client->id,
            'preciototal'=>$precioTotal,
            'consumototal'=>$consumoTotal ]);            
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client(Request $request)
    { 
        $client_id = $request->client_selecc;
        $client = Client::where('id',$client_id)->first(); 
        $pointsBuyed = BuyedClientPoint::where(['client_id'=>$client_id,'statebuyed_id'=>3])->get();

        $precioTotal = 0;
        $consumoTotal = 0;
        foreach( $pointsBuyed as $pointBuyed )
        {
            $precioTotal = $precioTotal + $pointBuyed->importe;
            $consumoTotal = $consumoTotal + $pointBuyed->points;
        }
 
        $package = Package::where('id',$client->package_id)->first();
        $precioTotal = $package->price;

        $combos = Package::all();
        $comboactual = $client->package_id;
 
        return view('admin.paginas.precios.index',[
            'combos'=>$combos,
            'name_client'=>$client->name,
            'logo_client'=>$client->logo,
            'combo_actual'=>$comboactual,
            'points_buyed'=>$pointsBuyed,
            'client_id'=>$client_id, 
            'preciototal'=>$precioTotal,
            'consumototal'=>$consumoTotal ]); 

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
}
