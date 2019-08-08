<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactSystem;

class MailSMSController extends Controller
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
        $contactos = ContactSystem::all();
        $i = 0;
        foreach( $contactos as $contacto ){
            if( $i == 0 ){
                $email = $contactos[0]->email;
                $sms = $contactos[0]->sms;
                $whatsapp = $contactos[0]->whatsapp;
                $direccion = $contactos[0]->direccion;
                $facebook = $contactos[0]->facebook;
            }
            $i = $i + 1;
        }

        return view('admin.paginas.mail_sms.index',['email'=>$email,
                                                    'sms'=>$sms,
                                                    'whatsapp'=>$whatsapp,
                                                    'direccion'=>$direccion,
                                                    'facebook'=>$facebook]);
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
        $contacto = new ContactSystem();
        $contacto->email = $request->email;
        $contacto->sms = $request->sms;
        $contacto->whatsapp = $request->whatsapp;
        $contacto->direccion = $request->direccion;
        $contacto->facebook = $request->facebook;
        $contacto->save();

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
        $contacto = ContactSystem::find($id); 
        return response()->json($contacto); 
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
        $contacto = ContactSystem::find($id);
        $contacto->email = $request->email;
        $contacto->sms = $request->sms;
        $contacto->whatsapp = $request->whatsapp;
        $contacto->direccion = $request->direccion;
        $contacto->facebook = $request->facebook;
        $contacto->save();

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
}
