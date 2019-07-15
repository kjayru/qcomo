@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; background-color: #fff;">  
        <div style="background-color: #676767; color: #f0f0f0; padding: 1px; height: 45px; width: 900px;">
            <h3 style="margin: 9px;">MENSAJES PUSH</h3>
        </div>
        
        <div style="background-color: #a9a9a9; color: #f0f0f0; padding: 0px; min-height: 65px; max-height: 240px; max-width: 900px; min-width: 300px;">
            <div style=" display: inline-block; margin-left: 15px; margin-right: 25px;">
                <a href="/admin/push_comercios"><img src="../images/monitor.png" height="40px" width="40px" style="margin-left: 4px; margin-right: 20px;" /></a>
                <a href="/admin/push_comensal"><img src="../images/tablet.png" height="35px" width="24px" /></a>
            </div>
            <div style=" display: inline-block; min-width: 200px;">
                <img id="editMsg" src="../images/edit_msg.png" height="45px" width="170px" />    
                <img id="editDestino" src="../images/edit_dst.png" height="45px" width="170px" />            
                <img id="editContinuar" onclick="onEditDestino()"  src="../images/edit_continuar.png" height="45px" width="120px" style="cursor: pointer;"/>            
            </div>
        </div>
        
        <form>
            <div id="contentConfig" style="background-color: #fdfdfd; color: #444; padding: 0px; max-width: 900px; min-width: 300px;">

            </div>
        </form>
        
    </div>
    <div id="two" style="padding: 0px;">
        
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">

                    <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; padding-top: 11px; color:#fff; height: 55px;">MENSAJES ENVIADOS</legend>

                    <div class="form-group" id="content_lista_enviados"> 
                    </div>  
                    
                </div>
              </div>
            </div>
        
        
    </div>
</div>
     
    
</section>
@include('admin.partial.scripts')

<script>

    var step = 1;
    
    $(document).ready( function() {
        //onEditMsg();
        $('#idlistas').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select'); 
        onEditMsg();
        createListaenviados();
    });
    
    function onEditMsg()
    { 
        var btn1 = document.getElementById("editMsg");
        btn1.src = "../images/edit_msg.png";
        
        var btn2 = document.getElementById("editDestino");
        btn2.src = "../images/edit_dst.png";
        
        var btnCont = document.getElementById("editContinuar");
        btnCont.src = "../images/edit_continuar.png";
        
        var cc = document.getElementById("contentConfig");
        cc.innerHTML = "";
        
        var div1 = document.createElement("div");
        div1.style = "min-width: 240px; background-color: #e9e9e9; min-height: 250px; max-height: 800px; color: #444; "; 
        addImageToUpload(div1, "imgcampain", "Agregar una imagen", function(){ readURL(this, "#imgcampain"); }); 
        cc.appendChild(div1);
        
        var div2 = document.createElement("div");
        div2.style = "margin: 0; padding: 0; color: #444; min-width: 300px; overflow-x: auto;";
        div2.className = "form-group";
        
        var h31 = document.createElement("h3");
        h31.innerHTML = "SELECCIONE UNA O MAS LISTAS";
        h31.style = "color: #444; padding-left: 25px;";
         
        var table1 = document.createElement("table");
        table1.id = "idlistas";
        table1.className = "table table-responsive";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        thead1.style = "background-color: #e9e9e9;";
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th");
                
        cell0.innerHTML = "";
        cell0.style = "width: 70px; border-bottom: 3px solid #fff;"; 
        cell1.innerHTML = "Id";
        cell1.style = "width: 70px; border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Nombre de la lista";
        cell2.style = "width: 280px; border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Carpeta";
        cell3.style = "width: 200px; border-bottom: 3px solid #fff;"; 
        cell4.innerHTML = "Nº de contactos";
        cell4.style = "width: 150px; border-bottom: 3px solid #fff;"; 
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        
        var tbody1 = document.createElement("tbody");  
        var sz = 10;  
        for(i=0; i<sz; i++) //para cada fila
        { 
            var tr1 = document.createElement('tr');
            tr1.height = '50px'; 
            for (var j = 0; j < 5; j++) { //para cada columna

                var td1 = document.createElement('td');
                td1.align = "center";
                td1.style = "border-bottom: 1px solid #fff; background-color: #e5fae9;";
                if( j === 0){
                    var div43 = document.createElement("div");
                    div43.clasName = "form-check";
                    div43.style = "margin: 0; padding: 0;";
                    
                    var checkbox43 = document.createElement("input");
                    checkbox43.setAttribute("type", "checkbox");
                    checkbox43.className = "form-check-label";
                    checkbox43.id = "check"+i.toString();
                    
                    var label43 = document.createElement("label");
                    label43.className = "form-check-label";
                    label43.for = "check"+i.toString();
                    
                    div43.appendChild(checkbox43);
                    div43.appendChild(label43);
                    td1.appendChild(div43);
                } 
                else
                {
                    td1.innerHTML = j.toString();
                }
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        
        table1.appendChild(tbody1);
        div2.appendChild(h31);
        div2.appendChild(table1);
        cc.appendChild(div2);
         
        addTextForm(cc, "descripcion", "Descripcion");  
        
        var nameidtable = "#idlistas";
        $(nameidtable).DataTable({
          "paging": true,
          "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
        });
    }
    
    function onEditDestino()
    {
        var img = document.getElementById("editContinuar");
        if( img.src.includes("edit_continuar") ){
            onContinuar();
        }
        else{
            onFinalizar();
        }
        
    }
    
    function onContinuar(){
        
        var btn1 = document.getElementById("editMsg");
        btn1.src = "../images/edit_msg_off.png";
        
        var btn2 = document.getElementById("editDestino");
        btn2.src = "../images/edit_dst_off.png";
        
        var btnCont = document.getElementById("editContinuar");
        btnCont.src = "../images/edit_enviar.png";
        
        var cc = document.getElementById("contentConfig");
        cc.innerHTML = "";
        
        var h31 = document.createElement("h3");
        h31.innerHTML = "DESTINO";
        h31.style = "color: #444; padding-left: 25px;";
        
        var div1 = document.createElement("div");
        div1.style = "min-width: 250px; max-width: 850px; background-color: #eeeeee; color: #777; margin: 0 auto; ";
        
        var div11 = document.createElement("div");
        div11.style = "display: inline; border-bottom: 1px solid #ddd;"; 
        
        var label1 = document.createElement("label");
        label1.innerHTML = "Audiencia de la notificacion";
        label1.for = "audiencia";
        
        var select1 = document.createElement("select");
        select1.style = "margin: 8px 20px 8px 8px;";
        select1.name = "audiencia";
        var opcionesAudiencia = ["Usuarios en un area especifica","",""];
        for(i=0; i<opcionesAudiencia.length; i++){
            var option1 = document.createElement("option");
            option1.value = "val " +i.toString();
            option1.innerHTML = opcionesAudiencia[i];
            select1.appendChild(option1);
        }
        
        var labe2 = document.createElement("label");
        labe2.for = "radius23";
        labe2.innerHTML = "Radio (km)";
        
        var input1 = document.createElement("input");
        input1.type = "number";
        input1.step = "0.001";
        input1.min = "0.001";
        input1.max = "100";
        input1.val = "0.001";
        input1.name = "radius";
        input1.style = "margin: 8px 20px 8px 8px; border: 0px;"; 
        
        var label3 = document.createElement("label");
        label3.innerHTML = "Usuarios localizados"; 
        label3.style = " display: inline;"; 
        
        div11.appendChild(label1);
        div11.appendChild(select1);
        div11.appendChild(labe2);
        div11.appendChild(input1);
        
        var div111 = document.createElement("div");
        div111.style = "display: inline-block;"; 
        div111.appendChild(label3);
        createTipoCelular(div111, 1, 1);
        createTipoCelular(div111, 0, 58);   
        div11.appendChild(div111);  
        
        
        var div21 = document.createElement("div"); 
        div21.style = "border-bottom: 1px solid #ddd;";
        
        var labe2l = document.createElement("label");
        labe2l.for = "latitude21";
        labe2l.innerHTML = "Latitude";
 
        var input21 = document.createElement("input");
        input21.id = "latitude21";
        input21.type = "number";
        input21.step = "0.0000001"; 
        input21.value = "0";
        input21.name = "latitude21";
        input21.style = "margin: 8px; border: 0px;";
        
        var labe22 = document.createElement("label");
        labe22.for = "latitude21";
        labe22.innerHTML = "Longitude";
 
        var input22 = document.createElement("input");
        input22.id = "longitude22";
        input22.type = "number";
        input22.step = "0.0000001"; 
        input22.value = "0";
        input22.name = "longitude22";
        input22.style = "margin: 8px; border: 0px;";
        
        var labe23 = document.createElement("label");
        labe23.for = "radius23";
        labe23.innerHTML = "Radio";
 
        var input24 = document.createElement("input");
        input24.type = "number";
        input24.step = "1";
        input24.min = "1";
        input24.max = "100";
        input24.value = "1";
        input24.name = "radius23"; 
        input24.style = "margin: 8px; border: 0px;";
        
        var select25 = document.createElement("select");
        var arrOpciones35 = ["Metros", "Cientos de metros", "Kilometros"];
        var arrValues35 = [1, 2, 3];
        
        for(i=0; i<arrOpciones35.length; i++){
            var option25 = document.createElement("option");
            option25.value = arrValues35[i];
            option25.innerHTML = arrOpciones35[i];
            select25.appendChild(option25);
        }
        
        div21.appendChild(labe2l);
        div21.appendChild(input21);
        div21.appendChild(labe22);
        div21.appendChild(input22);
        div21.appendChild(labe23);
        div21.appendChild(input24);
        div21.appendChild(select25);
        
        
        var div31 = document.createElement("div");  
        var labe3l = document.createElement("label");
        labe3l.for = "direccion";
        labe3l.innerHTML = "Direccion";
 
        var input31 = document.createElement("input");
        input31.id = "direccion";
        input31.type = "text";
        input31.placeholder = "direccion";
        input31.name = "direccion";
        input31.style = "margin: 8px;";
        input31.size = "32";
        input31.maxlength = "99";
        
        div31.appendChild(labe3l);
        div31.appendChild(input31);
        
        div1.appendChild(div11);
        div1.appendChild(div21);
        div1.appendChild(div31);

        cc.appendChild(h31);
        cc.appendChild(div1);

        var div2 = document.createElement("div");
        div2.style = "min-width: 280px; max-width: 895px; height:750px; margin: 25px 0 0 0 ; padding: 5px;";
        div2.id = "googleMap";
        cc.appendChild(div2);
        loadScript();
    }
    
    
    function onFinalizar(){
        
        //TODO enviar al servidor
        alert("La notificacion se envio con exito");
        
        //TODO actualizar lista
        onEditMsg();
    } 

    function readURL(input, img_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(img_id).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function createListaenviados()
    {  
        var main = document.getElementById("content_lista_enviados"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tableenviados";
        table1.className = "table table-responsive"; 
        
        var thead1 = table1.createTHead(); 
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Mensaje";
        cell1.width = 220;
        cell1.className = "text-center";
        cell2.innerHTML = "Destino";
        cell2.className = "text-center";
        cell3.innerHTML = "Radio";
        cell3.className = "text-center";
        cell4.innerHTML = "Fecha de envio";
        cell4.width = 90;
        cell4.className = "text-center"; 
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        
        var tbody1 = document.createElement("tbody");
        
        //TODO pide al servidor las notificaciones enviadas por el comensal
        //envia: id del comensal
        //recibe: [id,  img(path de la imagen), destino, radio, fecha de envio, num iphone, num de android]
        
        var id = getUrlParameter('id'); 
        $.get("test0", { id: id }).done(function( data ) { 
            
            //para cada fecha
            for(i=0; i<data.length; i++)
            {

                var bpedidos = document.getElementById("body_pedidos");
                bpedidos.innerHTML = "";

                var notificacionPush = data[i];
                var id = notificacionPush.id; 
                var imgsrc = notificacionPush.img;
                var destino = notificacionPush.destino;
                var radio = notificacionPush.radio;
                var fecha = notificacionPush.fecha;
                var iphones = notificacionPush.iphones;
                var andr = notificacionPush.andr; 


                var tr1 = document.createElement('tr');
                tr1.style = "background-color: #dcdcdc; border-bottom: 0px solid #dcdcdc;";
                var td11 = document.createElement('td');
                var td12 = document.createElement('td');
                var td13 = document.createElement('td');
                var td14 = document.createElement('td');
                var td15 = document.createElement('td');

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
                createTipoCelular(divxx, 1, iphones);
                createTipoCelular(divxx, 0, andr);   
                td12.appendChild(divxx);

                var h62 = document.createElement("h6");
                h62.innerHTML = destino;
                td13.appendChild(h62);

                var h63 = document.createElement("h6");
                h63.innerHTML = radio;
                td14.appendChild(h63);

                var h64 = document.createElement("h6");
                h64.innerHTML = fecha;
                h64.style = "display: block";
                td15.appendChild(h64); 
                var btn25 = document.createElement("button");
                btn25.className = "btn-primary";
                btn25.style = "position: absolute; bottom: 17px;";
                btn25.innerHTML = "RE ENVIAR";
                btn25.onclick = function(){
                    //TODO REEVIAR CODIGOS
                };
                td15.appendChild(btn25);

                tr1.appendChild(td11);
                tr1.appendChild(td12);
                tr1.appendChild(td13);
                tr1.appendChild(td14);
                tr1.appendChild(td15);
                tbody1.appendChild(tr1); 

            }
            
            table1.appendChild(tbody1);
            main.appendChild(table1);

            var nameidtable = "#tableenviados";
            $(nameidtable).DataTable({
              "paging": true,
              "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
            });
            
        });
        
        //TODO borrar luego de funcionar get
        demoListaenviados();
        
    }
    
    function demoListaenviados(){
        
        
        var main = document.getElementById("content_lista_enviados"); 
        main.innerHTML = "";
        main.style ="overflow-x: auto;";
        
        var table1 = document.createElement("table");
        table1.id = "tableenviados";
        table1.className = "table table-responsive"; 
        
        var thead1 = table1.createTHead(); 
        var rowHead = thead1.insertRow(0); 
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th"); 
        cell0.innerHTML = "Id";
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Mensaje";
        cell1.width = 220;
        cell1.className = "text-center";
        cell2.innerHTML = "Destino";
        cell2.className = "text-center";
        cell3.innerHTML = "Radio";
        cell3.className = "text-center";
        cell4.innerHTML = "Fecha de envio";
        cell4.width = 90;
        cell4.className = "text-center"; 
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        
        var tbody1 = document.createElement("tbody");
        
        //TODDO completar con codigo
        for(i=0; i<10; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            tr1.style = "background-color: #dcdcdc; border-bottom: 0px solid #dcdcdc;";
            var td11 = document.createElement('td');
            var td12 = document.createElement('td');
            var td13 = document.createElement('td');
            var td14 = document.createElement('td');
            var td15 = document.createElement('td');
            
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
            var btn25 = document.createElement("button");
            btn25.className = "btn-primary";
            btn25.style = "position: absolute; bottom: 17px;";
            btn25.innerHTML = "RE ENVIAR";
            btn25.onclick = function(){
                //TODO REEVIAR CODIGOS
            };
            td15.appendChild(btn25);
            
            tr1.appendChild(td11);
            tr1.appendChild(td12);
            tr1.appendChild(td13);
            tr1.appendChild(td14);
            tr1.appendChild(td15);
            tbody1.appendChild(tr1); 
            
        }
        table1.appendChild(tbody1);
        main.appendChild(table1);
         
        var nameidtable = "#tableenviados";
        $(nameidtable).DataTable({
          "paging": true,
          "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
        });
         
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

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDDI_HGADUhhryYf0nHOo7BNtFM8DGBzVk&callback=myMap';
    document.body.appendChild(script);
}

</script>
 

@endsection