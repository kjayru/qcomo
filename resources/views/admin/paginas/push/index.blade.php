@extends('admin.layout.master')

@section('content')

<section class="content" style="width:100%; position: relative; padding: 0px;"> 
    </br></br></br></br>
 
    <div style="min-width: 340px; max-width: 600px; margin:0 auto;">
        
        <div  class="col-md-3" style="width: 300px; margin:0 auto;">  
            <div class="box" style="cursor: pointer; height: 320px;" onclick="onComercios()">
              
                <!-- /.box-body -->
                <div class="box-body no-padding" style="margin-bottom: 50px; height: 320px;"> 
                    <img src="../images/monitor.png" width="85px" height="85px" style="margin-left: 92px; margin-top: 85px;" />
                    <h5 style="text-align: center">Envie mensajes Push Web</h5>
                    <h5 style="text-align: center">a los Comercios</h5>
                </div>
 
            </div>
        </div>
         
        <div  class="col-md-3" style="width: 300px; margin:0 auto;"> 

            <div class="box" style="cursor: pointer; height: 320px;" onclick="onComensal()">
                 

                <!-- /.box-body -->
                <div class="box-body no-padding" style="margin-bottom: 50px; height: 320px;"> 
                    <img src="../images/tablet.png" width="85px" height="85px" style="margin-left: 92px; margin-top: 85px;" />
                    <h5 style="text-align: center">Envie mensajes Push Web</h5>
                    <h5 style="text-align: center">a los Comensales</h5>
                </div>
 
            </div>
        </div>
        
    </div>
    </br></br></br></br>
         
    
</section>
@include('admin.partial.scripts')

<script>
    function onComercios(){  window.location.href = "/admin/push_comercios"; }
    function onComensal(){  window.location.href = "/admin/push_comensal"; } 
    
</script>
@endsection