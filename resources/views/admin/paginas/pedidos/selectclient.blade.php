@extends('admin.layout.master')

@section('content')

<section class="content" style=" width: 100%; padding: 15px; ">
    <div class="panel panel-default">
        <div class="panel-heading">Seleccione un restaurante para ver sus pedidos</div>
        <div class="panel-body">
            <form action="pedidos/admin" method="post"> 
                @csrf
                <div class="form-group">
                <select id="client_selecc" name="client_selecc" class="form-control">
                    <option>---- Restaurante -----</option>
                    @foreach ($clients as $client)                    
                        <option value="{{$client->id}}">{{$client->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group" style="margin: 8px 6px 8px 4px;">
                    <input class="btn btn-primary" type="submit" value="Aceptar"> 
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin.partial.scripts')
   
@endsection