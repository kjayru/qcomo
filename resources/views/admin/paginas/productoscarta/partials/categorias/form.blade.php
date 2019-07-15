<div class="box-header with-border">
        Categoria
</div>
<form class="form-horizontal" method="POST" id="fr-categoria" enctype="multipart/form-data">  
    <div class="box-body">
            @csrf
            <input type="hidden" name="_method" id="metodo" value="POST">
            
            <input type="hidden" name="client_id" id="client_id" value="{{@$client_id}}">
            <input type="hidden" name="category_id" id="category_id" >
            
            
            <!-- form-group -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Nombre</label>  
                <div class="col-md-8">
                <input id="name" name="name" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                </div> 
            </div>

            <div class="form-group">
                    <label class="col-md-3 control-label" for="parent_id">Padre</label>  
                    <div class="col-md-8">
                       
                        <select id="parent_id" name="parent_id"  class="form-control">    
                            <option value="">Seleccionar</option>
                            @foreach($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>                    
                    </div> 
                </div>

            <div class="form-group"> 
                    <label class="control-label col-md-3" style="padding-left: 15px;"  for="btn-save">Foto </label> 
                    <div class="input-group col-md-8">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input name="photo" type="file" id="imgInpPhoto">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="col-md-8">    
                            <img id='img-upload_photo' class="img-responsive"/>     
                    </div>
            </div>

            <div class="form-group"> 
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
     </div> 
</form> 
    