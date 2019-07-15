@extends('admin.layout.master')

@section('content')
<section class="content" style="float: none; width: 100%; padding: 0px; ">
     
    <div style="background-color: #32cd32; height: 1000px; width: 240px; margin-left: 30px; float: left; "> 
            <div><img src="../images/logo.png" width="180px" height="180px" style="margin-top: 80px; margin-left: 30px;"></div>
            <div style=" margin-left: 55px;"><h3>Su Inversion</h3></div>
            <div style=" margin-left: 30px;"><h1>$ 2300  /mes</h1></div>
            <div style=" margin-left: 35px;"><h3>Sus puntos al dia</h3></div>
            <div style=" margin-left: 75px;"><h1>$ 651</h1></div>
            <div style=" margin-left: 35px;"><button style="width: 170px; height: 45px;">Enviar</button> </div> 
    </div>
    
    <div style="width: 100%; background-color: #a52a2a; height: 55px; color: #fff; margin-top: 12px;">
        <h2 style="float: right; padding-right: 50px; margin-top: 10px;">ARMA TU SOLUCION</h2>
    </div>
     
    
    <div style="width: 70%; height: 400px;margin-top: 50px; margin-left: 305px;">
        <div class="box-body2">
            <table id="tb-cliente" class="table table-responsive table-hover">
                <thead style="background-color: #696969; color: #fff;">
                    <tr>
                      <th>Puntos comprados al dia</th>
                      <th>$ 651</th> 
                      <th></th>
                    </tr>
                </thead>
                <tbody> 
                </tbody>
            </table>
          </div>
    </div>
    
    
</section>
@include('admin.partial.scripts')
   
@endsection