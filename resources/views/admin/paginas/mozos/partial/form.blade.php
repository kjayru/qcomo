<form class="form-horizontal" method="POST" id="fr-mozos" enctype="multipart/form-data">  
    <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo" value="POST">
                        
                        <input type="hidden" name="client_id" id="client_id" value="{{$client_id}}">
                        <input type="hidden" name="mozo_id" id="mozo_id" >
                        
                        
                        <!-- form-group -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Nombres y Apellidos</label>  
                            <div class="col-md-8">
                            <input id="name" name="name" style="background-color: #e5e5e5;" type="text" placeholder="Nombres y apellidos" class="form-control input-md">                        
                            </div> 
                        </div>
                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="address">Direccion</label>  
                            <div class="col-md-8">
                            <input id="address" name="address" style="background-color: #e5e5e5;" type="text" placeholder="Direccion" class="form-control input-md">
                            </div> 
                         </div>
                       
                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="country">Pais</label>  
                            <div class="col-md-8">
                            <input id="country" name="country" style="background-color: #e5e5e5;" type="text" placeholder="Pais" class="form-control input-md">
                            </div> 
                         </div>
                         <div class="form-group"> 
                            <label class="col-md-3 control-label" for="city">Ciudad</label>  
                            <div class="col-md-8">
                            <input id="city" name="city" style="background-color: #e5e5e5;" type="text" placeholder="Ciudad" class="form-control input-md">
                            </div> 
                         </div>

                         <div class="form-group"> 
                            <label class="col-md-3 control-label" for="province">Provincia</label>  
                            <div class="col-md-8">
                            <input id="province" name="province" style="background-color: #e5e5e5;" type="text" placeholder="Provincia" class="form-control input-md">
                            </div> 
                         </div>

                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="cellphone">Celular</label>  
                            <div class="col-md-8">
                            <input id="cellphone" name="cellphone" style="background-color: #e5e5e5;" type="text" placeholder="Celular" class="form-control input-md">
                            </div> 
                         </div>
                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="email">Correo</label>  
                            <div class="col-md-8">
                            <input id="email" name="email" style="background-color: #e5e5e5;" type="text" placeholder="Correo Electrónico" class="form-control input-md">
                            </div> 
                         </div>
                      
                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="sexo">Sexo</label>  
                            <div class="col-md-8">
                                <select style="background-color: #e5e5e5;" id="mozoSexo" class="form-control input-md" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div> 
                         </div>
                       
                        
                        <div class="form-group"> 
                            <label class="control-label col-md-3" style="padding-left: 15px;"  for="btn-save">Foto Mozo</label> 
                            <div class="input-group col-md-8">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input name="avatar" type="file" id="imgInpAvatar">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-md-8">    
                               
                            </div>
                         </div>

                          
            <div class="col-md-12">
                <div class="col-md-6">    
                  <img id='img-upload_avatar' class="img-responsive"/>       
                </div>
               
            </div>
       
    </div>
    <div class="box-footer">                    
        <button type="submit" class="btn btn-info pull-right">Guardar</button>
     </div>
</form>  