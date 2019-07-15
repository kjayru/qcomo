@extends('admin.layout.master')

@section('content')
	<div class="container-fluid spark-screen">
		<div class="row interno">
			<div class="col-md-12 ">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">EDITAR ROLE</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <div class="box box-info">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="/roles/{{$role->id}}" method="POST">
                                     @method('PUT')
                                    @include('admin.role.partials.form')

                            <!-- /.box  -footer -->
                            </form>
                        </div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
