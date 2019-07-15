@extends('admin.layout.master')

@section('content')
<section class="content" style="padding-right: 0px; width:100%;">
       
     <nav class="navbar navbar-inverse" style="background-color: #f0f2f7; border: 1px #aaa solid;margin: 0px;">
        <div class="container-fluid">
            <div class="navbar-header navbar-left">
              <h3>LaCartaMozo</h3>
            </div> 
            <ul class="nav navbar-nav navbar-center">
              <li><a href="#"><h5>Configuracion</h5></a></li>
              <li><a href="#"><h5>Diseño</h5></a></li>
              <li><a href="#"><h5>Destinatario</h5></a></li>
              <li><a href="#"><h5 style="text-weight: bold;">Confirmacion</h5></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><button type="button" class="btn btn-default">Guardar y salir</button></a></li>
              <li><a href="#" onclick="goFelicitaciones()"><button type="button" class="btn btn-success">Programar</button></a></li>
            </ul>
        </div>
     </nav> 
  
    <div class="panel panel-default" style="max-width: 900px; margin: 0 auto; display: block; border: 0 solid #000;">
      <div class="panel-body">
    	
    	</br></br>
    	<h4 style="text-align: center">¡Todo esta listo para el envio de su campaña!</h4>
    	<h6 style="text-align: center">Revise el siguiente informe antes de enviar su campaña</h6>
 		</br>
	    <div class="panel panel-default">
        	<div class="panel-heading">Configuracion</div>
        	<div class="panel-body">
				<h6>Asunto: LaCartaMozo2018</h6>
				<h6>De: LaCartaMozo2018 (ventas@LaCartaMozo.com.ar) </h6>
			</div>
        </div>
        
	    <div class="panel panel-default">
        	<div class="panel-heading">Diseño</div>
        	<div class="panel-body">
        		<img src="../images/android.png" width="180" height="100" style="display: inline-block;">
				<h6>Su diseño: Ha utilizado el editor Drag and Drop para crear su email</h6>
				<h6>La vista previa de su email	no esta disponible temporalmente</h6>
				<button type="button">Enviar una prueba</button>
			</div>
        </div>
        
	    <div class="panel panel-default">
        	<div class="panel-heading">Destinatarios</div>
        	<div class="panel-body">
				<h6>Listas de envio: Lista 1</h6> 
			</div>
        </div>
        
      </div>
  	</div>
  	
  	
</section>
@endsection
@include('admin.partial.scripts')


<script> 
	function goFelicitaciones()
	{
		location.href = '/admin/campaniafel';		
	}
</script>

