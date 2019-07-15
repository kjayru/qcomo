<div class="box-header with-border">
        Producto
</div>
<form class="form-horizontal" method="POST" id="fr-producto" enctype="multipart/form-data">  
    <div class="box-body">
            @csrf
            <input type="hidden" name="_method" id="metodo" value="POST">
            
            <input type="hidden" name="client_id" id="client_id" value="{{@$client_id}}">
            <input type="hidden" name="product_id" id="product_id" >
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Categoria</label>  
                <div class="col-md-8">
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div> 
            
            <!-- form-group -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Titulo</label>  
                <div class="col-md-8">
                <input id="title" name="title" style="background-color: #e5e5e5;" type="text" placeholder="titulo" class="form-control input-md">                        
                </div> 
            </div>

            <div class="form-group">
                    <label class="col-md-3 control-label" for="price1">Precio 1</label>  
                    <div class="col-md-8">
                    <input id="price1" name="price1" style="background-color: #e5e5e5;" type="text" placeholder="precio 1" class="form-control input-md">                        
                    </div> 
            </div>

            <div class="form-group">
                    <label class="col-md-3 control-label" for="price2">Precio 2</label>  
                    <div class="col-md-8">
                    <input id="price2" name="price2" style="background-color: #e5e5e5;" type="text" placeholder="precio 2" class="form-control input-md">                        
                    </div> 
            </div>

            <div class="form-group"> 
                    <label class="control-label col-md-3" style="padding-left: 15px;"  for="btn-save">Foto </label> 
                    <div class="input-group col-md-8">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input name="photo" type="file" id="imgInpPhoto2">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="col-md-8">    
                            <img id='img-upload_photo2' class="img-responsive"/>     
                    </div>
                </div>
        </div>  

        <div class="form-group"> 
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
    
    </form>    