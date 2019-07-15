@extends('admin.layout.master')

@section('content') 



<div class="container" style="background-color: #fff;">
    <div class="content1 content" style="background-color: #f0f0ff;">
   
        
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Configuracion General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#recompensa" role="tab" aria-controls="recompensa" aria-selected="false">Puntos de Recompensa para el Usuario</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#puntos" role="tab" aria-controls="puntos" aria-selected="false">Registro de Puntos</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cronjobs" role="tab" aria-controls="cronjobs" aria-selected="false">CronJobs</a>
            </li> 
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade " id="restaurantes" role="tabpanel" aria-labelledby="general"  style="background-color: #fff;">

 
                
            </div>
            <div class="tab-pane fade" id="cervecerias" role="tabpanel" aria-labelledby="recompensa" style="background-color: #fff; padding: 15px;">

         
                
            </div>  
            <div class="tab-pane fade" id="cervecerias" role="tabpanel" aria-labelledby="puntos" style="background-color: #fff; padding: 15px;">

         
                
            </div>  
            <div class="tab-pane fade" id="cervecerias" role="tabpanel" aria-labelledby="cronjobs" style="background-color: #fff; padding: 15px;">

         
                
            </div>  
        </div>
        
        
    </div> 
</div>




@endsection
@include('admin.partial.scripts')