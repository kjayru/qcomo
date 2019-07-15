@extends('admin.layout.master')

@section('content')
 
<section class="content-fluid" style="padding-right: 0px; background-color: #f7f7f7;">
    

<div id="wrappermini">
    <div id="one" class="col-md-8"> 
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >FRANQUICIADO</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right nuevo_franquiciado"  style="margin-right: 12px;">Nuevo Franquiciado</button>
              </div>
		</nav> 
		
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; min-width: 150px;">     
                 
                <table id="dtBasicExample"   class="table-striped table-franquicia table-responsive" style="margin-top: -1px; ">
                        <thead style="background-color: #696969; color: #fff;">
                            <tr>
                                <th width="40px;" style="padding-left: 15px;">#</th>
                                <th width="60px;"  class="hidden-xs">Foto</th>
                                <th width="120px;">Nombre de Negocio</th>
                                <th width="150px;" class="hidden-xs">Direccion</th>
                                <th width="80px;">Ciudad</th>
                                <th width="90px;" class="hidden-xs">Provincia</th>
                                <th width="100px;">Celular</th>
                                <th width="130px;" class="hidden-xs">Alta</th>
                                <th width="150px;"></th>
                                <th width="50px;">Estado</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach($franquicias as $key => $fran)
                            <tr>
                                <td >{{ $key + 1 }}</td>
                                <td class="pad-10"> <img src="/storage/franchise/{{ $fran->avatar }}" class="img-responsive"> </td>
                                <td>{{ $fran->names }} </td>
                                <td>{{ $fran->address }}</td> 
                                <td>{{ $fran->city }}</td>
                                <td >{{ $fran->province }}</td>
                                <td>{{ $fran->cellphone }}</td>
                                <td >{{ $fran->created_at }}</td>
                                <td> 
                                    <a href="/admin/clients/{{ $fran->id }}" class="btn btn-xs btn-success btn-clientes-list" >Clientes</a>
                                    <a href="#" class="btn btn-xs btn-primary btn-franciado-edit" data-id="{{$fran->id}}">Editar</a>

                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" class="estado" data-id="{{$fran->id}}"  @if($fran->status==2) data-estado="activo" checked @else data-estado="inactivo" @endif >
                                        <span class="slider round" ></span>
                                    </label>
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
                        Formulario de datos
                    </div>
                     @include('admin.paginas.franquicias.partial.form')
 
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


    </div>
</div>

    
</section>
@include('admin.partial.scripts')

<script>
    
    
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this); 
    }); 	
});

 
$(document).ready(function(){ 
  $('#dtBasicExample').DataTable({
    "paging": true
  });
  $('.dataTables_length').addClass('bs-select');   
}); 
  
var titulo_seccion = document.getElementById("titulo_seccion");
titulo_seccion.innerHTML = "FRANQUICIADO";

</script>




  

@endsection