<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Empleados</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>-->
    </head>
    <body>
      <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->

            <div class="content">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h1>Registro de Empleados</h1>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <form action="empleados" method="post">
                      <div class="col-md-12 text-center">
                          <label>Nombre</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="nombres" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Apellidos</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="apellidos" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>cedula</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="cedula" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Correo</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="email" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Lugar de nacimiento</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="lugar_nacimiento" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Sexo</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="sexo" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Estado civil</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="estado_civil" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div><br>
                      <div class="col-md-12 text-center">
                          <label>Telefono</label>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type="text" name="telefono" class="form-control"/>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <br>
                            <input type="submit" value="Guardar empleado" class="btn btn-success"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>

              <!--  <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->

      <!--  </div> -->
    </body>
</html>
