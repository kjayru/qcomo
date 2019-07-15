<div class="box-header with-border">
        Ingrediente
</div>
<form class="form-horizontal" method="POST" id="fr-ingrediente" enctype="multipart/form-data">  
    <div class="box-body">
            @csrf
            <input type="hidden" name="_method" id="metodo" value="POST">
            
            <input type="hidden" name="client_id" id="client_id" value="{{@$client_id}}">
            <input type="hidden" name="ingredient_id" id="ingredient_id" >
            
            
            <!-- form-group -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Nombre</label>  
                <div class="col-md-8">
                <input id="name" name="name" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                </div> 
            </div>

            <div class="form-group">
                    <label class="col-md-3 control-label" for="price">Precio</label>  
                    <div class="col-md-8">
                    <input id="price" name="price" style="background-color: #e5e5e5;" type="text" placeholder="Precio" class="form-control input-md">                        
                    </div> 
                </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="calorias">Calorias</label>  
                <div class="col-md-8">
                <input id="calorias" name="calorias" style="background-color: #e5e5e5;" type="text" placeholder="Calorias" class="form-control input-md">                        
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="description">Descripción</label>  
                <div class="col-md-8">
                <textarea id="description" name="description" style="background-color: #e5e5e5;"  placeholder="Descripción" class="form-control"></textarea>                    
                </div> 
            </div>

            <div class="form-group"> 
                    <label class="control-label col-md-3" style="padding-left: 15px;"  for="btn-save">Fotos</label> 
                    <div class="input-group col-md-8">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input name="photo[]" type="file" id="imgInpPhoto" multiple>
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
    