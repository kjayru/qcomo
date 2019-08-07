@extends('admin.layout.master')

@section('content')
 

<section class="content" style="float: none; width: 100%; padding: 0px; ">

    <div style="background-color: #32cd32; height: 1000px; width: 240px; margin-left: 30px; float: left; margin: 12px;"> 

            <?php
                if( !empty($name_client)){
                    echo '<div class="panel panel-default">';
                    echo    '<div class="panel-heading">'.$name_client.'</div>';
                    echo '</div>';
                }
            ?>

            <div><img src="/storage/franchise/<?php echo $logo_client;?>" width="180px" height="180px" style="margin-top: 80px; margin-left: 30px;"></div>
            <div style=" margin-left: 35px;"><h3>Su inversion / mes</h3></div>
            <div style=" margin-left: 30px;"><h2 id="txt_inversion_total">{{"$ ".$preciototal}}</h2></div>
            <div style=" margin-left: 35px;"><h3>Sus puntos</h3></div>
            <div style=" margin-left: 30px;"><h2 id="puntos_total">{{$consumototal}}</h2></div>
            <div style=" margin-left: 35px;"><button style="width: 170px; height: 45px;">Enviar</button> </div> 
    </div>
    
    <div style="width: 100%; background-color: #a52a2a; height: 55px; color: #fff; margin-top: 12px;">
        <h2 style="float: right; padding-right: 50px; margin-top: 10px;">ARMA TU SOLUCION</h2>
    </div>
     
    <div class="panel panel-default">
        <div class="panel-heading">Paquete seleccionado</div>
        <div class="box-body2">
            <table id="tb-cliente" class="table table-responsive table-hover">
                <thead style="background-color: #696969; color: #fff;">
                    <tr>
                      <th>Id</th>  
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Precio / mes</th>  
                      <th>Promocion / mes</th>  
                      <th width="90px">Opciones</th> 
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($combos as $combo)   
                        <?php 
                            if( $combo->id == $combo_actual ){
                                echo '<tr style="background-color: #ffff00">';
                            }else{
                                echo '<tr>';
                            }
                        ?>
                            <th>{{$combo->id}}</th>
                            <th>{{$combo->name}}</th>
                            <th>{{$combo->description}}</th>
                            <th>{{$combo->price}}</th>
                            <th>{{$combo->promo}}</th>
                            <?php 
                                if( $combo->id == $combo_actual ){
                                    echo "<th>Seleccionado</th>";
                                }else{
                                    echo "<th><a href='/admin/package/".$client_id."/".$combo->id."'><button class='btn-primary'>Seleccionar</button></a></th>";
                                }
                            ?>
                             
                        </tr>
                    @endforeach                
                </tbody>
            </table>
          </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">Puntos adquiridos</div>
        <div class="box-body2">
            <table id="tb-cliente" class="table table-responsive table-hover">
                <thead style="background-color: #696969; color: #fff;">
                    <tr>
                      <th>Puntos</th>
                      <th>Importe</th> 
                      <th>Fecha</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($points_buyed as $pointbuyed)   
                        <tr>
                            <th>{{$pointbuyed->points}}</th>
                            <th>{{"$ ".$pointbuyed->importe}}</th> 
                            <th>{{$pointbuyed->created_at}}</th> 
                            <th></th>
                        </tr>
                    @endforeach                
                </tbody>
            </table>
          </div>
    </div>
    
    
</section>

<script>
$(document).ready(function(){
    $( "select" )
        .change(function() {
            var str = "";
            $( "select option:selected" ).each(function() {
                str += $( this ).text() + " ";
                //alert(str);



            }); 
    });
});
</script>


@include('admin.partial.scripts')
   
@endsection