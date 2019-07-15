<div class="box-header2" id="add_box_header2" style="padding: 0">
        <div style="float:left; padding: 0 0 0 25px;">
            <h3 class="box-title2">PRODUCTOS</h3>
        </div>
        <div style="float:right; margin-right: 15px; padding:10px 0px;">
            <button  style="background-color: #cd853f;" class="btn btn-prod-duplicar">Duplicar</button>
           
            <button  value="ok" style="background-color: #cd853f;" class="btn  btn-prod-nuevo"> Agregar Producto</button>
        </div>
    </div>
     
        <nav class="subcontent0 sidebar_sub_1" > 
       
            <ul class="list-group" data-widget="tree" id="prodCategorias"> 
            @foreach($categorias as $cat)
                <li>{{ @$cat->name }} </li>
            @endforeach
            </ul>
        </nav> 
        <!-- /.box-header -->
        <div  class="subcontent0 subcontent1">

            @if(@$productos=="")
                <p>No existe datos  generados</p>
            @else
            <table id="tb-cliente" class="table table-responsive table-hover">
              <thead style="background-color: #696969; color: #fff;">
                <tr>
                  <th>Id</th>
                  <th>Foto</th>
                  <th>Titulo</th>
                  <th>Precio 1</th> 
                  <th>Precio 2</th> 
                  <th></th>
                  <th></th> 
                </tr>
              </thead>
              <tbody>
                  @foreach($productos as $k => $menu)
                  <tr>
                    <td>{{ @$k +1 }}</td>
                    <td><img src="/{{ @$menu->photo }}" alt="" width="70"> </td>
                    <td> {{ @$menu->title }}</td>
                    <td>{{ @$menu->price1 }}</td>
                    <td>{{ @$menu->price2 }}</td>
                    <td>{{ @$menu->state }}</td>
                    <td><a href="#" data-id="{{ @$menu->id }}" class="btn btn-primary btn-prod-edit">Cambiar Precio</a>
                        <a href="#" data-id="{{ @$menu->id }}" class="btn btn-danger btn-prod-delete">Borrar</a>
                    </td>
                </tr>
                  
                  @endforeach 
              </tbody>
            </table>
            @endif
       
        </div> 