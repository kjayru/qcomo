<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Advertisement;
use App\Client;
use App\User;


class PublicidadController extends Controller
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
        
        $clientes = Client::orderBy('id','desc')->get();
        $publicidades = Advertisement::orderBy('id','desc')->get();
        return view('admin.paginas.publicidad.index',['clientes'=>$clientes,'publicidades'=>$publicidades]);

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
        
        $publi = new Advertisement();
        $publi->title = $request->titulo;
        $publi->url = $request->Url;

        if($request->hasFile('imagen')){
            $cover = $request->file('imagen')->store('publicidad');
            $publi->image = $cover;
        }

        $publi->empresa = $request->empresa;
        $publi->costo = $request->costo;
        $publi->inicio = $request->inicio;
        $publi->final = $request->final;
        $publi->client_id = $request->cliente;

        $publi->save();

        return response()->json($publi);
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
