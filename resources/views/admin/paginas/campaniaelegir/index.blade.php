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
      
    <div style="max-width: 800px; margin: 0 auto;">
        </br></br>
       	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Herramientas de diseño</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mis plantillas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Galeria de plantillas</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active in" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">  
            </br></br></br>
            <div class="card" style="min-width: 25rem; max-width: 30rem; border: 1px solid gray;  margin: 0 auto; padding: 15px; display: block; cursor: pointer;" onclick="openEditor()">
                <div class="card-body"> 
            		<h3 class="card-title" style="text-align: center; color: #555; font-weight: bold;">Editor Drag and Drop</h3>
            		</br>
            		<img src="../images/move.png" width="55" height="55" style="margin: 0 auto; display: block;">
            		</br>
            		<h6 class="card-title" style="text-align: center;">Cree un email compatible con los moviles que se vea bien en cualquier tipo de dispositivo o pantalla</h6>    		
            		</br> 
                </div>
            </div> 
          </div>
                     
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

		  </div>
		  
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          
          </div>
        </div>

    </div>
	
</section>
@endsection
@include('admin.partial.scripts')

<script> 
	function openEditor()
	{
		location.href = '/admin/campaniaeditor';		
	}
</script>




