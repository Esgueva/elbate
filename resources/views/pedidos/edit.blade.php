@extends('master')
@section('title', 'Pedidos - Cañas de Dulzaina')
@section('content')

<div class="flex-center position-ref ">
    <div class="content">
        <div class="title m-b-md">
            Edicion de Pedidos
        </div>
    </div>
</div>
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">

		<form class="form-horizontal" method="post">


			@foreach ($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }} </p>
			@endforeach

			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			<fieldset>
				<legend>Editar Pedido</legend>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Título</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="titulo" name="titulo">
					</div>
				</div>
				<div class="form-group">
					<label for="conten" class="col-lg-2 control-label">Contendio</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="contenido" name="contenido"></textarea>
						<span class="help-block">Envie su consulta y resolveremos su duda.</span>
					</div>
				</div>
				<div class="form-group">
					<label>
						<input type="checkbox" name="status {!! $pedido->status"":"checked"}> ¿Cerrar este pedido?
					</label>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button class="btn btn-default">Cancelar</button>
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</fieldset>

			@foreach ($errors->all() as $error)
			<p class="alert alert-danger"> {{ $error }}</p>
			@endforeach

			@if (session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
			@endif
			
		</form>
	</div>
</div>
@endsection