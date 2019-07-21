@extends('admin.layout.master')

@section('content')
  
    <section class="content-header" >          
    </section>

      <!-- Main content -->
    <section class="content" style="position: relative; width: 100%; min-width: 300px; padding: 15px; padding-top: 25px;">
    


            <div class="panel">

                <div class="upper-dashboard">
                    @if($role=="local")
                    <div class="tablero-dash-opc">
                        <a href=""><i class="fa fa-plus" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/productoscarta"><i class="fa fa-book" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/clientes"><i class="fa fa-user" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/pedidos"><img src="/dist/img/icon_pedidos_b.png" width="15px" style="margin: 0px 7px 0px 0px; "/></i></a>
                        <a href="/admin/reservas"><img src="/dist/img/icon_reservation_b.png" width="15px" style="margin: 0px 7px 0px 0px; "/></i></a>
                        <a href="/admin/miposicionpuntos"><i class="fa fa-table" style="color: #777778; margin-right: 10px;"></i></a>
                    </div> 
                    @endif
                    </br>
                    
                    <div class="myquerymain" >
                        <form> 
                            <ul class="list-inline">
                                <li>
                                    <i class="fa fa-search" style="color: #777778; margin-right: 10px;"></i>
                                </li> 
                                <li style="width: 80%;">
                                    <div>
                                        <input   type="text" id="myInput" onkeyup="searchInBoxes()" placeholder="Buscar en todas las categorias.."  style="margin-left: 12px; min-width: 190px; width: 100%;background-color:#d3d3d3; border: 0px; height: 32px;" >
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>  

            </div>
    
            <div id="r0" style="margin: 0 auto;"> 
                @if($role=='admin')
                    @include('layouts.partials.dashadmin')
                @endif
                @if($role=='franquicia')
                    @include('layouts.partials.dashfranquicia')
                @endif
            </div>
    
        </div>

    </section>
<!--INICIO DE SCRIPT-->
@include('admin.partial.scripts')

@endsection