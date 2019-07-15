@extends('admin.layout.master')

@section('content')
  
    <section class="content-header" >          
    </section>

      <!-- Main content -->
    <section class="content" style="position: relative; width: 100%; min-width: 300px; padding: 15px; padding-top: 25px;">
    


            <div class="panel">

                <div class="upper-dashboard">
                    <div class="tablero-dash-opc">
                        <a href=""><i class="fa fa-plus" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/productoscarta"><i class="fa fa-book" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/clientes"><i class="fa fa-user" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href="/admin/pedidos"><img src="/dist/img/icon_pedidos_b.png" width="15px" style="margin: 0px 7px 0px 0px; "/></i></a>
                        <a href="/admin/reservas"><img src="/dist/img/icon_reservation_b.png" width="15px" style="margin: 0px 7px 0px 0px; "/></i></a>
                        <a href="/admin/miposicionpuntos"><i class="fa fa-table" style="color: #777778; margin-right: 10px;"></i></a>
                    </div>  
                    </br>
                    <div class="tablero-sub-title">
                        TABLERO
                    </div>
                    <div class="myquerymain" >
                                <form> 
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-search" style="color: #777778; margin-right: 10px;"></i>
                            </li> 
                            <li style="width: 80%;">
                                <div>
                                    <input   type="text" id="myInput" onkeyup="searchInBoxes()" placeholder="Buscar en todas las categorias.."  style="margin-left: 12px; min-width: 190px; width: 100%;background-color:#d3d3d3; border: 0px; height: 32px;" >
                                </div>
                            </li>
                        </ul>
                                </form>
                    </div>

                    <div class="row" style="float: right; max-width: 300px; padding-right: 10px;" >

                        <!--div  style="float: left; margin-right: 3px; margin-top: -15px; width: 80px;">
                            <div class="input-group margin">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="height: 28px; padding-top: 3px;">Mas
                                    <span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                </div> 
                            </div>
                        </div-->

                        <div style="float: left; margin: 0 auto; height: 30px;">

                            <div  style=" margin-right: 2px; margin-top: -15px; width: 180px;">
                                <div class="input-group margin">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="height: 28px; padding-top: 3px;">Añadir widget
                                        <span class="fa fa-caret-down"></span></button>
                                        <ul class="dropdown-menu" id='listaWidgets'> 
                                        </ul>
                                    </div> 
                                </div>
                            </div>

                        </div>

                    </div>
                </div>  

            </div>
    
            <div id="r0" style="margin: 0 auto;"> 
            </div>
    
            <div  id="r1" style="margin: 0 auto;"> 
            </div>

            <div  id="r2" style="margin: 0 auto;"> 
            </div>
            
        </div>

    </section>
<!--INICIO DE SCRIPT-->
@include('admin.partial.scripts')
<script>
 
		var titulo_seccion = document.getElementById("titulo_seccion");
		titulo_seccion.innerHTML = "PANEL GENERAL";

        data = {name_col:['Nombre','Ver'],
        data_row:[
            @foreach($franquicias as $fran)
                {data1:'{{ $fran->user->name}}',data2:'{{ $fran->user->lastname }}',data3:'<a href="/admin/franchisees#frq-{{ $fran->user->id }}">Ver</a>' },
                
                @endforeach
            ] };

        class BoxInDashboard
        {
            constructor(titulo, loaded, data, id){
                this.titulo = titulo;
                this.loaded = loaded;
                this.data = data;
                this.id = id;
            }
        }
        var id_boxes = 0;

        var totalWidgetsNames = ["FRANQUICIADOS", "MOZOS - MESAS - MIGRACIONES", "DELIVERY", "PRODUCTOS",
        "CUENTAS - RESTOS", "PATROCINADORES - PUBLICIDAD", "MARKETING"];

        var b1 = new BoxInDashboard("FRANQUICIADOS", 0, data, id_boxes); id_boxes++;
        var b2 = new BoxInDashboard("MOZOS - MESAS - MIGRACIONES", 0, "", id_boxes); id_boxes++;
        var b3 = new BoxInDashboard("DELIVERY", 0, "", id_boxes); id_boxes++;
        var b4 = new BoxInDashboard("PRODUCTOS", 0, "", id_boxes); id_boxes++;
        var b5 = new BoxInDashboard("CUENTAS - RESTOS", 0, "", id_boxes); id_boxes++;
        var b6 = new BoxInDashboard("PATROCINADORES - PUBLICIDAD", 0, "", id_boxes); id_boxes++; 
        /*var b8 = new BoxInDashboard("MARKETING", 0, "", id_boxes); id_boxes++;
        var b9 = new BoxInDashboard("MARKETING", 0, "", id_boxes); id_boxes++;*/

        var nameboxes = [];
        nameboxes.push(b1);
        nameboxes.push(b2);
        nameboxes.push(b3);
        nameboxes.push(b4);
        nameboxes.push(b5);
        nameboxes.push(b6); 
        //nameboxes.push(b8);
        //nameboxes.push(b9);

        $( document ).ready(function() {
            updateBoxes(); 

        	$( "#listaWidgets" ).select(function() {
        		alert( "Handler for .select() called." );
        	});
        });

        function updateBoxes()
        {   
            var r0 = document.getElementById("r0");
            var r1 = document.getElementById("r1");
            var r2 = document.getElementById("r2");
            
            r0.innerHTML = '';
            r1.innerHTML = '';
            r2.innerHTML = '';
            
            for (i = 0; i < nameboxes.length; i++) {
                var idxrow = Math.trunc(i/4);
                var namerow = '#r';
                namerow += idxrow.toString();
                createBox(nameboxes[i].titulo, namerow, i, nameboxes[i].id);
                if( nameboxes[i].loadedData === 0 ){
                    loadDataBox(i);
                }
                else{
                    setDataBox(nameboxes[i].data, nameboxes[i].id);
                }
            }  
            
            updateListaWidgets();
        }

        function loadDataBox(index)
        {

        	alert(nameboxes[index].titulo);

        	//TODO actualiza la informacion de los boxes
        	switch(nameboxes[index].titulo)
        	{
        	case "FRANQUICIADOS": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	case "MOZOS - MESAS - MIGRACIONES": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	case "DELIVERY": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	case "PRODUCTOS": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	case "CUENTAS - RESTOS": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	case "PATROCINADORES - PUBLICIDAD": 
                $.get( nameboxes[index].titulo, function( data ) { //data en formato json como resultado
                    
                    nameboxes[index].loaded = 1;
                    nameboxes[index].data = data;
                    setDataBox(data, nameboxes[index].id);
                    
                }, "json" );
            	break;
        	default:
            	break;
        	}
 
        }

        /**/
        function setDataBox(data, id)
        { 
            console.log(data);
            var idTable = "tb"+id;  
            var currTable = document.getElementById(idTable.toString() );
            currTable.innerHTML = ""; //limpia los datos que estuvieron
            
            var tbh = currTable.createTHead();
            var tbh_r1 = tbh.insertRow();
            var tb_th_0 = document.createElement('th');
            var tb_th_1 = document.createElement('th');
            var tb_th_2 = document.createElement('th');
            var tb_th_3 = document.createElement('th');

            
            var tbd = currTable.createTBody();
            tb_th_0.width = '10px';
            tb_th_0.innerHTML = '#'; 
            tb_th_1.innerHTML = 'Nombre'; 
            tb_th_2.innerHTML = 'Apellidos'; 
            tb_th_3.width = '40px';
            tb_th_3.innerHTML = 'Ver';
            
            tbh_r1.appendChild(tb_th_0);
            tbh_r1.appendChild(tb_th_1);
            tbh_r1.appendChild(tb_th_2);
            tbh_r1.appendChild(tb_th_3);
    
            $.each(data.data_row,function(i,e){
     
                var tbd_r1 = tbd.insertRow();
                var tb_td_0 = document.createElement('td');
                var tb_td_1 = document.createElement('td');
                var tb_td_2 = document.createElement('td');
                var tb_td_3 = document.createElement('td');
                //
                tb_td_0.innerHTML = i; 
                tb_td_1.innerHTML = e.data1; 
                tb_td_2.innerHTML = e.data2;
                tb_td_3.innerHTML = e.data3;
                
                tbd_r1.appendChild(tb_td_0);
                tbd_r1.appendChild(tb_td_1);
                tbd_r1.appendChild(tb_td_2);
                tbd_r1.appendChild(tb_td_3);
                
            });
                
 
            
            /*
            @foreach($franquicias as $k => $frank)
            <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $frank->names }}</td>

            <td><a href="#" class="btn btn-xs">ver</a></td>
            </tr>
        @endforeach
            */
                    
                    
        }

        function closeBox(index)
        {
            nameboxes.splice(index,1);
            updateBoxes();
        }

        function addBox(nombre)
        { 
            var bx = new BoxInDashboard(nombre, 0, "", id_boxes); id_boxes++;
            nameboxes.push(bx); 
            updateBoxes();
        }

        function createBox(titulo, row_id, idarr, idTable)
        { 
            
            var new_col = document.createElement('div');
            new_col.style = 'min-width:  270px; max-width: 380px;'; 
            new_col.classList.add('col-md-3');
            new_col.setAttribute("draggable", "true");
            new_col.id = idarr; 

            $( function() {
                $( "#"+idarr ).draggable(); 
            } );
            
            
            var box = document.createElement('div'); 
            box.classList.add('box');
             
            
            var box_header = document.createElement('div');  
            box_header.style = 'height: 45px; background-color: #ff4500; padding: 10px;';
            
            var box_header_table = document.createElement('table');
            box_header_table.style = 'width: 100%;';
            box_header_table.id = idTable;
                    
            var col1 = document.createElement('col');
            var col2 = document.createElement('col');
            var col_group = document.createElement('colgroup');
            col2.width = '24px';
            col_group.appendChild(col1);
            col_group.appendChild(col2);
            box_header_table.appendChild(col_group); 
            var bht_r1 = box_header_table.insertRow(0); 
            var cell0 = bht_r1.insertCell(0);
            var cell1 = bht_r1.insertCell(1);
            
            var h3_1 = document.createElement('h3');
            h3_1.style = 'margin: 2px 0 0 0; color: #fff; font-size: 1.3em;';
            h3_1.innerHTML = '<p>'+titulo+'</p>'; 
            cell0.appendChild(h3_1);
            cell1.innerHTML = '<img onclick="closeBox('+idarr+')" src="/dist/img/icon_close.png" width="21px" style="margin: -12px 0px 0px 0px; cursor: pointer;"/>';
            //'<img onclick="dragAndDrop('+idarr+')" src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px; cursor: pointer;"/>'
            bht_r1.appendChild(cell0);
            bht_r1.appendChild(cell1);
            box_header.appendChild(box_header_table);
            
            
            
            
            var box_body = document.createElement('div');
            box_body.style = "height: 180px; overflow-y: auto; font-size: 0.85em; padding: 0 !important;";
            
            var tb = document.createElement('table');
            tb.className = 'table table-condensed';
            tb.id = "tb"+idTable;
            box_body.appendChild(tb);
            
        
            var box_footer = document.createElement('div');
            box_footer.className = 'box-footer';
            box_footer.style = 'padding: 5px;'; 
            
            var table_f = document.createElement('table'); 
            table_f.style = 'width:100%;';
            var col_f1 = document.createElement('col');
            var col_f2 = document.createElement('col');
            var col_group_f = document.createElement('colgroup');
            col_f2.width = '20px';
            col_group_f.appendChild(col_f1);
            col_group_f.appendChild(col_f2);
            table_f.appendChild(col_group_f);
            box_footer.appendChild(table_f);
            
            var table_f_r1 = table_f.insertRow(0); 
            var cell0 = table_f_r1.insertCell(0);
            var cell1 = table_f_r1.insertCell(1); 
            cell1.innerHTML = '<a href="#" onclick="loadDataBox('+idarr+')"><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 0px 0px 0px;"/></a>';
            
            box.appendChild(box_header);
            box.appendChild(box_body);
            box.appendChild(box_footer);
            new_col.appendChild(box);
            
            $(row_id).append( new_col ); 
        }
            
        function updateListaWidgets()
        {
            
            var listaWidgets = document.getElementById("listaWidgets");
            listaWidgets.innerHTML = "";
            
            for( i=0; i<totalWidgetsNames.length; i++)
            {
                var isShowWidget = 0;
                for( j=0; j<nameboxes.length; j++)
                {
                    if( totalWidgetsNames[i] === nameboxes[j].titulo )
                    {
                        isShowWidget = 1;
                        break;
                    }
                }
                if( isShowWidget === 0 ){            
                    //enable list widget
                    var nombre = totalWidgetsNames[i];
                    var n_li = document.createElement("li");
                    var n_li_a = document.createElement("a");
                    n_li_a.href = "#";
                    n_li_a.style = "font-size: 0.81em;";
                    n_li_a.onclick = function(){ addBox(nombre); }; 
                    n_li_a.innerHTML = totalWidgetsNames[i];
                    n_li.appendChild(n_li_a);
                    listaWidgets.appendChild(n_li);
                }
            }
              
        }


        function searchInBoxes() {
            
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        
        //Loop para cada tabla
        for(i = 0; i<nameboxes.length; i++)
        { 
            
            var currIdTable = "tb" + nameboxes[i].id;
            var table = document.getElementById(currIdTable);
            tr = table.getElementsByTagName("tr");

            // Loop en una tabla, la segunda columna, donde va nombre
            for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            } 
            }
            // end for tr
        } 
        // end for nameboxes
        }
        

        function cancelUpdateDataTable(index)
        {
            var box = nameboxes[index];
        }
 
        
</script>
      
@endsection