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
</div>
@endsection