@extends('layouts.main')

@section('title', 'Contacto')

@section('content')

<div class="container">
  <h1 class="head" align="center">Contáctanos</h1>
   <br>
       <div class="form-group">
          {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
       		<div class="col-md-6">
                {!!Form::label('name','Nombre completo')!!}
                {!!Form::text('name',null, ['placeholder' => 'Escriba su nombre', 'class' => 'form-control', 'required'] ) !!}
                <br>
                {!!Form::label('email','Correo electrónico')!!}
                 {!!Form::email('email',null, ['placeholder' => 'Escriba su correo', 'class' => 'form-control', 'required'] ) !!}
              </div>
          <div class="col-md-6">
                {!!Form::label('mensaje','Mensaje')!!}
                {!!Form::textarea('mensaje',null, ['placeholder' => 'Mensaje', 'class' => 'form-control', 'required', 'rows' => '6'] ) !!}
          </div>
          <div class="col-md-12" align="center">
          		<br>
          		{!!Form::submit('Enviar correo', ['class'=>'btn btn-primary '])!!}
          </div>
          {!!Form::close()!!}
         </div>
       </div>
</div>

@endsection