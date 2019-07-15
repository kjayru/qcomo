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
                <img id="editContinuar" onclick="onFinalizar()"  src="../images/edit_enviar.png" height="45px" width="120px" style="cursor: pointer;"/>            
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
    
    
    function onFinalizar(){
        
        //TODO enviar al servidor
        alert("La notificacion se programo con exito");
        
        //TODO actualizar lista
        onEditMsg();
    } 
    
    function onEditMsg()
    {  
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
        h31.innerHTML = "SELECCIONE UNO O MAS COMERCIOS";
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
                
        cell0.innerHTML = "";
        cell0.style = "width: 70px; border-bottom: 3px solid #fff;"; 
        cell1.innerHTML = "Id";
        cell1.style = "width: 70px; border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Nombre del comercio";
        cell2.style = " border-bottom: 3px solid #fff;";  
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2); 
        
        var tbody1 = document.createElement("tbody");  
        var sz = 10;  
        for(i=0; i<sz; i++) //para cada fila
        { 
            var tr1 = document.createElement('tr');
            tr1.height = '50px'; 
            for (var j = 0; j < 3; j++) { //para cada columna

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
        
        
        addTextForm(cc, "nombre", "Nombre");
        addTextForm(cc, "descripcion", "Descripcion");
        addCalendar(cc, "fecha","fecha"); 
        
        var nameidtable = "#idlistas";
        $(nameidtable).DataTable({
          "paging": true,
          "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
        });
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
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th");
        var cell5 = document.createElement("th");
                        
        cell1.innerHTML = "Titulo";
        cell1.style = "width: 90px; border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Mensaje";
        cell2.style = "width: 110px; border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Destino";
        cell3.style = "width: 280px; border-bottom: 3px solid #fff;"; 
        cell4.innerHTML = "Descripcion";
        cell4.style = "width: 200px; border-bottom: 3px solid #fff;"; 
        cell5.innerHTML = "Fecha envio";
        cell5.style = "width: 150px; border-bottom: 3px solid #fff;"; 
          
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        
        
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
                var titulo = notificacionPush.titulo; 
                var estado = notificacionPush.estado; 
                var imgsrc = notificacionPush.img;
                var destino = notificacionPush.destino;
                var descripcion = notificacionPush.descripcion;
                var fecha = notificacionPush.fecha; 

                var tr1 = document.createElement('tr');
                tr1.style = "background-color: #dcdcdc; border-bottom: 0px solid #dcdcdc;"; 
                var td11 = document.createElement('td');
                var td12 = document.createElement('td');
                var td13 = document.createElement('td');
                var td14 = document.createElement('td');
                var td15 = document.createElement('td'); 

                var img61 = document.createElement("img");
                if( estado === 0 ){
                    img61.src = "../images/programado.png";
                }else{
                    img61.src = "../images/check.png";
                }
                img61.width = "35"; 
                img61.height = "35";    
                img61.style = "position: absolute; bottom: 10px;";    

                var h62 = document.createElement("h6");
                h62.innerHTML = titulo;
                td11.appendChild(h62);
                td11.appendChild(img61);

                var img62 = document.createElement("img");
                img62.src = imgsrc;
                img62.width = "150"; 
                img62.height = "90";
                img62.style = "display: block";            
                td12.appendChild(img62);
                var divxx = document.createElement("div");
                divxx.style = "margin: 0 auto; padding: 0 0 0 0; position: absolute; bottom: 14px; ";
                divxx.innerHTML = fecha;
                td12.appendChild(divxx);

                var h62 = document.createElement("h6");
                h62.innerHTML = destino;
                td13.appendChild(h62);

                var h63 = document.createElement("h6");
                h63.innerHTML = descripcion;
                td14.appendChild(h63);

                var h64 = document.createElement("h6");
                h64.innerHTML = "Martes 22 20:32";
                h64.style = "display: block";
                td15.appendChild(h64); 
                var btn25 = document.createElement("button");
                btn25.className = "btn-primary";
                btn25.style = "position: absolute; bottom: 7px;";
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
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th");
        var cell5 = document.createElement("th");
                        
        cell1.innerHTML = "Titulo";
        cell1.style = "width: 90px; border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Mensaje";
        cell2.style = "width: 110px; border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Destino";
        cell3.style = "width: 280px; border-bottom: 3px solid #fff;"; 
        cell4.innerHTML = "Descripcion";
        cell4.style = "width: 200px; border-bottom: 3px solid #fff;"; 
        cell5.innerHTML = "Fecha envio";
        cell5.style = "width: 150px; border-bottom: 3px solid #fff;"; 
          
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        
        
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
            
            var img61 = document.createElement("img");
            img61.src = "../images/icono_ver_tutorial.png";
            img61.width = "35"; 
            img61.height = "35";    
            img61.style = "position: absolute; bottom: 10px;";    
            
            var h62 = document.createElement("h6");
            h62.innerHTML = "Titulo";
            td11.appendChild(h62);
            td11.appendChild(img61);
            
            var img62 = document.createElement("img");
            img62.src = "../images/icono_ver_tutorial.png";
            img62.width = "150"; 
            img62.height = "90";
            img62.style = "display: block";            
            td12.appendChild(img62);
            var divxx = document.createElement("div");
            divxx.style = "margin: 0 auto; padding: 0 0 0 0; position: absolute; bottom: 14px; ";
            divxx.innerHTML = "Enviado 19-07-2018";
            td12.appendChild(divxx);
             
            var h62 = document.createElement("h6");
            h62.innerHTML = "A todos";
            td13.appendChild(h62);
            
            var h63 = document.createElement("h6");
            h63.innerHTML = "Descripcion";
            td14.appendChild(h63);
            
            var h64 = document.createElement("h6");
            h64.innerHTML = "Martes 22 20:32";
            h64.style = "display: block";
            td15.appendChild(h64); 
            var btn25 = document.createElement("button");
            btn25.className = "btn-primary";
            btn25.style = "position: absolute; bottom: 7px;";
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
 
@endsection