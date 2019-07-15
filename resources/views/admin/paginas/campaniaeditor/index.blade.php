@extends('admin.layout.master')

@section('content')
<section class="content" style="padding-right: 0px; width:100%;">
          
     <nav class="navbar navbar-inverse" style="background-color: #fff; border: 1px #aaa solid;margin: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
              <h3>Editor Drag and Drop</h3>
            </div> 
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><button type="submit" class="btn btn-default">Cargar una version guardada</button></a></li>
              <li><a href="#"><button type="submit" class="btn btn-default">Guardar</button></a></li>
              <li><a href="#"><button type="submit" class="btn btn-default">Hacer envio de prueba</button></a></li>
              <li><a href="#" onclick="vistaprevia()"><button type="submit" class="btn btn-primary">Guardar y salir</button></a></li>
            </ul>
             
        </div>
     </nav> 
          
     <div class="row" style="background-color: #eee;">
          <div class="col-md-3"> 
                <h3 style="text-align: center">Galeria de imagenes</h3>
                
                <div class="mdb-lightbox">
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                  <figure class="col-md-4" style="padding: 4px;">
                    <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
                      <img width="110" height="80" alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
                    </a>
                  </figure>
                
                </div> 
                
                
                <form class="form-horizontal" id="fr-franchise"> 
                  <div class="form-group" style="margin: 8px 6px 8px 4px;">
                      <label class="control-label" style="padding-left: 15px;" for="btn-img">Agregar una imagen</label> 
                      <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file">
                                  Browse… <input type="file" id="imgInpLogo">
                              </span>
                          </span>
                          <input type="text" name="btn-img" class="form-control" readonly>
                      </div>
                      <img id='img-upload_logo' style="padding: 15px; width: 100%;"/>
                  </div>
                  <div class="form-group" style="margin: 8px 6px 8px 4px;">
                  	<button type="button" class="btn btn-primary" style="margin: 0 auto">Agregar</button>
                  </div>
                </form> 
          </div>
             
          <div class="col-md-5"> 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;"">header</div>
                </div>
                   
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;"">
						<img src="../images/android.png" width="100" height="70"/>
					</div>
                </div>
                 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;">
						<img src="../images/android.png" width="550" height="420"/> 
					</div>
                  	<div class="panel-body" >
						<h5 style="color: #444; font-weight: bold;">Mi empresa</h5>
						<h6 style="color: #777;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h6>
						<button class="btn btn-primary">Boton</button> 
					</div>
                </div>
                 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;"">                  		
                  		<div class="col-sm" style="display: inline-block;">
							<img src="../images/android.png" width="260" height="210"/> 
    						<h5 style="color: #444; width: 260px; font-weight: bold;">Titulo</h5>
    						<h6 style="color: #777; width: 260px; text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h6>
    						<button class="btn btn-primary">Boton</button> 
                  		</div>
                  		
                  		<div class="col-sm" style="display: inline-block;">
							<img src="../images/android.png" width="260" height="210"/>  
    						<h5 style="color: #444; width: 260px; font-weight: bold;">Titulo</h5>
    						<h6 style="color: #777; width: 260px; text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h6>
    						<button class="btn btn-primary">Boton</button>    		
                  		</div>              		
					</div>
                </div>
                 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;"">
                  		
					</div>
                </div>
                 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body">
						<h6 style="color: #777;">Mi empresa</h6>
						<h6 style="color: #777;">9, Rue Bleue</h6>
						<h6 style="color: #777;">75009 Paris</h6>
						<h6 style="color: #777;">contacto@empresa.com</h6>
					</div>
                </div>
                 
              	<div class="panel panel-default" style="border: 1px dashed #999; margin: 4px;">
                  	<div class="panel-body" style="text-align: center;"">
						<h6 style="text-align: center; color: #777;">E-mail enviado a (EMAIL)</h6>
						<h6 style="text-align: center; color: #777;">Ha recibido este e-mail porque esta suscrito a xxxxx</h6>
						<h6 style="text-align: center; color: #777;">Cancelar la suscripcion</h6>
						<h6 style="text-align: center; color: #777;">Enviado por</h6>
					</div>
                </div>
                
          </div>
             
          <div class="col-md-3"> 
          	<h3>General</h3>
          	<h5>Color de fondo</h5>
          </div>
              
    </div>
 
  
</section>
@endsection
@include('admin.partial.scripts')

<script>
    $(function () {
    	$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    $(document).ready( function() {

        $("#imgInpLogo").change(function(){ 
            readURLLogo(this); 
        }); 
        
    });

    function readURLLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader(); 
            reader.onload = function (e) {
                $('#img-upload_logo').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

	function vistaprevia()
	{
		location.href = '/admin/campaniavistaprev';		
	}
	
</script>


<script language="javascript" type="text/javascript">
    function printDiv(divID) {
        
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";

        //Print Page
        window.print();

        //Restore orignal HTML
        document.body.innerHTML = oldPage;
             
    }
</script>

