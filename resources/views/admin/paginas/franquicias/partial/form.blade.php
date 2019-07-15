            <form class="form-horizontal" id="fr-franchise" enctype="multipart/form-data" >
                  
                  <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo" value="POST">
                        <input type="hidden" name="franchise_id" id="franchise_id" value="">

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="names">Nombres y Apellidos</label>  
                            <div class="col-md-8">
                            <input id="names" name="names" style="background-color: #e5e5e5;" type="text" placeholder="Nombres y apellidos" class="form-control input-md">                        
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
                            <label class="col-md-3 control-label" for="mail">Email</label>  
                            <div class="col-md-8">
                            <input id="mail" name="mail" style="background-color: #e5e5e5;" type="text" placeholder="Email" class="form-control input-md">
                            </div> 
                        </div>
                       
                       <div class="form-group"> 
                            <label class="col-md-3 control-label" for="mail">Categoría</label>  
                            <div class="col-md-8">
                                <select class="form-control input-md" name="classification_id" id="classification_id">
                                    <option value="seleccione"></option>
                                     @foreach($classifications as $classify)
                                    <option value="{{$classify->id}}">{{ $classify->name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>

                        <div class="form-group"> 
                            <label class="col-md-3 control-label" for="mail">Paquete</label>  
                            <div class="col-md-8">
                                <select class="form-control input-md" name="package_id" id="package_id">
                                 <option value="seleccione"></option>
                                    @foreach($packages as $package)
                                    <option value="{{$package->id}}">{{ $package->name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>

                        <div class="form-group"> 
                          
                            <label class="col-md-3 control-label" style="padding-left: 15px;"  for="btn-save">Caratula</label> 
                            <div class="input-group col-md-8">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="avatar" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control"  readonly>
                            </div>
                        </div> 
                        <img id='img-upload' class="img-responsive" style="padding: 15px; "/>
                        <input id="latitude" name="latitude" style="background-color: #e5e5e5;" type="hidden">
                        <input id="longitude" name="longitude" style="background-color: #e5e5e5;" type="hidden" >
                      </div>
                <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>