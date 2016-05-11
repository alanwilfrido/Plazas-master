<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SAP - @yield('title')</title>
    <!-- Bootstrap -->

    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/bootstrap-responsive.css')!!}
    {!!Html::style('css/style.css')!!}
    
    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
      
  </head>
  <body>
  <!--HEADER ROW-->
  <div id="header-row">
    <div class="container">
      <div class="row">
              <!--LOGO-->

              <div class="col-md-4"><a class="brand" href="{{URL::to('/')}}">

              <img src="{{URL::asset('img/logo.png')}}"/></a></div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
              <div class="col-md-8">
                <div class="navbar  pull-right">
                  <div class="navbar-inner">
                    <ul class="nav nav-pills">
                      <li role="presentation"><a href="{{URL::to('/')}}">Inicio</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{URL::to('/altas')}}">Altas</a></li>
                          <li><a href="{{URL::to('/bajas')}}">Bajas</a></li>
                          <li><a href="{{URL::to('/aumentos')}}">Aumentos</a></li>
                          <li><a href="{{URL::to('/cambios')}}">Actualización</a></li>
                        </ul>
                      </li>
                      <li role="presentation"><a href="{{URL::to('/contacto')}}">Contacto</a></li>
                    </ul>

                  </div>
                </div>
              </div>
            <!-- MAIN NAVIGATION -->  
      </div>
    </div>
  </div>
  <!-- /HEADER ROW -->

  


  <div class="container">

<!-- Feature 
  ==============================================-->


  @yield('content')


<!-- /.Feature -->
    
</div>

<!--Footer
==========================-->

<footer>
    <div class="container">
      <div class="row">
        <div class="span6">Copyright &copy 2016 fornax. | All Rights Reserved  <br>
        <small>Calle Calz de las Torres 3858 - C.P. 80197 Culiacán Rosales, Sinaloa, México.</small>
        </div>
      </div>
    </div>
</footer>

<!--/.Footer-->

<!-- SCRIPT 
    ============================================================-->  
    {!!Html::script('http://code.jquery.com/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}

  </body>
</html>