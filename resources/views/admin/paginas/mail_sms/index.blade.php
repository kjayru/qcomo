@extends('admin.layout.master')

@section('content') 
<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; "> 
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-header -->
            <div class="box-header2" style="min-width: 300px; background-color: #696969; height: 55px;">
                <h4 style="margin: 0; padding: 0; width: 190px; float: left;">PLANTILLAS DE MAILS</h4>  
            </div>
            <!-- /.box-body -->
            <div class="box-body" style="padding: 0; margin: 0; height: 800px; min-width: 150px;"> 
                  
                <form>
              
                        <div class="panel panel-default">
                              <div class="panel-heading"><h5>Plantilla general</h5></div>
                              <table id="tp_general" class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                  <th>Disparadores</th>
                                  <th>Email</th>
                                  <th>SMS</th>
                                  <th>WhatsApp</th> 
                                  <th>Comportamiento</th> 
                                </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                              </table>
                        </div>
                         
                        <div class="panel panel-default">
                              <div class="panel-heading"><h5>Plantilla de pedido</h5></div>
                              <table id="tp_pedido" class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                  <th>Disparadores</th>
                                  <th>Email</th>
                                  <th>SMS</th>
                                  <th>WhatsApp</th> 
                                  <th>Comportamiento</th> 
                                </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                              </table>
                        </div>
                        
                                           
                        <div class="panel panel-default">
                              <div class="panel-heading"><h5>Plantilla de reserva</h5></div>
                              <table id="tp_reserva" class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                  <th>Disparadores</th>
                                  <th>Email</th>
                                  <th>SMS</th>
                                  <th>WhatsApp</th> 
                                  <th>Comportamiento</th> 
                                </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                              </table>
                        </div>
                         
                        <div class="panel panel-default">
                              <div class="panel-heading"><h5>Plantilla de estado del pedido</h5></div>
                              <table id="tp_estado" class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                  <th>Disparadores</th>
                                  <th>Email</th>
                                  <th>SMS</th>
                                  <th>WhatsApp</th> 
                                  <th>Comportamiento</th> 
                                </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                              </table>
                        </div> 
                
                    <input type="button" name="submit" value="Guardar cambios" />
                    
                </form>
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
      $('#tp_general').DataTable({
        "paging": true
      });
      $('#tp_pedido').DataTable({
          "paging": true
        });
      $('#tp_reserva').DataTable({
          "paging": true
        });
      $('#tp_estado').DataTable({
          "paging": true
        });
    
      $('.dataTables_length').addClass('bs-select');   
    }); 

</script>





