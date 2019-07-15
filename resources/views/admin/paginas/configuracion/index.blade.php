@extends('admin.layout.master')

@section('content')
<section class="content" style="float: none; width: 100%; padding: 0px; margin-top: 120px; padding-left: 80px;">
     
    <div class="row" style=" margin: 0 auto;">
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onPaquetes()">  
                <div class="box-body no-padding" > 
                    <img src="../images/gift-box.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">PAQUETES</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onTiposComida()">  
                <div class="box-body no-padding" > 
                    <img src="../images/list.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">TIPOS DE COMIDA</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onMail()">  
                <div class="box-body no-padding" > 
                    <img src="../images/chat.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">MAIL - SMS - WHATSAPP</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onTraducciones()">  
                <div class="box-body no-padding" > 
                    <img src="../images/star.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">TRADUCCIONES</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onVinos()">  
                <div class="box-body no-padding" > 
                    <img src="../images/upload.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">IMPORTAR VINOS Y COCTELES</h4>
                </div> 
            </div>
            
        </div>
        
        
    </div>
    
    <div class="row" style=" margin: 0 auto;">
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onPrinter()">  
                <div class="box-body no-padding" > 
                    <img src="../images/printing-tool.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">IMPRESORA-TICKETEADORA</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onCodigoWeb()">  
                <div class="box-body no-padding" > 
                    <img src="../images/html-coding.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">CODIGO WEB</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onMetodoPago()()">  
                <div class="box-body no-padding" > 
                    <img src="../images/credit-card.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">METODOS DE PAGO - COBRO</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onPuntos()">  
                <div class="box-body no-padding" > 
                    <img src="../images/star.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">PUNTOS</h4>
                </div> 
            </div>
            
        </div>
        
        <div class="col-md-2">
            
            <div class="box" id="opc_conf_div" onclick="onPaisProvincia()">  
                <div class="box-body no-padding" > 
                    <img src="../images/world.png" width="65px" height="65px" style="margin-left: 65px; margin-top: 15px;" />
                    <h4 style="margin-left: 0px;" align="center">PAIS - PROVINCIA - LOCALIDAD</h4>
                </div> 
            </div>
            
        </div>
        
        
    </div>
    
    
</section>

<script>
    function onPaquetes(){  window.location.href = "/admin/paquetes"; }
    function onTiposComida(){  window.location.href = "/admin/clasificaciones"; }
    function onMail(){  window.location.href = "/admin/mail_sms"; }
    function onTraducciones(){  window.location.href = "/admin/traducciones"; }
    function onVinos(){  window.location.href = "/admin/paquetes"; }
    function onPrinter(){  window.location.href = "/admin/setting_impresora"; }
    function onCodigoWeb(){  window.location.href = "/admin/codigoweb"; }
    function onMetodoPago(){  window.location.href = "/admin/metodopago"; }
    function onPuntos(){  window.location.href = "/admin/puntos"; }
    function onPaisProvincia(){  window.location.href = "/admin/paisprovincialocalidad"; }
    
</script>
@endsection
@include('admin.partial.scripts')