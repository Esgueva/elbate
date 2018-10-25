@extends('master')
@section('title', 'Detalle de Pedido - Cañas de Dulzaina')
@section('content')
<div class="flex-center position-ref ">
    <div class="content">
        <div class="title m-b-md">
            Pedidos
        </div>
    </div>
</div>
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">
		<div class="content">
			<h2 class="header">{!! $pedido->title !!}</h2>
			<p><strong>Estado:</strong> {!! $pedido->status ? 'Pendiente' : 'Respondido' !!}</p>
			<p>{!! $pedido->content !!}</p>
		</div>

		<a href="{!! action('PedidosController@edit', $pedido->slug) !!}" class="btn btn-info">Editar</a>
		
		<form method="post" action="{!! action('PedidosController@destroy', $pedido->slug) !!}" class="pull-left">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div>
				<button type="submit" class="btn btn-warning">Borrar</button>
			</div>
		</form>
		<div class="crearfix"></div>
	</div>

	@foreach($comments as $comment)
	<div class="well well bs-component">
		<div class="content">
			{!! $comment->content !!}
		</div>
	</div>
	@endforeach


	<div class="well well bs-component">
		<form action="/comment" class="form-horizontal" method="post">
			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach

			@if(session('status'))
			<div class="alert alert-sucess">
				{{ session ('status') }}
			</div>
			@endif

			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="hidden" name="post_id" value="{!! $pedido->id !!}">

			<fieldset>
				<legend>Reply</legend>
				<div class="form-group">
					<div class="col-lg-12">
						<textarea class="form-control" name="content" id="conetnt" cols="30" rows="3"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancelar</button>
						<button type="submit" class="btn btn-primary">Publicar</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
@endsection