<form class="form-horizontal" id="fr-mail-sms" enctype="multipart/form-data" >
        
        <div class="box-body">
            @csrf
            <input type="hidden" name="_method" id="metodo" value="POST">
            <input type="hidden" name="id" id="id" value="1">

            <div class="form-group">
                <label class="col-md-3 control-label" for="email">Email</label>  
                <div class="col-md-8">
                <input id="email" name="email" style="background-color: #e5e5e5;" type="text" placeholder="Nombre" class="form-control input-md">                        
                </div> 
            </div> 
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="sms">Sms</label>  
                <div class="col-md-8">
                <input id="sms"  name="sms" style="background-color: #e5e5e5;" type="text" placeholder="Sms" class="form-control input-md">                        
                </div> 
            </div>  
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="whatsapp">Whatsapp</label>  
                <div class="col-md-8">
                <input id="whatsapp" name="whatsapp" style="background-color: #e5e5e5;" type="text" placeholder="Whatsapp" class="form-control input-md">                        
                </div> 
            </div>  
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="direccion">Direccion</label>  
                <div class="col-md-8">
                <input id="direccion" name="direccion" style="background-color: #e5e5e5;" type="text" placeholder="Direccino" class="form-control input-md">                        
                </div> 
            </div>  
            
            <div class="form-group">
                <label class="col-md-3 control-label" for="names">Facebook</label>  
                <div class="col-md-8">
                <input id="facebook"  name="facebook" style="background-color: #e5e5e5;" type="text" placeholder="Url facebook" class="form-control input-md">                        
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