@extends('admin.layout.master')

@section('content')

<section class="content" style="background-color: #ddd; width:100%; position: relative;">
    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-body">
              <h3>¿Como empezar a trabajar con el sistema?</h3>
              <h5>Los primeros pasos con SALESmanago son muy simples y te llevaran unas decenas de minutos. A continuacion presentamos los 10 pasos básicos</h5>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
          
              <table class="table table-responsive" id="listaayuda">
                <thead>
                    <tr>
                        <th width="70px"></th>
                        <th></th>
                        <th with="240px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">1</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Como Identificarse para Ingresar al Administrador</h4>
                                <h5>De esta manera serás capaz de indentificar a las personas y empresas que visitan tu sitio web y controlan su comportamiento</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60" onClick="verTutorial(1)"/></div> </td>
                    </tr>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">2</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Como Agregar una Categoria</h4>
                                <h5>De esta manera serás capaz de gestionarlos</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60"  onClick="verTutorial(2)"/></div> </td>
                    </tr>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">3</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Carga de Productos</h4>
                                <h5>En nuestro super simple asistente de correo añadiras tu cuenta de envío</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60"  onClick="verTutorial(3)"/></div> </td>
                    </tr>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">4</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Enviar Newsletter</h4>
                                <h5>Por medio del envio de alertas de forma automatica, sabras cuándo y quien visita tu sitio web. Esto significa que tus comerciantes podrán ponerse en contacto con el cliente con el tiempo</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60"  onClick="verTutorial(4)"/></div> </td>
                    </tr>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">5</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Uso de las Estadisticas</h4>
                                <h5>Ver con que facilidad se puede segmentar la base de datos mediante el uso de las etiquetas. Personalizar los mensajes enviados y el contexto en la página, adaptado a los intereses de tus clientes</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60"  onClick="verTutorial(5)"/></div> </td>
                    </tr>
                    <tr>
                        <td> <div class="index-rounded"><h3 style="margin: 0 auto; text-align: center;">6</h3></div></td>
                        <td>  
                            <div>
                                <h4 style="color: #ffa500;">Agregar una Reserva</h4>
                                <h5>Monitores y consigue los mejores clientes potenciales. Puntos otorgados te permitiran identificar los contactos</h5>
                                <span><h5 style="float: left;">Descripcion detallada en la ayuda</h5><h5 style='float: left; margin-left: 35px;'>Hazlo dentro del sistema</h5></span>
                            </div>
                        </td>
                        <td> <div class="btn-ver-tutorial"><img src="../images/icono_ver_tutorial.png" width="180" height="60"  onClick="verTutorial(6)"/></div> </td>
                    </tr>
                </tbody>
              </table>
              
          </div>
        </div>
    </div>
    
</section>  
@include('admin.partial.scripts')

<script> 
    $(document).ready(function(){   

        $("#listaayuda").DataTable({
          "paging": true
        }); 
        $('.dataTables_length').addClass('bs-select'); 
    
    });
</script>

@endsection