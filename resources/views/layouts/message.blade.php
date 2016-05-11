@extends('layouts.main')

@section('title', 'Mensaje')

@section('content')

<div class="container">
@if(Session::has('view'))
  @if(Session::get('view') == 'alta')   <!--EN DONDE VISTE LO DE 'SESSION' Y SU FORMA DE USARLO?-->
    <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
       <div class="col-md-12" align="center">
          <a href="{{URL::to('/altas')}}"><button type="button" class="btn btn-lg btn-default">Regresar a altas</button></a>
          <a href="{{URL::to('/cambios')}}"><button type="button" class="btn btn-lg btn-default">Ver plazas</button></a>
       </div>
  @elseif(Session::get('view') == 'baja')
    <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
       <div class="col-md-12" align="center">
          <a href="{{URL::to('/bajas')}}"><button type="button" class="btn btn-lg btn-default">Regresar a bajas</button></a>
          <a href="{{URL::to('/cambios')}}"><button type="button" class="btn btn-lg btn-default">Ver plazas</button></a>
       </div>
  @elseif(Session::get('view') == 'aumenta')
    <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
       <div class="col-md-12" align="center">
          <a href="{{URL::to('/aumentos')}}"><button type="button" class="btn btn-lg btn-default">Regresar a aumentos</button></a>
          <a href="{{URL::to('/cambios')}}"><button type="button" class="btn btn-lg btn-default">Ver plazas</button></a>
       </div>
  @elseif(Session::get('view') == 'act')
    <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
       <div class="col-md-12" align="center">
          <a href="{{URL::to('/cambios')}}"><button type="button" class="btn btn-lg btn-default">Regresar a actualizaciones</button></a>
       </div>
   @elseif(Session::get('view') == 'mail')
    <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
       <div class="col-md-12" align="center">
          <a href="{{URL::to('/contacto')}}"><button type="button" class="btn btn-lg btn-default">Mandar otro mensaje</button></a>
          <a href="{{URL::to('/')}}"><button type="button" class="btn btn-lg btn-default">Regresar a inicio</button></a>
       </div>
  @endif
@elseif (Session::has('message'))
  <h1 class="head" align="center">{{Session::get('header')}}</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/{{Session::get('status')}}.png" height=150px/>{{Session::get('message')}}</h1>
       </div>
@else
	<h1 class="head" align="center">¡Ups!</h1>
   <br>
       <div class="col-md-12" align="center">
          <h1><img src="img/info.png" height=150px/>Parece que te perdiste, regresa al <a href="{{URL::to('/')}}">inicio</a>.</h1>
       </div>
@endif
</div>

@endsection