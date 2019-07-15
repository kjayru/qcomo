            <form class="form-horizontal" id="fr-classification" enctype="multipart/form-data" >
                  
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
                            <label class="col-md-3 control-label" for="names">Descripcion</label>  
                            <div class="col-md-8">
                            <input id="description" name="decription" style="background-color: #e5e5e5;" type="text" placeholder="Descripcion" class="form-control input-md">                        
                            </div> 
                        </div> 
                        
                        <div class="form-group"> 
                                <label class="control-label col-md-3" style="padding-left: 15px;"  for="btn-save">Foto Categoria</label> 
                                <div class="input-group col-md-8">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input name="cover" type="file" id="imgInpAvatar">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-8">    
                                   
                                </div>
                             </div>
                          </div>  
                  
                        <div class="col-md-12">
                            <div class="col-md-6">    
                                    <img id='img-upload' class="img-responsive" style="padding: 15px; "/>     
                            </div> 
                        </div>
                        
                <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>