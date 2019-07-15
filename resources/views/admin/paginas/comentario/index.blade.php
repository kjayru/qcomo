@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one">  
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >COMENTARIOS PENDIENTES</a>
                </div>   
              </div>
		</nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0; margin: 0; height: 840px;    overflow-y: auto;">  
                <h5>Esta sección muestra una lista de comentarios pendientes disponibles en espera de aprobación</h5>
                <table id="tb-cliente0" class="table table-responsive">
                    <thead style="background-color: #f0f0f0; color: #000;">
                    <tr>
                        <th style="width: 80px;">Nº</th>
                        <th style="width: 320px;">Comentario</th>
                        <th style="width: 80px;">Respuestas</th>
                        <th style="width: 80px;">Estados</th>
                        <th style="width: 140px;">Fecha</th>
                        <th style="width: 140px;">Valorado</th> 
                    </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>1</td>   
                            <td>2</td>   
                            <td>3</td>   
                            <td>4</td>   
                            <td>5</td>   
                            <td>6</td>  
                        </tr> 
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    
    <div id="two">  
            <div classss="row" style="padding: 0px; margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                  <div class="box" style="background-color: #fff; padding: 8px;">
                
                    <!-- Form Name -->
                    <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 45px; padding-top: 4px;">COMENTARIOS APROBADOS</legend>
  

                    <table id="tb-cliente1" class="table">
                        <thead>
                            <tr>
                              <th width="50px"></th>
                              <th></th>  
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                   </table>
 
                
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
        $("#tb-cliente1").DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select'); 
    
    });

    var titulo_seccion = document.getElementById("titulo_seccion");
    titulo_seccion.innerHTML = "COMENTARIOS";
</script>
@endsection