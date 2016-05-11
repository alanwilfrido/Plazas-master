@extends('layouts.main')

@section('title', 'Inicio') <!--ESTO PARA QUÉ LO PUSISTE-->

@section('content')
      <div class="row feature-box">
          <div class="span12 cnt-title">
           <h1>Bienvenido al sistema de administración de plazas.</h1> 
            <span>En el sistema de administración de plazas se pueden realizar diferentes tareas administrativas que se presentan a continuación:</span> 

          </div>

          <div class="col-md-4">
            <img src="img/icon-service-up.png">
            <h2>Altas</h2>
            <p>
                Dar de alta plazas. 
            </p>
            <br>
            <a href="{{URL::to('/altas')}}"><button type="button" class="btn btn-lg btn-default">Altas</button></a>

          </div>

          <div class="col-md-4">
            <img src="img/icon-service-down.png">
            <h2>Bajas</h2>
            <p>
                Dar de baja plazas. 
            </p>
            <br>
              <a href="{{URL::to('/bajas')}}"><button type="button" class="btn btn-lg btn-default">Bajas</button></a>    
          </div>

          <div class="col-md-4">
            <img src="img/changes.png" height=128px>
            <h2>Cambios</h2>
            <p>
                Realizar aumentos y actualizaciónes de información en  sueldos, sobresueldos y estímulos.
            </p>
              <a href="{{URL::to('/aumentos')}}"><button type="button" class="btn btn-lg btn-default">Aumentos</button></a>
              <a href="{{URL::to('/cambios')}}"><button type="button" class="btn btn-lg btn-default">Actualización</button></a>
          </div>
      </div>
@endsection