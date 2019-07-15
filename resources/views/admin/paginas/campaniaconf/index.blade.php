@extends('admin.layout.master')

@section('content')
<section class="content" style="padding-right: 0px; width:100%;">
 
    <div class="panel panel-default" style="margin: 0; background-color: #f0f2f7;"> 
        <div style="margin: 15px;">
        	<ul class="list-inline" style="display: inline; margin-right: 45px;">
        		<li><h4>Prueba LaCartaMozo</h4></li>
        	</ul>
        	
        	<ul class="list-inline hidden-xs" style="margin-right: 45px; display: inline;">
        		<li><h5 style="font-weight: bold;">Configuracion</h5></li>
        		<li><h5>></h5></li>
        		<li><h5>Diseño</h5></li>
        		<li><h5>></h5></li>
        		<li><h5>Destinatarios</h5></li>
        		<li><h5>></h5></li>
        		<li><h5>Confirmacion</h5></li>
        	</ul>
        	
        	<ul class="list-inline" style="display: inline;">
        		<li> 
        			<select class="selectpicker" style="background-color: #fff;">
        				<option>Guardar y salir</option>
        				<option>Guardar</option>
        			</select>
        		</li>
        		<li><button type="button" class="btn btn-success" onclick="nextStep()">Siguiente paso</button></li>
        	</ul>
        	
        </div> 
    </div>
     
	<div class="alert alert-success" role="alert">
		<strong>Well done!</strong> You successfully read this important alert message.
    </div>

	<div style="margin: 0 auto;display: block; max-width: 700px;">
		<form>
			</br>
			<div class="form-group">
			 	<label for="nombre" style="color: #888;">Nombre de la campaña</label>
                <input type="text" class="form-control" id="nombre" placeholder="nombre">
			 	<label style="color: #aaa;" for="nombre">Elija un nombre para su campaña, asi podra facilmente desde su cuenta. Por ejemplo: "rebajas_octubre"</label>
			</div>
			</br>
			<div class="form-group">
			 	<label for="nombre" style="color: #888;">Asunto</label>
                <input type="text" class="form-control" id="nombre" placeholder="nombre">
			 	<label style="color: #aaa;" for="nombre">Seleccione un asunto que describa el contenido de su e-mail. Es lo primero que vera su destinatario. Por ejemplo: "venta privada 25% de descuento en nuestra nueva coleccion"</label>
			</div>
			</br>
			<div class="form-group">
			 	<label for="nombre" style="color: #888;">Email del remitente</label>
                <input type="text" class="form-control" id="nombre" placeholder="nombre">
			</div>
			</br>
			<div class="form-group">
			 	<label for="nombre" style="color: #888;">Nombre del remitente</label>
                <input type="text" class="form-control" id="nombre" placeholder="nombre">
			 	<label style="color: #aaa;" for="nombre">Elija un nombre, por ejemplo, el de su empresa, para que sus suscriptores le reconozcan mas facilmente</label>
			</div>
		</form>
	</div>
	
</section>
@endsection
@include('admin.partial.scripts')

<script>
	function primeraCampania()
	{
		location.href = '/admin/campaniaconf';
	}

	function nextStep()
	{
		location.href = '/admin/campaniaelegir';		
	}
</script>