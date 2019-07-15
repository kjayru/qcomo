<div class="box-header2" id="add_box_header2" style="padding: 0">
        <div style="float:left; padding: 0 0 0 25px;">
            <h3 class="box-title2">CATEGORIAS Y SUBCATEGORIAS DE PRODUCTOS</h3>
        </div>
        <div style="float:right; margin-right: 15px; padding: 0px;">
            <button style="background-color: #cd853f;" class="btn  bt-xs btn-add-nuevo">Agregar Categoria</button> 
            
        </div>
    </div>
     
    
    <div class="box-body2">
          <table id="tb-cliente" class="table table-responsive table-hover">
            <thead style="background-color: #696969; color: #fff;">
            <tr>
              <th>Id</th>
              <th>Foto</th>
              <th>Categoria</th>
              <th>Estado</th>
              <th></th> 
            </tr>
            </thead>
            <tbody> 
               
                @foreach($categorias as $k=> $cat)
                <tr>
                    <td>{{ $k+1 }}</td>
                   
                    <td><img src="/{{ $cat->photo }}" class="img-fluid" width="70px"></td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->status }}</td>
                    <td><a href="#" data-id="{{ $cat->id}}" class="btn btn-primary btn-category-edit">Editar</a>
                        <a href="#" data-id="{{ $cat->id}}" class="btn btn-danger btn-category-delete">Borrar</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
          </table>
    </div> 