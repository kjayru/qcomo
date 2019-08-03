<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//checkout personalizado
class MercadoPagoController extends Controller
{
  public function createPayment()
  {
    $payment_data = array(
                      "transaction_amount" => 'Monto a pagar',
                      "description" => 'Descripcion para el pago',
                      "installments" => 'Cantidad de entregas, debe ser entero',
                      "payment_method_id" => 'Metodo elegido de pago',
                      "payer" => array(
                                    "email" => 'Correo del cliente'
                       ),
                       "statement_descriptor" => "Nombre de quien recibe el pago"
                    );
    $payment = MP::post("/v1/payments",$payment_data);
    return dd($payment);
  }

  public function createPaymentDelivery(Request $request)
  {

    //crear preferencia de pago
    $preference = new MercadoPago\Preference();

    $items = [];
    foreach ($request->items as $item) { 
      $item = new MercadoPago\Item();
      $item->title = $item->title;
      $item->quantity = $item->quantity;
      $item->currency_id = $item->currency_id;
      $item->unit_price = $item->unit_price;
      $items[] = $item;
    }
 
    $payer = new MercadoPago\Payer();
    $payer->email = $request->payer->email;

    $preference->items = $items;
    $preference->payer = $payer;
    $preference->save();

    
    //datos del pagador
    /*
    "payer": {
      "name": "Luisa",
      "surname": "Herrera",
      "email": "lawson_wolff@hotmail.com",
      "date_created": "2015-06-02T12:58:41.425-04:00",
      "phone": {
        "area_code": "",
        "number": "696.254.491"
      },
      "identification": {
        "type": "DNI",
        "number": "123456789"
      },
      "address": {
        "street_name": "Glorieta Claudio",
        "street_number":  s/n.,
        "zip_code": "35789"
      }
    }*/

    
  
  
  }

  public function createPaymentInside()
  {
    
  }

}

/*
//checkout basico

class MercadoPagoController extends Controller
{
  public function createPreferencePayment()
  {
    $preference_data = [
  		"items" => [
  			[
  				"id" => 'Id del articulo',
          "title" => 'Titulo del articulo',
          "description" => 'Descripcion del articulo',
          "picture_url" => 'Imagen del articulo',
          "quantity" => 'Cantidad de articulos',
          "currency_id" => 'Id de moneda',
          "unit_price" => 'precio por unidad'
  			]
  		],
      "payer" => [
        "email" => 'correo del cliente'
      ]
  	];
    $preference = MP::post("/checkout/preferences",$preference_data);
    return dd($preference);
  }
}
*/