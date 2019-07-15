@extends('admin.layout.master')
 
@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7; width:100%; padding: 0px;">

<?php
    if($rol==1){                
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">Seleccione un restaurante</div>';
        echo '<div class="panel-body">';
        echo '<div class="form-group">';
        echo '<select id="restaurante_selecc" class="form-control">';
        echo '<option>---- Restaurante -----</option>';
        foreach ($clients as $client) {
        echo '      <option value="'.$client->id.'">'.$client->name.'</option>';
        }
        echo '  </select>';
        echo '</div> ';
        echo '</div>';
        echo '</div>';
    }
?>


<div id="wrappermini" style="margin:5px;"> 
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Delivery</a></li>
        <li><a data-toggle="tab" href="#menu1">Ventas</a></li> 
    </ul>

    <div class="tab-content" style="background-color: #f7f7f7;">
        <div id="home" class="tab-pane fade in active"> 
            <div id="one" style="overflow-y: scroll; height: 700px;">   
            
                <div class="panel panel-default" style="padding: 0px; margin-top: 24px;">
                    <div class="panel-heading" style="padding: 0px;">
                        <div style="background-color: #fed0a2; height: 42px; font-size: 1.2em; padding-top: 10px;">EN PREPARACION</div>
                    </div>

                    <div class="panel-body" style="margin-top: 8px;"> 
                        <div class="table-responsive">  
                            <table id="dtTablePreparacion" class="table table-hover" style="color: #000;">
                                <thead  style="background-color: #fed0a2; color: #888888;">
                                    <tr> 
                                    <th width="70px">Id</th>
                                    <th width="180px">Hora Inicio</th>
                                    <th width="240px">Direccion</th> 
                                    <th>Telefono</th> 
                                    <th>Cliente</th> 
                                    <th>Total</th> 
                                    </tr>
                                </thead>
                                <tbody> 
                                            
                                    @foreach ($enpreparacion as $preparando)  
                                        <tr> 
                                        <td width="70px">{{$preparando->id}}</th>
                                        <td width="180px">{{$preparando->created_at}}</th>
                                        <td width="240px">{{$preparando->address}}</th> 
                                        <td>{{$preparando->usuario->telefono}}</th> 
                                        <td>{{$preparando->usuario->name}}</th>     
                                        <td>{{$preparando->importe}}</th> 
                                        </tr> 
                                    @endforeach
                                    
                                </tbody>
                            </table>      
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default" style="padding: 0px; margin-top: 24px;">
                    <div class="panel-heading" style="padding: 0px;">
                        <div style="background-color: #ffeb92; height: 42px; font-size: 1.2em; padding-top: 10px;">ENVIADOS</div>
                    </div>

                    <div class="panel-body" style="margin-top: 8px;"> 
                        <div class="table-responsive">   
                            <table id="dtTableEnviados" class="table table-hover" style="background-color: #d3d3d3; color: #000;">
                                <thead style="background-color: #ffeb92; color: #888888;">
                                    <tr> 
                                    <th width="70px">Id</th>
                                    <th>Hora Inicio</th>
                                    <th>Direccion</th> 
                                    <th>Telefono</th> 
                                    <th>Cliente</th> 
                                    <th>Total</th> 
                                    </tr>
                                </thead>
                                    <tbody> 
                                        @foreach ($enviados as $env)  
                                            <tr> 
                                            <td width="70px">{{$env->id}}</th>
                                            <td width="180px">{{$env->created_at}}</th>
                                            <td width="240px">{{$env->address}}</th> 
                                            <td>{{$env->usuario->telefono}}</th> 
                                            <td>{{$env->usuario->name}}</th>     
                                            <td>{{$env->importe}}</th> 
                                            </tr> 
                                        @endforeach 
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default" style="padding: 0px; margin-top: 24px;">
                    <div class="panel-heading" style="padding: 0px;">
                        <div style="background-color: #d3f4bf; height: 42px; font-size: 1.2em; padding-top: 10px;">ENTREGADOS</div>
                    </div>

                    <div class="panel-body" style="margin-top: 8px;">  
                        <table id="dtTableEntregados" class="table table-hover" style="background-color: #d3d3d3; color: #000;">
                            <thead style="background-color: #d3f4bf; color: #888888;">
                                <tr>
                                <th width="70px">Id</th>
                                <th>Hora Inicio</th>
                                <th>Direccion</th> 
                                <th>Telefono</th> 
                                <th>Cliente</th> 
                                <th>Total</th> 
                                </tr>
                            </thead>
                                <tbody> 
                                    @foreach ($entregados as $entr)  
                                        <tr> 
                                        <td width="70px">{{$entr->id}}</th>
                                        <td width="180px">{{$entr->created_at}}</th>
                                        <td width="240px">{{$entr->address}}</th> 
                                        <td>{{$entr->usuario->telefono}}</th> 
                                        <td>{{$entr->usuario->name}}</th>     
                                        <td>{{$entr->importe}}</th> 
                                        </tr> 
                                    @endforeach 
                                </tbody>
                        </table>
                    </div>
                </div>
            </div> <!--end one-->
            <div id="two" >  
                        
                <div class="row" style="padding: 2px; margin: 0px; overflow-y: auto; height: 700px;">
                    <div class="col-md-12" style="padding: 0px;">
                        <div class="box box-info" style="background-color: #fff; padding: 0px;">
                            <div class="box-header with-border">
                                <h4>Nuevo Pedido</h4>
                            </div>

                            <div class="box-body" >  
                                <form autocomplete="off" action="">
                                    <div class="autocomplete" style="width: 80%;">
                                        <input id="myInput" type="text" name="myCountry" placeholder="Buscar cliente">
                                    </div> 
                                    <input type="submit" value="Aceptar">
                                </form> 
                            </div>
 
                            <form class="form-horizontal" id="fr-franchise" method="post" action="#">   
                                <div class="box-body" >  
                                
                                    <?php
                                        if($rol == 1 || $rol == 2){ //admin o franquiciador 
                                            echo '<div class="form-group">';
                                            echo '<label class="col-md-3 control-label" for="client_id">Restaurante</label>  ';
                                            echo '<div class="col-md-8">';                                        
                                            echo '<select class="form-control input-md" style="background-color: #e5e5e5;" name="client_id" id="select_client">';
                                            echo '<option value="0">--Restaurante--</option> ';
                                            foreach($clients as $client){
                                                echo '<option value="'.$client->id.'">'.$client->name.'</option> ';
                                            }
                                            echo '</select>';
                                            echo '</div> ';
                                            echo '</div>';
                                        }
                                    ?>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="phone">Telefono</label>  
                                        <div class="col-md-8">
                                        <input id="names" name="phone" style="background-color: #e5e5e5;" type="text" placeholder="1112222333" class="form-control input-md">
                                        </div> 
                                    </div>

                                    <div class="form-group">    
                                        <label class="col-md-3 control-label" for="client">Cliente</label>  
                                        <div class="col-md-8">
                                        <input id="amount" name="client" style="background-color: #e5e5e5;" type="text" placeholder="nombre del cliente" class="form-control input-md">
                                        </div> 
                                    </div> 

                                    <div class="form-group">    
                                        <label class="col-md-3 control-label" for="address">Direccion</label>  
                                        <div class="col-md-8">
                                        <input id="cellphone" name="address" style="background-color: #e5e5e5;" type="text" placeholder="direccion del pedido" class="form-control input-md">
                                        </div> 
                                    </div>
                                                
                                    <div class="form-group">    
                                        <label class="col-md-3 control-label" for="comment">Comentario</label>  
                                        <div class="col-md-8">
                                        <input id="estado" name="comment" style="background-color: #e5e5e5;" type="text" placeholder="comentario al chef" class="form-control input-md">
                                        </div> 
                                    </div> 
        
                                    <div id="googleMap" style="width:100%;height:400px;"></div>

                                    <div class="box-footer"> 
                                        <button class="btn btn-primary pull-right" onclick="crearPedido()">Crear Pedido</button>
                                    </div>

                                </div>  
                            </form>
                            
                        </div>
                    </div>
                    
                </div>

            </div>   <!--end two-->
        </div>  <!--end home-->
        
        <div id="menu1" class="tab-pane fade">
            </br>
            <div class="panel panel-default" style="padding: 0px;">
                <div class="panel-heading">
                    <table cellpadding="10" class="table">
                        <tr>
                            <td><i class="fa fa-calendar" style="color: #000; margin-top: 9px;"></i></td>
                            <td>
                                <div class="form-group">    
                                    <label class="col-md-3 control-label" for="dateDesde" style="margin-top: 7px;">Desde</label>  
                                    <div class="col-md-8">
                                    <input id="datepickerDesde" placeholder="mm/dd/yy" name="dateDesde" style="background-color: #fff;" type="text"  class="form-control input-md" readonly>
                                    </div>    
                                </div> 
                            </td>
                            <td>
                                <div class="form-group">    
                                    <label class="col-md-3 control-label" for="dateHasta" style="margin-top: 7px;">Hasta</label>  
                                    <div class="col-md-8">
                                    <input id="datepickerHasta" placeholder="mm/dd/yy" name="dateHasta" style="background-color: #fff;" type="text"  class="form-control input-md" readonly>
                                    </div>    
                                </div> 
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-filter" style="color: #000; margin-top: 9px;"></i></td>
                            <td>
                                <select class="form-control" id="idestado">
                                    <option value='0'>---- Estado de venta -----</option>
                                    @foreach ($sales_state as $salestate)  
                                        <option value='{{$salestate->id}}'>{{$salestate->name}}</option>
                                    @endforeach 
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="idtipoventa">
                                    <option value='0'>---- Tipos de venta -----</option>
                                    @foreach ($type_sales as $typesale)  
                                        <option value='{{$typesale->id}}'>{{$typesale->name}}</option>
                                    @endforeach 
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="idmozo">
                                    <option value='0'>---- Mozo -----</option>
                                    @foreach ($mozos as $mozo)  
                                        <option value='{{$mozo->id}}'>{{$mozo->name}}</option>
                                    @endforeach 
                                </select>
                            </td>
                            <td>
                                <select class="form-control" id="idmediopago">
                                    <option value='0'>---- Medio de pago -----</option>
                                    @foreach ($payment_methods as $pago)  
                                        <option value='{{$pago->id}}'>{{$pago->name}}</option>
                                    @endforeach 
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-primary" id="btn_buscar">Buscar</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-body">                                                                          
                    <div class="table-responsive">    
                        <table class="table" id="table_ventas" style="background-color: #fff; width: 100%;">
                            <thead>
                                <tr style="height: 55px;"> 
                                    <th id="fecha_busqueda">Del 26/03/1800:00 hs al 27/03/1800:00 hs</th>
                                    <th width="85px">Personas</th>
                                    <th width="135px">Ticket promedio</th>
                                    <th width="85px">Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 35px;">
                                    <td id="num_registros"></td>
                                    <td id="num_personas"></td>
                                    <td id="num_ticket_prom"></td>
                                    <td id="num_total"></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div> 
                </div>
                <div class="panel-footer" style="padding: 0px;"> 
                    <div id="masinfo_row" class="btn btn-link" style="width: 100%;">MAS INFORMACION &#9660</div>
                </div>
            </div>
        
            <div id="#div_detaill" class="panel panel-default" style="padding: 0px;">
                <div class="panel-heading" style="height: 40px; padding-top: 10px;">
                    Detalle de la venta
                </div>
                <div class="panel-body" style="padding: 0px;">                                                                           
                    <div class="table-responsive">        
                        <table class="table table-striped" id="table_detalle">
                            <thead>
                            <tr>
                                <th width="70px">Id</th>
                                <th>Hora inicio</th>
                                <th>Hora cierre</th> 
                                <th>Estado</th> 
                                <th>Mesa</th> 
                                <th>Camarero</th> 
                                <th>Cliente</th> 
                                <th>Total</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                        </table>  
                    </div> 
                </table>
                </div>
            </div> 

            
        </div> 

    </div>
          
     
</div>
      
</section>

 
 <script>      
    
    var showedInfo = false;

    $(document).ready(function(){         
        $('#dtTablePreparacion').DataTable({
          "paging": true
        });
        $('#dtTableEnviados').DataTable({
          "paging": true
        });
        $('#dtTableEntregados').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select'); 
    });
    
    $('#restaurante_selecc').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value; 
        var textSelected = $("#restaurante_selecc option:selected").text(); 
        alert(textSelected);
        //TODO enviar al servidor para obtener datos de venta y delivery
    });

    $( function() {
        $( "#datepickerDesde" ).datepicker();
    } );

    $( function() {
        $( "#datepickerHasta" ).datepicker();
    } );

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 

    $(document).on('hover','#table_ventas tr', function() {
        $(this).css("cursor","pointer");
    });
    $('#table_ventas tr').hover(function() {
        $(this).addClass('hover');
    }, function() {
        $(this).removeClass('hover');
    });

    var ventas_registro = new Array();

    //al presionar en buscar
    $( "#btn_buscar" ).click(function() {

        showedInfo = false;
        $("#table_detalle tbody").html('');

        var init = $("#datepickerDesde").val();
        var final = $("#datepickerHasta").val();

        init = reformatData(init);
        final = reformatData(final);
        var idestado = $("#idestado :selected").val(); 
        var idtipo = $("#idtipoventa :selected").val();
        var idmozo = 3;
        var idmediopago = $("#idmediopago :selected").val();

        //TODO asumiendo entradas ok 
        var myurl_buscar = "/admin/sales/buscar/" + 
                            init + "/" +
                            final + "/" +
                            idestado + "/" +
                            idtipo + "/" +
                            idmozo + "/" +
                            idmediopago; 
        $.ajax({
            type:'GET',
            url:myurl_buscar,
            data:{},
            success:function(data){ 
                var obj = JSON.parse(data);
                if(obj.rpta == 'ok'){  
                    $("#fecha_busqueda").html('Del ' + obj.init + " al " + obj.end);
                    $("#num_registros").html(obj.sales.length + " registro");
                    $("#num_ticket_prom").html('');

                    var p_total = 0;
                    var num_personas = 0;
                    obj.sales.forEach(function(element) {
                        p_total += parseFloat(element.importe)
                        num_personas += 1;
                    });
 
                    $("#num_personas").html(num_personas);
                    $("#num_total").html("$ " + p_total);

                    ventas_registro = obj.sales;
                }
            }
        }); 
    });

    function reformatData(fecha){
        fecha = fecha.replace(/\//g, '-');
        var arrFecha = fecha.split("-");
        var out = arrFecha[2] + "-" + arrFecha[1] + "-" + arrFecha[0];
        return out;
    }
 
    //al presionar en detalle
    $('#masinfo_row').click(function() { 
        //$('#table_ventas tbody tr').css("background-color", "white");
        //$(this).css("background-color", "yellow");
        
        $("#div_detaill").toggle();
        if( !showedInfo ){ 
            showedInfo = true;
            $.each( ventas_registro, function( key, value ) { 
                var id = value.id;
                var created_at = value.created_at;
                var updated_at = value.updated_at;
                var estado = value.estado.name;
                var mesa = value.id;
                var camarero = value.mozo.name;
                var cliente = value.client.name;
                var importe = "$ " +value.importe;
                $("#table_detalle tbody").append("<tr><td>"+id+"</td> <td>"+created_at+"</td> <td>"+updated_at+"</td> "+
                                            "<td>"+estado+"</td> <td>"+mesa+"</td> <td>"+camarero+"</td> "+
                                            "<td>"+cliente+"</td> <td>"+importe+"</td> <td>"); 
            }); 
            $(this).html("MAS INFORMACION &#9650");
        }
        else{
            showedInfo = false;
            $("#table_detalle tbody").html('');
            $(this).html("MAS INFORMACION &#9660");
        }
         
    });

 </script>

@endsection