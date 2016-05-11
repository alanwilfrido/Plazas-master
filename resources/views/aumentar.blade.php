@extends('layouts.main')

@section('title', 'Aumentos')

@section('content')

<div class="container">
  <div class="col-sm-12">
    <h1 class="head" align="center">Aumentos.</h1>
    <span>Realiza aumentos en Sueldos, Sobresueldos y Estimulo mediante porcentaje. Aumento desde el 1 al 100% sobre el monto actual. donde un 100% por ejemplo, seria un aumento del monto al doble.</span>
  </div>
  {!!Form::open(['action'=>'PlazasController@aumento','method'=>'POST'])!!}
     <div class="form-group">
          <div class="col-md-3" align="right">
          <br>
            {!!Form::label('porcentaje','Porcentaje (1 al 100%):')!!}  
          </div>
          <div class="col-md-4" align="left">
          <br>
            {!!Form::number('porcentaje',null, ['placeholder' => 'Ingrese el porcentaje', 'class' => 'form-control', 'min' => '1', 'step' => '0.1', 'max' => '100', 'required'] ) !!}
            <br>
          </div>
          <div class="col-md-5" align="left">
          <br>
            {!!Form::label('tb','Aumentar en:')!!}
            {!!Form::select('tb', array('sueldo' => 'Sueldo', 'sobresueldo' => 'Sobresueldo', 'estimulo' => 'Estimulo'), null, ['class' => 'btn btn-default', 'placeholder' => 'Selecciona uno', 'required'])!!}
            <br>
          </div>
        <div class="col-md-12" align="center">
          {!!Form::submit('Aumentar', ['class'=>'btn btn-success'])!!}
        </div>
       {!!Form::close()!!}
     </div>
</div>

{!!Html::script('js/negative.js')!!}

@endsection