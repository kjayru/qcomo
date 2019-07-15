@extends('admin.layout.master')

@section('content')

<!--TODO RESERVAS ES OPR REST--> 
<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div id="wrappermini">
    <div id="one">  
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >RESERVAS</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevaReserva()"  style="margin-right: 12px;">Nueva Reserva</button> 
              </div>
		</nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0;margin: 0; height: 1700px; min-width: 150px; overflow-y: auto;">  
            </div>
        </div>
    </div>
    
    <div id="two" >  
         
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="box box-info" style="background-color: #fff; padding: 0px;">
                    <div class="box-header with-border">
                        <h4>Nueva reserva</h4>
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
                                <label class="col-md-3 control-label" for="name">Nombres y Apellidos</label>  
                                <div class="col-md-8">
                                <input id="names" name="name" style="background-color: #e5e5e5;" type="text" placeholder="Nombres y apellidos" class="form-control input-md">
                                </div> 
                            </div>

                            <div class="form-group">    
                                <label class="col-md-3 control-label" for="amount">Cantidad de personas</label>  
                                <div class="col-md-8">
                                <input id="amount" name="amount" style="background-color: #e5e5e5;" type="number" value="1" min="1" max="100" class="form-control input-md">
                                </div> 
                            </div>

                            <div class="form-group"> 
                                    <label class="col-md-3 control-label" for="hora0">Hora de inicio</label>  
                                    <div class="col-md-8">
                                        <select class="form-control input-md" style="background-color: #e5e5e5;" name="hora0" id="hora0">
                                            <option value="0">--seleccione--</option> 
                                            <option value="8:00:00">8:00</option> 
                                            <option value="9:00:00">9:00</option> 
                                            <option value="10:00:00">10:00</option> 
                                            <option value="11:00:00">11:00</option> 
                                            <option value="12:00:00">12:00</option> 
                                            <option value="13:00:00">13:00</option> 
                                            <option value="14:00:00">14:00</option> 
                                            <option value="15:00:00">15:00</option> 
                                            <option value="16:00:00">16:00</option> 
                                            <option value="17:00:00">17:00</option> 
                                            <option value="18:00:00">18:00</option> 
                                            <option value="19:00:00">19:00</option> 
                                            <option value="20:00:00">20:00</option> 
                                            <option value="21:00:00">21:00</option> 
                                            <option value="22:00:00">22:00</option> 
                                            <option value="23:00:00">23:00</option> 
                                        </select>
                                    </div> 
                            </div>

                            <div class="form-group"> 
                                    <label class="col-md-3 control-label" for="horaf">Hora de termino</label>  
                                    <div class="col-md-8">
                                        <select class="form-control input-md" style="background-color: #e5e5e5;" name="horaf" id="horaf">
                                            <option value="0">--seleccione--</option> 
                                            <option value="8:00:00">8:00</option> 
                                            <option value="9:00:00">9:00</option> 
                                            <option value="10:00:00">10:00</option> 
                                            <option value="11:00:00">11:00</option> 
                                            <option value="12:00:00">12:00</option> 
                                            <option value="13:00:00">13:00</option> 
                                            <option value="14:00:00">14:00</option> 
                                            <option value="15:00:00">15:00</option> 
                                            <option value="16:00:00">16:00</option> 
                                            <option value="17:00:00">17:00</option> 
                                            <option value="18:00:00">18:00</option> 
                                            <option value="19:00:00">19:00</option> 
                                            <option value="20:00:00">20:00</option> 
                                            <option value="21:00:00">21:00</option> 
                                            <option value="22:00:00">22:00</option> 
                                            <option value="23:00:00">23:00</option> 
                                        </select>
                                    </div> 
                            </div>

                            <div class="form-group">    
                                <label class="col-md-3 control-label" for="sector">Sector</label>  
                                <div class="col-md-8">
                                <select id="sector" class="form-control" style="background-color: #e5e5e5;"  name="sector">
                                    <option>---- Sector -----</option>
                                        @foreach ($sectors as $sector)  
                                            <option value='{{$sector->id}}'>{{$sector->name}}</option>
                                        @endforeach 
                                </select>
                                </div> 
                            </div>

                            <div class="form-group">    
                                <label class="col-md-3 control-label" for="cellphone">Celular</label>  
                                <div class="col-md-8">
                                <input id="cellphone" name="cellphone" style="background-color: #e5e5e5;" type="text" class="form-control input-md">
                                </div> 
                            </div>
                                         
                            <div class="form-group">    
                                <label class="col-md-3 control-label" for="estado">Estado de la reserva</label>  
                                <div class="col-md-8">
                                <input id="estado" name="estado" style="background-color: #e5e5e5;" type="text" value="Sin confirmar" class="form-control input-md" readonly>
                                </div> 
                            </div>

                            <div class="form-group">    
                                <label class="col-md-3 control-label" for="date">Fecha de la reserva</label>  
                                <div class="col-md-8">
                                <input id="datepicker" name="date" style="background-color: #e5e5e5;" type="text"  class="form-control input-md" readonly>
                                </div>    
                            </div>
                                     
                            <h5>Mesas disponibles</h5>
                            <div class="form-group">    
                                <input id="mesas" name="mesas[]" type="hidden" class="form-control input-md">
                                <div class="col-md-8" id="lista_mesas">

                                </div>    
                            </div>
 
                            <div class="box-footer"> 
                                <button class="btn btn-primary pull-right" onclick="crearReserva()">Reservar</button>
                            </div>

                        </div>  
                    </form>
                      
                </div>
            </div>
            
        </div>

    </div>
</div>
      
</section> 
@include('admin.partial.scripts')


<script> 
    
    var two = document.getElementById("two").hidden = true;   
    var listaMesasQR = {};
    $(document).ready(function(){                 
        getPedidosVariosDias(); //demo, borrar cuando este completo 
    });
     
</script>

<script>

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

    function nuevaReserva()
    { 
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";
        
        var horas_name = [];
        var horas_val = [];
        for(i=0;i<23;i++){ horas_name.push( i.toString() + ":00"); }
        for(i=0;i<23;i++){ horas_val.push( i ); }
     
        addTextForm(record, "nombre", "Nombre y Apellido");
        addNumberForm(record, "cantidad", "Cantidad de Personas", 0, 100, 1); 
        addSelectForm(record, "hinicio", "Horario Inicio (0-23h)", horas_name, horas_val);
        addSelectForm(record, "hfin", "Horario Fin (0-23h)",horas_name, horas_val);
        addTextForm(record, "sector", "Sector"); 
        addTextForm(record, "celular", "Celular");
        addTextForm(record, "estado", "Estado de la reserva");
        //TODO addBotonSubmit, envia al servidor para agregar un nuevo pedido
        //envias: nombre, personas, hinico, hfinal, sector, celular, estado e input oculto denominado  mesas[]
        addBotonSubmit(record);
        addBubTitle(record,"Verifique la disponibilidad de mesas");
        addCalendar(record, "fecha", "fecha");
        createBtnMM(record, "Verificar disponibilidad", function(){
            //TODO, al ingresar a esta pagina se ingresa un id  dle cliente franquiciado o id del local
            //http://localhost/admin/reservas?id=5
            //caso de admin o administrador de franquicias se ingresa aqui desde seccion de franquicias 
            var id = getUrlParameter('id'); 
            
            //TODO, Al seleccionar una fecha le server devuelve la lista de mesas
            //y los horarios reservados
            //ingresar data : data= {("idclientefranquiciado o local":"dd/MM/yyyy")}
            //devuelve data : data= [ {"idmesa":176,"nummesa":2,"horasreservadas":[8, 17, 21]} , {}, ... ]  // es por horas y de 0 a 23 horas
            //cambiar test.php
            var dia = $('#datetimepicker').val();
            if( dia === "" )
            {
                alert("Seleccione una fecha");
            }
            
            $.get( "test.php", { idlocal: id, fecha: dia }, function (mesasHoras){      
                var currHora = $('#hora option:selected').val();
                listaMesasQR = [];
                for( i = 0; i < mesasHoras.length; i++ )
                {
                    var mesaDisponible = true;
                    var mesaHora = mesasHoras[i];
                    for( j=0; j<mesaHora.horasresevadas.length; j++ )
                    {
                        if( currHora === mesaHora.horasresevadas[j] ){
                            mesaDisponible = false;
                            break;
                        }
                    }
                    
                    if( mesaDisponible === true ){ 
                        crearMesaDisponible(record, mesaHora.nummesa); 
                    }
                }
            } );
            
        }); 
        addSelectForm(record, "hora", "Hora", horas_name, horas_val); 
         
    }
    
    function crearMesaDisponible(record, numMesa)
    { 
        createBtnMesa(record, numMesa, function(){ 

            alert(numMesa);
            if( this.id === "btn_mesa_disable" ){
                return;
            }

            if( this.id === "btn_mesa" ){
                this.id = "btn_mesa_active";
                listaMesasQR.push( parseInt( this.innerHTML ) );
                addHiddenForm(record, "mesas[]", "hid"+this.innerHTML, this.innerHTML );
            }else
            {
                this.id = "btn_mesa"; 
                var idx = listaMesasQR.indexOf( parseInt( this.innerHTML ) ); 
                listaMesasQR.splice( idx ,1 ); 
                removeHiddenForm( "hid"+this.innerHTML  );
            }
        });
    }
    
    function getPedidosVariosDias()
    {
        var bpedidos = document.getElementById("body_pedidos");
        bpedidos.innerHTML = ""; 
        
        <?php $i=0;?>
        @foreach ($reservas as $reserva)    
            var sz = <?php echo count($reserva['data']);?>;
            var data = new Array(sz);
            @foreach ($reserva['data'] as $r1)  
            data_row = new Array(9); 
            data_row[0] = <?php echo "'".$r1->id."'"; ?>; 
            data_row[1] = <?php echo "'".$r1->name."'"; ?>;    
            data_row[2] = <?php echo "'".$r1->amount."'"; ?>;   
            data_row[3] = <?php echo "'".$r1->star."'"; ?>;  
            data_row[4] = <?php echo "'".$r1->end."'"; ?>; 
            data_row[5] = <?php echo "'".$r1->cellphone."'"; ?>;  
            data_row[6] = <?php echo "'".$r1->sector."'"; ?>;         
            data_row[7] = <?php echo "'".$r1->estado."'"; ?>;   
            data[0] = data_row;
            @endforeach 
            getPedidoDia( bpedidos, <?php echo "'".$reserva['day']."'";?>, 
                            <?php echo "'"."dtBasicExample".$i,"'";?>, data);
            <?php $i=$i+1;?>            
        @endforeach  
    }
    
    //fecha en formato YYYY-MM-DDTHH:MM:SSZ
    function getPedidoDia(parent, fecha, idtable, data)
    { 
        //mas de 10 dias de diferencia return
        var currFecha = new Date(); 
        var arrfecha = fecha.split("-");
        var showPedidosFecha = new Date(arrfecha[0], parseInt(arrfecha[1])-1, arrfecha[2], 0, 0, 0); 
        var days = daysBeetween(showPedidosFecha, currFecha);
        if( days > 10 ) return;
         
        var div0 = document.createElement("div");
        div0.style = "overflow-y: auto;";
        
        var div1 = document.createElement("div");
        div1.className = "box-header4";
        div1.style = "font-size: 1.5em;";
        switch( days ){
            case 0:
                div1.innerHTML = "PARA EL DIA DE HOY"; 
                break;
            case 1:
                div1.innerHTML = "PARA EL DIA DE MAÑANA"; 
                break;
            default:
                div1.innerHTML = "PARA EL " + getDayOfWeek(showPedidosFecha) + " " + getDayOnMonth(showPedidosFecha) ; 
                break; 
        }
        
        var table1 = document.createElement("table");
        table1.id = idtable;
        table1.className = "table table-responsive table-striped";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        thead1.style = "background-color: #ffc057; color: #444;";
        switch( days ){
            case 0: 
                thead1.style = "background-color: #FFC057";
                break;
            case 1: 
                thead1.style = "background-color: #ADFF2F";
                break;
            default: 
                thead1.style = "background-color: #FFC057";
                break; 
        }
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th");
        var cell5 = document.createElement("th");
        var cell6 = document.createElement("th");
        var cell7 = document.createElement("th");
        var cell8 = document.createElement("th");
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Nombre y Apellido";
        cell1.width = 120;
        cell1.className = "text-center";
        cell2.innerHTML = "Cant. de Personas";
        cell2.className = "text-center";
        cell2.width = 35;
        cell3.innerHTML = "Horario de ingreso";
        cell3.className = "text-center";
        cell4.innerHTML = "Horario de salida";
        cell4.className = "text-center";
        cell5.innerHTML = "Celular";
        cell5.className = "text-center";
        cell5.width = 90;
        cell6.innerHTML = "Sector";
        cell6.className = "text-center";
        cell6.width = 35;
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        cell7.width = 35;
        cell8.innerHTML = "Opciones";
        cell8.className = "text-center";
        cell8.width = 35;
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        rowHead.appendChild(cell8);
        
        var tbody1 = document.createElement("tbody");
         
        for(i=0; i<data.length; i++) //para cada fila
        {
             
            var tr1 = document.createElement('tr');
            var data_row = data[i];
            if( data_row == null ) continue;
            for (var j = 0; j < 8; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.align = "center";
                td1.innerHTML = data_row[j];
                tr1.appendChild(td1);
            }
            
            var tdn = document.createElement('td');
            tdn.setAttribute('id',data_row[0]);
            if(data_row[7] !== 'cancelado'){
                    var btn = document.createElement("BUTTON");
                    btn.classList.add("btn");
                    btn.classList.add("btn-secundary");                    
                    btn.innerHTML = "Cancelar"; 
                    btn.onclick = function(){
                                        
                        var _token = $("input[name='_token']").val();
                        $.ajax({
                        type:'POST',
                        url:"/admin/reserva/cancelar",
                        data:{  _token:_token, id: tdn.getAttribute('id') },
                        success:function(data){
                                if(data.rpta === 'ok'){    
                                    if(alert(data.msg)){}
                                    else    window.location.reload(); 
                                }
                            }
                        }); 
                         
                    } 
                    tdn.align = "center";
                    tdn.appendChild(btn);
            }
            tr1.appendChild(tdn);
            
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        div0.appendChild(div1);
        div0.appendChild(table1);
        parent.appendChild(div0);
        
        var nameidtable = "#"+idtable;
        $(nameidtable).DataTable({
          "paging": true,
          "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
        });
         
    }

    function daysBeetween( date2, currDate ) {   //date2 > currDate, se asume
        
        currDate.setHours(0);
        currDate.setMinutes(0);
        currDate.setSeconds(0);
        currDate.setMilliseconds(0);
        var dif_miliseg = (date2.getTime() - currDate.getTime())/1000;
        var dias = Math.round(dif_miliseg/(24*3600)); 
        return dias;
         
     };
     
     function getNumDaysOfMonth(month, year)
     {
        return new Date(year, month, 0).getDate();
     }
     
     function getDayOfWeek(currDate)
     {
        var days = ["DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO"];
        return days[currDate.getDay()];
     }
     
     function getDayOnMonth(currDate)
     {
         var months = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SETIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
         var str = currDate.getDate() + " de " + months[ currDate.getMonth() ];
         return str;
     } 
     
</script>
  
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 

    var mesasSeleccionadas = [];

    function addMesa(isAvailable, number, id)
    {
        var parent = document.getElementById("lista_mesas");

        var btn = document.createElement("button");
        btn.onclick = function() { 
            if(btn.id === "btn_mesa_disable" ){
                btn.id = "btn_mesa";
                //quitar de seleccionados
                for( var i = 0; i < mesasSeleccionadas.length; i++){ 
                    if ( mesasSeleccionadas[i] === id) {
                        mesasSeleccionadas.splice(i, 1); 
                    }
                } 
            }
            else{
                btn.id = "btn_mesa_disable";
                mesasSeleccionadas.push(id); 
            }

        };
        btn.type = "button";
        if( isAvailable === true ){
            btn.id = "btn_mesa";
            btn.className = "btn btn-primary";
        }else{
            btn.id = "btn_mesa_disable";
            btn.className = "btn btn-default";
        }        
        btn.innerHTML = number;
        btn.enabled = isAvailable;
        parent.appendChild(btn); 
    }
</script>

<script type="text/javascript">
    $(function() {
        $( "#datetimepicker" ).datepicker();
    });

    var titulo_seccion = document.getElementById("titulo_seccion");
    titulo_seccion.innerHTML = "RESERVAS";

    //para autocomplete
    var clientes = [];
    var telefonos = [];
    var iis = [];
    $.ajax({
           type:'GET',
           url:"/admin/users/forautocomplete",
           data:{},
           success:function(data){
	            var json_obj = $.parseJSON(data); 
                
                if(json_obj.rpta === 'ok'){
                    $.each( json_obj.data, function( key, value ) {
                        clientes.push(value.name);
                        telefonos.push(value.phone);
                        iis.push(value.id);
                    });
                    console.log(clientes);
                    autocomplete(document.getElementById("myInput"), clientes);
                }
           }
    }); 

    var u_id = 0;
    $("form").submit(function(){ 
        event.preventDefault(); 
        $("#names").val( $("#myInput").val() ); 
        var idx = 0;
        var idx_f = 0;
        clientes.forEach(function (value, index, array){
            if( value === $("#myInput").val() ){ 
                idx_f = idx;
            }
            else{
                idx = idx + 1;
            }
        }); 
        $("#cellphone").val( telefonos[idx_f].toString() ); 
        u_id = iis[idx_f];
    }); 

    $("#datepicker").on("change paste keyup", function() {  
        var sector_id = $("#sector").val();  
        var dia = $(this).val();  
        dia = dia.replace('/','-');
        dia = dia.replace('/','-');
        var hora0 = $("#hora0").val();  
        var horaf = $("#horaf").val();

        if(sector_id==0) {
            alert('Seleccione un sector, hora de inicio y hora final para ver las mesas disponibles');
            return;
        } 
        if(hora0==0) {
            alert('Seleccione un sector, hora de inicio y hora final para ver las mesas disponibles');
            return;
        } 
        if(horaf==0) {
            alert('Seleccione un sector, hora de inicio y hora final para ver las mesas disponibles');
            return;
        }  

        var my_url = "/admin/mesas/enabled/"+sector_id+"/"+dia+"/"+hora0+"/"+horaf; 

        $.ajax({
        type:'GET',
        url:my_url,
        data:{},
        success:function(json_obj){    
                mesasSeleccionadas = [];
                json_obj.mesas.forEach(function (mesa, index, array){                   
                    var isAvailable = true;
                    json_obj.libros.forEach(function (reserva, index, array){ 
                        json_obj.libros.mesas.forEach(function (r_mesa, index, array){ 
                            if( mesa.mesa_id == r_mesa.mesa_id ){
                                isAvailable = false;
                            }
                        }); 
                    }); 
                    addMesa(isAvailable, mesa.nummesas, mesa.id );
                });    
        }
        });

    });

    function crearReserva(){
        
        //verificar entradas
        var name = $("#name").val();  
        var amount = $("#amount").val();  
        var sector_id = $("#sector").val();  

        var arr_dia = $("#datepicker").val().split("/"); 
        var dia = arr_dia[2] + "-" + arr_dia[0] + "-" + arr_dia[1];
        var hora0 = $("#hora0").val();  
        var horaf = $("#horaf").val();
        var cellphone = $("#cellphone").val();  
        var client_id = $('#select_client').val();

        if(name=='') {
            alert('Indique el nombre de la persona que hace la reserva');
            return;
        } 
        if(amount=='') {
            alert('Indique la cantidad de personas');
            return;
        } 
        if(sector_id==0) {
            alert('Indique un sector');
            return;
        } 
        if(dia=='') {
            alert('Seleccione un dia');
            return;
        } 
        if(hora0==0) {
            alert('Seleccione una hora inicial');
            return;
        } 
        if(horaf==0) {
            alert('Seleccione una hora final');
            return;
        }  
        if(cellphone=='') {
            alert('Indique un numero telefonico de la persona que hace la reserva');
            return;
        } 
        if(mesasSeleccionadas.length == 0) {
            alert('Seleccione las mesas a reservar');
            return;
        } 
        if(client_id==0) {
            alert('Seleccione un cliente');
            return;
        } 
        if(u_id==0) {
            alert('Seleccione un nombre de usuario');
            return;
        } 

        //enviar ajax  
        var _token = $("input[name='_token']").val();
        $.ajax({
           type:'POST',
           url:"/admin/reserva",
           data:{  _token:_token, name: name, amount: amount, sector_id: sector_id, 
           hora0: hora0, horaf: horaf, cellphone: cellphone, 
           date: dia, mesas: mesasSeleccionadas, user_id: u_id, client_id: client_id },
           success:function(data){
                if(data.rpta === 'ok'){  
                    if(alert(data.msg)){}
                    else    window.location.reload(); 
                }
            }
        }); 
    }

    $('#select_client').change(function() { 
        fillSectorOptions($(this).val());
    });

    function fillSectorOptions(id){
        $.ajax({
           type:'GET',
           url:"/admin/sector/"+id,
           data:{},
           success:function(data){ 
                if(data.rpta === 'ok'){ 
                    $("#sector")
                    .find('option')
                    .remove()
                    .end();
                    
                    $("#sector")
                        .append('<option value="0">---- Sector -----</option>');

                    $.each( data.data, function( index, value ) { 
                        $("#sector")
                        .append('<option value="'+value.id+'">'+value.name+'</option>')
                    }); 
                }
            }
        }); 
    }

</script>


@endsection