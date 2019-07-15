<form class="form-horizontal" method="POST" id="fr-mesas" enctype="multipart/form-data">  
    <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo" value="POST">
                        
                        <input type="hidden" name="client_id" id="client_id" value="{{$client_id}}">
                        <input type="hidden" name="mesa_id" id="mesa_id" value=>
                        
                        <!-- form-group -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nummesa">Número de mesa</label>  
                            <div class="col-md-8">
                            <input id="nummesa" name="nummesa" style="background-color: #e5e5e5;" type="text" placeholder="Número de mesa" class="form-control input-md">                        
                            </div> 
                        </div>
                        <div class="form-group">
                                <label class="col-md-3 control-label" for="descripcion">Descripción</label>  
                                <div class="col-md-8">
                                <input id="descripcion" name="descripcion" style="background-color: #e5e5e5;" type="text" placeholder="Descripción" class="form-control input-md">                        
                                </div> 
                            </div>

                        <div class="form-check">
                           
                            <div class="col-md-8">
                                <input class="form-check-input" type="checkbox" id="estado" name="estado"  value="1" >
                                <label class="form-check-label" for="estado">
                                       Oculto
                                 </label>
                            </div> 
                        </div>
                        
  
    </div>
    <div class="box-footer">                    
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
     </div>
</form>  