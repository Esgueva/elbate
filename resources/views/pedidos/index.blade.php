@extends('master')
@section('title', 'Pedidos - Cañas de Dulzaina')
@section('content')
<div class="flex-center position-ref ">
    <div class="content">
        <div class="title m-b-md">
            Pedidos
        </div>
    </div>
</div>

<div class="container col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		
		@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif

		@if ($pedidos->isEmpty())
		<p>No hay pedidos</p>
		@else
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Titulo</th>
						<th>Contenido</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pedidos as $pedido)
					<tr>
						<th>{!! $pedido->id !!}</th>
						<th><a href="{!! action ('PedidosController@show', $pedido->slug) !!}">{!! $pedido-> title !!}</a></th>
						<th>{!! $pedido->content !!}</th>
						<th>{!! $pedido->status ? 'Pendiente' : 'Respondido' !!}</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
</div>
@endsection