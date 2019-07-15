<div class="box-header2" id="add_box_header2" style="padding: 0">
        <div style="float:left; padding: 0 0 0 25px;">
            <h3 class="box-title2">INGREDIENTES</h3>
        </div>
        <div style="float:right; margin-right: 15px; padding: 0px;">
            <button    style="background-color: #cd853f;" class="btn btn-nuevo-ingrediente">Agregar Ingrediente</button> 
        </div>
    </div>
     
  
    <div class="box-body2">
          <table id="tb-cliente" class="table table-responsive table-hover">
            <thead style="background-color: #696969; color: #fff;">
            <tr>
              <th>Id</th>
              <th>Foto</th>
              <th>Nombre</th>
              <th>Precio</th> 
              <th></th> 
              <th></th>
            </tr>
            </thead>
            <tbody> 
                    @foreach(@$ingredientes as $k => $ing)
                    <tr>
                      <td>{{ @$k +1 }}</td>
                      <td><img src="/{{ @$ing->ingredientphotos[0]->photo }}" class="img-fluid" width="70"></td>
                      <td>{{ $ing->name }}</td>
                      <td>{{ $ing->price }}</td>
                     
                      <td>{{ $ing->state }}</td>
                      <td><a href="#" data-id="{{$ing->id}}" class="btn btn-primary btn-ingredient-edit">Editar</a>
                        <!--<a href="#" data-id="{{$ing->id}}" class="btn btn-primary btn-ingredient-delete">Borrar</a>--></td>
                  </tr>
                    
                    @endforeach 
            </tbody>
          </table>
    </div>