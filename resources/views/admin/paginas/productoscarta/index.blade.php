@extends('admin.layout.master')

@section('content')

<section class="content-fluid" style="padding-right: 0px; background-color: #f7f7f7; margin: 54px 0 0 45px;">
     
<div id="wrappermini">
    <div id="one" class="col-md-8"> 
        
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
       
          <li class="nav-item active">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="true">Productos</a>
          </li>
   
         <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ingredientes" role="tab" aria-controls="ingredientes" aria-selected="false">Ingredientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#catprod" role="tab" aria-controls="catprod" aria-selected="false">Cat. de productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hidden-xs " id="contact-tab" data-toggle="tab" href="#salsas" role="tab" aria-controls="salsas" aria-selected="false">Salsas</a>
          </li>
        </ul>
         
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade active in" id="productos" role="tabpanel" aria-labelledby="home-tab" style="padding: 0px;">


                <div id="add_box" style="padding: 0;" class="tab-producto cajatab">
                    @include('admin.paginas.productoscarta.sections.tab1')
                 
                </div>
                
                
            </div>
            <div class="tab-pane fade" id="ingredientes" role="tabpanel" aria-labelledby="profile-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;" class="tab-ingrediente cajatab">
                   
                    @include('admin.paginas.productoscarta.sections.tab2')
                </div> 
                
            </div>
            <div class="tab-pane fade" id="catprod" role="tabpanel" aria-labelledby="contact-tab" style="padding: 0px;">
                
                
                <div id="add_box" style="padding: 0;" class="tab-categoria cajatab">
                    
                   @include('admin.paginas.productoscarta.sections.tab3')
                </div> 
                
                
            </div>
            <div class="tab-pane fade" id="salsas" role="tabpanel" aria-labelledby="contact-tab" style="padding: 0px;">
                
                
                <div id="add_box" style="padding: 0;" class="tab-salsa cajatab">
                   
                    @include('admin.paginas.productoscarta.sections.tab4')
                   
                </div> 
                
                
            </div>
        </div>
        
    </div>
    <div id="two" class="col-md-4" style="position:relative;">
         <div class="box">
   
                <div class="bl-fr-categoria iform" style="display: none">
                    @include('admin.paginas.productoscarta.partials.categorias.form')
                </div>
                <div class="bl-fr-ingrediente iform" style="display: none">
                    @include('admin.paginas.productoscarta.partials.ingredientes.form')
                </div>
                <div class="bl-fr-producto iform" style="display: none">
                    @include('admin.paginas.productoscarta.partials.productos.form')
                </div>
                <div class="bl-fr-salsa iform" style="display: none">
                    @include('admin.paginas.productoscarta.partials.salsas.form')
                </div>
 
           <!---->
        </div>
       
    </div>
</div>
      
</section>
@include('admin.partial.scripts')

<!--
<script>    

var two = document.getElementById("two").hidden = true;  
    
function readURL(input, img_id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(img_id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>    
/*
function setSideBarCategorias()
{
    var ul1 = document.getElementById("prodCategorias");
    ul1.innerHTML = "";
    
    //from server recive categorias
    var cats=[];
    @foreach($categorias as $cat)
          cats.push('{{@$cat->name}}');
    @endforeach
   // var cats = ["Bebidas","Cafeterias","Platos principales","Postres"];
    for(i =0; i<cats.length; i++)
    {
        var name = cats[i];
        var categoria = document.createElement("li");   
        var a1 = document.createElement("a"); 
        a1.href = "#";
        a1.style = "color: #eeeeee; padding-left: 25px;";
        a1.innerHTML = name;
        
        categoria.appendChild(a1);
        ul1.appendChild(categoria);
    }
    
}*/

function cambiarPrecios(index)
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    addTextForm(record, "precio", "Precio");
    addBotonSubmit(record);
    
}

function duplicar(index)
{
    
}

function addProducto()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Titulo");
    addTextForm(record, "precio1", "Precio 1"); 
    addTextForm(record, "precio2", "Precio 2"); 
    addTextForm(record, "calorias", "Calorias");  
    addSelectForm(record, "categoria", "Categoria"); 
    addSelectForm(record, "subcategoria", "Subcategoria"); 
    
    addSwitch(record, "check_plato_del_chef", "Plato del chef");
    addSwitch(record, "check_vegetariano", "Vegetariano");
    addSwitch(record, "check_celiacos", "Celiacos");
    addSwitch(record, "check_destacado", "Destacado");
    addSwitch(record, "check_delivery", "Delivery");
    
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_1", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_1"); });  
    addImageToUpload(record, "img_upload_2", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_2"); });  
}

function addIngrediente()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Titulo");
    addTextForm(record, "precio1", "Precio 1"); 
    addTextForm(record, "precio2", "Precio 2"); 
    addTextForm(record, "calorias", "Calorias");  
    addSelectForm(record, "categoria", "Categoria"); 
    addSelectForm(record, "subcategoria", "Subcategoria"); 
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_subcategoria", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_subcategoria"); });  
       
}
    
function addSubCategoria()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Nombre subcategoria"); 
    addSelectForm(record, "categoria", "Categoria padre"); 
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_subcategoria", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_subcategoria"); });  
    
}
    
function addCategoria()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Nombre"); 
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_categoria", "Imagen de categoria", function(){ readURL(this, "#img_upload_categoria"); });  
}
    
function addSalsa()
{ 
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";

    addTextForm(record, "nombre", "Titulo");
    addTextForm(record, "precio", "Precio 1");
    addTextForm(record, "calorias", "Calorias");
    addTextForm(record, "categoria", "Categoria");
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_salsa", "Imagen de salsa", function(){ readURL(this, "#img_upload_salsa"); });       
}

    
</script>
 -->     
<script> 
    $(document).ready(function(){         
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
        
        setSideBarCategorias();
    });
</script>

