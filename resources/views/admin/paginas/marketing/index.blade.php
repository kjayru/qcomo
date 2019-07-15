@extends('admin.layout.master')

@section('content')
<section class="content" style="float: none; width: 100%; padding: 90px 0 0 0;">
          
    <div class="card" style="width: 32rem; border: 1px solid gray; display: inline-block; margin: 12px;">
        <div class="card-body" style="margin-top: 10px;">
        	</br>
            <img src="../images/multiple-users-silhouette.png" width="40" height="40" style="display: block; margin: 0 auto"/>
            <h2 class="card-text" style="text-align:center; color: #b00;">3863</h2>
            <h4 class="card-text" style="text-align:center">Todos los contactos</h4>  
            </br></br>
        </div>
    </div>
            
    <div class="card" style="width: 32rem; border: 1px solid gray; display: inline-block; margin: 12px;">
        <div class="card-body">
        	</br>
            <img src="../images/eye-open.png" width="40" height="40" style="display: block; margin: 0 auto"/>
            <h2 class="card-text" style="text-align:center; color: #00b;">12</h2>
            <h4 class="card-text" style="text-align:center">Aperturas</h4>
            <h4 class="card-text" style="text-align:center">0%</h4> 
            </br> 
        </div>
    </div>
        
    <div class="card" style="width: 32rem; border: 1px solid gray; display: inline-block; margin: 12px;">
        <div class="card-body">
        	</br>
            <img src="../images/clicker.png" width="40" height="40" style="display: block; margin: 0 auto"/>
            <h2 class="card-text" style="text-align:center; color: #0b0;">23</h2>
            <h4 class="card-text" style="text-align:center">Clicks</h4>
            <h4 class="card-text" style="text-align:center">0%</h4> 
            </br> 
        </div>
    </div>
        
    <div class="card" style="width: 32rem; border: 1px solid gray; display: inline-block; margin: 12px;">
        <div class="card-body">
        	</br>
            <img src="../images/disabled.png" width="40" height="40" style="display: block; margin: 0 auto"/>
            <h2 class="card-text" style="text-align:center; color: #f00;">54</h2>
            <h4 class="card-text" style="text-align:center">En lista negra</h4>
            <h4 class="card-text" style="text-align:center">0%</h4> 
            </br> 
        </div>
    </div>
    
       
    <div class="card" style="width: 48rem; border: 1px solid gray;  margin: 12px; padding: 15px; display: block; margin: 0 auto;">
        <div class="card-body"> 
    		<h4 class="card-title">Campañas Email</h4> 
    		<select style="display: block; width: 100%;">
    			<option>Borradores</option>
    			<option>Borradores 1</option>
    			<option>Borradores 2</option>
    		</select>    		
    		</br>
            <button type="button" class="btn btn-primary" style="margin: 0 auto; display: block;" onclick="crearCampania()">Crear una campaña</button>
        </div>
    </div>
    
    <div class="panel panel-default" style="margin: 25px;">
      <div class="panel-heading">Campañas programadas</div>
      <div class="panel-body">      
      	<table class="table table-responsive id="tablacampain">
      		<thead>
      			<tr>
          			<th></th>
          			<th>ID</th>
          			<th>NOMBRE</th>
          			<th>DESTINATARIOS</th>
          			<th>PARA ENVIAR</th>
          			<th>PROGRAMADA</th>
          			<th>ACCIONES</th>
      			</tr>
      		</thead>
      		<tbody>
      			<tr>
      				<td><i class="fa fa-letter"/></td>
      				<td>#2</td>
      				<td>La Carta Mozo 2018</td>
      				<td>0</td>
      				<td>100%</td>
      				<td>04 Ago. 2018</td>
      				<td>
      					<select>
      						<option>Accion 1</option>
      						<option>Accion 2</option>
      						<option>Accion 3</option>
      						<option>Accion 4</option>
      					</select>
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
	function crearCampania()
	{
		location.href = '/admin/crearcampania';
	}
</script>

