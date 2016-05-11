@extends('layouts.main')

@section('title', 'Altas')

@section('content')

<div class="container">
  <h1 class="head" align="center">Dar de alta.</h1>  <!--EN QUÉ HOJA DE ESTILOS TIENE LA CLASE "HEAD"-->
   <br>
   <br>
   		{!!Form::open(['route'=>'plazas.store','method'=>'POST'])!!}
       <div class="form-group">
       		   <div class="col-md-6">
                <br>
                <br>
                <br>
                {!!Form::label('nombre','Nombre de plaza')!!}
                {!!Form::text('nombre',null, ['placeholder' => 'Ingrese el nombre', 'class' => 'form-control', 'required'] ) !!}
            </div>
            <div class="col-md-6">
                {!!Form::label('sueldo','Sueldo')!!}
                {!!Form::number('sueldo',null, ['placeholder' => 'Ingrese el sueldo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
                {!!Form::label('sobresueldo','Sobresueldo')!!}
                {!!Form::number('sobresueldo',null, ['placeholder' => 'Ingrese el sobresueldo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
                {!!Form::label('estimulo','Estimulo')!!}
                {!!Form::number('estimulo',null, ['placeholder' => 'Ingrese el estimulo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
            </div>
          <div class="col-md-12" align="center">
          		<br>
          		{!!Form::submit('Dar de alta', ['class'=>'btn btn-success'])!!}
          </div>
         </div>
         {!!Form::close()!!}
       </div>
</div>

@endsection