@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; "> 
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item active">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cupones" role="tab" aria-controls="cupones" aria-selected="true">Cupones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#regalos" role="tab" aria-controls="regalos" aria-selected="false">Regalos</a>
            </li> 
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade active in" id="cupones" role="tabpanel" aria-labelledby="home-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;">
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">CUPONES</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addCupon()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear cupon</button>
                        </div>
                    </div>
 
                    <div  id="content_lista_cupones">
                    </div> 
                 
                </div>
                
            </div>
            <div class="tab-pane fade" id="regalos" role="tabpanel" aria-labelledby="profile-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;">
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">REGALOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addRegalo()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear regalo</button>
                        </div>
                    </div>
 
                    <div  id="content_lista_regalos" style="min-height: 500px;">
                    </div>  
                 
                </div>
                 
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
                                <div class="form-group" id="content_add_record"> 
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
@include('admin.partial.scripts')

<script> 
    
    var two = document.getElementById("two").hidden = true;  

    $(document).ready(function(){         
        $('#tb-cupon').DataTable({
          "paging": true
        });        
        $('#tb-regalo').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
         
        listaCupones();
        listaRegalos();
    });
</script>

<script>

    function addCupon()
    {
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";
        
        var arrNameDescuento = ["2x1", "3x1", "4x1"];
        var arrValorDescuento = [1, 2, 3];
        
        var arrNameUso = ["1 vez al mes", "2 veces al mes", "3 veces al mes"];
        var arrValorUso = [1, 2, 3];

        addTextForm(record, "titulo", "Titulo");
        addTextForm(record, "producto", "Productos"); 
        addTextFormMultilineLarge(record, "condiciones", "Condiciones"); 
        addTextForm(record, "restobar", "Resto - bar");  
        addNumberForm(record, "cantidad", "Cantidad", 1, 1000, 1);
        addTextForm(record, "descuento", "Descuento - promo");  
        addSelectForm(record, "descuento", "Descuento", arrNameDescuento, arrValorDescuento);
        addTextForm(record, "dias", "Dias");          
        addSelectForm(record, "cantidad", "Veces que lo puede usar", arrNameUso, arrValorUso);
        addImageToUpload(record, "imgcupon", "Cupon", function(){ readURL(this, "#imgcupon"); }); 
        //TODO submit envia los datos al servidor
        addBotonSubmit(record);

    }    
    
    
    function addRegalo()
    {

        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";

        var arrNameSistema = ["Por cercania", "QR", "Codigo"];
        var arrValorSistema = [1,2,3];
        
        var arrNameDist = ["metro", "decimetro", "kilometro"];
        var arrValorDist = [1,2,3];

        addBubTitle(record, "EDITAR CONTENIDO");
        addTextForm(record, "nombre", "Nombre del programa de fidelizacion");
        addTextFormMultilineLarge(record, "descripcion", "Descripcion (Opcional)"); 
        addTextFormMultilineLarge(record, "terminos", "Terminos del servicio o Instrucciones (Opcional)"); 
        addBubTitle(record, "DISPLAY");
        addImageToUpload(record, "img_cabecera", "Imagen de Cabecera para Movil(Opcional)",  function(){ readURL(this, "#img_cabecera"); });        
        addSwitchLarge(record, "repeticion", "¿Puede este programa de fidelizacion repetirse?");
        addNumberForm(record, "puntos_debloqueo", "Puntos necesarios para desbloquear el Premio", 1, 10000, 1);
        addSelectForm(record, "Sistema", "GPS Checkin", arrNameSistema, arrValorSistema);
        addNumberForm(record, "maxdist", "Maxima distancia permitida desde el local");
        addSelectForm(record, "unidaddist", "Unidad de medida de la distancia", arrNameDist, arrValorDist);
        
        
        addBubTitle(record, "CONFIGURACION");
        var divc1 = document.createElement("div");
        divc1.style = "width: 100; display: inline-block;";
        divc1.className = "col-md-8"; 
        addSwitchLarge(divc1, "zonahoraria", "Zona horaria"); 
        record.appendChild(divc1); 
        addTimeZone(divc1); 
        
        var divc2 = document.createElement("div");
        divc2.style = "min-width: 120px; display: inline-block;";
        divc2.className = "col-md-8"; 
        addSwitchLarge(divc2, "limitestemp", "Limites temporales");
        addCalendar(divc2, "fecha_inicio", "inicio");
        addCalendar(divc2, "fecha_final", "final");
        record.appendChild(divc2);  
        
        var divc3 = document.createElement("div");
        divc3.style = "width: 100; display: inline-block;";
        divc3.className = "col-md-8"; 
        addSwitchLarge(divc3, "premionotificacion", "Premio por notificaciones Push");
        record.appendChild(divc3);  
        addTextFormMultilineLarge(record, "contenidonotpush", "Contenido de notificacion push"); 
        
        //TODO submit envia los datos al servidor
        addBotonSubmit(record);
        
    }    
    
    function listaRegalos()
    {
        
        var main = document.getElementById("content_lista_regalos"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tregalos";
        table1.className = "table table-responsive table-striped";  
        var thead1 = table1.createTHead(); 
        thead1.style = "background-color: #696969; color: #fff;";
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        var cell5 = document.createElement("th"); 
        var cell6 = document.createElement("th"); 
        var cell7 = document.createElement("th"); 
        
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Foto";
        cell1.width = 180;
        cell1.className = "text-center";
        cell2.innerHTML = "Titulo";
        cell2.className = "text-center";
        cell3.innerHTML = "Puntos";
        cell3.className = "text-center";
        cell4.innerHTML = "Producto";
        cell4.width = 90;
        cell4.className = "text-center"; 
        cell5.innerHTML = "Condiciones";
        cell5.className = "text-center";
        cell6.innerHTML = "Resto - Bar";
        cell6.className = "text-center";
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        
        var tbody1 = document.createElement("tbody");
        
        var id = getUrlParameter('id'); 
        $.get("test0", { id: id }).done(function( data ) { 
            
            //TODDO completar con codigo
            for(i=0; i<data.length; i++) //para cada fila
            {
                
                var regalo = data[i];
                var id = regalo.id; 
                var imgsrc = regalo.img;
                var titulo = regalo.destino;
                var promo = regalo.radio;
                var producto = regalo.fecha;
                var condiciones = regalo.iphones;
                var restibar = regalo.andr; 
                var estado = regalo.andr;  
                
                var tr1 = document.createElement('tr');
                tr1.style = "border-bottom: 0px solid #dcdcdc;";
                var td11 = document.createElement('td');
                var td12 = document.createElement('td');
                var td13 = document.createElement('td');
                var td14 = document.createElement('td');
                var td15 = document.createElement('td');
                var td16 = document.createElement('td');
                var td17 = document.createElement('td');
                var td18 = document.createElement('td');

                var h61 = document.createElement("h6");
                h61.innerHTML = id;
                td11.appendChild(h61);

                var img61 = document.createElement("img");
                img61.src = imgsrc;
                img61.width = "150"; 
                img61.height = "90";
                img61.style = "display: block";            
                td12.appendChild(img61);
                var divxx = document.createElement("div");
                divxx.style = "margin: 0 auto; padding: 0 0 0 0; position: absolute; bottom: 14px; ";
                createTipoCelular(divxx, 1, 1);
                createTipoCelular(divxx, 0, 58);   
                td12.appendChild(divxx);

                var h62 = document.createElement("h6");
                h62.innerHTML = titulo;
                td13.appendChild(h62);

                var h63 = document.createElement("h6");
                h63.innerHTML = promo;
                td14.appendChild(h63);

                var h64 = document.createElement("h6");
                h64.innerHTML = "Martes 22 20:32";
                h64.style = "display: block";
                td15.appendChild(h64);  

                var h66 = document.createElement("h6");
                h66.innerHTML = condiciones; 
                td16.appendChild(h66); 

                var h67 = document.createElement("h6");
                h67.innerHTML = restibar; 
                td17.appendChild(h67);  

                addSwitch2(td18, estado);

                tr1.appendChild(td11);
                tr1.appendChild(td12);
                tr1.appendChild(td13);
                tr1.appendChild(td14);
                tr1.appendChild(td15);
                tr1.appendChild(td16);
                tr1.appendChild(td17);
                tr1.appendChild(td18);
                tbody1.appendChild(tr1); 

            }
            table1.appendChild(tbody1);
            main.appendChild(table1);

            var nameidtable = "#tregalos";
            $(nameidtable).DataTable({
              "paging": true
            });

            
        });
        
        
        
        demoListaRegalos();
    }
    
    function listaCupones()
    {
        
        var main = document.getElementById("content_lista_cupones"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tcupones";
        table1.className = "table table-responsive table-striped";  
        var thead1 = table1.createTHead(); 
        thead1.style = "background-color: #696969; color: #fff;";
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        var cell5 = document.createElement("th"); 
        var cell6 = document.createElement("th"); 
        var cell7 = document.createElement("th"); 
        
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Foto";
        cell1.width = 180;
        cell1.className = "text-center";
        cell2.innerHTML = "Titulo";
        cell2.className = "text-center";
        cell3.innerHTML = "Promo";
        cell3.className = "text-center";
        cell4.innerHTML = "Producto";
        cell4.width = 90;
        cell4.className = "text-center"; 
        cell5.innerHTML = "Condiciones";
        cell5.className = "text-center";
        cell6.innerHTML = "Resto - Bar";
        cell6.className = "text-center";
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        
        var tbody1 = document.createElement("tbody");
        
        var id = getUrlParameter('id'); 
        $.get("test0", { id: id }).done(function( data ) { 
           //TODDO completar con codigo
            for(i=0; i<data.length; i++) //para cada fila
            {

                var cupon = data[i];
                var id = cupon.id; 
                var imgsrc = cupon.img;
                var titulo = cupon.titulo;
                var promo = cupon.promo;
                var producto = cupon.producto;
                var condiciones = cupon.condiciones;
                var restobar = cupon.restobar; 
                var estado = cupon.estado;  

                var tr1 = document.createElement('tr');
                tr1.style = "border-bottom: 0px solid #dcdcdc;";
                var td11 = document.createElement('td');
                var td12 = document.createElement('td');
                var td13 = document.createElement('td');
                var td14 = document.createElement('td');
                var td15 = document.createElement('td');
                var td16 = document.createElement('td');
                var td17 = document.createElement('td');
                var td18 = document.createElement('td');

                var h61 = document.createElement("h6");
                h61.innerHTML = id;
                td11.appendChild(h61);

                var img61 = document.createElement("img");
                img61.src = imgsrc;
                img61.width = "150"; 
                img61.height = "90";
                img61.style = "display: block";            
                td12.appendChild(img61); 

                var h62 = document.createElement("h6");
                h62.innerHTML = titulo;
                td13.appendChild(h62);

                var h63 = document.createElement("h6");
                h63.innerHTML = promo;
                td14.appendChild(h63);

                var h64 = document.createElement("h6");
                h64.innerHTML = producto;
                h64.style = "display: block";
                td15.appendChild(h64);  

                var h66 = document.createElement("h6");
                h66.innerHTML = condiciones; 
                td16.appendChild(h66); 

                var h67 = document.createElement("h6");
                h67.innerHTML = restobar; 
                td17.appendChild(h67); 

                addSwitch2(td18, estado);

                tr1.appendChild(td11);
                tr1.appendChild(td12);
                tr1.appendChild(td13);
                tr1.appendChild(td14);
                tr1.appendChild(td15);
                tr1.appendChild(td16);
                tr1.appendChild(td17);
                tr1.appendChild(td18);
                tbody1.appendChild(tr1); 

            }
            table1.appendChild(tbody1);
            main.appendChild(table1);

            var nameidtable = "#tcupones";
            $(nameidtable).DataTable({
              "paging": true
            });

        });
         
        
        demoListaCupones();
        
    }
    
    function demoListaRegalos()
    {
        
        var main = document.getElementById("content_lista_regalos"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tregalos";
        table1.className = "table table-responsive table-striped";  
        var thead1 = table1.createTHead(); 
        thead1.style = "background-color: #696969; color: #fff;";
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        var cell5 = document.createElement("th"); 
        var cell6 = document.createElement("th"); 
        var cell7 = document.createElement("th"); 
        
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Foto";
        cell1.width = 180;
        cell1.className = "text-center";
        cell2.innerHTML = "Titulo";
        cell2.className = "text-center";
        cell3.innerHTML = "Puntos";
        cell3.className = "text-center";
        cell4.innerHTML = "Producto";
        cell4.width = 90;
        cell4.className = "text-center"; 
        cell5.innerHTML = "Condiciones";
        cell5.className = "text-center";
        cell6.innerHTML = "Resto - Bar";
        cell6.className = "text-center";
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        
        var tbody1 = document.createElement("tbody");
         
        for(i=0; i<10; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            tr1.style = "border-bottom: 0px solid #dcdcdc;";
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td');
            var td17 = document.createElement('td');
            var td18 = document.createElement('td');
            
            var h61 = document.createElement("h6");
            h61.innerHTML = "12";
            td11.appendChild(h61);
            
            var img61 = document.createElement("img");
            img61.src = "../images/icono_ver_tutorial.png";
            img61.width = "150"; 
            img61.height = "90";
            img61.style = "display: block";            
            td12.appendChild(img61);
            var divxx = document.createElement("div");
            divxx.style = "margin: 0 auto; padding: 0 0 0 0; position: absolute; bottom: 14px; ";
            createTipoCelular(divxx, 1, 1);
            createTipoCelular(divxx, 0, 58);   
            td12.appendChild(divxx);
             
            var h62 = document.createElement("h6");
            h62.innerHTML = "A todos";
            td13.appendChild(h62);
            
            var h63 = document.createElement("h6");
            h63.innerHTML = "22 Km";
            td14.appendChild(h63);
            
            var h64 = document.createElement("h6");
            h64.innerHTML = "Martes 22 20:32";
            h64.style = "display: block";
            td15.appendChild(h64);  
            
            var h66 = document.createElement("h6");
            h66.innerHTML = "Martes 22 20:32";
            h66.style = "Condiciones Loremp Ipsum";
            td16.appendChild(h66); 
            
            var h67 = document.createElement("h6");
            h67.innerHTML = "Martes 22 20:32";
            h67.style = "Estado";
            td17.appendChild(h67);  
            
            addSwitch2(td18, 1);
            
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tr1.appendChild(td17);
            tr1.appendChild(td18);
            tbody1.appendChild(tr1); 
            
        }
        table1.appendChild(tbody1);
        main.appendChild(table1);
         
        var nameidtable = "#tregalos";
        $(nameidtable).DataTable({
          "paging": true
        });
    }
    
    function demoListaCupones()
    {
        
        var main = document.getElementById("content_lista_cupones"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tcupones";
        table1.className = "table table-responsive table-striped";  
        var thead1 = table1.createTHead(); 
        thead1.style = "background-color: #696969; color: #fff;";
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        var cell5 = document.createElement("th"); 
        var cell6 = document.createElement("th"); 
        var cell7 = document.createElement("th"); 
        
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Foto";
        cell1.width = 180;
        cell1.className = "text-center";
        cell2.innerHTML = "Titulo";
        cell2.className = "text-center";
        cell3.innerHTML = "Promo";
        cell3.className = "text-center";
        cell4.innerHTML = "Producto";
        cell4.width = 90;
        cell4.className = "text-center"; 
        cell5.innerHTML = "Condiciones";
        cell5.className = "text-center";
        cell6.innerHTML = "Resto - Bar";
        cell6.className = "text-center";
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        
        var tbody1 = document.createElement("tbody");
         
        for(i=0; i<10; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            tr1.style = "border-bottom: 0px solid #dcdcdc;";
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            var td16 = document.createElement('td');
            var td17 = document.createElement('td');
            var td18 = document.createElement('td');
            
            var h61 = document.createElement("h6");
            h61.innerHTML = "12";
            td11.appendChild(h61);
            
            var img61 = document.createElement("img");
            img61.src = "../images/icono_ver_tutorial.png";
            img61.width = "150"; 
            img61.height = "90";
            img61.style = "display: block";            
            td12.appendChild(img61); 
             
            var h62 = document.createElement("h6");
            h62.innerHTML = "A todos";
            td13.appendChild(h62);
            
            var h63 = document.createElement("h6");
            h63.innerHTML = "22 Km";
            td14.appendChild(h63);
            
            var h64 = document.createElement("h6");
            h64.innerHTML = "Martes 22 20:32";
            h64.style = "display: block";
            td15.appendChild(h64);  
            
            var h66 = document.createElement("h6");
            h66.innerHTML = "Martes 22 20:32";
            h66.style = "Condiciones Loremp Ipsum";
            td16.appendChild(h66); 
            
            var h67 = document.createElement("h6");
            h67.innerHTML = "Martes 22 20:32";
            h67.style = "Estado";
            td17.appendChild(h67); 
            
            addSwitch2(td18, 1);
            
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tr1.appendChild(td16);
            tr1.appendChild(td17);
            tr1.appendChild(td18);
            tbody1.appendChild(tr1); 
            
        }
        table1.appendChild(tbody1);
        main.appendChild(table1);
         
        var nameidtable = "#tcupones";
        $(nameidtable).DataTable({
          "paging": true
        });
    }
    
    
</script>

@endsection