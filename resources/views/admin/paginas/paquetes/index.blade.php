@extends('admin.layout.master')

@section('content') 
 
<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; "> 
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-header -->
            <div class="box-header2" style="min-width: 300px; background-color: #696969; height: 55px;">
                <h3 style="margin: 0; padding: 0; width: 190px; float: left;">PAQUETES</h3> 
                <div style="float:left; margin-right: 15px; margin: 0; padding: 0; float: right;">
                    <button  class="hidden-xs" onclick="nuevo_cliente" name="" value="ok" style="background-color: #cd853f; margin-top: -2px; min-width: 140px; height: 36px; font-size: 1.1em; border: 0px;">Agregar Paquete</button>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-body" style="padding: 0; margin: 0; height: 800px; min-width: 150px;"> 
                  <table id="tb_paquete" class="table table-responsive">
                    <thead style="background-color: #696969; color: #fff;">
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Plan</th>
                      <th>Precio</th>
                      <th>Precio Promo</th>
                      <th>Estado</th> 
                    </tr>
                    </thead>
                    <tbody>  
                    </tbody>
                  </table>
            </div>
            <!-- /.end box-body -->
            
        </div>
    </div>
    <div id="two" style="padding: 0px;"> 
    
        <div class="row">
          <div class="col-md-12">
            <div class="box">
        
              <form action="" class="form">
                <div class="form-group">
                	
                	
                	        
                </div> 
              </form>
         
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
      $('#tb_paquete').DataTable({
        "paging": true
      });
    
      $('.dataTables_length').addClass('bs-select');   
    }); 

</script>


