@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; ">  
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
            
            <!-- /.box-header -->
            <div class="box-header2" style="min-width: 300px; background-color: #696969; height: 55px;">
                <h3 style="margin: 0; padding: 0; width: 190px; float: left;">MOZOS Y MEZAS</h3> 
                <div style="float:left; margin-right: 15px; margin: 0; padding: 0; float: right;">
                    <button  class="hidden-xs" onclick="verQr([])" name="" value="ok" style="background-color: #cd853f; margin-top: -2px; min-width: 140px; height: 36px; font-size: 1.1em; border: 0px;">Ver QR</button>
                    <button  class="hidden-xs" onclick="addMozo()" name="" value="ok" style="background-color: #cd853f; margin-top: -2px; min-width: 140px; height: 36px; font-size: 1.1em; border: 0px;">Agregar Mozo</button>
                </div> 
            </div>
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; height: 800px; min-width: 150px; max-width: 950px;"> 
                
                <table id="dtBasicExample"  class="table-striped" style="margin-top: -1px; "> 
                    <thead style="background-color: #696969; color: #fff;" class="header12">
                    <tr style=" height: 45px;">
                      <th width="40px;" style="padding-left: 15px;">Id</th>
                      <th width="120px;">Foto</th>
                      <th width="280px;">Nombre</th>
                      <th width="280px;">Direccion</th>
                      <th width="280px;">Ciudad</th>
                      <th>Pais</th>
                      <th>Celular</th>
                      <th>Alta</th>
                      <th></th>
                      <th width="120px;">Estado</th> 
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($mesas as $key => $mesa)
                    <tr>
                      <th>{{ $key + 1 }}</th>
                      <td>{{ $mesa->Restaurant->direccion }} </td>
                      <td>
                        @foreach($mesa->mesas as $m)
                          - {{$m->numeromersa}}
                      @endforeach

                      </td>

                      <td>{{ $mesa->created_at }}</td>
                      <td> <a href="#" class="btn btn-xs btn-primary btn-editar">Editar</a><a href="#" class="btn btn-xs btn-danger btn-eliminar">Eliminar</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div> 
        </div> 
    </div>
     
    <div id="two" style="padding: 0px;"> 
        <div class="row">
          <div class="col-md-12" >
            <div class="box"> 
                
                <form class="form-horizontal" id="fr-franchise"> 
                <div class="row" style="padding: 2px; margin: 0px;">
                    <div class="col-md-12" style="padding: 0px;">
                      <div class="box" style="background-color: #fff; padding: 0px;">

                              <fieldset>

                                <!-- Form Name -->
                                <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>
 
                                <!-- form-group -->
                                <div class="form-group" id="content_add_mozo_mesa"> 
                                </div>  
                                <!-- /.form-group -->
                              </fieldset>
                        </div>
                      </div>
                  </div>
                </form>
 
            </div>
          </div>
        </div> 
    </div> 
</div>
      
</section>

<script>
    $(document).ready(function(){ 
       
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');

        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
 
    }); 
    
    function readURLFranquiciado(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_upload_mozo').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
     
    var two = document.getElementById("two").hidden = true;    
</script>

<script>
    
    function addMozo()
    {
        var two = document.getElementById("two");
        two.hidden = false;
        
        //agrega nuevo mozo
        var main = document.getElementById("content_add_mozo_mesa"); 
        main.innerHTML = "";
        
        addTextForm(main, "nombre", "Nombres y Apellidos");
        addTextForm(main, "direccion", "Direccion");
        addTextForm(main, "ciudad", "Ciudad");
        addTextForm(main, "pais", "Pais");
        addTextForm(main, "celular", "Celular");
        addTextForm(main, "mail", "Mail");
        addTextForm(main, "alta", "Alta");
        
        addBotonSubmit(main);
        addImageToUpload(main);
        addMap(main); 
         
    }
    
    function addTextForm(form, name, title)
    {
        var label = document.createElement("label");
        label.className = "col-md-3 control-label";
        label.for = name;
        label.innerHTML = title;
        
        var div1 = document.createElement("div");
        div1.className = "col-md-8";
        
        var input1 = document.createElement("input");
        input1.id = name;
        input1.style = "background-color: #e5e5e5;";
        input1.type = "text";
        input1.placeholder = title;
        input1.name = name;
        input1.className = "form-control input-md";
        
        div1.appendChild(input1);
        
        form.appendChild(label);
        form.appendChild(div1); 
    }
    
    function addBotonSubmit(form)
    {
        var label = document.createElement("label");
        label.className = "col-md-3 control-label";
        label.for = "btn-save"; 
        
        var div1 = document.createElement("div");
        div1.className = "col-md-8";
        
        var button1 = document.createElement("button");
        button1.id = "btn-save";  
        button1.name = "btn-save";
        button1.className = "btn btn-primary";
        button1.innerHTML = "Guardar";
        
        div1.appendChild(button1);
        
        form.appendChild(label);
        form.appendChild(div1);  
    }
    
    function addImageToUpload(form)
    {
        var label = document.createElement("label");
        label.class = "control-label";
        label.style = "padding-left: 15px;";
        label.for = "btn-save";
        label.innerHTML = "Imagen de franquiciado";
        
        var span = document.createElement("span"); 
        span.className = "input-group-btn"; 
        var span2 = document.createElement("span"); 
        span2.className = "btn btn-default btn-file";
        span2.innerHTML = "Buscar…"; 
        var input2 = document.createElement("input");
        input2.type = "file";
        input2.id = "imgInpMozo";
        input2.onchange = function () {
            readURLFranquiciado(this);
        };
        
        span2.appendChild(input2);
        span.appendChild(span2);
        
        var input = document.createElement("input"); 
        input.type = "text";
        input.readOnly = true;
        input.className = "form-control";
         
        var div1 = document.createElement("div"); 
        div1.className = "input-group";
        div1.appendChild(span);
        div1.appendChild(input);
        
        var img1 = document.createElement("img"); 
        img1.id = "img_upload_mozo";
        img1.style = "padding: 15px; width: 100%;";
        
        form.appendChild(label);
        form.appendChild(div1);
        form.appendChild(img1);
    }
    
    function addMap(form)
    {
        var div1 = document.createElement("div");
        div1.id = "googleMap";
        div1.style = "width:100%; height:350px; margin: 5px; padding: 5px;";
        form.appendChild(div1); 
    }
 
        
        
</script>

<script>
    function verQr(lista)    
    { 
        var two = document.getElementById("two");
        two.hidden = false;
        
        var main = document.getElementById("content_add_mozo_mesa"); 
        main.innerHTML = "";
         
        var div0 = document.createElement("div");
        div0.className = "input-group";
        div0.style = "margin: 0 auto;";
        
        if( lista === null || lista.length === 0 ) // ver todos
        {
            createBtnMM(div0, "Imprimir Todos QR", function(){ PrintMultipleImages(["/dist/img/qr_sample.png", "/dist/img/qr_sample.png"]); } );
            main.appendChild(div0);
            for(i=1; i<=24; i = i+2)
            {
                var div1 = document.createElement("div");
                div1.style = "padding:0px";
                createBtnMesa(div1, i.toString(), function(){ verMesas(i); }); 
                showQRImg(div1, 1, "/dist/img/qr_sample.png"); 
                createBtnMM(div1, "Imprimir", function(){ PrintImage("/dist/img/qr_sample.png"); });

                if(i+1>24){continue;}
                createBtnMesa(div1, (i+1).toString(), function(){ verMesas(i); }); 
                showQRImg(div1, 1, "/dist/img/qr_sample.png"); 
                createBtnMM(div1, "Imprimir", function(){ PrintImage("/dist/img/qr_sample.png"); });

                main.appendChild(div1);  
            }
        }
        else{

            createBtnMM(div0, "Imprimir Todos QR", function(){ PrintMultipleImages(["/dist/img/qr_sample.png", "/dist/img/qr_sample.png"]); } );
            main.appendChild(div0);
            for(i=0; i<lista.length; i = i+2)
            {
                var div1 = document.createElement("div");
                div1.style = "padding:0px";
                createBtnMesa(div1, (lista[i]).toString(), function(){ verMesas(lista[i]); }); 
                showQRImg(div1, 1, "/dist/img/qr_sample.png"); 
                createBtnMM(div1, "Imprimir", function(){ PrintImage("/dist/img/qr_sample.png"); });

                if(i+1===lista.length){ main.appendChild(div1);  continue;}
                createBtnMesa(div1, (lista[i+1]).toString(), function(){ verMesas(lista[i+1]); }); 
                showQRImg(div1, 1, "/dist/img/qr_sample.png"); 
                createBtnMM(div1, "Imprimir", function(){ PrintImage("/dist/img/qr_sample.png"); });

                main.appendChild(div1);  
            }
        }
    }
</script>

<script>
    function verMesas(id)    
    { 
        //get request segun id
        var url = "algo/"+id;
        $.get( url, function( data ) {
             
             //TODO

        }, "json" );

        //---------------------va en TODO
        var two = document.getElementById("two");
        two.hidden = false;
        
        //agrega nuevo mozo
        var main = document.getElementById("content_add_mozo_mesa"); 
        main.innerHTML = "";
        
        var div1 = document.createElement("div");
        div1.className = "input-group";
        div1.style = "margin: 0 auto;";
        
        var listaMesasQR = [];
        createBtnMM(div1, "Ver QR", function(){ verQr(listaMesasQR); });
        main.appendChild(div1);
        for(i=1; i<=24; i++)
        {
            createBtnMesa(main, i.toString(), function(){ 
                
                if( this.id === "btn_mesa" ){
                    this.id = "btn_mesa_active";
                    listaMesasQR.push( parseInt( this.innerHTML ) );
                }else
                {
                    this.id = "btn_mesa"; 
                    var idx = listaMesasQR.indexOf( parseInt( this.innerHTML ) ); 
                    listaMesasQR.splice( idx ,1 ); 
                }
            });    
        }
        //------------------------
        
    }

 
</script>

<script>

    function ImagetoPrint(source)
    {
        return "<html><head><script>function step1(){\n" +
                "setTimeout('step2()', 10);}\n" +
                "function step2(){window.print();window.close()}\n" +
                "</scri" + "pt></head><body onload='step1()'>\n" +
                "<img src='" + source + "' /></body></html>";
    }

    function PrintImage(source)
    {
        Pagelink = "about:blank";
        var pwa = window.open(Pagelink, "_new");
        pwa.document.open();
        pwa.document.write(ImagetoPrint(source));
        pwa.document.close();
    }
    
    function PrintMultipleImages(listaSource)
    {
        Pagelink = "about:blank";
        var pwa = window.open(Pagelink, "_new");
        pwa.document.open();
        for(i=0; i<=listaSource.length; i++){
            pwa.document.write(ImagetoPrint(listaSource[i]));
        }
        pwa.document.close();
    }

</script>

<script> 
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    } 
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDI_HGADUhhryYf0nHOo7BNtFM8DGBzVk&callback=myMap" async defer></script>


@endsection