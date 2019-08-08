@extends('admin.layout.master')

@section('content')
<section class="content" style="padding-right: 0px; background-color: #f7f7f7; width: 100%;">
<div id="wrappermini">
    <div id="one" class="col-md-8"> 
        
        <!-- /.box-header -->
        <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >TRADUCCIONES</a>
                </div>  
                <button id="btn_edit" class="btn btn-warning navbar-btn navbar-right btn-traduccion-nuevo" data-id="1" style="margin-right: 12px;">Nuevo</button>
              </div>
        </nav> 

        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">

              <!-- /.box-body -->
              <div class="box-body" style=" padding: 0;margin: 0; min-width: 150px;">     
                  <div class="table-responsive">
                    <table id="dtBasicExample" class="table-striped tabl table-franquicia table-responsive" style="margin-top: -1px; width: 100%;">
                            <thead style="background-color: #696969; color: #fff;">
                                <tr style=" height: 32px;"> 
                                    <td>Id</td>
                                    <td>Nombre</td> 
                                    <td>Traduccion</td>  
                                    <td>Opciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($traducciones as $key => $traduccion)
                                <tr style=" height: 32px;"> 
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $traduccion->nombre }}</td>
                                    <td>{{ $traduccion->traduccion }}</td>     
                                    <td>
                                        <a href="#" class="btn btn-xs btn-primary btn-traduccion-edit" data-id="{{$traduccion->id}}">Editar</a> 
                                    </td>
                                </tr>
                                @endforeach  
                            </tbody>
                    </table> 
                  </div>
              </div>
          </div>
    
        </div>
        <div id="two" style="padding: 0px;"> 
        
            <div class="row" style="padding: 2px; margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                    <div class="box box-info" style="background-color: #fff; padding: 0px;">
                        <div class="box-header with-border">
                            Nueva traduccion
                        </div>
                        @include('admin.paginas.traducciones.partial.form')
    
                    </div>
                </div> 
            </div>  

        </div>

  </div>  

</section>
       
@endsection