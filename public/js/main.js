

$(".btn-franciado-edit").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $.ajax({
        url:`/admin/franchisees/${id}/edit`,
        type:"GET",
        dataType:"json",
        beforeSend:function(){},
        success:function(response){
            console.log(response);
            $("#fr-franchise #names").val(response.names);
            
            $("#fr-franchise #cellphone").val(response.cellphone);
            $("#fr-franchise #city").val(response.city);
            $("#fr-franchise #mail").val(response.mail);
            $("#fr-franchise #province").val(response.province);
            $("#fr-franchise #address").val(response.address);
            
            $("#fr-franchise #franchise_id").val(response.id);

            $("#fr-franchise #classification_id").val(response.classification_id);
            $("#fr-franchise #package_id").val(response.package_id);

            $("#fr-franchise #metodo").val('PUT');
            $("#img-upload").attr("src",'/storage/franchise/'+response.avatar);

            

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 12,
            
                center: {lat: 40.4381307, lng: -3.8199653 }
            
            });
            var geocoder = new google.maps.Geocoder();
 
             geocodeAddress(geocoder, map);
            
        }
    });
});

$(".table-franquicia .estado").on('change',function(){
    let id = $(this).data('id');
    var token = $("#fr-franchise input[name='_token']").val();
    let data='';
    if($(this).data('estado')=="activo"){
         data = ({'id':id,'status':1,'_token':token,'_method':'PUT'});  
    }else{
         data = ({'id':id,'status':2,'_token':token,'_method':'PUT'});  
    }
    
    $.ajax({
        url:'/admin/franchisees-estado/'+id,
        type:"POST",
        dataType:"json",
        data:data,
        beforeSend:function(){},
        success:function(response){
           alert("estado actualizado");
        }
    });
});



$('#fr-franchise').on('submit', (function (e) {
    e.preventDefault()
    var id = $('#fr-franchise #franchise_id').val();
    var metodo = $('#fr-franchise #metodo').val();
    let url ='';
    if(metodo=='POST'){
        url ='/admin/franchisees/store';
    }else{
        url = '/admin/franchisees/' + id;
    }
    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            window.location.reload();
          }
      },
      error: function (err) {
        console.log(err)
      }
    })
  }))

 $(".nuevo_franquiciado").on('click',function(e){
    e.preventDefault();
    $("#fr-franchise input[type=text]").val('');
    $("#fr-franchise select").val('');
    $("#img-upload").attr('src','');
    $('#fr-franchise #metodo').val('POST');
 });
  

//clients
$(".nuevo_cliente").on('click',function(e){
    e.preventDefault();
    $(".capabox").fadeOut(350,'swing');
    let id = $(this).data('franchiseid');
    $('#fr-clients #franchise_id').val(id);
    $("#fr-clients input[type=text]").val('');
    $("#fr-clients select").val('');
    $("#img-upload_cover").attr('src','');
    $("#img-upload_logo").attr('src','');
    
    $("#img-upload_f1").attr('src','');
    $("#img-upload_f2").attr('src','');
    $("#img-upload_f3").attr('src','');
    $("#img-upload_f4").attr('src','');
    $('#fr-clients #metodo').val('POST');

    $(".chk-service").attr('checked',false);
    $(".chk-config").attr('checked',false);
});


$('#fr-clients').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients #client_id').val();
    var metodo = $('#fr-clients #metodo').val();
    let url ='';
    if(metodo=='POST'){
        url ='/admin/clients/store';
    }else{
        url = '/admin/clients/' + id;
    }
    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            //window.location.reload();
            $('#fr-clients-foto #client_id2').val(response.client_id);
            $('#fr-clients-service #client_id3').val(response.client_id);
            $('#fr-clients-config #client_id4').val(response.client_id);

           
            $(".btn-client-foto").attr('disabled',false);

            var stack1 = $("#fr-clients-foto").position().top;
			
			 $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
          }
      },
      error: function (err) {
        console.log(err)
      }
    })
  }))


  $(".btn-cliente-edit").on('click',function(e){
    e.preventDefault();
    $(".capabox").fadeOut(350,'swing');
    let id = $(this).data('id');

    $("#btn-mozo").attr("data-id",id);
    $("#btn-carta").attr("data-id",id);

    $.ajax({
        url:`/admin/clients/${id}/edit`,
        type:"GET",
        dataType:"json",
        beforeSend:function(){},
        success:function(response){
            
            $("#fr-clients #name").val(response.cliente.name);
            
            $("#fr-clients #cellphone").val(response.cliente.cellphone);
            $("#fr-clients #country").val(response.cliente.country);
            $("#fr-clients #city").val(response.cliente.city);
            $("#fr-clients #email").val(response.cliente.email);
            $("#fr-clients #province").val(response.cliente.province);
            $("#fr-clients #address").val(response.cliente.address);           
            $("#fr-clients #franchise_id").val(response.cliente.franchise_id);
            $("#fr-clients #sexo").val(response.cliente.sexo);
            $("#fr-clients #cashier").val(response.cliente.cashier);
            $("#fr-clients #metodo").val('PUT');
            $("#fr-clients #client_id").val(response.cliente.id);
            $("#fr-clients #latitude").val(response.cliente.latitude);
            $("#fr-clients #longitude").val(response.cliente.longitude);
            
            $("#img-upload_cover").attr('src','/storage/client/'+response.cliente.cover);
            $("#img-upload_logo").attr('src','/storage/client/'+response.cliente.logo);


            $('#fr-clients-foto #client_id2').val(response.cliente.id);
            $('#fr-clients-service #client_id3').val(response.cliente.id);
            $('#fr-clients-config #client_id4').val(response.cliente.id);

            $("#fr-clients-foto #metodo2").val('PUT');
            $("#fr-clients-service #metodo3").val('PUT');
            $("#fr-clients-config #metodo4").val('PUT');

            if(response.fotos.lenght>0){
                $("#img-upload_f1").attr('src','/storage/client/'+response.fotos[0].photo);
                $("#img-upload_f2").attr('src','/storage/client/'+response.fotos[1].photo);
                $("#img-upload_f3").attr('src','/storage/client/'+response.fotos[2].photo);
                $("#img-upload_f4").attr('src','/storage/client/'+response.fotos[3].photo);
            }
            $.each(response.services,function(i,e){
                let serviceid= e.service_id;
                $(`#service${serviceid}`).attr('checked',true);
            });
            
            $.each(response.configurations,function(i,e){   
                let cfid= e.configuration_id;
                $(`#configuration${cfid}`).attr('checked',true);
            });

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 12,
            
                center: {lat: 40.4381307, lng: -3.8199653 }
            
            });
            var geocoder = new google.maps.Geocoder();
 
             geocodeAddress(geocoder, map);
            

             $(".btn-submit-config").attr('disabled',false);
             $(".btn-submit-service").attr('disabled',false);
             $(".btn-client-foto").attr('disabled',false);

            
        }
    });
  });


  $('#fr-clients-foto').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients #client_id').val();
    var metodo = $('#fr-clients #metodo').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/foto';
        }else{
            url = '/admin/clients/foto/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                    $('#fr-clients #client_id2').val(response.client_id);
                    $('#fr-clients #client_id3').val(response.client_id);
                    $('#fr-clients #client_id4').val(response.client_id);

                    $(".btn-submit-config").attr('disabled',false);

                    var stack1 = $("#fr-clients-config").position().top;
			
                    $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
                    
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  $('#fr-clients-service').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients-service #client_id3').val();
    var metodo = $('#fr-clients-service #metodo3').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/service';
        }else{
            url = '/admin/clients/service/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                   
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  
  $('#fr-clients-config').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients-config #client_id4').val();
    var metodo = $('#fr-clients-config #metodo4').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/configuration';
        }else{
            url = '/admin/clients/configuration/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                   
                    $(".btn-submit-service").attr('disabled',false);

                    var stack1 = $("#fr-clients-service").position().top;
			
                    $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  $(".table-cliente .estado").on('change',function(){
    let id = $(this).data('id');
    var token = $("#fr-clients input[name='_token']").val();
    let data='';
    if($(this).data('estado')=="activo"){
         data = ({'id':id,'status':1,'_token':token,'_method':'PUT'});  
    }else{
         data = ({'id':id,'status':2,'_token':token,'_method':'PUT'});  
    }
    
    $.ajax({
        url:'/admin/clients-estado/'+id,
        type:"POST",
        dataType:"json",
        data:data,
        beforeSend:function(){},
        success:function(response){
           alert("estado actualizado");
        }
    });
});


$("#btn-mozo").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');

    let url = `/admin/mozos/${id}`;

    window.location.href= url;
    
});

$("#btn-carta").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
   
    let url = `/admin/lacartas/${id}`;

    window.location.href= url;
});

$(".btn-tb-mozo").on('click',function(e){
    e.preventDefault();
    $("#bl-mesa").fadeOut(350,function(){
        $("#bl-mozo").fadeIn(350,'swing');
    });
    
    
});

$(".btn-tb-mesa").on('click',function(e){
    e.preventDefault();
   
    $("#bl-mozo").fadeOut(350,function(){
        $("#bl-mesa").fadeIn(350,'swing');
    });
    
    
});



$(".btn-nuevo-mesa").on('click',function(){
    $(".capabox").hide();
    $(".bl-fr-mozo").fadeOut(350,function(){
        $(".bl-fr-mesa").fadeIn(350,'swing');
    });
});
$(".btn-nuevo-mozo").on('click',function(){
    $(".capabox").hide();
    $(".bl-fr-mesa").fadeOut(350,function(){
        $(".bl-fr-mozo").fadeIn(350,'swing');
    });
});
/**mapa*/
var marker;
      
function initMap() {
    
    var myLatLng = {lat: 40.4381307, lng: -3.8199653 };  

var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 12,

    center: {lat: 40.4381307, lng: -3.8199653 }

});
var geocoder = new google.maps.Geocoder();


$("#address").blur(function(){
    geocodeAddress(geocoder, map);
});
var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'das'
});
}

function geocodeAddress(geocoder, resultsMap) {
var address = document.getElementById('address').value;
geocoder.geocode({'address': address}, function(results, status) {
    if (status === 'OK') {
    resultsMap.setCenter(results[0].geometry.location);
    var lat = results[0].geometry.location.lat();
    var lng = results[0].geometry.location.lng();
    
    $("#latitude").val(lat);
    $("#longitude").val(lng);

    var marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
    });
    } else {
    console.log('Geocode was not successful for the following reason: ' + status);
    }
});
}

$("#fr-mozos").on('submit',function(e){
    e.preventDefault();
    var metodo = $('#fr-mozos input[name="_method"]').val();
    var client_id = $('#fr-mozos input[name="client_id"]').val();
    var id =  $('#mozo_id').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/mozos/store';
        }else{
            url = '/admin/mozos/' + id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
});

let hash = window.location.hash;
if(hash=="#mesa"){
    $("#bl-mozo").fadeOut(350,function(){
        $("#bl-mesa").fadeIn(350,'swing');
    });
}

$(".btn-mozo-editar").on('click',function(){
    $('#fr-mozos input[name="_method"]').val('PUT');
    var id = $(this).data('id');
    $('#fr-mozos input[name="mozo_id"]').val(id);
  
    $.ajax({
        url:'/admin/mozos/'+id+'/edit',
        type:'GET',
        dataType:'json',
        success:function(response){
            $(".capabox").hide();
            $('#fr-mozos input[name="name"]').val(response[0].name);
            $('#fr-mozos input[name="address"]').val(response[0].address);
            $('#fr-mozos input[name="country"]').val(response[0].country);
            $('#fr-mozos input[name="city"]').val(response[0].city);
            $('#fr-mozos input[name="province"]').val(response[0].province);
            $('#fr-mozos input[name="cellphone"]').val(response[0].cellphone);
            $('#fr-mozos input[name="email"]').val(response[0].email);
            $('#mozoSexo').val(response[0].sexo);
            $("#img-upload_avatar").attr("src","/"+response[0].avatar);

          
        }
    });
});



$("#fr-mesas").on('submit',function(e){
    e.preventDefault();
    var metodo = $('#fr-mesas input[name="_method"]').val();
    var client_id = $('#fr-mesas input[name="client_id"]').val();
    var id =  $('#mesa_id').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/mesas/store';
        }else{
            url = '/admin/mesas/' + id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
});




$(".btn-mesa-editar").on('click',function(){
    $('#fr-mesas input[name="_method"]').val('PUT');
    var id = $(this).data('id');
    $('#fr-mesas input[name="mesa_id"]').val(id);
  
    $.ajax({
        url:'/admin/mesas/'+id+'/edit',
        type:'GET',
        dataType:'json',
        success:function(response){
            $(".capabox").hide();
            $('#fr-mesas input[name="nummesa"]').val(response.nummesa);
            $('#fr-mesas input[name="descripcion"]').val(response.descripcion);
            
           
            $(".bl-fr-mozo").fadeOut(350,function(){
                $(".bl-fr-mesa").fadeIn(350,'swing');
            });
          
        }
    });
});

$(".btn-prod-nuevo").on('click',function(e){
    e.preventDefault();
    $(".iform").fadeOut(350,function(){
        $(".bl-fr-producto").show();
    });
});

$("#fr-producto").on('submit',function(e){
    e.preventDefault();

    var metodo = $('#fr-producto input[name="_method"]').val();
    var client_id = $('#fr-producto input[name="client_id"]').val();
    var id =  $('#product_id').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/lacartas/store';
        }else{
            url = '/admin/lacartas/' + id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })

});

$(".btn-prod-edit").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $('#fr-producto input[name="_method"]').val('PUT');
    $('#fr-producto input[name="product_id"]').val(id);
    $.ajax({
        url: '/admin/lacartas/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            $('#fr-producto #category_id ').val(response.category_id);
            $('#fr-producto input[name="title"]').val(response.title);
            $('#fr-producto input[name="price1"]').val(response.price1);
            $('#fr-producto input[name="price2"]').val(response.price2);   
            
            $('#fr-producto #img-upload_photo2').attr('src','/'+response.photo);
            $(".iform").fadeOut(350,function(){
                $(".bl-fr-producto").show();
            });
        }
    })

});

$(".btn-nuevo-ingrediente").click(function(e){
    e.preventDefault();
    $(".iform").fadeOut(350,function(){
        $(".bl-fr-ingrediente").show();
    });
});

$("#fr-ingrediente").on('submit',function(e){
    e.preventDefault();
    
    var metodo = $('#fr-ingrediente input[name="_method"]').val();
    var client_id = $('#fr-ingrediente input[name="client_id"]').val();
    var id =  $('#ingredient_id').val();
    let url ='';
        if(metodo=='POST'){
            url = '/admin/ingredients/store';
        }else{
            url = '/admin/ingredients/'+id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })

});

$(".btn-ingredient-edit").on('click',function(e){
    e.preventDefault();

    let id = $(this).data('id');
    $('#fr-ingrediente input[name="_method"]').val('PUT');
    console.log('id: '+id);
    $('#fr-ingrediente #ingredient_id').val(id);
    $.ajax({
        url: '/admin/ingredients/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            
            $('#fr-ingrediente input[name="name"]').val(response.name);
            $('#fr-ingrediente input[name="price"]').val(response.price);
            $('#fr-ingrediente input[name="calorias"]').val(response.calorias); 
            $('#fr-ingrediente #description').val(response.description);   
            
            
            $(".iform").fadeOut(350,function(){
                $(".bl-fr-ingrediente").show();
            });
            $('#fr-ingrediente #img-upload_photo').attr('src','/'+response.photo); 
        }
    })
});


$(".btn-add-nuevo").on('click',function(e){
    e.preventDefault();
    $(".iform").fadeOut(350,function(){
        $(".bl-fr-categoria").show();
    });
});

$("#fr-categoria").on('submit',function(e){
    e.preventDefault();

    var metodo = $('#fr-categoria input[name="_method"]').val();
    var client_id = $('#fr-categoria input[name="client_id"]').val();
    var id =  $('#category_id').val();
    let url ='';
        if(metodo=='POST'){
            url = '/admin/categories/store';
        }else{
            url = '/admin/categories/'+id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })

});

$(".btn-category-edit").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $('#fr-categoria input[name="_method"]').val('PUT');
    
    $('#fr-categoria #category_id').val(id);
    console.log("idcat: "+id);
    $.ajax({
        url: '/admin/categories/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            
            $('#fr-categoria input[name="name"]').val(response.name);
            
            $('#fr-categoria #parent_id').val(response.parent_id);
            
            $(".iform").fadeOut(350,function(){
                $(".bl-fr-categoria").show();
            });
            $('#fr-categoria #img-upload_photo').attr('src','/'+response.photo); 
        }
    })

});

$("#fr-salsa").on('submit',function(e){
    e.preventDefault();

    var metodo = $('#fr-salsa input[name="_method"]').val();
    var client_id = $('#fr-salsa input[name="client_id"]').val();
    var id =  $('#salsa_id').val();
    let url ='';
        if(metodo=='POST'){
            url = '/admin/salsas/store';
        }else{
            url = '/admin/salsas/'+id;
        }

    $.ajax({
        url: url,
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.rpta=='ok'){
                window.location.reload();
                 
            }
        },
        error: function (err) {
            console.log(err)
        }
    })

});

$(".btn-nuevo-salsa").on('click',function(e){
    e.preventDefault();
    $(".iform").fadeOut(350,function(){
        $(".bl-fr-salsa").show();
    });
});

$(".btn-salsa-edit").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $('#fr-salsa input[name="_method"]').val('PUT');
    
    $('#fr-salsa #salsa_id').val(id);
   
    $.ajax({
        url: '/admin/salsas/'+id+'/edit',
        type: 'GET',
        success: function (response) {
            
            $('#fr-salsa input[name="name"]').val(response.name);
            $('#fr-salsa input[name="price"]').val(response.price);
            $('#fr-salsa #description').val(response.description);
            
            $(".iform").fadeOut(350,function(){
                $(".bl-fr-salsa").show();
            });
            $('#fr-salsa #img-upload_photo').attr('src','/'+response.photo); 
        }
    })

});


$(".btn-salsa-delete").on('click',function(e){
    e.preventDefault();
    var token = $('#fr-salsa input[name="_token"]').val();
    let id = $(this).data('id');
    let datasend = ({'_token':token,'_method':'DELETE','id':id});
    $.ajax({
        url: '/admin/salsas/'+id,
        type: 'POST',
        dataType:'json',
        data: datasend,
        success: function (response) {
            
           window.location.reload();
        }
    })
});

$(".btn-prod-duplicar").on('click',function(e){
    e.preventDefault();
    $.ajax({
        url: '/admin/replicate',
        type: 'GET',
        dataType:'json',
       
        success: function (response) {
            
           window.location.reload();
        }
    })
});

$(".btn-prod-delete").on('click',function(e){
    var token = $('#fr-producto input[name="_token"]').val();
    let id = $(this).data('id');
    let datasend = ({'_token':token,'_method':'DELETE','id':id});
    $.ajax({
        url: '/admin/lacartas/'+id,
        type: 'POST',
        dataType:'json',
        data: datasend,
        success: function (response) {
            
           window.location.reload();
        }
    })
});

$(".btn-ingredient-delete").on('click',function(e){
    e.preventDefault();
   
    var token = $('#fr-producto input[name="_token"]').val();
    let id = $(this).data('id');
    let datasend = ({'_token':token,'_method':'DELETE','id':id});
    $.ajax({
        url: '/admin/ingredients/'+id,
        type: 'POST',
        dataType:'json',
        data: datasend,
        success: function (response) {
            
           window.location.reload();
        }
    })
});


$(".btn-classification-edit").click(function(e){
    e.preventDefault();
    let id = $(this).data('id');
    fetch(`/admin/clasificaciones/${id}/edit`)
    .then(res => res.json())
    .then(data =>{
        console.log(data ); 
        $("#fr-classification #id").val(data.id);
        $('#fr-classification input[name="_method"]').val('PUT');
        $("#fr-classification #name").val(data.name);
        $("#fr-classification #description").val(data.decription); 
        $("#fr-classification #cover").attr('src',data.cover);
        
    });

});

$('#fr-classification').on('submit', function (e) {
    e.preventDefault()
    var id = $('#fr-classification #id').val(); 
    var metodo = $('#fr-classification #metodo').val();
    let url ='';
    if(metodo=='POST'){ 
        url ='/admin/clasificaciones/store';
    }else{ 
        url = '/admin/clasificaciones/' + id;
    }
    console.log(new FormData(this));
 
	 $.ajaxSetup({ 
	     headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')} 
	 });
 
    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            window.location.reload();
          }
      },
      error: function (err) {
        console.log(err);
      }
    })
})
  
$(".nuevo_classification").on('click',function(e){
    e.preventDefault();
    $("#fr-classification input[type=text]").val(''); 
    $("#img-upload").attr('src','');
    $('#fr-classification #metodo').val('POST');
});

try {
    initMap(); 
} catch (error) {
   console.log("mapa no referenciado"); 
}

$("#fr-publicidad").on('submit',function(e){
    e.preventDefault();
 
    var id = $('#fr-publicidad #id').val(); 
    var metodo = $('#fr-publicidad #metodo').val();
    let url ='';
    if(metodo=='POST'){ 
        url ='/admin/publicidad/store';
    }else{ 
        url = '/admin/publicidad/' + id;
    }

    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          
            window.location.reload();
         
      },
      error: function (err) {
        console.log(err);
      }
    })
    
});
try {
    

    path = window.location.hash;
    let patron = path.split("#");
    let ident = patron[1].split("-");

    if(ident[0] =="frq"){
        let id = ident[1];
        $.ajax({
            url:`/admin/franchisees/${id}/edit`,
            type:"GET",
            dataType:"json",
            beforeSend:function(){},
            success:function(response){
                console.log(response);
                $("#fr-franchise #names").val(response.names);
                
                $("#fr-franchise #cellphone").val(response.cellphone);
                $("#fr-franchise #city").val(response.city);
                $("#fr-franchise #mail").val(response.mail);
                $("#fr-franchise #province").val(response.province);
                $("#fr-franchise #address").val(response.address);
                
                $("#fr-franchise #franchise_id").val(response.id);

                $("#fr-franchise #classification_id").val(response.classification_id);
                $("#fr-franchise #package_id").val(response.package_id);

                $("#fr-franchise #metodo").val('PUT');
                $("#img-upload").attr("src",'/storage/franchise/'+response.avatar);

                

                var map = new google.maps.Map(document.getElementById('googleMap'), {
                    zoom: 12,
                
                    center: {lat: 40.4381307, lng: -3.8199653 }
                
                });
                var geocoder = new google.maps.Geocoder();
    
                geocodeAddress(geocoder, map);
                
            }
        });
    }
} catch (error) {
    console.log("e "+error);
}

$("#fr-cliente-buscar").on('submit',function(e){
  e.preventDefault();
  let sendata = $(this).serialize();
 
    $.ajax({
        url:'/admin/pedidos/buscar',
        type:'POST',
        dataType:'json',
        data:sendata,
        success:function(response){
            console.log(response.data);
            if(response.rpta=='error'){
                alert("Usuario no registrado");
            }else{
                $("#client").val(response.data.name);
                $("#phone").val(response.data.telefono);
            }
        }
    });
});

$(".user-menu a").on('click',function(e){
    e.preventDefault();
    $(this).parent().children(".dropdown-menu").show();
}); 

$(".btn-package-edit").click(function(e){
    e.preventDefault();
    let id = $(this).data('id');
    fetch(`/admin/packages/${id}/edit`)
    .then(res => res.json())
    .then(data =>{
        console.log(data ); 
        $("#fr-paquete #id").val(data.id);
        $('#fr-paquete input[name="_method"]').val('PUT');
        $("#fr-paquete #name").val(data.name);
        $("#fr-paquete #description").val(data.description);  
        $("#fr-paquete #price").val(data.price);  
        $("#fr-paquete #promo").val(data.promo);  
        $("#fr-paquete #status").val(data.status);  
        
    });

});

$('#fr-paquete').on('submit', function (e) {
    e.preventDefault()
    var id = $('#fr-paquete #id').val(); 
    var metodo = $('#fr-paquete #metodo').val();
    let url ='';
    if(metodo=='POST'){ 
        url ='/admin/package/store';
    }else{ 
        url = '/admin/package/' + id;
    }
    console.log(new FormData(this));
 
	$.ajaxSetup({ 
	    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')} 
	});
 
    $.ajax({
      url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            window.location.reload();
          }
      },
      error: function (err) {
        console.log(err);
      }
    })
})

