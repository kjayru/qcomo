@extends('admin.layout.master')

@section('content')
<section class="content" style="float: none; width: 100%; padding: 90px 0 0 0 ; display: block; margin: 0 auto;">

    <div class="card" style="min-width: 30rem; max-width: 65rem; border: 1px solid gray;  margin: 0 auto; padding: 15px; display: block;">
        <div class="card-body"> 
    		<h3 class="card-title" style="text-align: center; color: #555; font-weight: bold;">Cree su primera campaña por correo electronico</h3>
    		</br>
    		<h6 class="card-title" style="text-align: center;">Utilice nuestro editor de newsletter intuitivo o el editor HTML para crear bonitos correos para sus contactos (marketing por e-mail, newsletter, etc...)</h6>    		
    		</br>
            <button type="button" class="btn btn-primary" style="margin: 0 auto; display: block;" onclick="primeraCampania()">Crear mi primera campaña por correo electronico</button>
            </br>
        </div>
    </div>
    
    </section>
@endsection
@include('admin.partial.scripts')

<script>
	function primeraCampania()
	{
		location.href = '/admin/campaniaconf';
	}
</script>