@extends('admin.layout.master')

@section('content') 
<section class="content" style="padding-right: 0px; background-color: #f7f7f7; width: 100%;">
<div id="wrappermini">
    <div id="one" class="col-md-8"> 
 
        <!-- /.box-header -->
        <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >MAIL - SMS - WHATSAPP</a>
                </div>  
                <button id="btn_edit" class="btn btn-warning navbar-btn navbar-right btn-mail-sms-edit" data-id="1" style="margin-right: 12px;">Editar</button>
              </div>
        </nav> 

        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; min-width: 150px;">     
                 
                <div class="table-responsive">
                    <table id="dtBasicExample"   class="table-striped table-franquicia table-responsive" style="margin-top: -1px; width: 100%;">
                            <thead style="background-color: #696969; color: #fff;">
                                <tr style=" height: 32px;">
                                    <td>Dato</td> 
                                    <td>Valor</td>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr style=" height: 32px;">
                                    <td>Email soporte</td>
                                    <td>{{$email}}</td>
                                    <td> </td>
                                </tr>
                                <tr style=" height: 32px;">
                                    <td>Sms soporte</td>
                                    <td>{{$sms}}</td>
                                    <td> </td>
                                </tr>
                                <tr style=" height: 32px;">
                                    <td>Whatsapp de soporte</td>
                                    <td>{{$whatsapp}}</td>
                                    <td> </td>
                                </tr>
                                <tr style=" height: 32px;">
                                    <td>Dirección</td>
                                    <td>{{$direccion}}</td>
                                    <td> </td>
                                </tr>
                                <tr style=" height: 32px;">
                                    <td>Facebook</td>
                                    <td>{{$facebook}}</td>
                                    <td> </td>
                                </tr> 
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
                        Clasificacion
                    </div>
                     @include('admin.paginas.mail_sms.partial.form')
 
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
      //$("#two").hide();
      $('.dataTables_length').addClass('bs-select');   
    }); 
 

</script>





