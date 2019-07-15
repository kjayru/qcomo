@extends('admin.layout.master')

@section('content') 

<div style="margin: 0 auto; min-width: 280px; max-width:650px;">

    <div class='row' style=" background-color: #eee; margin-top: 80px; padding: 25px;">
        <ul class="list-inline">
            <li>Opcion B</li>
            <li>Codigo Javascript de seguiemiento, perfecto para blooger, prestashop, etc</li>
        </ul>
        <p>Instala este codigo en tu web o blog mediante un widget de texto/html en la barra lateral o el pie de tu plantilla</p>
        <textarea rows="4" cols="90">
            At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
        </textarea>
    </div>
    
    <div class='row' style=" background-color: #eee; padding: 25px;">
        <ul class="list-inline">
            <li>Opcion B</li>
            <li>Codigo Javascript de seguiemiento, perfecto para blooger, prestashop, etc</li>
        </ul>
        <p>Si tu web no permite la insercion de javascript, inserta este codigo</p>
        <textarea rows="4" cols="90">
            At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
        </textarea>
    </div>
    
</div>


@endsection
@include('admin.partial.scripts')