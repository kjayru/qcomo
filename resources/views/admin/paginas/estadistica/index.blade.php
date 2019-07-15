@extends('admin.layout.master')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script type="text/javascript" src="../dist/js/utils.js"></script>


@section('content')


<section class="content" style="width:100%; position: relative;">
     
    <div class="panel-group" style="background-color: #efefef">
        
        <div class="panel panel-default" style="background-color: #efefef; height: 55px; margin-top: 50px;">
            <div class="panel-body" style="padding: 7px;">
                <ul  class="nav nav-tabs" id="myTab" role="tablist" style="min-height: 40px; background-color: #efefef; float: right; border-bottom: 0px;" >
                    <li class="nav-item" style="margin: 0px;">
                        <a onclick="onAyer()" class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="ayer" aria-selected="true">Ayer</a>
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a onclick="onUltimaSemana()" class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="ultima_semana" aria-selected="true">Ultima semana</a>
                    </li> 
                    <li class="nav-item" style="margin: 0px;">
                        <a onclick="onEsteMes()" class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">Este mes</a>
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a onclick="onUltimos30()" class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">Ultimos 30 dias</a>                        
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a onclick="onMesPasado()" class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">El mes pasado</a>                        
                    </li>
                    <li style="margin: 0px; padding-top: 8px;">
                        <i class="fa fa-calendar" style="color: #444; margin-right: 5px;"></i>
                        <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                    </li>
                </ul>
            </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">
                 
              <h2>VISION GENERAL EN TIEMPO REAL</h2>
              <ul class="list-inline" style="display: table; margin-right: auto; margin-left: auto;" >
                    <li>
                        <div class="li-vision-general" style="background-color: #da70d6; cursor: auto;">
                            <h2 id="cel_act">6220</h2>
                            <h5>Celulares Activos</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #ff4500;" onclick="connectNow()">
                            <h2 id="conect_now">122</h2>
                            <h5>Conectados Ahora</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #228b22;" onclick="reservas()">
                            <h2 id="reservas">45</h2>
                            <h5>Reservas</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #ffa500;" onclick="pedidosDelivery()">
                            <h2 id="pedidos_del">689</h2>
                            <h5>Pedidos Delivery</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #da70d6;" onclick="cuponesPedidos()">
                            <h2 id="cupons_ped">34</h2>
                            <h5>Cupones Pedidos</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #6495ed;" onclick="compartidoRedes()">
                            <h2 id="shared_lans">934</h2>
                            <h5>Compartido en Redes</h5>
                        </div>
                    </li>
              </ul>
              
              
              <!--Diagrama en tiempo real-->
              <canvas id="linetime" height="80vw"  >
                  
              </canvas>
              
              <div id="zone_timereal" style="margin-right: auto; margin-left: auto; max-width: 1300px; overflow-x: auto;">
                  
              </div>
              
          </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">
                
              <ul class="list-inline" style="display: table; margin-right: auto; margin-left: auto;" >
                    <li>
                        <div class="li-platos-mas" onclick="onPlatosMS()">
                            <h5>LOS 15 PLATOS MAS</h5>  
                            <h5>SOLICITADOS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" onclick="onBebidasMS()">
                            <h5>LOS 15 BEBIDAS</h5>  
                            <h5>MAS VENDIDAS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" onclick="onCoctelesMS()" >
                            <h5>LOS 15 COCTELES</h5>  
                            <h5>MAS VENDIDOS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" onclick="onMesasAtendidas()">
                            <h5>MESAS ATENDIDAS</h5>  
                            <h5>POR LOS MOZOS</h5>  
                        </div>
                    </li> 
                </ul> 
            </div>

            <div id="mas_vendidos" style="margin-right: auto; margin-left: auto; max-width: 1300px; overflow-x: auto;"> 

            </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">          
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">          
                <h2>SEGMENTACION</h2>     
            
                    <div class="col-md-5 py-1">
                        <h3>SEXO</h3>  
                        <div class="card">
                            <div id="canvas-holder" style="width:400px;">
                                <canvas id="chart-sexo"></canvas>
                            </div> 

                            <div id="chartjs-tooltip"></div>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <div class="card">
                            <div class="card-body">
                                <div id="canvas-holder" style="max-width:550px;">
                                    <canvas id="canvas3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
            
            
            <div class="panel-body">                       
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">
             
                    <div class="col-md-5 py-1">
                        <h3>PAISES DE LOS COMENSALES</h3> 
                        <div class="card">
                            <div id="canvas-holder" style="width:400px;">
                                <canvas id="chart-area2"></canvas>
                            </div> 

                            <div id="chartjs-tooltip"></div>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <h3>CIUDADES DE LOS COMENSALES</h3> 
                        <div id="ciudades_comensales">
                        </div>
                    </div>
                </div>
              
            </div>
            
            
        <div class="panel">
            
              
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">       
                <h2>INCREMENTO DE CONTACTOS</h2>    
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">
            
                    <div class="col-md-2 py-1" style="width: 280px; padding: 15px; border: 1px solid #ddd;"> 
                        <div class="card" style="border: 0px; float: left; width: 90px; width: 100px; text-align: center; color: #777;">  
                            <h4>50</h4>
                            <h6>aumento de contactos </h6>
                            <h6>yesterday</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                        <div class="card" style="border: 0px; float: right; width: 110px; text-align: center; color: #777;">  
                            <h4>1016</h4>
                            <h6>aumento de contactos </h6>
                            <h6>last 7 days</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                        <div class="card" style="border: 0px; width: 110px; text-align: center; margin-right: auto; margin-left: auto; color: #777;">  
                            <button style="margin-top: 7px; background-color: #fff;">Vista previa</button>
                            <h4>88920</h4>
                            <h6>todos los contactos</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <div class="card">
                            <div class="card-body">
                                <div id="canvas-holder" style="max-width:600px;">
                                    <canvas id="canvas4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
             
        </div>
        
        
        <div class="panel">
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">       
                
                <div class="col-md-5 py-1" style="border: 1px solid #ddd; margin: 8px;">
                    <h3>SESIONES DE APPS</h3>
                    <div class="card">
                        <div class="card-body">
                            <div id="canvas-holder" style="max-width:600px;">
                                <canvas id="canvas_apps"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 py-1" style="border: 1px solid #ddd; margin: 8px;">
                    <h3>VISITAS POR FUNCIONALIDADES</h3>
                    <div class="card">
                        <div class="card-body">
                            <div id="canvas-holder" style="max-width:600px;">
                                <canvas id="canvas_visitas_func"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            
        <div class="panel">
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">  
                <!--div class="col-md-4 py-1">
                    <h2>PLATAFORMAS</h2>
                    <div class="card">
                        <div class="card-body">
                            <div id="canvas-holder" style="max-width:600px;">
                                <canvas id="canvas4"></canvas>
                            </div>
                        </div>
                    </div>                    
                </div-->     
                
                <div class="col-md-4 py-1" style="border: 1px solid #ddd; margin: 8px;">
                    <h3>DESCARGAS IOS</h3>
                    <div class="card">
                        <div class="card-body">
                            <img src="../images/apple.png"/>
                            <h2>0</h2>
                        </div>
                    </div>                    
                </div>     
                
                <div class="col-md-4 py-1" style="border: 1px solid #ddd; margin: 8px;">
                    <h3>DESCARGAS ANDROID</h3>
                    <div class="card">
                        <div class="card-body">
                            <img src="../images/android.png"/>
                            <h2>0</h2>
                        </div>
                    </div>                    
                </div> 
                
                
                <div class="col-md-4 py-1" style="border: 1px solid #ddd; margin: 8px;">
                    <h3>PROMEDIO DE TIEMPO EN LA APP</h3>
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-inline">
                                <li>
                                    <div style="margin:25px;">
                                        <h3>N/D</h3>
                                        <h6>iOS</h6>
                                    </div>
                                </li>
                                <li>
                                    <div style="margin:25px;">
                                        <h3>N/D</h3>
                                        <h6>ANDROID</h6>
                                    </div>
                                </li>
                                <!--li>
                                    <div style="margin:25px;">
                                        <h3>N/D</h3>
                                        <h6>WEB APP</h6>
                                    </div>
                                </li-->
                            </ul>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
            
        <div class="panel">
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">       
                

                <!--div class="col-md-5 py-1">
                    <h3>DISPOSITIVOS NAVEGADORES</h3>
                    <div class="card">
                        <div class="card-body"> 
                            
                        </div>
                    </div>
                </div-->
                
            </div>
        </div>            
            
        <div class="panel">
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">       
                <div id="chartdiv"></div>
            </div>
        </div>
            
    </div>
</section>
@include('admin.partial.scripts')



<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


<script> 
    
var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
};


//para basic
var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var color = Chart.helpers.color;
var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                ]
        }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                ]
        }]

};


window.onload = function() {
        
    //para dona
    var ctx = document.getElementById('chart-sexo').getContext('2d');
    var config_sexo = getDataSexo();
    window.myPie = new Chart(ctx, config_sexo);
    
    var ctx2 = document.getElementById('chart-area2').getContext('2d');
    var config_paises = getDataPaises();
    window.myPie = new Chart(ctx2, config_paises);

    getEdades();
    
    getCiudadesComensales();
        
    getIncrementosContacto(); 
  
    getSesionesApps();
    
    getVisitasFunc();
  
};
 
</script>
		
<script>
$(function() {
     
    $('input[name="daterange"]').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
  
function getVisitasFunc()
{
    
    var arrDias = ["2018-07-22","2018-07-23","2018-07-24","2018-07-25","2018-07-26","2018-07-27","2018-07-28"];
    var arrCantidad = [11,7,15,25,7,20,8];
    
    var arrBgColors = [];
    var arrBorderColors = [];
    var ii;
    for(ii=0; ii<arrDias.length; ii++)
    {
        arrBgColors.push( getBgColorForRealTime(ii) );
        arrBorderColors.push( getBorderColorForRealTime(ii) );
    }
    
    //basico
    var ctx4 = document.getElementById('canvas_visitas_func').getContext('2d');
        window.myBar = new Chart(ctx4, {
                type: 'bar',
                data: {
                  labels: arrDias, //dias
                  datasets: [{
                    label: 'cantidad',
                    data: arrCantidad,  //cantidad por dia
                    backgroundColor: arrBgColors,
                    borderColor: arrBorderColors,
                    borderWidth: 1
                  }]
                },
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Incremento de Contacto'
                        }
                }
    });

}


function getSesionesApps()
{
    
    var arrDias = ["2018-07-22","2018-07-23","2018-07-24","2018-07-25","2018-07-26","2018-07-27","2018-07-28"];
    var arrCantidad = [11,7,15,25,7,20,8];
    
    var arrBgColors = [];
    var arrBorderColors = [];
    var ii;
    for(ii=0; ii<arrDias.length; ii++)
    {
        arrBgColors.push( getBgColorForRealTime(ii) );
        arrBorderColors.push( getBorderColorForRealTime(ii) );
    }
    
    //basico
    var ctx4 = document.getElementById('canvas_apps').getContext('2d');
        window.myBar = new Chart(ctx4, {
                type: 'line',
                data: {
                  labels: arrDias, //dias
                  datasets: [{
                    label: 'cantidad',
                    data: arrCantidad,  //cantidad por dia
                    backgroundColor: arrBgColors,
                    borderColor: arrBorderColors,
                    borderWidth: 1
                  }]
                },
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Incremento de Contacto'
                        }
                }
    });

}

function getEdades(){
    
    var arrIntervalos = ["13-17","18-24","25-34","35-44","45-54","55-64","65+"];
    var arrCantidad = [2,8,15,25,7,2,1];
    
    var arrBgColors = [];
    var arrBorderColors = [];
    var ii;
    for(ii=0; ii<arrIntervalos.length; ii++)
    {
        arrBgColors.push( getBgColorForRealTime(ii) );
        arrBorderColors.push( getBorderColorForRealTime(ii) );
    }
 
    //basico
    var ctx3 = document.getElementById('canvas3').getContext('2d');
        window.myBar = new Chart(ctx3, {
                type: 'bar',
                data: {
                  labels: arrIntervalos, //dias
                  datasets: [{
                    label: 'cantidad',
                    data: arrCantidad,  //cantidad por dia
                    backgroundColor: arrBgColors,
                    borderColor: arrBorderColors,
                    borderWidth: 1
                  }]
                },
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Edades'
                        }
                }
    });
    
}

function getIncrementosContacto()
{
    
    var arrDias = ["2018-07-22","2018-07-23","2018-07-24","2018-07-25","2018-07-26","2018-07-27","2018-07-28"];
    var arrCantidad = [11,7,15,25,7,20,8];
    
    var arrBgColors = [];
    var arrBorderColors = [];
    var ii;
    for(ii=0; ii<arrDias.length; ii++)
    {
        arrBgColors.push( getBgColorForRealTime(ii) );
        arrBorderColors.push( getBorderColorForRealTime(ii) );
    }
    
    //basico
    var ctx4 = document.getElementById('canvas4').getContext('2d');
        window.myBar = new Chart(ctx4, {
                type: 'bar',
                data: {
                  labels: arrDias, //dias
                  datasets: [{
                    label: 'cantidad',
                    data: arrCantidad,  //cantidad por dia
                    backgroundColor: arrBgColors,
                    borderColor: arrBorderColors,
                    borderWidth: 1
                  }]
                },
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Incremento de Contacto'
                        }
                }
    });

}

function getCiudadesComensales(){
    
    var ciudades_comensales = document.getElementById("ciudades_comensales");
    
    var table = document.createElement("table");
    table.className = "table table-responsive";
    var thead1 = table.createTHead();
    var rowHead = thead1.insertRow(0);  
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th"); 
    
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    
    var tbody = document.createElement("tbody");
    var i;
    for(i=0; i<10; i++)
    {
        var tr = document.createElement("tr");       
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        var td3 = document.createElement("td");
        
        td1.style = "font-size: 0.8em;";
        td2.style = "font-size: 0.8em;";
        td3.style = "font-size: 0.8em;";
        td1.innerHTML = "21.46%";
        td2.innerHTML = "256";
        td3.innerHTML = "Buenos Aires, Ciudad Autonoma de Buenos Aires, Argentina";
        
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);        
        tbody.appendChild(tr);        
    }
    table.appendChild(tbody); 
    ciudades_comensales.appendChild(table); 
}

  
function onAyer(){
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    var currfecha = new Date();
    var fechaf = new Date( currfecha.getFullYear(), currfecha.getMonth(), currfecha.getDate(), 0, 0, 0, 0 );
    var fecha0 = new Date( fechaf.getTime() - 864e5 ); 
    
    var str_fecha0 = fecha0.getTime()/1000;
    var str_fechaf = fechaf.getTime()/1000;
    //TODO pide al servidor informacion en un intervalo de tiempo
    //envia: fecha inicio, fecha final. Ambos en valor timestamp
    //recibe: 
    //  num de celulares act.
    //  conectados ahora
    //  reservas
    //  numero de pedidos delivery
    //  numero de cupones pedidos
    //  numero de veces compratido
    //  posible tabla adicional con estos datos  
    $.get("test0", { f0: str_fecha0, ff: str_fechaf }).done(function( data ) { 
        
    });
    
    //TODO retirar cuando get implementado
    demoLineaTiempo();
}

function onUltimaSemana(){
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    var currfecha = new Date();
    var fechaf = new Date( currfecha.getFullYear(), currfecha.getMonth(), currfecha.getDate(), 0, 0, 0, 0 );
    var fecha0 = new Date( fechaf.getTime() - 7*864e5 ); 
    
    var str_fecha0 = fecha0.getTime()/1000;
    var str_fechaf = fechaf.getTime()/1000;
    //TODO pide al servidor informacion en un intervalo de tiempo
    //envia: fecha inicio, fecha final. Ambos en valor timestamp
    //recibe: 
    //  num de celulares act.
    //  conectados ahora
    //  reservas
    //  numero de pedidos delivery
    //  numero de cupones pedidos
    //  numero de veces compratido
    //  posible tabla adicional con estos datos  
    $.get("test0", { f0: str_fecha0, ff: str_fechaf }).done(function( data ) { 
        
        cel_act.innerHTML = data.total_cel_act;
        conect_now.innerHTML = data.total_conectados_ahora;
        reservas.innerHTML = data.total_reservas;
        pedidos_del.innerHTML = data.total_pedidos;
        cupons_ped.innerHTML = data.total_cupones;
        shared_lans.innerHTML = data.total_compartidos;

        var arrDia = data.dias;
        var arrCantidad = data.cantidadxdia;

        var arrBgColors = [];
        var arrBorderColors = [];
        var ii;
        for(ii=0; ii<arrDia.length; ii++)
        {
            arrBgColors.push( getBgColorForRealTime(ii) );
            arrBorderColors.push( getBorderColorForRealTime(ii) );
        }

        var linetime = document.getElementById("linetime").getContext('2d');
        var myBarChart = new Chart(linetime, {
        type: 'bar',
        data: {
          labels: arrDia, //dias
          datasets: [{
            label: 'cantidad',
            data: arrCantidad,  //cantidad por dia
            backgroundColor: arrBgColors,
            borderColor: arrBorderColors,
            borderWidth: 1
          }]
        },
        options: {
            scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
            }
        }
        });
    });
    
    //TODO retirar cuando get implementado
    demoLineaTiempo();
}

function onEsteMes(){
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    var currfecha = new Date();
    var fechaf = new Date( currfecha.getFullYear(), currfecha.getMonth(), currfecha.getDate(), 0, 0, 0, 0 );
    var fecha0 = new Date( currfecha.getFullYear(), currfecha.getMonth(), 0, 0, 0, 0, 0  ); 
    
    var str_fecha0 = fecha0.getTime()/1000;
    var str_fechaf = fechaf.getTime()/1000;
    //TODO pide al servidor informacion en un intervalo de tiempo
    //envia: fecha inicio, fecha final. Ambos en valor timestamp
    //recibe: 
    //  num de celulares act.
    //  conectados ahora
    //  reservas
    //  numero de pedidos delivery
    //  numero de cupones pedidos
    //  numero de veces compratido
    //  posible tabla adicional con estos datos  
    $.get("test0", { f0: str_fecha0, ff: str_fechaf }).done(function( data ) { 
        
        cel_act.innerHTML = data.total_cel_act;
        conect_now.innerHTML = data.total_conectados_ahora;
        reservas.innerHTML = data.total_reservas;
        pedidos_del.innerHTML = data.total_pedidos;
        cupons_ped.innerHTML = data.total_cupones;
        shared_lans.innerHTML = data.total_compartidos;

        var arrDia = data.dias;
        var arrCantidad = data.cantidadxdia;

        var arrBgColors = [];
        var arrBorderColors = [];
        var ii;
        for(ii=0; ii<arrDia.length; ii++)
        {
            arrBgColors.push( getBgColorForRealTime(ii) );
            arrBorderColors.push( getBorderColorForRealTime(ii) );
        }

        var linetime = document.getElementById("linetime").getContext('2d');
        var myBarChart = new Chart(linetime, {
        type: 'bar',
        data: {
          labels: arrDia, //dias
          datasets: [{
            label: 'cantidad',
            data: arrCantidad,  //cantidad por dia
            backgroundColor: arrBgColors,
            borderColor: arrBorderColors,
            borderWidth: 1
          }]
        },
        options: {
            scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
            }
        }
        });
    });
    
    //TODO retirar cuando get implementado
    demoLineaTiempo();
    
}

function onUltimos30(){
    
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    var currfecha = new Date();
    var fechaf = new Date( currfecha.getFullYear(), currfecha.getMonth(), currfecha.getDate(), 0, 0, 0, 0 );
    var fecha0 = new Date( fechaf.getTime() - 30*864e5 ); 
    
    var str_fecha0 = fecha0.getTime()/1000;
    var str_fechaf = fechaf.getTime()/1000;
    //TODO pide al servidor informacion en un intervalo de tiempo
    //envia: fecha inicio, fecha final. Ambos en valor timestamp
    //recibe: 
    //  num de celulares act.
    //  conectados ahora
    //  reservas
    //  numero de pedidos delivery
    //  numero de cupones pedidos
    //  numero de veces compratido
    //  posible tabla adicional con estos datos  
    $.get("test0", { f0: str_fecha0, ff: str_fechaf }).done(function( data ) { 
        
        cel_act.innerHTML = data.total_cel_act;
        conect_now.innerHTML = data.total_conectados_ahora;
        reservas.innerHTML = data.total_reservas;
        pedidos_del.innerHTML = data.total_pedidos;
        cupons_ped.innerHTML = data.total_cupones;
        shared_lans.innerHTML = data.total_compartidos;

        var arrDia = data.dias;
        var arrCantidad = data.cantidadxdia;

        var arrBgColors = [];
        var arrBorderColors = [];
        var ii;
        for(ii=0; ii<arrDia.length; ii++)
        {
            arrBgColors.push( getBgColorForRealTime(ii) );
            arrBorderColors.push( getBorderColorForRealTime(ii) );
        }

        var linetime = document.getElementById("linetime").getContext('2d');
        var myBarChart = new Chart(linetime, {
        type: 'bar',
        data: {
          labels: arrDia, //dias
          datasets: [{
            label: 'cantidad',
            data: arrCantidad,  //cantidad por dia
            backgroundColor: arrBgColors,
            borderColor: arrBorderColors,
            borderWidth: 1
          }]
        },
        options: {
            scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
            }
        }
        });
    });
    
    //TODO retirar cuando get implementado
    demoLineaTiempo();
    
}

function onMesPasado(){
    
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    var currfecha = new Date();
    var fechaf = new Date( currfecha.getFullYear(), currfecha.getMonth(), 0, 0, 0, 0, 0 );
    var fecha0 = new Date( fechaf.getTime() - 30*864e5 ); 
    
    var str_fecha0 = fecha0.getTime()/1000;
    var str_fechaf = fechaf.getTime()/1000;
    //TODO pide al servidor informacion en un intervalo de tiempo
    //envia: fecha inicio, fecha final. Ambos en valor timestamp
    //recibe: 
    //  num de celulares act.
    //  conectados ahora
    //  reservas
    //  numero de pedidos delivery
    //  numero de cupones pedidos
    //  numero de veces compratido
    //  array del dia
    //  array de cantidad de descargas por dia
    //  posible tabla adicional con estos datos  
    $.get("test0", { f0: str_fecha0, ff: str_fechaf }).done(function( data ) { 
        
        cel_act.innerHTML = data.total_cel_act;
        conect_now.innerHTML = data.total_conectados_ahora;
        reservas.innerHTML = data.total_reservas;
        pedidos_del.innerHTML = data.total_pedidos;
        cupons_ped.innerHTML = data.total_cupones;
        shared_lans.innerHTML = data.total_compartidos;

        var arrDia = data.dias;
        var arrCantidad = data.cantidadxdia;

        var arrBgColors = [];
        var arrBorderColors = [];
        var ii;
        for(ii=0; ii<arrDia.length; ii++)
        {
            arrBgColors.push( getBgColorForRealTime(ii) );
            arrBorderColors.push( getBorderColorForRealTime(ii) );
        }

        var linetime = document.getElementById("linetime").getContext('2d');
        var myBarChart = new Chart(linetime, {
        type: 'bar',
        data: {
          labels: arrDia, //dias
          datasets: [{
            label: 'cantidad',
            data: arrCantidad,  //cantidad por dia
            backgroundColor: arrBgColors,
            borderColor: arrBorderColors,
            borderWidth: 1
          }]
        },
        options: {
            scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
            }
        }
        });
  
    });
    
    //TODO retirar cuando get implementado
    demoLineaTiempo();
    
}

function demoLineaTiempo(){
    
    var cel_act = document.getElementById("cel_act");
    var conect_now = document.getElementById("conect_now");
    var reservas = document.getElementById("reservas");
    var pedidos_del = document.getElementById("pedidos_del");
    var cupons_ped = document.getElementById("cupons_ped");
    var shared_lans = document.getElementById("shared_lans");
    
    cel_act.innerHTML = "6211";
    conect_now.innerHTML = "123";
    reservas.innerHTML = "47";
    pedidos_del.innerHTML = "688";
    cupons_ped.innerHTML = "35";
    shared_lans.innerHTML = "935";
    
    var arrDia = ["30 jun", "1 jul", "2 jul", "3 jul", "4 jul", "5 jul", "6 jul", "7 jul", "8 jul", "9 jul", "10 jul", "11 jul"];
    var arrCantidad = [12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3];
    
    var arrBgColors = [];
    var arrBorderColors = [];
    var ii;
    for(ii=0; ii<arrDia.length; ii++)
    {
        arrBgColors.push( getBgColorForRealTime(ii) );
        arrBorderColors.push( getBorderColorForRealTime(ii) );
    }
 
    var linetime = document.getElementById("linetime").getContext('2d');
    var myBarChart = new Chart(linetime, {
    type: 'bar',
    data: {
      labels: arrDia, //dias
      datasets: [{
        label: 'cantidad',
        data: arrCantidad,  //cantidad por dia
        backgroundColor: arrBgColors,
        borderColor: arrBorderColors,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
        
}

function getBgColorForRealTime(index)
{
    
   var arrayColors = ['rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',,
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)']; 
    var idx = index % 6;
    return arrayColors[idx];
      
}

function getBorderColorForRealTime(index)
{
    
   var arrayColors = ['rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)']; 
    var idx = index % 6;
    return arrayColors[idx];
      
}

function onPlatosMS()
{
    
    var main = document.getElementById("mas_vendidos");
    main.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "LOS 15 PLATOS MAS SOLICITADOS";
    var table = document.createElement("table");
    table.id = "listaMV";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        main.appendChild(h2);
        main.appendChild(table);

        var nameidtable = "#listaMV";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
     
    demoPBC();
}

function onBebidasMS()
{
    var main = document.getElementById("mas_vendidos");
    main.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "LOS 15 PLATOS MAS SOLICITADOS";
    var table = document.createElement("table");
    table.id = "listaMV";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        main.appendChild(h2);
        main.appendChild(table);

        var nameidtable = "#listaMV";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
    
    demoPBC();
}

function onCoctelesMS()
{
    var main = document.getElementById("mas_vendidos");
    main.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "LOS 15 PLATOS MAS SOLICITADOS";
    var table = document.createElement("table");
    table.id = "listaMV";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        main.appendChild(h2);
        main.appendChild(table);

        var nameidtable = "#listaMV";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
    
    demoPBC();
}

function onMesasAtendidas()
{
    
}

function demoPBC()
{
    
    var main = document.getElementById("mas_vendidos");
    main.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "LOS 15 PLATOS MAS SOLICITADOS";
    var table = document.createElement("table");
    table.id = "listaMV";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    for(i=0; i<10; i++) //para cada fila
    {
        var tr1 = document.createElement('tr'); 
        
        var td10 = document.createElement('td');
        var td11 = document.createElement('td');
        var td12 = document.createElement('td');
        var td13 = document.createElement('td');
        var td14 = document.createElement('td');
        var td15 = document.createElement('td');
        var td16 = document.createElement('td'); 

        var tablex = document.createElement("table");
        tablex.style = "width: 440px;";
        tablex.className = "table-responsive";
        
        var trx = document.createElement("tr");
        var tdx1 = document.createElement("td");
        var tdx2 = document.createElement("td");
        var imgx = document.createElement("img");
        var hx1 = document.createElement("h4");
        var hx2 = document.createElement("h5");
        
        imgx.src = "../dist/img/sample_plato.png";
        imgx.width = "90";
        imgx.height = "70";
        imgx.style = "margin: 15px;";
        hx1.innerHTML = "TITULO DEL PLATO";
        hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";
        
        tdx1.appendChild(imgx);
        tdx2.appendChild(hx1);
        tdx2.appendChild(hx2);
        trx.appendChild(tdx1);
        trx.appendChild(tdx2);
        tablex.appendChild(trx); 
        td10.appendChild(tablex); 

        var h61 = document.createElement("h6");
        h61.innerHTML = "2";
        td11.appendChild(h61);
        
        var h62 = document.createElement("h6");
        h62.innerHTML = "5";
        td12.appendChild(h62);
 
        var h63 = document.createElement("h6");
        h63.innerHTML = "0";
        td13.appendChild(h63);

        var h64 = document.createElement("h6");
        h64.innerHTML = "7";
        td14.appendChild(h64);

        var h65 = document.createElement("h6");
        h65.innerHTML = "Martes 22 20:32";
        td15.appendChild(h65);  

        var h66 = document.createElement("h6");
        h66.innerHTML = "55.56";
        td16.appendChild(h66);

        tr1.appendChild(td10);
        tr1.appendChild(td11);
        tr1.appendChild(td12);
        tr1.appendChild(td13);
        tr1.appendChild(td14);
        tr1.appendChild(td15);
        tr1.appendChild(td16);
        tbody1.appendChild(tr1); 

    }
        
    table.appendChild(tbody1);
    main.appendChild(h2);
    main.appendChild(table);

    var nameidtable = "#listaMV";
    $(nameidtable).DataTable({
      "paging": true
    });
    
}


function getDataSexo()
{
    
    //POST obtiene los datos de genero de cada comensal
    //envia
    //  
    //  
    //recibe
    //  cantidad de masculino, cantidad de femenino, no especificado
    //  
    //  
    $.get("test0", {  }).done(function( data ) { 

        var m = data.cm;
        var f = data.cf;
        var u = data.unknow;
        
        //para dona, la variable
        var config = {
                type: 'pie',
                data: {
                        datasets: [{
                                data: [
                                        randomScalingFactor(),
                                        randomScalingFactor(),
                                        randomScalingFactor()
                                ],
                                backgroundColor: [
                                        window.chartColors.blue,
                                        window.chartColors.green,
                                        window.chartColors.yellow
                                ],
                                label: 'Dataset 1'
                        }],
                        labels: [
                                m,
                                f,
                                u
                        ]
                },
                options: {
                        responsive: true
                }
        };
        
        return config;
        
    });
    
    //para demo, quitar cuando se configure
    var config = {
            type: 'pie',
            data: {
                    datasets: [{
                            data: [
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor()
                            ],
                            backgroundColor: [
                                    window.chartColors.blue,
                                    window.chartColors.green,
                                    window.chartColors.yellow
                            ],
                            label: 'Dataset 1'
                    }],
                    labels: [
                            'Hombre',
                            'Mujer',
                            'Desconocido'
                    ]
            },
            options: {
                    responsive: true
            }
    };

    return config;
    
}

function getDataPaises()
{
    
    //POST obtiene los datos de genero de cada comensal
    //envia
    //  
    //  
    //recibe
    //  cantidad de masculino, cantidad de femenino, no especificado
    //  
    //  
    $.get("test0", {  }).done(function( data ) { 

        var m = data.cm;
        var f = data.cf;
        var u = data.unknow;
        
        //para dona, la variable
        var config = {
                type: 'pie',
                data: {
                        datasets: [{
                                data: [
                                        randomScalingFactor(),
                                        randomScalingFactor(),
                                        randomScalingFactor()
                                ],
                                backgroundColor: [
                                        window.chartColors.blue,
                                        window.chartColors.green,
                                        window.chartColors.yellow
                                ],
                                label: 'Dataset 1'
                        }],
                        labels: [
                                m,
                                f,
                                u
                        ]
                },
                options: {
                        responsive: true
                }
        };
        
        return config;
        
    });
    
    var cantidad = [35,25,15,17,6,8,4,1];
    //para dona, la ,variable
    var config = {
            type: 'pie',
            data: {
                    datasets: [{
                            data: cantidad,
                            backgroundColor: [
                                    window.chartColors.red,
                                    window.chartColors.orange,
                                    window.chartColors.yellow,
                                    window.chartColors.green,
                                    window.chartColors.blue,
                                    window.chartColors.red,
                                    window.chartColors.orange,
                                    window.chartColors.green
                            ],
                            label: 'Dataset 1'
                    }],
                    labels: [
                            'Argentina',
                            'Mexico',
                            'Colombia',
                            'España',
                            'Venezuela',
                            'Chile',
                            'Uruguay',
                            'Otros'
                    ]
            },
            options: {
                    responsive: true
            }
    };

    return config;
    
}

function connectNow()
{
    var main = document.getElementById("zone_timereal");
    main.innerHTML = "";
    
    var i;
    for(i=0; i<4; i++)
    {
        createConectado(main,1,"Daniel Riveras","Ayer","00m:11s","08m:33s","Visto el 33% de todo el catalogo","8 visitas anteriores");
        createConectado(main,0,"+541151038640","Ayer","00m:11s","08m:33s","Visto el 33% de todo el catalogo","8 visitas anteriores");
    }
    
}

function reservas()
{
    var main = document.getElementById("zone_timereal");
    main.innerHTML = "";
    
    createMes(main, "Diciembre");
    createMes(main, "Noviembre");
    createMes(main, "Setiembre");
}

function createMes(main, mesname)
{
    //por mes y por dia de semana
    var divmes = document.createElement("div");
    var h41 = document.createElement("h4");
    h41.innerHTML = "PEDIDOS DE RESERVA DIA X DIA ( " + mesname + " ) ";
    
    var content = document.createElement("div");
    content.style = "max-width: 1100px;";
    var arrDiasSemana = ["LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "DOMINGO"];
    for(i=0; i<7; i++)
    {
        var div22 = document.createElement("div");
        div22.style = "display: inline-block; margin: 8px; background-color: #fbe4b5; padding-left: 15px; padding-right: 15px;";
        
        var nn = document.createElement("h4");
        var dia_semana = document.createElement("h5");        
        
        nn.style = "text-align: center;";
        dia_semana.style = "text-align: center";
        
        nn.innerHTML = "2";
        dia_semana.innerHTML = arrDiasSemana[i];
        
        div22.appendChild(nn);
        div22.appendChild(dia_semana);
        content.appendChild(div22);
    }
    
    divmes.appendChild(h41);
    divmes.appendChild(content);
    main.appendChild(divmes);
}

function createConectado(parent, isnuevo, nombre, inicio, ultimavisita_fecha, duracion_fecha, interes_res, historial_count)
{
    var divuser = document.createElement("div");
    divuser.style = "display: inline-block; width: 300px; background-color: #334; color: #fff; padding: 4px 12px 4px 12px; margin: 8px;";
    
    var h5 = document.createElement("h5");
    if( isnuevo === 1 ){
        h5.style = "background-color: #ee0000; width: 80px; padding: 2px; text-align: center; margin: 0 auto; font-size: 0.91em;";
        h5.innerHTML = "NUEVO";
    }else{
        h5.style = "background-color: #334; color: #334; width: 80px; padding: 2px; text-align: center; margin: 0 auto; font-size: 0.91m;";
        h5.innerHTML = "NFALSE";
    }
    
    var div22 = document.createElement("div");
    var p22 = document.createElement("p");
    p22.innerHTML = nombre;
    p22.style = "font-size: 1.25em; margin: 0; text-align: center;";
    var p23 = document.createElement("p");
    p23.innerHTML = inicio;
    p23.style = "font-size: 0.82em; margin: 0 0 4px 0; text-align: center;";
    div22.appendChild(p22);
    div22.appendChild(p23);
    
    var r1 = document.createElement("div");
    var r1d = document.createElement("div");
    var r1d_icon = document.createElement("i");
    var r1d_p1 = document.createElement("p");
    var r1p = document.createElement("p");
    
    r1.style = "width: 130px; height: 53px; display: inline-block; vertical-align:top; margin: 4px;";
    r1d_icon.className = "fa fa-clock-o";
    r1d_icon.style = "color: #88ff88; margin-right: 4px;";
    r1d_p1.innerHTML = "Ultima visita";
    r1d_p1.style = "display: inline; margin: 2px;";
    r1p.innerHTML = ultimavisita_fecha;
    r1p.style = "margin: 0px; font-size: 0.92em;";
    r1d.style = "color: #88ff88; display: block-inline;";
    r1d.appendChild(r1d_icon);
    r1d.appendChild(r1d_p1);
    r1.appendChild(r1d);
    r1.appendChild(r1p);
    
    var r2 = document.createElement("div");
    var r2d = document.createElement("div");
    var r2d_icon = document.createElement("i");
    var r2d_p1 = document.createElement("p");
    var r2p = document.createElement("p");
    
    r2.style = "width: 130px; height: 53px; display: inline-block; vertical-align:top; margin: 4px;";
    r2d_icon.className = "fa fa-clock-o";
    r2d_icon.style = "color: #88ff88; margin-right: 4px;";
    r2d_p1.innerHTML = "Total de la visita";
    r2d_p1.style = "display: inline; margin: 2px;";
    r2p.innerHTML = duracion_fecha;
    r2p.style = "margin: 0px; font-size: 0.92em;";
    r2d.style = "color: #88ff88; display: block-inline;";
    r2d.appendChild(r2d_icon);
    r2d.appendChild(r2d_p1);
    r2.appendChild(r2d);
    r2.appendChild(r2p);
    
    var r3 = document.createElement("div");
    var r3d = document.createElement("div");
    var r3d_icon = document.createElement("i");
    var r3d_p1 = document.createElement("p");
    var r3p = document.createElement("p");
    
    r3.style = "width: 130px; height: 53px; display: inline-block; vertical-align:top; margin: 4px;";
    r3d_icon.className = "fa fa-heart";
    r3d_icon.style = "color: #88ff88; margin-right: 4px;";
    r3d_p1.innerHTML = "Interes";
    r3d_p1.style = "display: inline; margin: 2px;";
    r3p.innerHTML = interes_res;
    r3p.style = "margin: 0px; font-size: 0.92em;";
    r3d.style = "color: #88ff88; display: block-inline;";
    r3d.appendChild(r3d_icon);
    r3d.appendChild(r3d_p1);
    r3.appendChild(r3d);
    r3.appendChild(r3p);
    
    var r4 = document.createElement("div");
    var r4d = document.createElement("div");
    var r4d_icon = document.createElement("i");
    var r4d_p1 = document.createElement("p");
    var r4p = document.createElement("p");
    
    r4.style = "width: 130px; height: 53px; display: inline-block; vertical-align:top; margin: 4px;";
    r4d_icon.className = "fa fa-clock-o";
    r4d_icon.style = "color: #88ff88; margin-right: 4px;";
    r4d_p1.innerHTML = "Historial";
    r4d_p1.style = "display: inline; margin: 2px;";
    r4p.innerHTML = historial_count;
    r4p.style = "margin: 0px; font-size: 0.92em;";
    r4d.style = "color: #88ff88; display: block-inline;";
    r4d.appendChild(r4d_icon);
    r4d.appendChild(r4d_p1);
    r4.appendChild(r4d);
    r4.appendChild(r4p);
    
    divuser.appendChild(h5);
    divuser.appendChild(div22);
    divuser.appendChild(r1);
    divuser.appendChild(r2);
    divuser.appendChild(r3);
    divuser.appendChild(r4);
    
    parent.appendChild(divuser);
}

function pedidosDelivery()
{ 
    
    var main = document.getElementById("zone_timereal");
    main.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "PLATOS MAS SOLICITADOS DELIVERY";
    var table = document.createElement("table");
    table.id = "listaMV";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        main.appendChild(h2);
        main.appendChild(table);

        var nameidtable = "#listaMV";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
    
    //TODO quitar couando este el post
    demoss2("PLATOS MAS SOLICITADOS DELIVERY");
}

function cuponesPedidos()
{
    var zone_timereal = document.getElementById("zone_timereal");
    zone_timereal.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "CUPONES MAS SOLICITADOS";
    var table = document.createElement("table");
    table.id = "listacuponesmassol";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        zone_timereal.appendChild(h2);
        zone_timereal.appendChild(table);

        var nameidtable = "#listacuponesmassol";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
    
    //TODO quitar couando este el post
    demoss2("CUPONES MAS SOLICITADOS");
}

function compartidoRedes()
{
    var zone_timereal = document.getElementById("zone_timereal"); 
    zone_timereal.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = "PLATOS MAS COMPARTIDOS EN LAS REDES SOCIALES";
    var table = document.createElement("table");
    table.id = "listamassharedfb";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");

    //TODDO completar con codigo pedir al servidor los platos con mas likes
    //  envia: segun tipo de rol
    //  recibe [{img, nombre, descr}, megusta, comentarios, compartidos, delivery, tiempo , pedidos] 
    //
    //
    $.get("test0", {  }).done(function( data ) { 
        for(i=0; i<data.length; i++) { //para cada fila
            var tr1 = document.createElement('tr'); 

            var td10 = document.createElement('td');
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td'); 

            var tablex = document.createElement("table");
            tablex.style = "width: 440px;";
            tablex.className = "table-responsive";

            var trx = document.createElement("tr");
            var tdx1 = document.createElement("td");
            var tdx2 = document.createElement("td");
            var imgx = document.createElement("img");
            var hx1 = document.createElement("h4");
            var hx2 = document.createElement("h5");

            imgx.src = "../dist/img/sample_plato.png";
            imgx.width = "90";
            imgx.height = "70";
            imgx.style = "margin: 15px;";
            hx1.innerHTML = "TITULO DEL PLATO";
            hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

            tdx1.appendChild(imgx);
            tdx2.appendChild(hx1);
            tdx2.appendChild(hx2);
            trx.appendChild(tdx1);
            trx.appendChild(tdx2);
            tablex.appendChild(trx); 
            td10.appendChild(tablex); 

            var h61 = document.createElement("h6");
            h61.innerHTML = "2";
            td11.appendChild(h61);

            var h62 = document.createElement("h6");
            h62.innerHTML = "5";
            td12.appendChild(h62);

            var h63 = document.createElement("h6");
            h63.innerHTML = "0";
            td13.appendChild(h63);

            var h64 = document.createElement("h6");
            h64.innerHTML = "7";
            td14.appendChild(h64);

            var h65 = document.createElement("h6");
            h65.innerHTML = "Martes 22 20:32";
            td15.appendChild(h65);  

            var h66 = document.createElement("h6");
            h66.innerHTML = "55.56";
            td16.appendChild(h66);

            tr1.appendChild(td10);
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tbody1.appendChild(tr1); 
        }

        table.appendChild(tbody1);
        zone_timereal.appendChild(h2);
        zone_timereal.appendChild(table);

        var nameidtable = "#listamassharedfb";
        $(nameidtable).DataTable({
          "paging": true
        });
        
    });
    
    //TODO quitar couando este el post
    demoss2("PLATOS MAS COMPARTIDOS EN LAS REDES SOCIALES");
}

function demoss2(titulo)
{
      var zone_timereal = document.getElementById("zone_timereal"); 
    zone_timereal.innerHTML = "";
    
    var h2 = document.createElement("h2");
    h2.innerHTML = titulo;
    var table = document.createElement("table");
    table.id = "listamassharedfb";
    table.className = "table-striped table-responsive";
    table.style = "margin-right: auto; margin-left: auto; text-align: center;";

    var thead1 = table.createTHead();  
    var rowHead = thead1.insertRow(0); 
    var cell00 = document.createElement("th");
    var cell0 = document.createElement("th");
    var cell1 = document.createElement("th");
    var cell2 = document.createElement("th");
    var cell3 = document.createElement("th");
    var cell4 = document.createElement("th"); 
    var cell5 = document.createElement("th");  
     
    var ht0 = document.createElement("h6");
    var ht1 = document.createElement("h6");
    var ht2 = document.createElement("h6");
    var ht3 = document.createElement("h6");
    var ht4 = document.createElement("h6"); 
    var ht5 = document.createElement("h6"); 
     
    ht0.style = "text-align: center;";
    ht1.style = "text-align: center;";
    ht2.style = "text-align: center;";
    ht3.style = "text-align: center;";
    ht4.style = "text-align: center;";
    ht5.style = "text-align: center;";
    
    ht0.innerHTML = "ME GUSTA";
    ht1.innerHTML = "COMENTARIOS";
    ht2.innerHTML = "COMPARTIDOS";
    ht3.innerHTML = "DELIVERY";
    ht4.innerHTML = "TIEMPO";
    ht5.innerHTML = "PEDIDOS";
     
    cell0.appendChild(ht0);
    cell1.appendChild(ht1);
    cell2.appendChild(ht2);
    cell3.appendChild(ht3);
    cell4.appendChild(ht4);
    cell5.appendChild(ht5);

    rowHead.appendChild(cell00);
    rowHead.appendChild(cell0);
    rowHead.appendChild(cell1);
    rowHead.appendChild(cell2);
    rowHead.appendChild(cell3);
    rowHead.appendChild(cell4);
    rowHead.appendChild(cell5); 

    var tbody1 = document.createElement("tbody");
    for(i=0; i<10; i++) { //para cada fila
        var tr1 = document.createElement('tr'); 

        var td10 = document.createElement('td');
        var td11 = document.createElement('td');
        var td12 = document.createElement('td');
        var td13 = document.createElement('td');
        var td14 = document.createElement('td');
        var td15 = document.createElement('td');
        var td16 = document.createElement('td'); 

        var tablex = document.createElement("table");
        tablex.style = "width: 440px;";
        tablex.className = "table-responsive";

        var trx = document.createElement("tr");
        var tdx1 = document.createElement("td");
        var tdx2 = document.createElement("td");
        var imgx = document.createElement("img");
        var hx1 = document.createElement("h4");
        var hx2 = document.createElement("h5");

        imgx.src = "../dist/img/sample_plato.png";
        imgx.width = "90";
        imgx.height = "70";
        imgx.style = "margin: 15px;";
        hx1.innerHTML = "TITULO DEL PLATO";
        hx2.innerHTML = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....";

        tdx1.appendChild(imgx);
        tdx2.appendChild(hx1);
        tdx2.appendChild(hx2);
        trx.appendChild(tdx1);
        trx.appendChild(tdx2);
        tablex.appendChild(trx); 
        td10.appendChild(tablex); 

        var h61 = document.createElement("h6");
        h61.innerHTML = "2";
        td11.appendChild(h61);

        var h62 = document.createElement("h6");
        h62.innerHTML = "5";
        td12.appendChild(h62);

        var h63 = document.createElement("h6");
        h63.innerHTML = "0";
        td13.appendChild(h63);

        var h64 = document.createElement("h6");
        h64.innerHTML = "7";
        td14.appendChild(h64);

        var h65 = document.createElement("h6");
        h65.innerHTML = "Martes 22 20:32";
        td15.appendChild(h65);  

        var h66 = document.createElement("h6");
        h66.innerHTML = "55.56";
        td16.appendChild(h66);

        tr1.appendChild(td10);
        tr1.appendChild(td11);
        tr1.appendChild(td12);
        tr1.appendChild(td13);
        tr1.appendChild(td14);
        tr1.appendChild(td15);
        tr1.appendChild(td16);
        tbody1.appendChild(tr1); 
    }

    table.appendChild(tbody1);
    zone_timereal.appendChild(h2);
    zone_timereal.appendChild(table);

    var nameidtable = "#listamassharedfb";
    $(nameidtable).DataTable({
      "paging": true
    });
    
}

 
</script>
 

<!-- Chart code -->
<script>
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create map instance
    var chart = am4core.create("chartdiv", am4maps.MapChart);

    var title = chart.titles.create();
    title.text = "[bold font-size: 20]Paises donde esta tu app[/]\nsource: Gapminder";
    title.textAlign = "middle";

    var latlong = {
      "AD": {"latitude":42.5, "longitude":1.5},
      "AE": {"latitude":24, "longitude":54},
      "AF": {"latitude":33, "longitude":65},
      "AG": {"latitude":17.05, "longitude":-61.8},
      "AI": {"latitude":18.25, "longitude":-63.1667},
      "AL": {"latitude":41, "longitude":20},
      "AM": {"latitude":40, "longitude":45},
      "AN": {"latitude":12.25, "longitude":-68.75},
      "AO": {"latitude":-12.5, "longitude":18.5},
      "AP": {"latitude":35, "longitude":105},
      "AQ": {"latitude":-90, "longitude":0},
      "AR": {"latitude":-34, "longitude":-64},
      "AS": {"latitude":-14.3333, "longitude":-170},
      "AT": {"latitude":47.3333, "longitude":13.3333},
      "AU": {"latitude":-27, "longitude":133},
      "AW": {"latitude":12.5, "longitude":-69.9667},
      "AZ": {"latitude":40.5, "longitude":47.5},
      "BA": {"latitude":44, "longitude":18},
      "BB": {"latitude":13.1667, "longitude":-59.5333},
      "BD": {"latitude":24, "longitude":90},
      "BE": {"latitude":50.8333, "longitude":4},
      "BF": {"latitude":13, "longitude":-2},
      "BG": {"latitude":43, "longitude":25},
      "BH": {"latitude":26, "longitude":50.55},
      "BI": {"latitude":-3.5, "longitude":30},
      "BJ": {"latitude":9.5, "longitude":2.25},
      "BM": {"latitude":32.3333, "longitude":-64.75},
      "BN": {"latitude":4.5, "longitude":114.6667},
      "BO": {"latitude":-17, "longitude":-65},
      "BR": {"latitude":-10, "longitude":-55},
      "BS": {"latitude":24.25, "longitude":-76},
      "BT": {"latitude":27.5, "longitude":90.5},
      "BV": {"latitude":-54.4333, "longitude":3.4},
      "BW": {"latitude":-22, "longitude":24},
      "BY": {"latitude":53, "longitude":28},
      "BZ": {"latitude":17.25, "longitude":-88.75},
      "CA": {"latitude":54, "longitude":-100},
      "CC": {"latitude":-12.5, "longitude":96.8333},
      "CD": {"latitude":0, "longitude":25},
      "CF": {"latitude":7, "longitude":21},
      "CG": {"latitude":-1, "longitude":15},
      "CH": {"latitude":47, "longitude":8},
      "CI": {"latitude":8, "longitude":-5},
      "CK": {"latitude":-21.2333, "longitude":-159.7667},
      "CL": {"latitude":-30, "longitude":-71},
      "CM": {"latitude":6, "longitude":12},
      "CN": {"latitude":35, "longitude":105},
      "CO": {"latitude":4, "longitude":-72},
      "CR": {"latitude":10, "longitude":-84},
      "CU": {"latitude":21.5, "longitude":-80},
      "CV": {"latitude":16, "longitude":-24},
      "CX": {"latitude":-10.5, "longitude":105.6667},
      "CY": {"latitude":35, "longitude":33},
      "CZ": {"latitude":49.75, "longitude":15.5},
      "DE": {"latitude":51, "longitude":9},
      "DJ": {"latitude":11.5, "longitude":43},
      "DK": {"latitude":56, "longitude":10},
      "DM": {"latitude":15.4167, "longitude":-61.3333},
      "DO": {"latitude":19, "longitude":-70.6667},
      "DZ": {"latitude":28, "longitude":3},
      "EC": {"latitude":-2, "longitude":-77.5},
      "EE": {"latitude":59, "longitude":26},
      "EG": {"latitude":27, "longitude":30},
      "EH": {"latitude":24.5, "longitude":-13},
      "ER": {"latitude":15, "longitude":39},
      "ES": {"latitude":40, "longitude":-4},
      "ET": {"latitude":8, "longitude":38},
      "EU": {"latitude":47, "longitude":8},
      "FI": {"latitude":62, "longitude":26},
      "FJ": {"latitude":-18, "longitude":175},
      "FK": {"latitude":-51.75, "longitude":-59},
      "FM": {"latitude":6.9167, "longitude":158.25},
      "FO": {"latitude":62, "longitude":-7},
      "FR": {"latitude":46, "longitude":2},
      "GA": {"latitude":-1, "longitude":11.75},
      "GB": {"latitude":54, "longitude":-2},
      "GD": {"latitude":12.1167, "longitude":-61.6667},
      "GE": {"latitude":42, "longitude":43.5},
      "GF": {"latitude":4, "longitude":-53},
      "GH": {"latitude":8, "longitude":-2},
      "GI": {"latitude":36.1833, "longitude":-5.3667},
      "GL": {"latitude":72, "longitude":-40},
      "GM": {"latitude":13.4667, "longitude":-16.5667},
      "GN": {"latitude":11, "longitude":-10},
      "GP": {"latitude":16.25, "longitude":-61.5833},
      "GQ": {"latitude":2, "longitude":10},
      "GR": {"latitude":39, "longitude":22},
      "GS": {"latitude":-54.5, "longitude":-37},
      "GT": {"latitude":15.5, "longitude":-90.25},
      "GU": {"latitude":13.4667, "longitude":144.7833},
      "GW": {"latitude":12, "longitude":-15},
      "GY": {"latitude":5, "longitude":-59},
      "HK": {"latitude":22.25, "longitude":114.1667},
      "HM": {"latitude":-53.1, "longitude":72.5167},
      "HN": {"latitude":15, "longitude":-86.5},
      "HR": {"latitude":45.1667, "longitude":15.5},
      "HT": {"latitude":19, "longitude":-72.4167},
      "HU": {"latitude":47, "longitude":20},
      "ID": {"latitude":-5, "longitude":120},
      "IE": {"latitude":53, "longitude":-8},
      "IL": {"latitude":31.5, "longitude":34.75},
      "IN": {"latitude":20, "longitude":77},
      "IO": {"latitude":-6, "longitude":71.5},
      "IQ": {"latitude":33, "longitude":44},
      "IR": {"latitude":32, "longitude":53},
      "IS": {"latitude":65, "longitude":-18},
      "IT": {"latitude":42.8333, "longitude":12.8333},
      "JM": {"latitude":18.25, "longitude":-77.5},
      "JO": {"latitude":31, "longitude":36},
      "JP": {"latitude":36, "longitude":138},
      "KE": {"latitude":1, "longitude":38},
      "KG": {"latitude":41, "longitude":75},
      "KH": {"latitude":13, "longitude":105},
      "KI": {"latitude":1.4167, "longitude":173},
      "KM": {"latitude":-12.1667, "longitude":44.25},
      "KN": {"latitude":17.3333, "longitude":-62.75},
      "KP": {"latitude":40, "longitude":127},
      "KR": {"latitude":37, "longitude":127.5},
      "KW": {"latitude":29.3375, "longitude":47.6581},
      "KY": {"latitude":19.5, "longitude":-80.5},
      "KZ": {"latitude":48, "longitude":68},
      "LA": {"latitude":18, "longitude":105},
      "LB": {"latitude":33.8333, "longitude":35.8333},
      "LC": {"latitude":13.8833, "longitude":-61.1333},
      "LI": {"latitude":47.1667, "longitude":9.5333},
      "LK": {"latitude":7, "longitude":81},
      "LR": {"latitude":6.5, "longitude":-9.5},
      "LS": {"latitude":-29.5, "longitude":28.5},
      "LT": {"latitude":55, "longitude":24},
      "LU": {"latitude":49.75, "longitude":6},
      "LV": {"latitude":57, "longitude":25},
      "LY": {"latitude":25, "longitude":17},
      "MA": {"latitude":32, "longitude":-5},
      "MC": {"latitude":43.7333, "longitude":7.4},
      "MD": {"latitude":47, "longitude":29},
      "ME": {"latitude":42.5, "longitude":19.4},
      "MG": {"latitude":-20, "longitude":47},
      "MH": {"latitude":9, "longitude":168},
      "MK": {"latitude":41.8333, "longitude":22},
      "ML": {"latitude":17, "longitude":-4},
      "MM": {"latitude":22, "longitude":98},
      "MN": {"latitude":46, "longitude":105},
      "MO": {"latitude":22.1667, "longitude":113.55},
      "MP": {"latitude":15.2, "longitude":145.75},
      "MQ": {"latitude":14.6667, "longitude":-61},
      "MR": {"latitude":20, "longitude":-12},
      "MS": {"latitude":16.75, "longitude":-62.2},
      "MT": {"latitude":35.8333, "longitude":14.5833},
      "MU": {"latitude":-20.2833, "longitude":57.55},
      "MV": {"latitude":3.25, "longitude":73},
      "MW": {"latitude":-13.5, "longitude":34},
      "MX": {"latitude":23, "longitude":-102},
      "MY": {"latitude":2.5, "longitude":112.5},
      "MZ": {"latitude":-18.25, "longitude":35},
      "NA": {"latitude":-22, "longitude":17},
      "NC": {"latitude":-21.5, "longitude":165.5},
      "NE": {"latitude":16, "longitude":8},
      "NF": {"latitude":-29.0333, "longitude":167.95},
      "NG": {"latitude":10, "longitude":8},
      "NI": {"latitude":13, "longitude":-85},
      "NL": {"latitude":52.5, "longitude":5.75},
      "NO": {"latitude":62, "longitude":10},
      "NP": {"latitude":28, "longitude":84},
      "NR": {"latitude":-0.5333, "longitude":166.9167},
      "NU": {"latitude":-19.0333, "longitude":-169.8667},
      "NZ": {"latitude":-41, "longitude":174},
      "OM": {"latitude":21, "longitude":57},
      "PA": {"latitude":9, "longitude":-80},
      "PE": {"latitude":-10, "longitude":-76},
      "PF": {"latitude":-15, "longitude":-140},
      "PG": {"latitude":-6, "longitude":147},
      "PH": {"latitude":13, "longitude":122},
      "PK": {"latitude":30, "longitude":70},
      "PL": {"latitude":52, "longitude":20},
      "PM": {"latitude":46.8333, "longitude":-56.3333},
      "PR": {"latitude":18.25, "longitude":-66.5},
      "PS": {"latitude":32, "longitude":35.25},
      "PT": {"latitude":39.5, "longitude":-8},
      "PW": {"latitude":7.5, "longitude":134.5},
      "PY": {"latitude":-23, "longitude":-58},
      "QA": {"latitude":25.5, "longitude":51.25},
      "RE": {"latitude":-21.1, "longitude":55.6},
      "RO": {"latitude":46, "longitude":25},
      "RS": {"latitude":44, "longitude":21},
      "RU": {"latitude":60, "longitude":100},
      "RW": {"latitude":-2, "longitude":30},
      "SA": {"latitude":25, "longitude":45},
      "SB": {"latitude":-8, "longitude":159},
      "SC": {"latitude":-4.5833, "longitude":55.6667},
      "SD": {"latitude":15, "longitude":30},
      "SE": {"latitude":62, "longitude":15},
      "SG": {"latitude":1.3667, "longitude":103.8},
      "SH": {"latitude":-15.9333, "longitude":-5.7},
      "SI": {"latitude":46, "longitude":15},
      "SJ": {"latitude":78, "longitude":20},
      "SK": {"latitude":48.6667, "longitude":19.5},
      "SL": {"latitude":8.5, "longitude":-11.5},
      "SM": {"latitude":43.7667, "longitude":12.4167},
      "SN": {"latitude":14, "longitude":-14},
      "SO": {"latitude":10, "longitude":49},
      "SR": {"latitude":4, "longitude":-56},
      "ST": {"latitude":1, "longitude":7},
      "SV": {"latitude":13.8333, "longitude":-88.9167},
      "SY": {"latitude":35, "longitude":38},
      "SZ": {"latitude":-26.5, "longitude":31.5},
      "TC": {"latitude":21.75, "longitude":-71.5833},
      "TD": {"latitude":15, "longitude":19},
      "TF": {"latitude":-43, "longitude":67},
      "TG": {"latitude":8, "longitude":1.1667},
      "TH": {"latitude":15, "longitude":100},
      "TJ": {"latitude":39, "longitude":71},
      "TK": {"latitude":-9, "longitude":-172},
      "TM": {"latitude":40, "longitude":60},
      "TN": {"latitude":34, "longitude":9},
      "TO": {"latitude":-20, "longitude":-175},
      "TR": {"latitude":39, "longitude":35},
      "TT": {"latitude":11, "longitude":-61},
      "TV": {"latitude":-8, "longitude":178},
      "TW": {"latitude":23.5, "longitude":121},
      "TZ": {"latitude":-6, "longitude":35},
      "UA": {"latitude":49, "longitude":32},
      "UG": {"latitude":1, "longitude":32},
      "UM": {"latitude":19.2833, "longitude":166.6},
      "US": {"latitude":38, "longitude":-97},
      "UY": {"latitude":-33, "longitude":-56},
      "UZ": {"latitude":41, "longitude":64},
      "VA": {"latitude":41.9, "longitude":12.45},
      "VC": {"latitude":13.25, "longitude":-61.2},
      "VE": {"latitude":8, "longitude":-66},
      "VG": {"latitude":18.5, "longitude":-64.5},
      "VI": {"latitude":18.3333, "longitude":-64.8333},
      "VN": {"latitude":16, "longitude":106},
      "VU": {"latitude":-16, "longitude":167},
      "WF": {"latitude":-13.3, "longitude":-176.2},
      "WS": {"latitude":-13.5833, "longitude":-172.3333},
      "YE": {"latitude":15, "longitude":48},
      "YT": {"latitude":-12.8333, "longitude":45.1667},
      "ZA": {"latitude":-29, "longitude":24},
      "ZM": {"latitude":-15, "longitude":30},
      "ZW": {"latitude":-20, "longitude":30}
    };

    var mapData = [
      { "id":"AF", "name":"Afghanistan", "value":32358260, "color": chart.colors.getIndex(0) },
      { "id":"AL", "name":"Albania", "value":3215988, "color":chart.colors.getIndex(1) },
      { "id":"DZ", "name":"Algeria", "value":35980193, "color":chart.colors.getIndex(2) },
      { "id":"AO", "name":"Angola", "value":19618432, "color":chart.colors.getIndex(2) },
      { "id":"AR", "name":"Argentina", "value":40764561, "color":chart.colors.getIndex(3) },
      { "id":"AM", "name":"Armenia", "value":3100236, "color":chart.colors.getIndex(1) },
      { "id":"AU", "name":"Australia", "value":22605732, "color":"#8aabb0" },
      { "id":"AT", "name":"Austria", "value":8413429, "color":chart.colors.getIndex(1) },
      { "id":"AZ", "name":"Azerbaijan", "value":9306023, "color":chart.colors.getIndex(1) },
      { "id":"BH", "name":"Bahrain", "value":1323535, "color": chart.colors.getIndex(0) },
      { "id":"BD", "name":"Bangladesh", "value":150493658, "color": chart.colors.getIndex(0) },
      { "id":"BY", "name":"Belarus", "value":9559441, "color":chart.colors.getIndex(1) },
      { "id":"BE", "name":"Belgium", "value":10754056, "color":chart.colors.getIndex(1) },
      { "id":"BJ", "name":"Benin", "value":9099922, "color":chart.colors.getIndex(2) },
      { "id":"BT", "name":"Bhutan", "value":738267, "color": chart.colors.getIndex(0) },
      { "id":"BO", "name":"Bolivia", "value":10088108, "color":chart.colors.getIndex(3) },
      { "id":"BA", "name":"Bosnia and Herzegovina", "value":3752228, "color":chart.colors.getIndex(1) },
      { "id":"BW", "name":"Botswana", "value":2030738, "color":chart.colors.getIndex(2) },
      { "id":"BR", "name":"Brazil", "value":196655014, "color":chart.colors.getIndex(3) },
      { "id":"BN", "name":"Brunei", "value":405938, "color": chart.colors.getIndex(0) },
      { "id":"BG", "name":"Bulgaria", "value":7446135, "color":chart.colors.getIndex(1) },
      { "id":"BF", "name":"Burkina Faso", "value":16967845, "color":chart.colors.getIndex(2) },
      { "id":"BI", "name":"Burundi", "value":8575172, "color":chart.colors.getIndex(2) },
      { "id":"KH", "name":"Cambodia", "value":14305183, "color": chart.colors.getIndex(0) },
      { "id":"CM", "name":"Cameroon", "value":20030362, "color":chart.colors.getIndex(2) },
      { "id":"CA", "name":"Canada", "value":34349561, "color":chart.colors.getIndex(4) },
      { "id":"CV", "name":"Cape Verde", "value":500585, "color":chart.colors.getIndex(2) },
      { "id":"CF", "name":"Central African Rep.", "value":4486837, "color":chart.colors.getIndex(2) },
      { "id":"TD", "name":"Chad", "value":11525496, "color":chart.colors.getIndex(2) },
      { "id":"CL", "name":"Chile", "value":17269525, "color":chart.colors.getIndex(3) },
      { "id":"CN", "name":"China", "value":1347565324, "color": chart.colors.getIndex(0) },
      { "id":"CO", "name":"Colombia", "value":46927125, "color":chart.colors.getIndex(3) },
      { "id":"KM", "name":"Comoros", "value":753943, "color":chart.colors.getIndex(2) },
      { "id":"CD", "name":"Congo, Dem. Rep.", "value":67757577, "color":chart.colors.getIndex(2) },
      { "id":"CG", "name":"Congo, Rep.", "value":4139748, "color":chart.colors.getIndex(2) },
      { "id":"CR", "name":"Costa Rica", "value":4726575, "color":chart.colors.getIndex(4) },
      { "id":"CI", "name":"Cote d'Ivoire", "value":20152894, "color":chart.colors.getIndex(2) },
      { "id":"HR", "name":"Croatia", "value":4395560, "color":chart.colors.getIndex(1) },
      { "id":"CU", "name":"Cuba", "value":11253665, "color":chart.colors.getIndex(4) },
      { "id":"CY", "name":"Cyprus", "value":1116564, "color":chart.colors.getIndex(1) },
      { "id":"CZ", "name":"Czech Rep.", "value":10534293, "color":chart.colors.getIndex(1) },
      { "id":"DK", "name":"Denmark", "value":5572594, "color":chart.colors.getIndex(1) },
      { "id":"DJ", "name":"Djibouti", "value":905564, "color":chart.colors.getIndex(2) },
      { "id":"DO", "name":"Dominican Rep.", "value":10056181, "color":chart.colors.getIndex(4) },
      { "id":"EC", "name":"Ecuador", "value":14666055, "color":chart.colors.getIndex(3) },
      { "id":"EG", "name":"Egypt", "value":82536770, "color":chart.colors.getIndex(2) },
      { "id":"SV", "name":"El Salvador", "value":6227491, "color":chart.colors.getIndex(4) },
      { "id":"GQ", "name":"Equatorial Guinea", "value":720213, "color":chart.colors.getIndex(2) },
      { "id":"ER", "name":"Eritrea", "value":5415280, "color":chart.colors.getIndex(2) },
      { "id":"EE", "name":"Estonia", "value":1340537, "color":chart.colors.getIndex(1) },
      { "id":"ET", "name":"Ethiopia", "value":84734262, "color":chart.colors.getIndex(2) },
      { "id":"FJ", "name":"Fiji", "value":868406, "color":"#8aabb0" },
      { "id":"FI", "name":"Finland", "value":5384770, "color":chart.colors.getIndex(1) },
      { "id":"FR", "name":"France", "value":63125894, "color":chart.colors.getIndex(1) },
      { "id":"GA", "name":"Gabon", "value":1534262, "color":chart.colors.getIndex(2) },
      { "id":"GM", "name":"Gambia", "value":1776103, "color":chart.colors.getIndex(2) },
      { "id":"GE", "name":"Georgia", "value":4329026, "color":chart.colors.getIndex(1) },
      { "id":"DE", "name":"Germany", "value":82162512, "color":chart.colors.getIndex(1) },
      { "id":"GH", "name":"Ghana", "value":24965816, "color":chart.colors.getIndex(2) },
      { "id":"GR", "name":"Greece", "value":11390031, "color":chart.colors.getIndex(1) },
      { "id":"GT", "name":"Guatemala", "value":14757316, "color":chart.colors.getIndex(4) },
      { "id":"GN", "name":"Guinea", "value":10221808, "color":chart.colors.getIndex(2) },
      { "id":"GW", "name":"Guinea-Bissau", "value":1547061, "color":chart.colors.getIndex(2) },
      { "id":"GY", "name":"Guyana", "value":756040, "color":chart.colors.getIndex(3) },
      { "id":"HT", "name":"Haiti", "value":10123787, "color":chart.colors.getIndex(4) },
      { "id":"HN", "name":"Honduras", "value":7754687, "color":chart.colors.getIndex(4) },
      { "id":"HK", "name":"Hong Kong, China", "value":7122187, "color": chart.colors.getIndex(0) },
      { "id":"HU", "name":"Hungary", "value":9966116, "color":chart.colors.getIndex(1) },
      { "id":"IS", "name":"Iceland", "value":324366, "color":chart.colors.getIndex(1) },
      { "id":"IN", "name":"India", "value":1241491960, "color": chart.colors.getIndex(0) },
      { "id":"ID", "name":"Indonesia", "value":242325638, "color": chart.colors.getIndex(0) },
      { "id":"IR", "name":"Iran", "value":74798599, "color": chart.colors.getIndex(0) },
      { "id":"IQ", "name":"Iraq", "value":32664942, "color": chart.colors.getIndex(0) },
      { "id":"IE", "name":"Ireland", "value":4525802, "color":chart.colors.getIndex(1) },
      { "id":"IL", "name":"Israel", "value":7562194, "color": chart.colors.getIndex(0) },
      { "id":"IT", "name":"Italy", "value":60788694, "color":chart.colors.getIndex(1) },
      { "id":"JM", "name":"Jamaica", "value":2751273, "color":chart.colors.getIndex(4) },
      { "id":"JP", "name":"Japan", "value":126497241, "color": chart.colors.getIndex(0) },
      { "id":"JO", "name":"Jordan", "value":6330169, "color": chart.colors.getIndex(0) },
      { "id":"KZ", "name":"Kazakhstan", "value":16206750, "color": chart.colors.getIndex(0) },
      { "id":"KE", "name":"Kenya", "value":41609728, "color":chart.colors.getIndex(2) },
      { "id":"KP", "name":"Korea, Dem. Rep.", "value":24451285, "color": chart.colors.getIndex(0) },
      { "id":"KR", "name":"Korea, Rep.", "value":48391343, "color": chart.colors.getIndex(0) },
      { "id":"KW", "name":"Kuwait", "value":2818042, "color": chart.colors.getIndex(0) },
      { "id":"KG", "name":"Kyrgyzstan", "value":5392580, "color": chart.colors.getIndex(0) },
      { "id":"LA", "name":"Laos", "value":6288037, "color": chart.colors.getIndex(0) },
      { "id":"LV", "name":"Latvia", "value":2243142, "color":chart.colors.getIndex(1) },
      { "id":"LB", "name":"Lebanon", "value":4259405, "color": chart.colors.getIndex(0) },
      { "id":"LS", "name":"Lesotho", "value":2193843, "color":chart.colors.getIndex(2) },
      { "id":"LR", "name":"Liberia", "value":4128572, "color":chart.colors.getIndex(2) },
      { "id":"LY", "name":"Libya", "value":6422772, "color":chart.colors.getIndex(2) },
      { "id":"LT", "name":"Lithuania", "value":3307481, "color":chart.colors.getIndex(1) },
      { "id":"LU", "name":"Luxembourg", "value":515941, "color":chart.colors.getIndex(1) },
      { "id":"MK", "name":"Macedonia, FYR", "value":2063893, "color":chart.colors.getIndex(1) },
      { "id":"MG", "name":"Madagascar", "value":21315135, "color":chart.colors.getIndex(2) },
      { "id":"MW", "name":"Malawi", "value":15380888, "color":chart.colors.getIndex(2) },
      { "id":"MY", "name":"Malaysia", "value":28859154, "color": chart.colors.getIndex(0) },
      { "id":"ML", "name":"Mali", "value":15839538, "color":chart.colors.getIndex(2) },
      { "id":"MR", "name":"Mauritania", "value":3541540, "color":chart.colors.getIndex(2) },
      { "id":"MU", "name":"Mauritius", "value":1306593, "color":chart.colors.getIndex(2) },
      { "id":"MX", "name":"Mexico", "value":114793341, "color":chart.colors.getIndex(4) },
      { "id":"MD", "name":"Moldova", "value":3544864, "color":chart.colors.getIndex(1) },
      { "id":"MN", "name":"Mongolia", "value":2800114, "color": chart.colors.getIndex(0) },
      { "id":"ME", "name":"Montenegro", "value":632261, "color":chart.colors.getIndex(1) },
      { "id":"MA", "name":"Morocco", "value":32272974, "color":chart.colors.getIndex(2) },
      { "id":"MZ", "name":"Mozambique", "value":23929708, "color":chart.colors.getIndex(2) },
      { "id":"MM", "name":"Myanmar", "value":48336763, "color": chart.colors.getIndex(0) },
      { "id":"NA", "name":"Namibia", "value":2324004, "color":chart.colors.getIndex(2) },
      { "id":"NP", "name":"Nepal", "value":30485798, "color": chart.colors.getIndex(0) },
      { "id":"NL", "name":"Netherlands", "value":16664746, "color":chart.colors.getIndex(1) },
      { "id":"NZ", "name":"New Zealand", "value":4414509, "color":"#8aabb0" },
      { "id":"NI", "name":"Nicaragua", "value":5869859, "color":chart.colors.getIndex(4) },
      { "id":"NE", "name":"Niger", "value":16068994, "color":chart.colors.getIndex(2) },
      { "id":"NG", "name":"Nigeria", "value":162470737, "color":chart.colors.getIndex(2) },
      { "id":"NO", "name":"Norway", "value":4924848, "color":chart.colors.getIndex(1) },
      { "id":"OM", "name":"Oman", "value":2846145, "color": chart.colors.getIndex(0) },
      { "id":"PK", "name":"Pakistan", "value":176745364, "color": chart.colors.getIndex(0) },
      { "id":"PA", "name":"Panama", "value":3571185, "color":chart.colors.getIndex(4) },
      { "id":"PG", "name":"Papua New Guinea", "value":7013829, "color":"#8aabb0" },
      { "id":"PY", "name":"Paraguay", "value":6568290, "color":chart.colors.getIndex(3) },
      { "id":"PE", "name":"Peru", "value":29399817, "color":chart.colors.getIndex(3) },
      { "id":"PH", "name":"Philippines", "value":94852030, "color": chart.colors.getIndex(0) },
      { "id":"PL", "name":"Poland", "value":38298949, "color":chart.colors.getIndex(1) },
      { "id":"PT", "name":"Portugal", "value":10689663, "color":chart.colors.getIndex(1) },
      { "id":"PR", "name":"Puerto Rico", "value":3745526, "color":chart.colors.getIndex(4) },
      { "id":"QA", "name":"Qatar", "value":1870041, "color": chart.colors.getIndex(0) },
      { "id":"RO", "name":"Romania", "value":21436495, "color":chart.colors.getIndex(1) },
      { "id":"RU", "name":"Russia", "value":142835555, "color":chart.colors.getIndex(1) },
      { "id":"RW", "name":"Rwanda", "value":10942950, "color":chart.colors.getIndex(2) },
      { "id":"SA", "name":"Saudi Arabia", "value":28082541, "color": chart.colors.getIndex(0) },
      { "id":"SN", "name":"Senegal", "value":12767556, "color":chart.colors.getIndex(2) },
      { "id":"RS", "name":"Serbia", "value":9853969, "color":chart.colors.getIndex(1) },
      { "id":"SL", "name":"Sierra Leone", "value":5997486, "color":chart.colors.getIndex(2) },
      { "id":"SG", "name":"Singapore", "value":5187933, "color": chart.colors.getIndex(0) },
      { "id":"SK", "name":"Slovak Republic", "value":5471502, "color":chart.colors.getIndex(1) },
      { "id":"SI", "name":"Slovenia", "value":2035012, "color":chart.colors.getIndex(1) },
      { "id":"SB", "name":"Solomon Islands", "value":552267, "color":"#8aabb0" },
      { "id":"SO", "name":"Somalia", "value":9556873, "color":chart.colors.getIndex(2) },
      { "id":"ZA", "name":"South Africa", "value":50459978, "color":chart.colors.getIndex(2) },
      { "id":"ES", "name":"Spain", "value":46454895, "color":chart.colors.getIndex(1) },
      { "id":"LK", "name":"Sri Lanka", "value":21045394, "color": chart.colors.getIndex(0) },
      { "id":"SD", "name":"Sudan", "value":34735288, "color":chart.colors.getIndex(2) },
      { "id":"SR", "name":"Suriname", "value":529419, "color":chart.colors.getIndex(3) },
      { "id":"SZ", "name":"Swaziland", "value":1203330, "color":chart.colors.getIndex(2) },
      { "id":"SE", "name":"Sweden", "value":9440747, "color":chart.colors.getIndex(1) },
      { "id":"CH", "name":"Switzerland", "value":7701690, "color":chart.colors.getIndex(1) },
      { "id":"SY", "name":"Syria", "value":20766037, "color": chart.colors.getIndex(0) },
      { "id":"TW", "name":"Taiwan", "value":23072000, "color": chart.colors.getIndex(0) },
      { "id":"TJ", "name":"Tajikistan", "value":6976958, "color": chart.colors.getIndex(0) },
      { "id":"TZ", "name":"Tanzania", "value":46218486, "color":chart.colors.getIndex(2) },
      { "id":"TH", "name":"Thailand", "value":69518555, "color": chart.colors.getIndex(0) },
      { "id":"TG", "name":"Togo", "value":6154813, "color":chart.colors.getIndex(2) },
      { "id":"TT", "name":"Trinidad and Tobago", "value":1346350, "color":chart.colors.getIndex(4) },
      { "id":"TN", "name":"Tunisia", "value":10594057, "color":chart.colors.getIndex(2) },
      { "id":"TR", "name":"Turkey", "value":73639596, "color":chart.colors.getIndex(1) },
      { "id":"TM", "name":"Turkmenistan", "value":5105301, "color": chart.colors.getIndex(0) },
      { "id":"UG", "name":"Uganda", "value":34509205, "color":chart.colors.getIndex(2) },
      { "id":"UA", "name":"Ukraine", "value":45190180, "color":chart.colors.getIndex(1) },
      { "id":"AE", "name":"United Arab Emirates", "value":7890924, "color": chart.colors.getIndex(0) },
      { "id":"GB", "name":"United Kingdom", "value":62417431, "color":chart.colors.getIndex(1) },
      { "id":"US", "name":"United States", "value":313085380, "color":chart.colors.getIndex(4) },
      { "id":"UY", "name":"Uruguay", "value":3380008, "color":chart.colors.getIndex(3) },
      { "id":"UZ", "name":"Uzbekistan", "value":27760267, "color": chart.colors.getIndex(0) },
      { "id":"VE", "name":"Venezuela", "value":29436891, "color":chart.colors.getIndex(3) },
      { "id":"PS", "name":"West Bank and Gaza", "value":4152369, "color": chart.colors.getIndex(0) },
      { "id":"VN", "name":"Vietnam", "value":88791996, "color": chart.colors.getIndex(0) },
      { "id":"YE", "name":"Yemen, Rep.", "value":24799880, "color": chart.colors.getIndex(0) },
      { "id":"ZM", "name":"Zambia", "value":13474959, "color":chart.colors.getIndex(2) },
      { "id":"ZW", "name":"Zimbabwe", "value":12754378, "color":chart.colors.getIndex(2) }
    ];

    // Add lat/long information to data
    for(var i = 0; i < mapData.length; i++) {
      mapData[i].latitude = latlong[mapData[i].id].latitude;
      mapData[i].longitude = latlong[mapData[i].id].longitude;
    }

    // Set map definition
    chart.geodata = am4geodata_worldLow;

    // Set projection
    chart.projection = new am4maps.projections.Miller();

    // Create map polygon series
    var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
    polygonSeries.exclude = ["AQ"];
    polygonSeries.useGeodata = true;

    var imageSeries = chart.series.push(new am4maps.MapImageSeries());
    imageSeries.data = mapData;
    imageSeries.dataFields.value = "value";

    var imageTemplate = imageSeries.mapImages.template;
    imageTemplate.propertyFields.latitude = "latitude";
    imageTemplate.propertyFields.longitude = "longitude";
    imageTemplate.nonScaling = true;

    var circle = imageTemplate.createChild(am4core.Circle);
    circle.fillOpacity = 0.7;
    circle.propertyFields.fill = "color";
    circle.tooltipText = "{name}: [bold]{value}[/]";

    imageSeries.heatRules.push({
      "target": circle,
      "property": "radius",
      "min": 4,
      "max": 30,
      "dataField": "value"
    }) 

</script>

@endsection