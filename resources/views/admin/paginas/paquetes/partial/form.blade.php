<form class="form-horizontal" id="fr-paquete" enctype="multipart/form-data" >
                  
                  <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo" value="POST">
                        <input type="hidden" name="id" id="id" value="">

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="names">Nombre</label>  
                            <div class="col-md-8">
                            <input id="name" name="name" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                            </div> 
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="description">Descripcion</label>  
                            <div class="col-md-8">
                            <input id="description" name="decription" style="background-color: #e5e5e5;" type="text" placeholder="Descripcion" class="form-control input-md">                        
                            </div> 
                        </div> 
                         
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="price">Precio</label>  
                            <div class="col-md-8">
                            <input id="price" name="price" style="background-color: #e5e5e5;" type="number" min="1" placeholder="Precio" class="form-control input-md">                        
                            </div> 
                        </div> 

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="promo">Precio promo</label>  
                            <div class="col-md-8">
                            <input id="promo" name="promo" style="background-color: #e5e5e5;" type="number" min="1" placeholder="Precio promo" class="form-control input-md">                        
                            </div> 
                        </div> 

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="status">Estado</label>  
                            <div class="col-md-8">
                            <input id="status" name="status" style="background-color: #e5e5e5;" type="checkbox" value="1"/> 
                            </div> 
                        </div> 
                   
                        
                <div class="box-footer"> 
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>