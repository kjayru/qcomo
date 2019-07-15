@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
   
<div id="wrappermini">
    <div id="one" >  
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >PUBLICIDAD</a>
                </div>   
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevaReserva()"  style="margin-right: 12px;">Agregar Auspiciante</button> 
              </div>
		</nav> 
		
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0; margin: 0; height: 840px; overflow-y: auto;">   
                <table id="tb-cliente0" class="table table-responsive table-hover">
                        <thead style="background-color: #696969; color: #fff;">
                        <tr>
                          <th style="width: 80px;">Nº</th>
                          <th style="width: 140px;">Empresa</th>
                          <th>Cliente-Resto</th>
                          <th>Precio</th>
                          <th>Inicio</th>
                          <th>Expiración</th> 
                          <th>Imagen</th> 
                          <th>Estado</th> 
                          <th></th>
                        </tr>
                        </thead>
                        <tbody> 
                          @foreach($publicidades as $pb)
                          <tr>
                              <td style="width: 80px;">Nº</td>
                              <td style="width: 140px;">{{$pb->empresa}}</td>
                              <td>{{$pb->client->name}}</td>
                              <td>S/{{number_format($pb->costo,2)}}</td>
                              <td>{{$pb->inicio}}</td>
                              <td>{{$pb->final}}</td> 
                              <td><img src="/storage/{{$pb->image}}"  width="50" alt=""></td> 
                             
                              <td style="width: 170px;">
                                  <label class="switch">
                                      <input type="checkbox" class="estado" data-id="{{$pb->id}}"  @if($pb->status==2) data-estado="activo" checked @else data-estado="inactivo" @endif >
                                      <span class="slider round" ></span>
                                  </label>
                              </td> 
                              <td><a href="#" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
    
    <div id="two" >  
            <div classss="row" style="padding: 0px; margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                  <div class="box" style="background-color: #fff; padding: 8px;">
                
                    <!-- Form Name -->
                    <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 45px; padding-top: 4px;">Formulario Publicidad</legend>
  
                    <form class="form-horizontal" action="{{ route('publisheds.store')}}" method="POST" id="fr-publicidad">
                      @csrf
                      <input type="hidden" name="_method" id="metodo" value="POST">
                      
                      <fieldset>
                      
                      <!-- Form Name -->
                      <legend>Nuevo Publicidad</legend>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="titulo">Titulo</label>  
                        <div class="col-md-7">
                        <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md">
                          
                        </div>
                      </div>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Apellidos">Url</label>  
                        <div class="col-md-7">
                        <input id="Url" name="Url" type="text" placeholder="Url" class="form-control input-md">
                          
                        </div>
                      </div>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="imagen">Imagen</label>  
                        <div class="col-md-7">
                        <input type="file" name="imagen" id="imagen" class="form-control input-md">
                          
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="empresa">Empresa</label>  
                          <div class="col-md-7">
                          <input id="empresa" name="empresa" type="text" placeholder="Empresa" class="form-control input-md">
                            
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="costo">Costo</label>  
                          <div class="col-md-7">
                              <input id="costo" name="costo" type="text" placeholder="Costo" class="form-control input-md">
                            
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="inicio">Fecha inicio</label>  
                          <div class="col-md-7">
                          <input id="inicio" name="inicio" type="date" placeholder="Fecha inicio" class="form-control input-md">
                            
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="col-md-4 control-label" for="final">Fecha final</label>  
                          <div class="col-md-7">
                          <input id="final" name="final" type="date" placeholder="Fecha final" class="form-control input-md">
                            
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="cliente">Cliente</label>  
                          <div class="col-md-7">
                              <select name="cliente" id="cliente" class="form-control">
            
                                  <option value="">Seleccione</option>
                                  @foreach ($clientes as $cliente)
                                  <option value="{{ $cliente->id}}">{{ $cliente->name}}</option>
                                  @endforeach
                              </select> 
                          </div>
                      </div>
                     
                      
                      <!-- Button -->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="btn-save"></label>
                        <div class="col-md-7">
                          <button id="btn-save" type="submit" name="btn-save" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                      
                      </fieldset>
                    </form>
                    
                    
                  </div>
                </div>
            </div>
    </div>
</div>


</section>   
@include('admin.partial.scripts')

<script> 
    $(document).ready(function(){   

        $("#tb-cliente0").DataTable({
          "paging": true
        }); 
        $('.dataTables_length').addClass('bs-select'); 
    
    });

    var titulo_seccion = document.getElementById("titulo_seccion");
    titulo_seccion.innerHTML = "PUBLICIDAD";
</script>
 

@endsection