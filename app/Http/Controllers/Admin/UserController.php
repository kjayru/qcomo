<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use MercadoPago;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete()
    {     
        $users = User::all();
        $out = [];
        foreach($users as $user){   
            $item = [];
            $item['name'] = $user->name." ".$user->lastname;
            $item['phone'] = $user->telefono;
            $item['id'] = $user->id;
            $out[] = $item;
        } 
        return json_encode(['rpta' => "ok", 'data' => $out]);
    }


    public function payment(Request $request){
        
        \MercadoPago\SDK::setAccessToken(env('ACCESS_TOKEN'));
       
        $payment = new MercadoPago\Payment();

        
        $payment->transaction_amount = 20;
        $payment->token = $request->token;
        $payment->description = "Pago por puntos";
        $payment->installments = 1;
        $payment->payment_method_id = $request->paymentMethodId;
        $payment->payer = array(
        "email" => 'wiltinoco@gmail.com'
        );
        // Save and posting the payment
        $payment->save();

       // dd($payment);
            if($payment->status=='approved'){
               /* $pago = new ProjectInvestor();

                $pago->pledged =  $request->transaction_amount;
                $pago->project_id = $request->project_id;
                $pago->user_id = $request->user_id;
                $pago->status = 2;
                $pago->anonymous = $request->anonimo;

                $pago->save();*/

                return redirect('/admin/status/exitoso');
            }else{
                return redirect('/admin/status/fallo');
            }


    }

}
