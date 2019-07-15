<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Franchise;
use App\Package;
use App\Classification;

class FranchiseController extends Controller
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
       // $paises = Pais::orderBy('Pais','asc')->get();

        $franquicias = Franchise::orderBy('status','desc')->get();

        $packages = Package::all();

        $classifications = Classification::all();
                
        return view('admin.paginas.franquicias.index',['franquicias'=>$franquicias,'packages'=>$packages,'classifications'=>$classifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $file = $request->file('avatar');
            
        $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/storage/franchise');
        $file->move($destinationPath, $input['imagename']);

       /* $image = new Photo();
        $image->user_id = $request->admin_id;
        $image->name = $input['imagename'];
        $image->save();*/

        

        $franchise = new Franchise();

        $franchise->names = $request->names;
        $franchise->address = $request->address;
        $franchise->city = $request->city;
        $franchise->province = $request->province;
        $franchise->cellphone = $request->cellphone;
        $franchise->mail = $request->mail;
        $franchise->avatar =  $input['imagename'];
        $franchise->classification_id = $request->classification_id;
        $franchise->package_id = $request->package_id;
        $franchise->status =2;
        $franchise->user_id = $user_id;
        //$franchise->latitude = $request->latitude;
        //$franchise->longitude = $request->longitude;

        $franchise->save();

        return response()->json(['rpta' => 'ok']);
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
        $user_id = Auth::id();
        $franchise = Franchise::find($id);

       

        return response()->json($franchise);
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

       // dd($request->file('avatar'));
              
        $file = $request->file('avatar');
            
                $input['imagename'] = time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/storage/franchise');
                $file->move($destinationPath, $input['imagename']);

               /* $image = new Photo();
                $image->user_id = $request->admin_id;
                $image->name = $input['imagename'];
                $image->save();*/
        
           
    
        $franchise = Franchise::find($id);

        $franchise->names = $request->names;
        $franchise->address = $request->address;
        $franchise->city = $request->city;
        $franchise->province = $request->province;
        $franchise->cellphone = $request->cellphone;
        $franchise->mail = $request->mail;
        $franchise->avatar =  $input['imagename'];
        $franchise->classification_id = $request->classification_id;
        $franchise->package_id = $request->package_id;
        //$franchise->latitude = $request->latitude;
        //$franchise->longitude = $request->longitude;

        $franchise->save();

        return response()->json(['rpta' => 'ok']);
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

    public function getCiudad($codigo){

        //$ciudades = Ciudad::where('Paises_Codigo',$codigo)->orderBy('idCiudades','asc')->get();

        //return response()->json(['ciudades'=>$ciudades]);
    }
    
    
    public function demotab(){
        
        return view('admin.paginas.franquicias.tabs');
    }

    public function cambioestado(Request $request, $id){

        $franchise = Franchise::find($id);
        $franchise->status = $request->status;

        $franchise->save();

        return response()->json(['rpta'=>'ok']);
    }


  
}

