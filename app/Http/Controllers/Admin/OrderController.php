<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Sale;

use App\RoleUser;
use App\User;
use App\UserClientAdmin;
use App\SaleState;
use App\TypeSale;
use App\Mozo;
use App\PaymentMethod;
use App\Client;

class OrderController extends Controller
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
        //segun el tipo de rol
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $role = RoleUser::where('user_id', $user_id)->first();

        if($role->id == 1){
            $clients = Client::all();
            return view('admin.paginas.pedidos.selectclient',['clients'=>$clients]);
        } 

        $client = "";
        if($role->role_id == 5){
            $client = UserClientAdmin::where('user_id',$user_id)->first();
        }

        if($role->role_id == 5 && $client != ""){
            $enpreparacion = Sale::where(['salestate_id'=>2, 'typesale_id'=>1, 'client_id'=>$client->client_id])->get();
            $enviados = Sale::where(['salestate_id'=>5, 'typesale_id'=>1, 'client_id'=>$client->client_id])->get();
            $entregados = Sale::where(['salestate_id'=>6, 'typesale_id'=>1, 'client_id'=>$client->client_id])->get();
            $enpreparacion_ventas = Sale::where(['salestate_id'=>2, 'typesale_id'=>2, 'client_id'=>$client->client_id])->get();
            $enviados_ventas = Sale::where(['salestate_id'=>5, 'typesale_id'=>2, 'client_id'=>$client->client_id])->get();
            $entregados_ventas = Sale::where(['salestate_id'=>6, 'typesale_id'=>2, 'client_id'=>$client->client_id])->get();            
            $mozos = Mozo::where('client_id',$client->client_id)->get();
            $franquisiados = Client::all();
            $franquisiados = [];
        }else if($role->role_id == 1){ //administrador
            $enpreparacion = Sale::where(['salestate_id'=>2, 'typesale_id'=>1])->get();
            $enviados = Sale::where(['salestate_id'=>5, 'typesale_id'=>1])->get();
            $entregados = Sale::where(['salestate_id'=>6, 'typesale_id'=>1])->get();
            $enpreparacion_ventas = Sale::where(['salestate_id'=>2, 'typesale_id'=>2])->get();
            $enviados_ventas = Sale::where(['salestate_id'=>5, 'typesale_id'=>2])->get();
            $entregados_ventas = Sale::where(['salestate_id'=>6, 'typesale_id'=>2])->get();
            $mozos = [];
            $franquisiados = Client::all();
        }else{
            $enpreparacion = [];
            $enviados = [];
            $entregados = [];
            $enpreparacion_ventas = [];
            $enviados_ventas = [];
            $entregados_ventas = [];
            $mozos = [];
            $franquisiados = [];
        }
        
        $out_enpreparacion = [];
        foreach($enpreparacion as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion[] = $item;
        }

        $out_enviados = [];
        foreach($enviados as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados[] = $item;
        }
        
        $out_entregados = [];
        foreach($entregados as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados[] = $item;
        }
 
        $out_enpreparacion_ventas = [];
        foreach($enpreparacion_ventas as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion_ventas[] = $item;
        }
 
        $out_enviados_ventas = [];
        foreach($enviados_ventas as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados_ventas[] = $item;
        }
        
        $out_entregados_ventas = [];
        foreach($entregados_ventas as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados_ventas[] = $item;
        }
        $sales_state = SaleState::all();
        $type_sales = TypeSale::all();
        $payment_methods = PaymentMethod::all();

        return view('admin.paginas.pedidos.index',['enpreparacion'=>$out_enpreparacion,
                                            'enviados'=>$out_enviados,
                                            'entregados'=>$out_entregados,
                                            'enpreparacion_ventas'=>$out_enpreparacion_ventas,
                                            'enviados_ventas'=>$out_enviados_ventas,
                                            'entregados_ventas'=>$out_entregados_ventas,
                                            'sales_state'=>$sales_state,
                                            'type_sales'=>$type_sales,
                                            'name_client'=>$client->name,
                                            'mozos'=>$mozos,
                                            'rol'=>$role->role_id, 
                                            'clients'=>$franquisiados,
                                            'payment_methods'=>$payment_methods] );
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
        
        $enpreparacion = Sale::where(['salestate_id'=>2, 'typesale_id'=>1, 'client_id'=>$client_id])->get();
        $enviados = Sale::where(['salestate_id'=>5, 'typesale_id'=>1, 'client_id'=>$client_id])->get();
        $entregados = Sale::where(['salestate_id'=>6, 'typesale_id'=>1, 'client_id'=>$client_id])->get();
        $enpreparacion_ventas = Sale::where(['salestate_id'=>2, 'typesale_id'=>2, 'client_id'=>$client_id])->get();
        $enviados_ventas = Sale::where(['salestate_id'=>5, 'typesale_id'=>2, 'client_id'=>$client_id])->get();
        $entregados_ventas = Sale::where(['salestate_id'=>6, 'typesale_id'=>2, 'client_id'=>$client_id])->get();            
        $mozos = Mozo::where('client_id',$client_id)->get();
        $franquisiados = Client::all();
        $franquisiados = [];
        
        $out_enpreparacion = [];
        foreach($enpreparacion as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion[] = $item;
        }

        $out_enviados = [];
        foreach($enviados as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados[] = $item;
        }
        
        $out_entregados = [];
        foreach($entregados as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados[] = $item;
        }
 
        $out_enpreparacion_ventas = [];
        foreach($enpreparacion_ventas as $prep){
            $item = $prep; 
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enpreparacion_ventas[] = $item;
        }
 
        $out_enviados_ventas = [];
        foreach($enviados_ventas as $env){
            $item = $env;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_enviados_ventas[] = $item;
        }
        
        $out_entregados_ventas = [];
        foreach($entregados_ventas as $ent){
            $item = $ent;
            $user = User::where('id',$prep->user_id)->first();
            $item['usuario'] = $user;
            $out_entregados_ventas[] = $item;
        }
        $sales_state = SaleState::all();
        $type_sales = TypeSale::all();
        $payment_methods = PaymentMethod::all();

        return view('admin.paginas.pedidos.index',['enpreparacion'=>$out_enpreparacion,
                                            'enviados'=>$out_enviados,
                                            'entregados'=>$out_entregados,
                                            'enpreparacion_ventas'=>$out_enpreparacion_ventas,
                                            'enviados_ventas'=>$out_enviados_ventas,
                                            'entregados_ventas'=>$out_entregados_ventas,
                                            'sales_state'=>$sales_state,
                                            'type_sales'=>$type_sales,
                                            'name_client'=>$client->name,
                                            'mozos'=>$mozos,
                                            'rol'=>0, 
                                            'clients'=>$franquisiados,
                                            'payment_methods'=>$payment_methods] );

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

    /**
     * Busca las ventas en un restaurante indicado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request, $init, $final, $idestado, $idtipo, $idmozo, $idmediopago)
    {
        $dinit = \DateTime::createFromFormat("Y-d-m", $init);
        $tinit = $dinit->getTimestamp();
        $dend = \DateTime::createFromFormat("Y-d-m", $final);
        $tend = $dend->getTimestamp();

        $ventas = Sale::where([  'salestate_id'=>$idestado,
                                 'typesale_id'=>$idtipo,
                                 'mozo_id'=>$idmozo,
                                 'paymentmethod_id'=>$idmediopago])
                        ->where('created_at','>=', $tinit)
                        //->where('created_at','<=', $tend)
                        ->get();
                        
        //$out_ventas = [];
        //se comenta out_ventas porque item se actualiza 
        foreach($ventas as $venta){
            $item = $venta; 
            $item['estado'] = $venta->estadoVenta;
            $item['mesa'] = $venta->mesa;
            $item['camarero'] = $venta->mozo;
            $item['cliente'] = $venta->client;
            //$out_ventas[] = $item;
        }

        return json_encode(['rpta'=>'ok','sales'=>$ventas,'init'=>$init,'end'=>$final]);
    }


    /**
     * Muestra el detalle de una especifica venta
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle(Request $request, $id)
    {
        $detalle_venta = Sale::where(['id'=>$id])->first();

        return response()->json(['rpta'=>'ok','detaill_sale'=>$detalle_venta]);
    }

    public function buscarPalabra(Request $request){
        $resultado = User::where('name','like','%'.$request->cliente.'%')->first();
        if(empty($resultado)){
            return response()->json(['rpta'=>'error']);
        }else{
            if($resultado->roles[0]->id==5){
                $datos = $resultado;
                return response()->json(['rpta'=>'ok','data'=>$datos]);
            }else{
                return response()->json(['rpta'=>'error']);
            }
        }
       
        
    }
}
