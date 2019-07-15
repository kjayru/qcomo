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
    	
    	</br></br>
    	<h5>A. Seleccione una o varias listas de contactos</h5>
		</br>
		<table class="table table-responsive" id="t_lista">
			<thead>
				<tr>
					<th></th>
					<th>Id</th>
					<th>Nombre de la lista</th>
					<th>Carpeta</th>
					<th>Nro de contactos</th>
					<th>Excluir todo</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="checkbox">
                      		<label><input type="checkbox" value=""></label>
                    	</div>
                    </td>
					<td>
						<h6>#2</h6> 
					</td>
					<td>
						<h6>Logueados desde APP</h6>
					</td>
					<td>
						<h6></h6>
					</td>
					<td>
						<h6 style="color: #00f;">19 Contactos</h6>
					</td>
					<td>
						<h6>Excluir la lista</h6>
					</td>
				</tr>
			</tbody>
		</table> 
				
	  </div>
	</div>
  
  
  
  
  
  
 
  
  
  
</section>
@endsection
@include('admin.partial.scripts')


<script> 
	function golistas()
	{
		location.href = '/admin/campaniaprogenv';		
	}

    $(document).ready(function(){ 
      $('#t_lista').DataTable({
        "paging": true
      });
 
      $('.dataTables_length').addClass('bs-select');   
    }); 

	
</script>

