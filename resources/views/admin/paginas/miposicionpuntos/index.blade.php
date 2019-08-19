<?php
    
    if( $role == 5 ){
  
        //ordena y calcula la posicion del cliente en la tabla 
        $imax = count($clients);
        for($i =0; $i < $imax; $i++)
        { 
            $client1 = $clients[$i];
            $m1 = $client1->point->point_used;
            for($j = $i+1; $j < $imax; $j++)
            {
                $client2 = $clients[$j];
                $m2 = $client2->point->point_used;
                if($m1<$m2){   
                    $temp = clone $clients[$i];
                    $temp2 = clone $clients[$j];
                    $clients[$j] = $temp; 
                    $clients[$i] = $temp2;
                    $m1 = $m2;
                }
            }
        }
 
        $pos_gen = 0;
        $pos_cat = 0; 
        $ii_gen = 1;
        $ii_cat = 1; 
        foreach($clients as $client)
        {   
            if($client->id == $curr_client->id){  
                $pos_cat = $ii_cat;
                $pos_gen = $ii_gen;
            }

            $c1 = $client->classification_id; 
            if( $c1 == $curr_client->classification_id ){
                $ii_cat = $ii_cat + 1;
            }            
            $ii_gen = $ii_gen + 1;
        }
        $curr_client->point->pos_gen = $pos_gen;
        $curr_client->point->pos_cat = $pos_cat; 
    }

?>

@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; padding-top: 0px; background-color: #fafafa; margin: 0px auto;">

    <div width="100%"  class="  inline-block" style="background-color: #fff;"> 
        <button type="button" class="btn btn-light" style="margin:8px; background-color: #fff; color: #000; cursor: none;">
            <h3 style="margin:10px;">MI POSICION - PUNTOS</h4>
        </button>
        <?php 
            $colors = ['#ff4500','#228b22','#ffa500','#da70d6'];
            $i_c = 0;
            $i_selected = 0;
        ?>
        @foreach($clasificaciones as $key => $clasificacion) 
            <?php if($curr_client != [] && $clasificacion->id == $curr_client->classification_id && $role == 5){ ?>
                <button onclick="getForId_{{ @$key }}( 'btn_{{ @$key }}' )" id="btn_{{ @$key }}" type="button" class="btn btn-light" style="margin:8px; background-color: <?php echo @$colors[$i_c];?>; color: #fff;">
                    <h4 style="margin:10px;">{{ $clasificacion->name }}</h4>
                </button>
            <?php }else{ ?>
                <button onclick="getForId_{{ @$key }}( 'btn_{{ @$key }}' )" id="btn_{{ @$key }}" type="button" class="btn btn-light" style="margin:8px; background-color: <?php echo @$colors[$i_c];?>; color: #fff;">
                    <h4 style="margin:10px;">{{ $clasificacion->name }}</h4>
                </button> 
            <?php } ?>
            <?php $i_c = $i_c + 1;?>
        @endforeach 
        <div type="button" class="btn btn-light" style="margin:8px; background-color: #db7093; color: #fff;">
            <h4 id="celAct"  style="margin:10px;">0 CELULARES ACTIVOS</h4>
        </button>
          
    </div>
<div id="wrappermini">
    
    <div id="one" style="margin: 0px; padding: 0px;">   
        
        <div class="box" id="content_leftpanel">  
        </div>
    </div>
    <div id="two" style="padding: 0px;"> 
        
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="box" style=" background-color: #d3d3d3;" id="panel_abono"> 
                    <h4>Mi Abono</h4>
                    <div class="progress" style="min-width: 300px; margin: 0; padding:0; height: 40px;">
                        <div id="p_usados" class="progress-bar progress-bar-warning" role="progressbar" 
                            <?php 
                                $name_style0 = "";
                                if($curr_client != [] && $curr_client->point->amount!=0){
                                    $percent_used = $curr_client->point->point_used/$curr_client->point->amount*100; 
                                    $name_style0 = "width:".$percent_used."%; padding-top: 11px;";
                                }else{
                                    $percent_used = 0; 
                                    $name_style0 = "width:".$percent_used."%; padding-top: 11px;";
                                }
                            ?>
                            style=<?php echo $name_style0;?>>
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_used;
                                }else{
                                    echo 0;
                                }
                            ?> 
                        </div> 
                        <div id="p_disp" class="progress-bar progress-bar-success" role="progressbar" 
                            <?php 
                                $name_style = "";
                                if($curr_client != [] && $curr_client->point->amount!=0){
                                    $percent_enabled = $curr_client->point->point_enabled/$curr_client->point->amount*100; 
                                    $name_style = "width:".$percent_enabled."%; padding-top: 11px;";
                                }else{
                                    $percent_enabled = 0; 
                                    $name_style = "width:".$percent_enabled."%; padding-top: 11px;";
                                }
                            ?>
                            style=<?php echo $name_style;?>>
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_enabled;
                                }else{
                                    echo 0;
                                }
                            ?>  
                        </div>
                    </div>
                    <div align="right"> 
                        <button onclick="comprarPuntos()" class="btn btn-primary" style="margin: 7px;display:inline;">Comprar puntos</button> 
                    </div> 
                    <div style="width: 100%; margin-top: 8px;">
                        <div style="background-color: #ffaa00; border-radius: 5px; width: 20px; height: 20px; float: left; padding: 0;"></div>
                        <h4 style="margin:3px 0 0 12px; display: inline; ">Puntos utilizados</h4> 
                        <h4 id="p_usados3" style="margin:3px 0 0 8px; display: inline; "> 
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_used;
                                }else{
                                    echo 0;
                                }
                            ?> 
                        </h4>  
                    </div>
                    <div style="margin-top: 8px;">
                        <div style="background-color: #090; border-radius: 5px; width: 20px; height: 20px; float: left; padding: 0;"></div>
                        <h4 style="margin:3px 0 0 12px; display: inline; ">Puntos disponibles</h4>  
                        <h4 id="p_disp3" style="margin:3px 0 0 8px; display: inline; ">
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_enabled;
                                }else{
                                    echo 0;
                                }
                            ?>  
                        </h4>  
                    </div>
                    <div style="position: relative; width: 180px; height: 170px; margin-top: 8px;">
                        <img id="img_rest" style="position: absolute;" src="/images/samplerestaurant.jpg" width="200px" heihgt="200px" style="margin-left: 20px; margin-top:20px;"/>
                        <div id="p_usados_2" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 20px; margin-right: 20px; min-width: 150px; color: #fff;" >
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_used;
                                }else{
                                    echo 0;
                                }
                            ?>   
                             Puntos
                        </div>
                        <div id="pos_rubro" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 55px; margin-right: 20px; min-width: 150px; color: #fff;" >
                        
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->pos_cat;
                                }else{
                                    echo 0;
                                }
                            ?>  
                            en su rubro
                        </div>
                        <div id="pos_gen" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 90px; margin-right: 20px; min-width: 150px; color: #fff;" >
                        
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->pos_gen;
                                }else{
                                    echo 0;
                                }
                            ?>  
                            en la general
                        </div> 
                    </div>
                    <h4>Asignar puntos</h4> 
                    <div style="width: 210px; align-content: center; margin: 0 auto;">
                        <h3 id="test_pos" align="center" style=" margin: 0;  ">
                        
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->pos_gen;
                                }else{
                                    echo 0;
                                }
                            ?>  
                            º posicion
                        </h3>
                        <input id="test_mas_puntos" type="number" step="1" value="0" min="1" 
                            max="
                            <?php  
                                if($curr_client != []){
                                    echo $curr_client->point->point_enabled;
                                }else{
                                    echo 0;
                                }
                            ?> " 
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="display: inline-block;">
                    </div>
                    <!--button class="btn btn-link">Quitar´puntos</button--> 
                    <div style="width: 210px; margin: 0px auto; display:inline;">
                        <button onclick="probarPuntos()" class="btn btn-success" style="margin: 7px; display:inline;">PROBAR</button> 
                        <button onclick="aplicarPuntos()" class="btn btn-success" style="margin: 7px; display:inline;">ACEPTAR</button> 
                    </div>
                </div>
          </div>
        </div> 
    </div>
</div>
     
</section>


<div class="modal fade" id="TargetModal" tabindex="-1" role="dialog" aria-labelledby="TargetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/admin/payment" method="post" id="pay" name="pay">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TargetModalLabel">Tarjeta debito o Credito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        @csrf
                        <div class="form-group">
                            <label for="cardNumber">
                               MONTO SOLES</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="transaction_amount"   data-checkout="transaction_amount"  onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="cardNumber">
                                    NÚMERO DE TARJETA</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber"   data-checkout="cardNumber"  onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth">
                                            FECHA DE CADUCIDAD</label>

                                        <div class="row">
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control"  id="cardExpirationMonth" data-checkout="cardExpirationMonth" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off placeholder="MM" required />
                                            </div>
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control"  id="cardExpirationYear" data-checkout="cardExpirationYear"  onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off placeholder="YYYY" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">
                                            CÓDIGO CV</label>
                                        <input type="text" class="form-control" id="securityCode" data-checkout="securityCode"  onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off  required />
                                    </div>
                                </div>

                            <div class="row">
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <label for="docType">Tipo de documento:</label>
                                        <select id="docType" class="form-control" data-checkout="docType"></select>
                                    </div>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <label for="docNumber">Número documento:</label>
                                        <input type="text" class="form-control" id="docNumber" data-checkout="docNumber" placeholder="12345678" />
                                    </div>

                            </div>

                            </div>

                            <div class="form-group">
                                <label for="cardNumber">
                                    Nombre Titular de Tarjeta</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardholderName" data-checkout="cardholderName" />
                                </div>
                            </div>
                    <input type="hidden" name="paymentMethodId" value="" />
                    
                    <input type="hidden" name="description" value="Pago por puntos">
                    <input type="hidden" name="project_id" value="">
                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <input type="hidden" name="anonimo" value=""> 
                    <div class="row">
                        <div id="tipocard"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-procesa-pago-cart">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>


@include('admin.partial.scripts')
     
    
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>  
<script>  

Mercadopago.setPublishableKey("TEST-8c0d70f2-cee2-47c6-b2cf-c13bb129bdbb");
Mercadopago.getIdentificationTypes();


    
///methods mercadopago

$(".btn-procesa-pago-cart").on('click',function(e){
	e.preventDefault();

	var $form = document.querySelector('#pay');
	Mercadopago.createToken($form, sdkResponseHandler);
});




function guessingPaymentMethod(event) {
    var bin = getBin();
	console.log("BIN "+bin);
    if (event.type == "keyup") {
        if (bin.length >= 6) {

            console.log("keup mayor 6")
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                console.log("not mayor 6")
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};



function setPaymentMethodInfo(status, response) {


/*
    if (status == 200) {
        const paymentMethodElement = document.querySelector('input[name=paymentMethodId]');

        if (paymentMethodElement) {
            paymentMethodElement.value = response[0].id;
        } else {
            const input = document.createElement('input');
            input.setattribute('name', 'paymentMethodId');
            input.setAttribute('type', 'hidden');
            input.setAttribute('value', response[0].id);     

            form.appendChild(input);
        }
    } else {
        alert(`payment method info error: ${response}`);  
    }*/


    
    console.log(response);
		if (status == 200) {

				if (document.querySelector("input[name=paymentMethodId]") == null) {
					var paymentMethod = document.createElement('input');
					paymentMethod.setAttribute('name', "paymentMethodId");
					paymentMethod.setAttribute('type', "hidden");
					paymentMethod.setAttribute('value', response[0].id);

					form.appendChild(paymentMethod);
				} else {
					document.querySelector("input[name=paymentMethodId]").value = response[0].id;
				}
				$("#tipocard").html(`<img src="${response[0].secure_thumbnail}">`);
		}
}


function getBin() {
	
	var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
	
	return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
};


function addEvent(el, eventName, handler){
	if(el){	
		if(el.addEventListener){
			el.addEventListener(eventName, handler);
		}else{
			el.attachEvent('on' + eventName, function(){
				handler.call(el);
			});
		}
	}
};


addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);


function sdkResponseHandler(status, response) {

	
	if (status != 200 && status != 201) {
			alert("verify filled data");
	}else{
			var form = document.querySelector('#pay');
			var card = document.createElement('input');
			card.setAttribute('name', 'token');
			card.setAttribute('type', 'hidden');
			card.setAttribute('value', response.id);
			form.appendChild(card);
            doSubmit=true;
            
            form.submit();
            console.log("responseee "+response);
	}

};



    var puntajes = [];
    
    $(document).ready(function(){         
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select'); 
           
        //devuelve cantidad de celulares activos en los ultimos 30 dias 
        //numero de celulares activos
        getNumeroCelularesACtivos();
       
        //envia id del cliente franquiciado o local
        //recibe: {'puntosusados': 1234, "puntosdisp": 324, ruta_foto: "de", "posicion_en _cat":12, "posicion_en_gen":1294, "puntajes":[1243,1222,1100] }
        // puntajes es la lista de puntos de mayor a menor        
        if({{$role}}==1){
            var panel_abono = document.getElementById('panel_abono');
            panel_abono.innerHTML = "ESTA CON UNA CUENTA DE ADMINISTRADOR, DATOS DE MI ABONO NO DISPONIBLE"; 
        }

        var id = getUrlParameter('id'); 
        if( id !== undefined ){
            $.get("testp.php",{idlocal: id}).done( function (data){ 
                
                var p_usados = data.puntosusados;
                var p_disp = data.puntosdisp;
                var ruta_foto = data.ruta_foto;
                var pos_cat = data.poscat;
                var pos_gen = data.posgen;
                puntajes = data.puntajes;
                
                var obj_p_usados = document.getElementById("#p_usados");
                var obj_p_disp  = document.getElementById("#p_disp");
                var obj_p_usados2  = document.getElementById("#p_usado2");
                var obj_pos_rubro  = document.getElementById("#pos_rubro");
                var obj_pos_gen  = document.getElementById("#pos_gen");
                var obj_img = document.getElementById("img_rest");
                var obj_p_usados3 = document.getElementById("#p_usados3");
                var obj_p_disp3  = document.getElementById("#p_disp3");
                
                var ptotal = parseInt(p_usados) + parseInt(p_disp);
                var w1 = parseInt(p_usados) / ptotal * 100;
                var w2 = parseInt(p_disp) / ptotal * 100;
                obj_p_usados.style = "width:"+w1+"%; background-color: #fcfcfc; color: #000;";
                obj_p_usados.innerHTML = parseInt(p_usados);
                obj_p_disp.style = "width:"+w2+"%;";
                obj_p_disp.innerHTML = parseInt(p_disp);
                obj_p_usados3.innerHTML = parseInt(p_usados);
                obj_p_disp3.innerHTML = parseInt(p_disp);
                obj_p_usados2.innerHTML = parseInt(p_usados) + " puntos";
                obj_pos_rubro.innerHTML = parseInt(pos_cat) + "en su rubro";
                obj_pos_gen.innerHTML = parseInt(pos_gen) + "en la geneeral";
                obj_img.src = ruta_foto;
                
            });
        }
        
        //datos del primer tipo de clasificacion
        getForId_0('btn_0'); 
   
    });
    
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };

</script>

<script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        @foreach($clasificaciones as $key => $clasificacion)             
            function getForId_<?php echo $key;?>(btn_id)
            {
                //se asume que a la pagina se indica el id del cliente de franquiciado o id de local
                //esto para resaltar la posicion del rest, en caso de cuenta admin, no resaltaria  
                //var id = getUrlParameter('id'); 
                var btn = document.getElementById(btn_id);
                if(btn != null){
                    btn.classList.add("btn-lg"); 
                    btn.classList.add("active"); 
                    
                    @foreach($clasificaciones as $key2 => $clasificacion2) 
                        var item_btn_id = 'btn_'+{{ $key2 }};
                        if( item_btn_id != btn_id ){
                            var btn_temp = document.getElementById(item_btn_id);
                            btn_temp.classList.remove("btn-lg"); 
                            btn_temp.classList.remove("active"); 
                        }
                    @endforeach 
                }
                
                var mmid = btn_id.substr(0,4);
                var name_classification = '<?php echo $clasificaciones[$key]->name;?>';
                $.ajax({
 
                    type:'GET',
                    url:"/admin/clientes/portipo/<?php echo $clasificacion->id;?>",
                    data:{},
                    success:function(data){
                        fillTable(data, name_classification);
                    }

                }); 

            }
        @endforeach 
 
 
    
    function getNumeroCelularesACtivos()
    { 
        $.ajax({ 
            type:'GET',
            url:"/admin/users/activos",
            data:{},
            success:function(data){
                var my_data = JSON.parse(data);
                var celularesActivos = my_data.amount;
                if( celularesActivos != null ){  
                    $("#celAct").html( celularesActivos.toString() + " CELULARES ACTIVOS" );
                }else{
                    $("#celAct").html( "0 CELULARES ACTIVOS" );
                }
            } 
        });
    }


    function fillTable(datos, name_classification)
    {
        if(datos.rpta !== "ok"){
            alert("Hubo un error al recibir la lista");
            return;
        }
        var records = datos.clientes;

        var content_leftpanel = document.getElementById("content_leftpanel");
        content_leftpanel.innerHTML = "";
        content_leftpanel.style = 'background-color: #d3d3d3;';
        
        var div1 = document.createElement("div");
        div1.className = "box";
        div1.style = 'background-color: #d3d3d3;';
        
        var div2 = document.createElement("div");
        div2.className = "box-body2";
        
        var table1 = document.createElement("table");
        table1.id = "idposiciones";
        table1.className = "table table-responsive ";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
                
        cell0.innerHTML = name_classification;
        cell0.style = "width: 240px;border-bottom: 3px solid #fff;"; 
        cell0.id = "subtitle";
        cell1.innerHTML = "Posicion";
        cell1.style = "width: 70px;border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Puntos";
        cell2.style = "width: 90px;border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Comercio";
        cell3.style = "width: 280px;border-bottom: 3px solid #fff;"; 
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        
        var tbody1 = document.createElement("tbody"); 
        var sz = records.length; 
        
        if(sz > 0){

            //maximo de visitas registrado 
            var max_visitas = 0;
            for(i=0; i<sz; i++) 
            {
                var record = records[i];
                if(max_visitas<record.visitas){
                    max_visitas = record.visitas;
                }
                record.posicion = i+1;
            }
           
            if( max_visitas === 0 ) max_visitas = 1;
            for(i=0; i<sz; i++) //para cada fila
            {
                var record = records[i];
                
                var tr1 = document.createElement('tr');
                tr1.height = '50px';
                
                if(<?php 
                    if($curr_client!= []) echo $curr_client->id;
                    else echo "-1";
                ?> == record.client_id ){
                    tr1.style="background-color: #ffcc00;";
                }
                
                var td0 = document.createElement('td');
                td0.style = "border-bottom: 1px solid #fff;";
                var div5 = document.createElement('div');
                div5.className = "progress";
                div5.style = "padding: 0px; margin: 3px;";
                
                var var6 = parseInt(record.visitas/max_visitas*100);
                var div6 = document.createElement('div');
                div6.className = "progress-bar progress-bar-striped"; 
                div6.role = "progressbar";
                div6.setAttribute('aria-valuenow', record.visitas);
                div6.setAttribute('aria-valuemin', 0);
                div6.setAttribute('aria-valuemax', max_visitas); 
                div6.style = "width: "+var6+"%; height: 50px; padding: 0px;";
                
                var span1 = document.createElement("span"); 
                span1.innerHTML = record.visitas + " visitas";
                
                div6.appendChild(span1);
                div5.appendChild(div6);
                td0.appendChild(div5);
                
                //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
                var tempData = [];
                tempData.push( record.posicion );
                tempData.push( record.puntos );
                tempData.push( record.nombrecomercio );
                
                tr1.appendChild(td0);
                    
                for (var j = 0; j < 3; j++) { //para cada columna
                    var td1 = document.createElement('td');
                    td1.align = "center";
                    td1.style = "border-bottom: 1px solid #fff;";
                    td1.innerHTML = tempData[j];
                    tr1.appendChild(td1);
                }
                tbody1.appendChild(tr1);
            } 

        }else{            
            var tr1 = document.createElement('tr');
            tr1.height = '50px';

            var div5 = document.createElement('div');
                div5.className = "progress";
                div5.style = "padding: 0px; margin: 3px;";
                div5.innerHTML = "Sin datos que mostrar";
                
            var td0 = document.createElement('td');
                td0.appendChild(div5);
            tr1.appendChild(td0);
            tbody1.appendChild(tr1);
        }
 
        table1.appendChild(tbody1);
        div1.appendChild(div2);
        div1.appendChild(table1);
        content_leftpanel.appendChild(div1); 
    }

    function comprarPuntos(){

        $("#TargetModal").modal('show');
        /*var puntos_comprar = prompt("Ingrese la cantidad de puntos a comprar", "0");

        if (puntos_comprar == 0 || puntos_comprar == "") {
            alert('cancelado');
        } else { 

            var _token = $("input[name='_token']").val();
            $.ajax({
            type:'POST',
            url:"/admin/client_point",
            data:{  _token:_token, 
            id: {{ $user_id }}, 
            puntos: puntos_comprar },
            success:function(data){
                    if(data.rpta === 'ok'){    
                        if(alert(data.msg)){

                        }
                    }
                }
            }); 

        }*/



    }

    function probarPuntos()
    {
        var obj1 = document.getElementById("test_mas_puntos");
        var obj2 = document.getElementById("p_usados");
        var obj3 = document.getElementById("test_pos");
        
        var temp = parseInt(obj1.value);
        var curr = parseInt(obj2.innerHTML);
        
        var nuevo_puntaje = temp + curr;
        
        @foreach($clients as $client) 
            puntajes.push( <?php 
                    if($curr_client!= []) echo $curr_client->point->point_used;
                    else echo "-1";
                ?> );
        @endforeach 
 
        var idx = 0;
        for(i=0; i<puntajes.length; i++) //puntajes esta de mayor a menor
        { 
            if( puntajes[i] < nuevo_puntaje )
            {
                idx = i;
                break;
            }
        }
        
        //idx inicia de cero
        obj3.innerHTML = (idx+1).toString() + "º posicion"; 
    }

    function aplicarPuntos()
    {
        //TODO enviar al servidor nuevo puntaje 
        var obj1 = document.getElementById("test_mas_puntos");
        var obj2 = document.getElementById("p_disp");
        
        var puntos_usar = parseInt(obj1.value); 
        
        var id = getUrlParameter('id');  
        
        var _token = $("input[name='_token']").val();
        $.ajax({
        type:'POST',
        url:"/admin/use_enabled_point",
        data:{  _token:_token, 
                id: <?php 
                    if($curr_client!= []) echo $curr_client->id;
                    else echo "-1";
                ?>, 
                puntos: puntos_usar },
        success:function(data){
                if(data.rpta === 'ok'){    
                    
                    var p_usados = document.getElementById('p_usados');
                    var p_disp = document.getElementById('p_disp');

                    var p_usados3 = document.getElementById('p_usados3');
                    var p_disp3 = document.getElementById('p_disp3');

                    var points_used = data.client_point.point_used;
                    var points_enabled = data.client_point.point_enabled;
                    var amount = points_used + points_enabled;
                    
                    var percent_used = parseInt(points_used/amount*100);
                    var percent_enabled = 100-percent_used;

                    p_usados.style.width = percent_used+"%";
                    p_disp.style.width = percent_enabled+"%";

                    p_usados.innerHTML = points_used;
                    p_disp.innerHTML = points_enabled;
                    
                    p_usados3.innerHTML = points_used;
                    p_disp3.innerHTML = points_enabled;

                    if(alert(data.msg)){ 
                    }
                }
                else{
                    alert(data.msg);
                }
            }
        }); 

    }
    
    
    function demoFillTable(cant)
    {
        var content_leftpanel = document.getElementById("content_leftpanel");
        content_leftpanel.innerHTML = "";
        content_leftpanel.style = 'background-color: #d3d3d3;';
        
        var div1 = document.createElement("div");
        div1.className = "box";
        div1.style = 'background-color: #d3d3d3;';
        
        var div2 = document.createElement("div");
        div2.className = "box-body2";
        
        var table1 = document.createElement("table");
        table1.id = "idposiciones";
        table1.className = "table table-responsive ";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
                
        cell0.innerHTML = "";
        cell0.style = "width: 480px;border-bottom: 3px solid #fff;"; 
        cell1.innerHTML = "Posicion";
        cell1.style = "width: 70px;border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Puntos";
        cell2.style = "width: 90px;border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Comercio";
        cell3.style = "width: 280px;border-bottom: 3px solid #fff;"; 
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        
        var tbody1 = document.createElement("tbody"); 
        for(i=0; i<cant; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            tr1.height = '50px';
            
            var td0 = document.createElement('td');
            td0.style = "border-bottom: 1px solid #fff;";
            var div5 = document.createElement('div');
            div5.className = "progress";
            div5.style = "padding: 0px; margin: 3px;";
            
            var div6 = document.createElement('div');
            div6.className = "progress-bar progress-bar-striped";
            var6 = parseInt(100/cant*(cant-i));
            div6.role = "progressbar";
            div6.setAttribute('aria-valuenow', var6);
            div6.setAttribute('aria-valuemin', 0);
            div6.setAttribute('aria-valuemax', 100); 
            div6.style = "width: "+var6+"%; height: 50px; padding: 0px;";
            
            var span1 = document.createElement("span");
            span1.className = "sr_only";
            span1.innerHTML = var6 + " visitas";
            span1.style = "color: #fff;";
            
            div6.appendChild(span1);
            div5.appendChild(div6);
            td0.appendChild(div5);
             
            
            
            tr1.appendChild(td0);
                
            for (var j = 1; j < 4; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.align = "center";
                td1.style = "border-bottom: 1px solid #fff;";
                td1.innerHTML = j.toString();
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        div1.appendChild(div2);
        div1.appendChild(table1);
        content_leftpanel.appendChild(div1); 
    }
    

</script>
 
@endsection