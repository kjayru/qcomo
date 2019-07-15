<div class="box-header2" id="add_box_header2" style="padding: 0">
        <div style="float:left; padding: 0 0 0 25px;">
            <h3 class="box-title2">SALSAS</h3>
        </div>
        <div style="float:right; margin-right: 15px; padding: 0px;">
            <button  style="background-color: #cd853f;" class="btn btn-nuevo-salsa">Agregar Salsa</button> 
        </div>
    </div>
     
    <!-- /.box-body -->  
    <div class="box-body2">
          <table id="tb-cliente" class="table table-responsive table-hover">
            <thead style="background-color: #696969; color: #fff;">
            <tr>
              <th>Id</th>
              <th>Foto</th>
              <th>Nombre</th>
              <th>Precio</th> 
              <th></th> 
            </tr>
            </thead>
            <tbody> 
                @foreach($salsas as $k => $salsa)
            <tr>
                <td>{{ $k+1}}</td>
                <td><img src="/{{ $salsa->photo}}" width="70"></td>
                <td>{{ $salsa->name }}</td>
                <td>{{ $salsa->price }}</td> 
                <td><a href="#" data-id="{{ $salsa->id}}" class="btn btn-primary btn-salsa-edit">Editar</a>
                    <a href="#" data-id="{{ $salsa->id}}" class="btn btn-danger btn-salsa-delete">Borrar</a></td> 
            </tr>
                @endforeach
            </tbody>
          </table>
    </div> 