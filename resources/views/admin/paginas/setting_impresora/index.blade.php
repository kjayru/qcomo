@extends('admin.layout.master')

@section('content') 

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; "> 
        <div class="box2">
            <div class="box-header2">
                <div style="float:left">
                    <label>CONFIGURAR IMPRESORA</label>
                </div>
                <div style="float:right; margin-right: 15px;">
            </div>
        </div> 
    
        <div style="padding: 12px; background-color: #f5f5f5; max-width: 760px; min-width: 120px;">
            <p class="text-justify">
                Para poder hacer el uso de impresoras es necesario primero tener instalada la extension de E-resto para Chrome
            </p>
            <p class="text-justify">
                Por ahora solo Chrome es soportado para poder imprimir, pero se puede usar cualquier navegador en computadoras que no tengan impresoras conectadas en donde se quiere imprimir 
            </p>
            <p class="text-justify">
                Instale la extension y luego refresca la pagina con F5
            </p>
            
            <button type="button" class="btn btn-info">Instalar extension ahora</button>
        </div>
    
        <div style="padding: 12px; margin: 25px; background-color: #f5f5f5; max-width: 720px; min-width: 120px; height: 580px; overflow-y: auto;">
    
            <table class="table-responsive">
                <tr>
                    <th width="180px">CONTROL DE MESA</th>
                    <th>
                       
                        <div class="row" id='impresora-row'>
                            <h5 style="color: #ff7700; font-style: normal;">Tamaños de letra</h5>
                            <p>Configura los tamaños de letra de tu Control de Mesa, para adaptarlo a tus preferencias.
                            Puedes modificar las distintas secciones independientemente
                            Para asegurarte de una optima configuracion, realiza una prueba de impresion</p>
                            
                            <ul class="list-inline"><li>Encabezado:</li><li>Tamaño: Normal</li><li>Alto: Doble</li><li>Ancho: Doble</li></ul>
                            <ul class="list-inline"><li>Cuerpo:</li><li>Tamaño: Normal</li><li>Alto: Doble</li><li>Ancho: Simple</li></ul>
                            <ul class="list-inline"><li>Pie:</li><li>Tamaño: Normal</li><li>Alto: Doble</li><li>Ancho: Simple</li></ul>
                            
                        </div>
                        </br>
                        
                        <div class="row" id='impresora-row'>
                            <h5 style="color: #ff7700; font-style: normal;">Largo del texto del producto</h5>
                            
                            <p>largo maximo en caracteres para los nombres de los productos antes de truncar. Si los
                            productos se imprimen en dos lineas, como puede pasar en impresoras de menos de
                            80mm, se puede probar bajando este valor. Por defecto en 30</p>
                            
                            <div class="form-check">
                                Caracteres      <input type="text" class="form-check-input" id="exampleCheck1">
                            </div>
                        </div>
                        </br>
                        
                        <div class="row" id='impresora-row'>
                            <h5 style="color: #ff7700; font-style: normal;">ID de venta</h5>
    
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Incluir ID de venta al imprimir Control de Mesa</label>
                            </div>
                        </div>
                        </br>
                        
                        <div class="row" id='impresora-row'>
                            <h5 style="color: #ff7700; font-style: normal;">Encabezado y pie</h5>
                            <p>Personaliza el texto que aparece en el encabezado y pie de tu Control de Mesa</p>
                            <button>Configurar</button>
                        </div>
                        </br>
                        
                        <div class="row" id='impresora-row'>
                            <h5 style="color: #ff7700; font-style: normal;">Prueba de impresion</h5>
                            <p style="color: #bbb; ">Imprimir un Control de Mesa de Prueba</p>
                            <button>Imprimir prueba</button>
                        </div>
                        </br>
                        
                    </th>
                </tr>
            </table>
                    
        </div>
        
        
    </div>   
</section>
  
     
   
@endsection
@include('admin.partial.scripts')