
    @csrf
    <div class="box-body">
        <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label" >Nombre</label>

            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="{{ @$role->name }}" placeholder="Nombre">
            </div>
        </div>

        <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label" >Url amigable</label>

            <div class="col-sm-10">
                <input type="text" name="slug" class="form-control" id="slug" value="{{ @$role->slug }}" placeholder="Slug">
            </div>
        </div>

        <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label" >Descripción</label>

            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{ @$role->description }}</textarea>
            </div>
        </div>
        <hr>
        <h3 clas="text-center">Permiso especial</h3>

        <div class="form-group">
        <label for="nombre" class="col-sm-1 control-label" ></label>
             <div class="col-sm-10">
                <label><input type="radio" value="all-access" name="special" @if(@$role->special=="all-access") checked @endif>acceso total </label><br>
                <label><input type="radio" value="no-access" name="special"  @if(@$role->special=="no-access") checked @endif>Ningun acceso </label>
            </div>
        </div>

        <div class="form-group">
        <label for="nombre" class="col-sm-1 control-label" ></label>
        <div class="col-sm-10">
            <ul class="list-unstyled">
                @foreach($permissions as $k => $permission)
                    <li>
                        <label for="">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" @if(@$role->permissions[$k]->id == $permission->id) checked @endif>
                            {{$permission->name}}
                            <em>({{ $permission->description ?:  'N/A' }})</em>
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">

        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
