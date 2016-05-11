@extends('layouts.main')

@section('title', 'Bajas')

@section('content')

<div class="container">
  <h1 class="head" align="center">Dar de baja.</h1>
   <br>
   	@if (Session::has('message'))
		<div class="alert alert-warning" align="center" role="alert"><strong>Atención!</strong> {{Session::get('message')}}</div>
	@else
		<table class="table">
		<thead>
			<th>Nombre de plaza</th>
			<th>Sueldo</th>
			<th>Sobresueldo</th>
			<th>Estimulo</th>
			<th></th>
		</thead>
		@foreach($plaza as $Plazas)
		<tbody>
			<td>{{$Plazas->nombre}}</td>
			<td>{{$Plazas->sueldo}}</td>
			<td>{{$Plazas->sobresueldo}}</td>
			<td>{{$Plazas->estimulo}}</td>
			<td>{!!link_to_action('PlazasController@Bajaedit', $title = 'Dar de baja', $parameters = $Plazas->id, $attributes = ['class' => 'btn btn-danger'])!!}</td>
		@endforeach
		</table>
		<div align="center">
			{!!$plaza->render()!!}
		</div>
	@endif
</div>

@endsection