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
              <li><a href="#" onclick="golistas()"><button type="button" class="btn btn-primary">Siguiente paso</button></a></li>
            </ul>
        </div>
     </nav> 
  

    <div class="panel panel-default" style="max-width: 900px; margin: 0 auto; display: block; border: 0 solid #000;">
      <div class="panel-body">
       
    
    	  <ul class="list-inline"> 
    	  	<li>
    	  		<label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
            </li>
            <li><button type="button" class="btn btn-primary">Vista previa</button></li>
            <li><button type="button" class="btn btn-primary">Modificar</button></li>
            <li><button type="button" class="btn btn-primary">Enviar una prueba</button></li> 
          </ul> 
            
	    <div class="panel panel-default"> 
        	<div class="panel-body">
				<h6>Asunto: LaCartaMozo2018 (ventas@LaCartaMozo.com.ar) </h6>
				<h6>De: LaCartaMozo2018</h6>
			</div>
        </div>
      	 
      	<img src="../images/android.png" width="800" height="1200">
      </div>
    </div>	
    	  
</section>
@endsection
@include('admin.partial.scripts')


<script> 
	function golistas()
	{
		location.href = '/admin/campanialistas';		
	}
</script>


