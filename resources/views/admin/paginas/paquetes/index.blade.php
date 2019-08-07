@extends('admin.layout.master')

@section('content') 
 
<section class="content-fluid" style="padding-right: 0px; background-color: #f7f7f7; width: 100%;">
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div id="wrappermini" style="width: 100%;">
    <div id="one" class="col-md-8"> 

        <!-- /.box-header -->
        <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >PAQUETES</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right nuevo_classification" onclick="nuevo_paquete()"  style="margin-right: 12px;">Agregar Paquete</button>
              </div>
		    </nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body --> 
            <div class="box-body" style=" padding: 0;margin: 0; min-width: 150px;">  

                <table id="dtBasicExample"   class="table-striped table-franquicia table-responsive" style="margin-top: -1px; font-size: 1.1em; width: 100%;">
                        <thead style="background-color: #696969; color: #fff;"><tr>
                                <th width="40px;" style="padding-left: 15px;">Id</th>
                                <th width="60px;" >Nombre</th>
                                <th  >Descripcion</th>
                                <th >Precio</th>
                                <th width="60px;">Precio Promo</th>
                                <th width="60px;">Estado</th> 
                                <th ></th> 
                            </tr> 
                        </thead>
                        <tbody > 
                            @foreach($packages as $key => $pack)
                            <tr style="height: 42px;">
                                <td >{{ $key + 1 }}</td>
                                <td>{{ $pack->name }}</td>
                                <td>{{ $pack->description }}</td>
                                <td>{{ $pack->price }}</td>
                                <td>{{ $pack->promo }}</td>
                                <td>{{ $pack->status }}</td>
                                <td>  
                                    <a href="#" class="btn btn-xs btn-primary btn-package-edit" data-id="{{$pack->id}}">Editar</a> 
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                </table> 
               
            </div>
 
        </div>

 
    </div>
    <div id="two" class="col-md-4">
    
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="box box-info" style="background-color: #fff; padding: 0px;">
                    <div class="box-header with-border">
                        Paquete
                    </div>
                     @include('admin.paginas.paquetes.partial.form') 
                </div>
            </div> 
        </div> 
          
    </div>


 </div>      
  
</section>

@endsection
@include('admin.partial.scripts')
<script>

    $(document).ready(function(){ 
      $('#dtBasicExample').DataTable({
        "paging": true
      });
      $('.dataTables_length').addClass('bs-select');   
      //$('#two').hide(); 
    }); 

    function nuevo_paquete()
    {
      $('#two').show();
    }

</script>


