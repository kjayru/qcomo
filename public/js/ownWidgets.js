/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addTextForm(form, name, title)
{
    var form_group = document.createElement("div");
    form_group.className = "form-group";

    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name; 
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.className = "form-control input-md";

    div1.appendChild(input1); 
    form_group.appendChild(label); 
    form_group.appendChild(div1); 
    form.appendChild(form_group); 
}

function addSelectForm(form, name, title, arrayname, arrayvalue)
{
    //arrayname.length === arrayvalue.length
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";
    div1.style = "width: 100%;";
    
    var select = document.createElement("select");
    select.className = "selectpicker";
    select.style = "margin-top: 7px;";
    select.id = name;
    
    if( arrayname !== null)
    {
        for (var i = 0; i < arrayname.length; i++) {
            var option = document.createElement("option");
            option.value = arrayvalue[i];
            option.text = arrayname[i];
            select.appendChild(option);
        }
    }
    
    div1.appendChild(select);
    div1.appendChild(label);
    form.appendChild(div1); 
}

function addBotonSubmit(form)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = "btn-save"; 

    var div1 = document.createElement("div");
    div1.className = "col-md-8";
    div1.style = "margin: 0 auto;";

    var button1 = document.createElement("button");
    button1.id = "btn-save";  
    button1.name = "btn-save";
    button1.className = "btn btn-primary";
    button1.innerHTML = "Guardar";

    div1.appendChild(button1);
    form.appendChild(div1);  
}

function addImageToUpload(form, img_id, texto, onchange_func)
{
    var label = document.createElement("label");
    label.class = "control-label";
    label.style = "padding-left: 15px; width: 100%;";
    label.for = "btn-save";
    label.innerHTML = texto;

    var span = document.createElement("span"); 
    span.className = "input-group-btn"; 
    var span2 = document.createElement("span"); 
    span2.className = "btn btn-default btn-file";
    span2.innerHTML = "Buscar…"; 
    var input2 = document.createElement("input");
    input2.type = "file"; 
    input2.onchange = onchange_func;

    span2.appendChild(input2);
    span.appendChild(span2);

    var input = document.createElement("input"); 
    input.type = "text";
    input.readOnly = true;
    input.className = "form-control";

    var div1 = document.createElement("div"); 
    div1.className = "input-group";
    div1.style = "width: 100%;";
    div1.appendChild(span);
    div1.appendChild(input);

    var img1 = document.createElement("img"); 
    img1.id = img_id;
    img1.style = "padding: 15px; width: 100%;";

    form.appendChild(label);
    form.appendChild(div1);
    form.appendChild(img1);
}

function addSwitch(record, nombre, titulo)
{
    var div1 = document.createElement("div");
    div1.style = "float: left;";
    
    var label1 = document.createElement("label");
    label1.style = "width: 150px;";
    label1.htmlFor = nombre;
    label1.innerHTML = titulo;
    
    var label2 = document.createElement("label");
    label2.className = "switch";
    
    var input1 = document.createElement("input");
    input1.type = "checkbox";
    input1.name = nombre;
    
    var span1 = document.createElement("span");
    span1.className = "slider round";
    
    label2.appendChild(input1);
    label2.appendChild(span1);
    div1.appendChild(label1);
    div1.appendChild(label2);
    record.appendChild(div1);
}


function createBtnMM(parent, name, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mm";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = name;
    parent.appendChild(btn);
}

function createBtnMesa(parent, number, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mesa";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = number;
    parent.appendChild(btn); 
}

function createBtnMesaDisable(parent, number, onclickfunc)
{
    var btn = document.createElement("button");
    btn.id = "btn_mesa_disable";
    btn.onclick = onclickfunc;
    btn.type = "button";
    btn.className = "btn btn-primary";
    btn.innerHTML = number;
    parent.appendChild(btn); 
}

function showQRImg(parent, idqr, url)
{
    var img = document.createElement("img");
    img.style = "margin:8px;"; 
    img.id = "qr"+idqr;
    img.src = url;
    img.width = 80;
    img.height = 80;
    parent.appendChild(img); 
}


function addCalendar(parent, name, titulo)
{
    var div1 = document.createElement("div");
    div1.className = "col-sm-6";
    div1.style = "width: 100%;";
    
    var input1 = document.createElement("input");
    input1.type = "text";
    input1.className = "form-control";
    input1.id = "datetimepicker";
    input1.placeholder = titulo;
    input1.name = name;
    
    $('<input>').attr({
        type: 'text',
        class: 'form-control',
        id: 'datetimepicker',
        placeholder: titulo
    }).datepicker().appendTo(div1);
  
    
    parent.appendChild(div1);
     
}

function addBubTitle(parent, title)
{ 
    var div1 = document.createElement("div");
    div1.className = "col-sm-6";
    div1.style = "width: 100%; padding: 10px 4px 10px 4px; display: block;";  
    
    var h31 = document.createElement("h4");  
    h31.style = "background-color: #ccc; padding: 12px;";
    h31.innerHTML = title;
    
    div1.appendChild(h31); 
    parent.appendChild(div1); 
}

function addHiddenForm(parent, name, idname, value)
{ 
   var input1 = document.createElement("input");  
   input1.type = "hidden";
   input1.name = name;
   input1.id = idname;
   input1.value = value;
   input1.className = "form-control input-md";

   parent.appendChild(input1); 
}

function removeHiddenForm( idname )
{ 
    $("hid"+idname).remove(); 
}

function addNumberForm(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function pImg2Collection(form, img_id, texto, onchange_func)
{
    var label = document.createElement("label");
    label.class = "control-label";
    label.style = "padding-left: 15px; width: 100%;";
    label.for = "btn-save";
    label.innerHTML = texto;

    var span = document.createElement("span"); 
    span.className = "input-group-btn"; 
    var span2 = document.createElement("span"); 
    span2.className = "btn btn-default btn-file";
    span2.innerHTML = "Buscar…"; 
    var input2 = document.createElement("input");
    input2.type = "file"; 
    input2.onchange = onchange_func;

    span2.appendChild(input2);
    span.appendChild(span2);

    var input = document.createElement("input"); 
    input.type = "text";
    input.readOnly = true;
    input.className = "form-control";

    var div1 = document.createElement("div"); 
    div1.className = "input-group";
    div1.style = "width: 100%;";
    div1.appendChild(span);
    div1.appendChild(input);

    var select1 = document.createElement("select"); 
    select1.id = img_id; 
    select1.className = "image-picker show-html";

    //test
    var option1 = document.createElement("option");
    option1.value = "1";
    option1.innerHTML = "opcion 1";
    option1.setAttribute("data-img-src", "../images/samplerestaurant.png");
    option1.setAttribute("data-img-class", "first");
    option1.setAttribute("data-img-alt", "opcion 1");

    var option2 = document.createElement("option");
    option2.value = "2";
    option2.innerHTML = "opcion 2";
    option2.setAttribute("data-img-src", "../images/samplerestaurant.png"); 
    option2.setAttribute("data-img-alt", "opcion 2");


    select1.appendChild(option1);
    select1.appendChild(option2);
    div1.appendChild(select1);

    form.appendChild(label);
    form.appendChild(div1);
    form.appendChild(select1);

}

function createTipoCelular(parent, isapple, cantidad)
{
    var div1 = document.createElement("div");
    div1.style = "background-color: #fafafa; border-radius: 5px; border: 1px solid #d9d9d9; color: #747474; display: inline; width: 110px;";

    var img1 = document.createElement("img");
    if( isapple === 1 ){
        img1.src = "../images/apple.png";
    }
    else{
        img1.src = "../images/android.png";
    }
    img1.width = "25";
    img1.height = "25";
    img1.style = "display: inline;";

    var p1 = document.createElement("p");
    p1.innerHTML = cantidad.toString();
    p1.style = "display: inline;";

    div1.appendChild(img1);
    div1.appendChild(p1); 
    parent.appendChild(div1);
}

function addTextFormLarge(form, name, title)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function addTextFormMultilineLarge(form, name, title)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "form-group";
    div1.style="margin: 8px 40px 8px 40px;";

    var input1 = document.createElement("textarea");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "text";
    input1.placeholder = title;
    input1.name = name;
    input1.rows = "7";
    input1.cols = "40";
    input1.className = "form-control";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}

function addNumberFormLarge(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "col-md-3 control-label";
    label.for = name;
    label.innerHTML = title;
    label.style = "width: 100%; text-align: left;";

    var div1 = document.createElement("div");
    div1.className = "col-md-8";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.className = "form-control input-md";

    div1.appendChild(input1);

    form.appendChild(label);
    form.appendChild(div1); 
}


function addSwitchLarge(record, nombre, titulo)
{
    var div1 = document.createElement("div"); 
    div1.className = "form-group";
    div1.style = "padding-left: 35px;";
    
    var label1 = document.createElement("label");
    label1.style = "margin-right: 8px;";
    label1.htmlFor = nombre;
    label1.innerHTML = titulo;
    
    var label2 = document.createElement("label");
    label2.className = "switch";
    
    var input1 = document.createElement("input");
    input1.type = "checkbox";
    input1.name = nombre;
    
    var span1 = document.createElement("span");
    span1.className = "slider round";
    
    label2.appendChild(input1);
    label2.appendChild(span1);
    div1.appendChild(label1);
    div1.appendChild(label2);
    record.appendChild(div1);
}

function addNumberFormLarge(form, name, title, minimo, maximo, step)
{
    var label = document.createElement("label");
    label.className = "control-label";
    label.for = name;
    label.innerHTML = title;

    var div1 = document.createElement("div");
    div1.className = "form-group";
    div1.style = "padding-left: 35px;";

    var input1 = document.createElement("input");
    input1.id = name;
    input1.style = "background-color: #e5e5e5; width: 180px;";
    input1.type = "number";
    input1.name = name;
    input1.min = minimo;
    input1.max = maximo;
    input1.step = step;
    input1.size = "40";
    input1.className = "form-control";

    div1.appendChild(label);
    div1.appendChild(input1);
 
    form.appendChild(div1); 
}

function readURL(input, img_id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(img_id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

function addTimeZone(parent)
{
    var tzs = [
       {"label":"(GMT-12:00) International Date Line West","value":"Etc/GMT+12"},
        {"label":"(GMT-11:00) Midway Island, Samoa","value":"Pacific/Midway"},
        {"label":"(GMT-10:00) Hawaii","value":"Pacific/Honolulu"},
        {"label":"(GMT-09:00) Alaska","value":"US/Alaska"},
        {"label":"(GMT-08:00) Pacific Time (US & Canada)","value":"America/Los_Angeles"},
        {"label":"(GMT-08:00) Tijuana, Baja California","value":"America/Tijuana"},
        {"label":"(GMT-07:00) Arizona","value":"US/Arizona"},
        {"label":"(GMT-07:00) Chihuahua, La Paz, Mazatlan","value":"America/Chihuahua"},
        {"label":"(GMT-07:00) Mountain Time (US & Canada)","value":"US/Mountain"},
        {"label":"(GMT-06:00) Central America","value":"America/Managua"},
        {"label":"(GMT-06:00) Central Time (US & Canada)","value":"US/Central"},
        {"label":"(GMT-06:00) Guadalajara, Mexico City, Monterrey","value":"America/Mexico_City"},
        {"label":"(GMT-06:00) Saskatchewan","value":"Canada/Saskatchewan"},
        {"label":"(GMT-05:00) Bogota, Lima, Quito, Rio Branco","value":"America/Bogota"},
        {"label":"(GMT-05:00) Eastern Time (US & Canada)","value":"US/Eastern"},
        {"label":"(GMT-05:00) Indiana (East)","value":"US/East-Indiana"},
        {"label":"(GMT-04:00) Atlantic Time (Canada)","value":"Canada/Atlantic"},
        {"label":"(GMT-04:00) Caracas, La Paz","value":"America/Caracas"},
        {"label":"(GMT-04:00) Manaus","value":"America/Manaus"},
        {"label":"(GMT-04:00) Santiago","value":"America/Santiago"},
        {"label":"(GMT-03:30) Newfoundland","value":"Canada/Newfoundland"},
        {"label":"(GMT-03:00) Brasilia","value":"America/Sao_Paulo"},
        {"label":"(GMT-03:00) Buenos Aires, Georgetown","value":"America/Argentina/Buenos_Aires"},
        {"label":"(GMT-03:00) Greenland","value":"America/Godthab"},
        {"label":"(GMT-03:00) Montevideo","value":"America/Montevideo"},
        {"label":"(GMT-02:00) Mid-Atlantic","value":"America/Noronha"},
        {"label":"(GMT-01:00) Cape Verde Is.","value":"Atlantic/Cape_Verde"},
        {"label":"(GMT-01:00) Azores","value":"Atlantic/Azores"},
        {"label":"(GMT+00:00) Casablanca, Monrovia, Reykjavik","value":"Africa/Casablanca"},
        {"label":"(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London","value":"Etc/Greenwich"},
        {"label":"(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna","value":"Europe/Amsterdam"},
        {"label":"(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague","value":"Europe/Belgrade"},
        {"label":"(GMT+01:00) Brussels, Copenhagen, Madrid, Paris","value":"Europe/Brussels"},
        {"label":"(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb","value":"Europe/Sarajevo"},
        {"label":"(GMT+01:00) West Central Africa","value":"Africa/Lagos"},
        {"label":"(GMT+02:00) Amman","value":"Asia/Amman"},
        {"label":"(GMT+02:00) Athens, Bucharest, Istanbul","value":"Europe/Athens"},
        {"label":"(GMT+02:00) Beirut","value":"Asia/Beirut"},
        {"label":"(GMT+02:00) Cairo","value":"Africa/Cairo"},
        {"label":"(GMT+02:00) Harare, Pretoria","value":"Africa/Harare"},
        {"label":"(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius","value":"Europe/Helsinki"},
        {"label":"(GMT+02:00) Jerusalem","value":"Asia/Jerusalem"},
        {"label":"(GMT+02:00) Minsk","value":"Europe/Minsk"},
        {"label":"(GMT+02:00) Windhoek","value":"Africa/Windhoek"},
        {"label":"(GMT+03:00) Kuwait, Riyadh, Baghdad","value":"Asia/Kuwait"},
        {"label":"(GMT+03:00) Moscow, St. Petersburg, Volgograd","value":"Europe/Moscow"},
        {"label":"(GMT+03:00) Nairobi","value":"Africa/Nairobi"},
        {"label":"(GMT+03:00) Tbilisi","value":"Asia/Tbilisi"},
        {"label":"(GMT+03:30) Tehran","value":"Asia/Tehran"},
        {"label":"(GMT+04:00) Abu Dhabi, Muscat","value":"Asia/Muscat"},
        {"label":"(GMT+04:00) Baku","value":"Asia/Baku"},
        {"label":"(GMT+04:00) Yerevan","value":"Asia/Yerevan"},
        {"label":"(GMT+04:30) Kabul","value":"Asia/Kabul"},
        {"label":"(GMT+05:00) Yekaterinburg","value":"Asia/Yekaterinburg"},
        {"label":"(GMT+05:00) Islamabad, Karachi, Tashkent","value":"Asia/Karachi"},
        {"label":"(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi","value":"Asia/Calcutta"},
        {"label":"(GMT+05:30) Sri Jayawardenapura","value":"Asia/Calcutta"},
        {"label":"(GMT+05:45) Kathmandu","value":"Asia/Katmandu"},
        {"label":"(GMT+06:00) Almaty, Novosibirsk","value":"Asia/Almaty"},
        {"label":"(GMT+06:00) Astana, Dhaka","value":"Asia/Dhaka"},
        {"label":"(GMT+06:30) Yangon (Rangoon)","value":"Asia/Rangoon"},
        {"label":"(GMT+07:00) Bangkok, Hanoi, Jakarta","value":"Asia/Bangkok"},
        {"label":"(GMT+07:00) Krasnoyarsk","value":"Asia/Krasnoyarsk"},
        {"label":"(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi","value":"Asia/Hong_Kong"},
        {"label":"(GMT+08:00) Kuala Lumpur, Singapore","value":"Asia/Kuala_Lumpur"},
        {"label":"(GMT+08:00) Irkutsk, Ulaan Bataar","value":"Asia/Irkutsk"},
        {"label":"(GMT+08:00) Perth","value":"Australia/Perth"},
        {"label":"(GMT+08:00) Taipei","value":"Asia/Taipei"},
        {"label":"(GMT+09:00) Osaka, Sapporo, Tokyo","value":"Asia/Tokyo"},
        {"label":"(GMT+09:00) Seoul","value":"Asia/Seoul"},
        {"label":"(GMT+09:00) Yakutsk","value":"Asia/Yakutsk"},
        {"label":"(GMT+09:30) Adelaide","value":"Australia/Adelaide"},
        {"label":"(GMT+09:30) Darwin","value":"Australia/Darwin"},
        {"label":"(GMT+10:00) Brisbane","value":"Australia/Brisbane"},
        {"label":"(GMT+10:00) Canberra, Melbourne, Sydney","value":"Australia/Canberra"},
        {"label":"(GMT+10:00) Hobart","value":"Australia/Hobart"},
        {"label":"(GMT+10:00) Guam, Port Moresby","value":"Pacific/Guam"},
        {"label":"(GMT+10:00) Vladivostok","value":"Asia/Vladivostok"},
        {"label":"(GMT+11:00) Magadan, Solomon Is., New Caledonia","value":"Asia/Magadan"},
        {"label":"(GMT+12:00) Auckland, Wellington","value":"Pacific/Auckland"},
        {"label":"(GMT+12:00) Fiji, Kamchatka, Marshall Is.","value":"Pacific/Fiji"},
        {"label":"(GMT+13:00) Nuku'alofa","value":"Pacific/Tongatapu"},
        {"label":"(GMT-12:00) International Date Line West","value":"-12"},
        {"label":"(GMT-11:00) Midway Island, Samoa","value":"-11"},
        {"label":"(GMT-10:00) Hawaii","value":"-10"},
        {"label":"(GMT-09:00) Alaska","value":"-9"},
        {"label":"(GMT-08:00) Pacific Time (US & Canada)","value":"-8"},
        {"label":"(GMT-08:00) Tijuana, Baja California","value":"-8"},
        {"label":"(GMT-07:00) Arizona","value":"-7"},
        {"label":"(GMT-07:00) Chihuahua, La Paz, Mazatlan","value":"-7"},
        {"label":"(GMT-07:00) Mountain Time (US & Canada)","value":"-7"},
        {"label":"(GMT-06:00) Central America","value":"-6"},
        {"label":"(GMT-06:00) Central Time (US & Canada)","value":"-6"},
        {"label":"(GMT-05:00) Bogota, Lima, Quito, Rio Branco","value":"-5"},
        {"label":"(GMT-05:00) Eastern Time (US & Canada)","value":"-5"},
        {"label":"(GMT-05:00) Indiana (East)","value":"-5"},
        {"label":"(GMT-04:00) Atlantic Time (Canada)","value":"-4"},
        {"label":"(GMT-04:00) Caracas, La Paz","value":"-4"},
        {"label":"(GMT-04:00) Manaus","value":"-4"},
        {"label":"(GMT-04:00) Santiago","value":"-4"},
        {"label":"(GMT-03:30) Newfoundland","value":"-3.5"},
        {"label":"(GMT-03:00) Brasilia","value":"-3"},
        {"label":"(GMT-03:00) Buenos Aires, Georgetown","value":"-3"},
        {"label":"(GMT-03:00) Greenland","value":"-3"},
        {"label":"(GMT-03:00) Montevideo","value":"-3"},
        {"label":"(GMT-02:00) Mid-Atlantic","value":"-2"},
        {"label":"(GMT-01:00) Cape Verde Is.","value":"-1"},
        {"label":"(GMT-01:00) Azores","value":"-1"},
        {"label":"(GMT+00:00) Casablanca, Monrovia, Reykjavik","value":"0"},
        {"label":"(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London","value":"0"},
        {"label":"(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna","value":"1"},
        {"label":"(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague","value":"1"},
        {"label":"(GMT+01:00) Brussels, Copenhagen, Madrid, Paris","value":"1"},
        {"label":"(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb","value":"1"},
        {"label":"(GMT+01:00) West Central Africa","value":"1"},
        {"label":"(GMT+02:00) Amman","value":"2"},
        {"label":"(GMT+02:00) Athens, Bucharest, Istanbul","value":"2"},
        {"label":"(GMT+02:00) Beirut","value":"2"},
        {"label":"(GMT+02:00) Cairo","value":"2"},
        {"label":"(GMT+02:00) Harare, Pretoria","value":"2"},
        {"label":"(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius","value":"2"},
        {"label":"(GMT+02:00) Jerusalem","value":"2"},
        {"label":"(GMT+02:00) Minsk","value":"2"},
        {"label":"(GMT+02:00) Windhoek","value":"2"},
        {"label":"(GMT+03:00) Kuwait, Riyadh, Baghdad","value":"3"},
        {"label":"(GMT+03:00) Moscow, St. Petersburg, Volgograd","value":"3"},
        {"label":"(GMT+03:00) Nairobi","value":"3"},
        {"label":"(GMT+03:00) Tbilisi","value":"3"},
        {"label":"(GMT+03:30) Tehran","value":"3.5"},
        {"label":"(GMT+04:00) Abu Dhabi, Muscat","value":"4"},
        {"label":"(GMT+04:00) Baku","value":"4"},
        {"label":"(GMT+04:00) Yerevan","value":"4"},
        {"label":"(GMT+04:30) Kabul","value":"4.5"},
        {"label":"(GMT+05:00) Yekaterinburg","value":"5"},
        {"label":"(GMT+05:00) Islamabad, Karachi, Tashkent","value":"5"},
        {"label":"(GMT+05:30) Sri Jayawardenapura","value":"5.5"},
        {"label":"(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi","value":"5.5"},
        {"label":"(GMT+05:45) Kathmandu","value":"5.75"},
        {"label":"(GMT+06:00) Almaty, Novosibirsk","value":"6"},{"label":"(GMT+06:00) Astana, Dhaka","value":"6"},
        {"label":"(GMT+06:30) Yangon (Rangoon)","value":"6.5"},
        {"label":"(GMT+07:00) Bangkok, Hanoi, Jakarta","value":"7"},
        {"label":"(GMT+07:00) Krasnoyarsk","value":"7"},
        {"label":"(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi","value":"8"},
        {"label":"(GMT+08:00) Kuala Lumpur, Singapore","value":"8"},
        {"label":"(GMT+08:00) Irkutsk, Ulaan Bataar","value":"8"},
        {"label":"(GMT+08:00) Perth","value":"8"},
        {"label":"(GMT+08:00) Taipei","value":"8"},
        {"label":"(GMT+09:00) Osaka, Sapporo, Tokyo","value":"9"},
        {"label":"(GMT+09:00) Seoul","value":"9"},
        {"label":"(GMT+09:00) Yakutsk","value":"9"},
        {"label":"(GMT+09:30) Adelaide","value":"9.5"},
        {"label":"(GMT+09:30) Darwin","value":"9.5"},
        {"label":"(GMT+10:00) Brisbane","value":"10"},
        {"label":"(GMT+10:00) Canberra, Melbourne, Sydney","value":"10"},
        {"label":"(GMT+10:00) Hobart","value":"10"},
        {"label":"(GMT+10:00) Guam, Port Moresby","value":"10"},
        {"label":"(GMT+10:00) Vladivostok","value":"10"},
        {"label":"(GMT+11:00) Magadan, Solomon Is., New Caledonia","value":"11"},
        {"label":"(GMT+12:00) Auckland, Wellington","value":"12"},
        {"label":"(GMT+12:00) Fiji, Kamchatka, Marshall Is.","value":"12"},
        {"label":"(GMT+13:00) Nuku'alofa","value":"13"}
    ];
    
    var options = [],
         select = document.createElement("select");
    select.className = "selectpicker";

    for (var i=0; i<tzs.length; i++){
       var tz = tzs[i],
           option = document.createElement("option");

       option.value = tz.value;
       option.appendChild(document.createTextNode(tz.label));
       select.appendChild(option);
    }

    parent.appendChild(select);


}



function addSwitch2(parent, estado)
{
    var div1 = document.createElement("div");
    div1.style = "float: left;";
    
    var label1 = document.createElement("label");
    label1.style = "width: 150px;"; 
    
    var label2 = document.createElement("label");
    label2.className = "switch";
    
    var input1 = document.createElement("input");
    input1.type = "checkbox"; 
    
    var span1 = document.createElement("span");
    span1.className = "slider round";
    if( estado === 1 ){ 
        input1.checked = true;
    }else{
        input1.checked = false;
    }
    
    label2.appendChild(input1);
    label2.appendChild(span1);
    div1.appendChild(label1);
    div1.appendChild(label2);
    parent.appendChild(div1);
}








