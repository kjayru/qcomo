<form class="form-horizontal" id="fr-traduccion" enctype="multipart/form-data" >
        
        <div class="box-body">
            @csrf
            <input type="hidden" name="_method" id="metodo" value="POST">
            <input type="hidden" name="id" id="id" value="1">

            <div class="form-group">
                <label class="col-md-3 control-label" for="nombre">Nombre</label>  
                <div class="col-md-8">
                <input id="nombre" name="nombre" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                </div> 
            </div> 
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="sms">Traduccion</label>  
                <div class="col-md-8">
                <input id="traduccion"  name="traduccion" style="background-color: #e5e5e5;" type="text" placeholder="Traduccion" class="form-control input-md">                        
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