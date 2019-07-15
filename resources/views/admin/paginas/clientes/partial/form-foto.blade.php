<form class="form-horizontal" id="fr-clients-foto">  
    <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo2" value="POST">
                        <input type="hidden" name="client_id" id="client_id2" value="">
           
              <div class="form-group"> 

                            <label class="col-md-3 control-label"  for="btn-save">Foto 1</label> 
                            <div class="col-md-8 input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="foto[]" id="imgInpF1">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                           

            </div>
            <div class="form-group">               
                            <label class="col-md-3 control-label"  for="btn-save">Foto 2</label> 
                            <div class="col-md-8 input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="foto[]" id="imgInpF2">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                           
            </div>
            <div class="form-group">                
                            <label class="col-md-3 control-label"  for="btn-save">Foto 3</label> 
                            <div class="col-md-8 input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="foto[]" id="imgInpF3">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            
            </div>
            <div class="form-group">              
                            <label class="col-md-3 control-label"  for="btn-save">Foto 4</label> 
                            <div class="col-md-8 input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="foto[]" id="imgInpF4">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                           
                            
                        
                                       
              </div>

              <div class="col-md-12">
                <div class="col-md-3">
                    
                    <img id='img-upload_f1' style="padding: 15px; width: 100%;"/>
                   
                </div>

                <div class="col-md-3">
                   
                    <img id='img-upload_f2' style="padding: 15px; width: 100%;"/>
                </div>

                <div class="col-md-3">
                    
                    <img id='img-upload_f3' style="padding: 15px; width: 100%;"/>
                    
                </div>

                <div class="col-md-3">
                    <img id='img-upload_f4' style="padding: 15px; width: 100%;"/>
                   
                </div>
              </div>
            </div>
            <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right btn-client-foto" disabled>Guardar</button>
                </div>
            </form>