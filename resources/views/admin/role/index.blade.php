@extends('admin.layout.master')

@section('content')
 
	<div class="container-fluid  spark-screen">
		<div class="row interno">
			<div class="col-md-12 ">

				<!-- Default box -->
				<div class="boxing">
					<div class="box-header with-border">
						<h3 class="box-title">REGISTRO DE ROLES</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
                    <div class="box-body">
                            @can('podcasts.create')
                                <a href="{{route('roles.create')}}" class="btn btn-primary pull-right">Crear</a>
                            @endcan

                        <table class="table table-striped table-hover">
                            <thead>
                                <th width="10">ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Descripción</th>

                                <th colspan="3"></th>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $rol)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{ $rol->name }}</td>
                                        <td>{{ $rol->slug }}</td>
                                        <td>{{ $rol->description }}</td>

                                        <td width="15">
                                                @can('roles.edit')
                                                <a href="{{route('roles.edit',$rol->id )}}" class="btn btn-success pull-right">Editar</a>
                                                @endcan
                                        </td>
                                        <td width="10">
                                                @can('roles.destroy')

                                                    <form action="{{ route('roles.destroy',$rol->id ) }}" method="POST">
                                                        <input type="hidden" name="_method" value="delete" >
                                                        <input type="submit" value="borrar" class="btn btn-danger"/>
                                                        @csrf
                                                    </form>
                                                @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
 
    <script>
    	var titulo_seccion = document.getElementById("titulo_seccion");
        titulo_seccion.innerHTML = "ROLES";
    </script>
 
@include('admin.partial.scripts')    
@endsection


