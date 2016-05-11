@extends('layouts.main')

@section('title', 'Cambios')

@section('content')

<div class="container">
  <h1 class="head" align="center">Cambios.</h1>
   <br>
   <br>
   		{!!Form::model($Plazas, ['route'=> ['plazas.update', $Plazas->id],'method'=>'PUT'])!!}
       <div class="form-group">
   			<div class="col-md-6">         
        		{!!Form::label('nombre','Nombre de plaza')!!}
            	{!!Form::text('nombre',null, ['placeholder' => 'Ingrese el nombre', 'class' => 'form-control', 'required'] ) !!}
			</div>
			<div class="col-md-6">
				{!!Form::label('vigencia','Vigencia: ')!!}<br/>
      			{!!Form::select('vigencia', array('A' => 'Alta', 'B' => 'Baja'), null, ['class' => 'btn btn-default', 'required'])!!}
			</div>
            <div class="col-md-4">
            	<br>
                {!!Form::label('sueldo','Sueldo')!!}
                {!!Form::number('sueldo',null, ['placeholder' => 'Ingrese el sueldo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
			</div>
            <div class="col-md-4">
           		<br>
                {!!Form::label('sobresueldo','Sobresueldo')!!}
                {!!Form::number('sobresueldo',null, ['placeholder' => 'Ingrese el sobresueldo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
            </div>    
            <div class="col-md-4">
            	<br>
                {!!Form::label('estimulo','Estimulo')!!}
                {!!Form::number('estimulo',null, ['placeholder' => 'Ingrese el estimulo', 'class' => 'form-control', 'min'=>'1', 'step'=>'0.01', 'required'] ) !!}
            </div>
          <div class="col-md-12" align="center">
          		<br>
          		{!!Form::submit('Actualizar', ['class'=>'btn btn-success'])!!}
          </div>
         </div>
         {!!Form::close()!!}
       </div>
</div>

@endsection