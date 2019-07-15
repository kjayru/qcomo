@extends('admin.layout.master')

@section('content')
 
<section class="content-fluid" style="padding: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
     <div id="one" class="col-md-8"> 
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >CLIENTES DE FRANQUICIADO</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right nuevo_cliente" data-franchiseid="{{ $franchise_id }}" style="margin-right: 12px;">Nuevo Cliente</button>
              </div>
		</nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
 
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; height: 800px; min-width: 150px;"> 
                    <!--<div class="col-md-12">
                       <div class="col-md-6">
                            <form class="form-horizontal" id="fr-getclient">
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="nombre">SELECCIONE FRANQUCIA</label>  
                                        <div class="col-md-6">
                                            <select name="franquicia" id="sel-franquicia" class="form-control">
                                                <option value="0">Seleccione</option>
                                              
                                            </select>                        
                                        </div>  
                                </div>
                            </form>
                        </div>
                    </div> --> 
                <table id="dtBasicExample"  class="table table-responsive table-cliente table-striped" style="margin-top: -1px; "> 
                    <thead style="background-color: #696969; color: #fff;" class="header12">
                    <tr style=" height: 45px;">
                      <th width="40px;" style="padding-left: 15px;">#</th>
                      <th width="280px;">Imagen</th>
                      <th width="200px;">Nombre</th>
                      <th width="140px;">Dirección</th>
                      <th width="90px;" class="hidden-xs">Ciudad</th>
                      <th width="140px;" class="hidden-xs">Provincia</th>
                      <th width="140px;">Celular</th>
                      <th width="90px;">Opciones</th>
                      <th width="90px;">Estado</th>
                    </tr>
                    </thead>
                    <tbody >
                      @foreach($clients as $key => $client)
                    <tr>
                      <th align="center">{{ $key + 1 }}</th>
                      <td><img src="/storage/clients/{{ $client->cover }}"  width="40" alt=""> </td>
                      <td>{{ $client->name }}</td>
                      <td> {{ $client->address }}</td>
                      <td class="hidden-xs">{{ $client->city }}</td>
                      <td class="hidden-xs">{{ $client->province }}</td>
                      <td class="hidden-xs">{{ $client->cellphone }}</td>
                     
                      <td> <a href="#" class="btn btn-xs btn-primary btn-editar btn-cliente-edit" data-id="{{ $client->id }}">Editar</a><a href="#" class="btn btn-xs btn-danger btn-eliminar">Eliminar</a></td>
                      <td>
                        <label class="switch"> 
                            <input type="checkbox"  class="estado" data-id="{{$client->id}}"  @if($client->status==2) data-estado="activo" checked @else data-estado="inactivo" @endif />
                            <span class="slider round"></span>
                        </label>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table> 

              
            </div>
            <!-- /.end box-body -->
        </div>
 
    </div>
    <div id="two" class="col-md-4" style="position:relative;">
        <div class="capabox"></div>
        
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="boxbox-info" style="background-color: #fff; padding: 0px;">
                    <div class="box-header with-border">
                         <button  type="button" class="btn btn-primary" data-id="" id="btn-mozo" style="background-color:#7700ff; ">Mozos y Mesas</button>
                        <button  type="button" class="btn btn-primary" data-id="" id="btn-carta" style="background-color:#77aa00; ">La Carta</button>
                    </div>
                       @include('admin.paginas.clientes.partial.form')
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
            
                  <div id="googleMap" style="height:350px; margin: 2px; padding: 2px;"></div>
            
                </div>
            </div>
        </div>

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="box-header with-border">
                Fotos
            </div>
            @include('admin.paginas.clientes.partial.form-foto')
        </div> 

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="box-header with-border">
                Configuraciones
            </div>
            @include('admin.paginas.clientes.partial.form-config')
        </div> 

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="box-header with-border">
                Servicios
            </div>
            
            @include('admin.paginas.clientes.partial.form-service')
        </div> 
            

      
    </div>
</div>    
    
   
</section>
@include('admin.partial.scripts')
<!--
<script>
    
function goMozos(id)
{
    window.location.href = '/admin/mesas';    
}

function goCarta(id)
{
    window.location.href = '/admin/productoscarta';    
}
    
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
});

function readURLLogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_logo').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLFranquiciado(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_franquiciado').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f1').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f2').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f3').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f4').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInpLogo").change(function(){
    readURLLogo(this); 
}); 

$("#imgInpFranquiciado").change(function(){
    readURLFranquiciado(this); 
}); 

$("#imgInpF1").change(function(){
    readURLF1(this); 
}); 

$("#imgInpF2").change(function(){
    readURLF2(this); 
}); 

$("#imgInpF3").change(function(){
    readURLF3(this); 
}); 

$("#imgInpF4").change(function(){
    readURLF4(this); 
}); 

 
$(document).ready(function(){ 
  $('#dtBasicExample').DataTable({
    "paging": true
  });
  $('.dataTables_length').addClass('bs-select');
    
}); 
 

</script>

<script> 
function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
} 
var titulo_seccion = document.getElementById("titulo_seccion");
titulo_seccion.innerHTML = "CLIENTES";

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDI_HGADUhhryYf0nHOo7BNtFM8DGBzVk&callback=myMap"></script>
  
-->
 @endsection