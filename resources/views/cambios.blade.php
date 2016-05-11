@extends('layouts.main')

@section('title', 'Cambios')

@section('content')

<div class="container">
  <h1 class="head" align="center">Actualizar datos.</h1>
   <br>
   		@if (Session::has('message'))
		<div class="alert alert-warning" align="center" role="alert"><strong>Atención!</strong> {{Session::get('message')}}</div>
		@else
			<table class="table"> <!--DONDE ESTA LA CLASE "TABLE"-->
			<thead>
				<th>Nombre de plaza</th>
				<th>Sueldo</th>
				<th>Sobresueldo</th>
				<th>Estimulo</th>
				<th>Vigencia</th>
				<th></th>
			</thead>
			@foreach($plaza as $Plazas) <!--DE DONDE VIENE "$plaza" ?, EN QUÉ MOMENTO INVOCAS getPlazas() DEL MODELO?-->
			<tbody>
				<td>{{$Plazas->nombre}}</td>
				<td>{{$Plazas->sueldo}}</td>
				<td>{{$Plazas->sobresueldo}}</td>
				<td>{{$Plazas->estimulo}}</td>
				<td>
					@if($Plazas->vigencia == 'A')
						Alta
					@elseif($Plazas->vigencia == 'B')
						Baja
					@endif
				</td>
				<td>{!!link_to_route('plazas.edit', $title = 'Editar', $parameters = $Plazas->id, $attributes = ['class' => 'btn btn-warning'])!!}</td>
			@endforeach
		</table>
		<div align="center">
			{!!$plaza->render()!!}
		</div>
		@endif
</div>

@endsection