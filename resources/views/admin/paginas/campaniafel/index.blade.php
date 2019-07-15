@extends('admin.layout.master')

@section('content')
<section class="content" style="padding-right: 0px; width:100%;">
        
    </br></br>
    <div class="panel panel-default" style="max-width: 900px; margin: 0 auto; display: block;">
      <div class="panel-body">
      
      	<nav class="navbar">
      	  <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Campañas</a>
            </div> 
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><button type="button" class="btn btn-primary" onclick="crearCampania()">Crear una campaña de e-mail</button></a></li> 
            </ul>
          </div> 
      	</nav>
      	
    	</br>
        	<ul class="nav nav-tabs">
              <li class="active"><a href="#home">Todos (2)</a></li>
              <li><a data-toggle="tab" href="#menu1">Enviado (0)</a></li>
              <li><a data-toggle="tab" href="#menu2">Borradores (1)</a></li>
              <li><a data-toggle="tab" href="#menu3">Programadas (1)</a></li>
              <li><a data-toggle="tab" href="#menu4">Suspendidas (0)</a></li>
              <li><a data-toggle="tab" href="#menu5">En proceso de envio (0)</a></li>
              <li><a data-toggle="tab" href="#menu6">Archivadas (0)</a></li>  
            </ul>
            <div class="alert alert-success">
              <strong>Felicitaciones!</strong> Su programa fue creado con exito
              <p><strong>Su campaña esta a la espera de ser enviada</strong></p>
            </div>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">

				<table class="table table-responsive" id="t_todos">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>

              </div>
              <div id="menu1" class="tab-pane fade">

				<table class="table table-responsive" id="t_enviados">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div>
              <div id="menu2" class="tab-pane fade">

				<table class="table table-responsive" id="t_borradores">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div>
              <div id="menu3" class="tab-pane fade">

				<table class="table table-responsive" id="t_programados">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div>
              <div id="menu4" class="tab-pane fade">

				<table class="table table-responsive" id="t_suspendidas">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div>
              <div id="menu5" class="tab-pane fade">

				<table class="table table-responsive" id="t_enproceso">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div>
              <div id="menu6" class="tab-pane fade">

				<table class="table table-responsive" id="t_archivadas">
					<thead>
						<tr>
    						<th></th>
    						<th>Campañas</th>
    						<th>Destinatarios</th>
    						<th>Lectores</th>
    						<th>Clickers</th>
    						<th>Cancelaciones</th>
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
								<h5>LaCartaMozo2018</h5>
								<h6>Programada el 04 Ago 2018, 03:00</h6>
							</td>
							<td>
								<h5 style="color: #000;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #07d;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #0f0;">0</h5>
								<h6>0%</h6>
							</td>
							<td>
								<h5 style="color: #f00;">0</h5>
								<h6>0%</h6>
							</td>
						</tr>
					</tbody>
				</table>
				
              </div> 
            </div>


      </div>
    </div>        
    
    
</section>
@endsection
@include('admin.partial.scripts');

<script>
    
    $(document).ready(function(){ 
      $('#t_todos').DataTable({
        "paging": true
      });

      $('#t_enviados').DataTable({
        "paging": true
      });

      $('#t_borradores').DataTable({
        "paging": true
      });

      $('#t_programados').DataTable({
        "paging": true
      });

      $('#t_suspendidas').DataTable({
        "paging": true
      });

      $('#t_enproceso').DataTable({
        "paging": true
      });

      $('#t_archivadas').DataTable({
        "paging": true
      });
      $('.dataTables_length').addClass('bs-select');   
    }); 

    function crearCampania()
    {
		location.href = '/admin/crearcampania';
    }
    
</script>


