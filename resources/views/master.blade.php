<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/vintrash.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- MEDIDAS Y FUENTES -->
    <link rel="stylesheet" href="css/fuentesYmedidas.css">
    <!-- NAVBAR -->
    <link rel="stylesheet" href="css/navBar.css">
    <!-- FOOTER -->
    <link rel="stylesheet" href="css/footer.css">

    <!-- INDEX -->
    <link rel="stylesheet" href="css/index_mobile.css">
    <!-- LOGIN -->
    <link rel="stylesheet" href="css/login_mobile.css">
    <!-- REGISTER -->
    <link rel="stylesheet" href="css/register_mobile.css">
    <!-- FAQ -->
    <link rel="stylesheet" href="css/faq_mobile.css">
    <!-- BIENVENIDA -->
    <link rel="stylesheet" href="css/bienvenida_mobile.css">


    <title>Home | VINTRASH </title>
</head>

{{-- NAVBAR --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="index.php"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav cascadaUno">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link usuario dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu cascadaDos dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <ul class="dropdown-menu cascadaDos">
                        <li><a href="profile.php">Perfil</a></li>
                          <li><a href="#">Editar Perfil</a></li>
                          <li class="borderli"><a href="#">Configuración</a></li>
                          <li><a href="login.php">Cerrar Sesión
                          </a></li>
                        </ul>
                </div>
            </li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" style="color:white;">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            @endguest
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Search</a>
            </li>

        </ul>
    </div>
</nav>

@yield('content')
{{-- 
<footer>

    <div class="caja1">
          <div class="social">
                <div class="imgrs">
                  <a href="https://www.linkedin.com/" target="_blank"><img class="redSocial1" src="img/redes_linkedin.svg" alt="linkedin"></a>
                </div>
                <div class="imgrs">
                    <a href="https://www.facebook.com/" target="_blank" ><img class="redSocial2" src="img/redes_facebook.svg" alt="facebook"></a>
                </div>
                <div class="imgrs">
                  <a href="https://twitter.com/" target="_blank"><img class="redSocial3" src="img/redes_twitter.svg" alt="twitter"></a>
                </div>
          </div>
    </div>

    <div class="caja2">
              <div class="imgFooter">
                <img src="img/isologo_blanco.svg" alt="isologo">
              </div>
              <div class="fraseFooter">
                <p class="phrase">One man's trash is another man's treasure</p>
                <p class="copy">&copy; 2019 Vintage Treasures SRL - Todos los derechos reservados</p>
              </div>
    </div>

    <div class="caja3">
          <div class="links">
                    <a href="#">Contacto</a>
                    <a href="#">Trabaja con nosotros</a>
                    <a href="toes.html">Terminos & Condiciones</a>
          </div>
    </div>

  </footer>

 --}}

 <footer>

    <div class="caja1">
          <div class="social">
                <div class="imgrs">
                  <a href="https://www.linkedin.com/" target="_blank"><img class="redSocial1" src="img/redes_linkedin.svg" alt="linkedin"></a>
                </div>
                <div class="imgrs">
                    <a href="https://www.facebook.com/" target="_blank" ><img class="redSocial2" src="img/redes_facebook.svg" alt="facebook"></a>
                </div>
                <div class="imgrs">
                  <a href="https://twitter.com/" target="_blank"><img class="redSocial3" src="img/redes_twitter.svg" alt="twitter"></a>
                </div>
          </div>
    </div>

    <div class="caja2">
              <div class="imgFooter">
                <img src="img/isologo_blanco.svg" alt="isologo">
              </div>
              <div class="fraseFooter">
                <p class="phrase">One man's trash is another man's treasure</p>
                <p class="copy">&copy; 2019 Vintage Treasures SRL - Todos los derechos reservados</p>
              </div>
    </div>

    <div class="caja3">
          <div class="links">
                    <a href="#">Contacto</a>
                    <a href="#">Trabaja con nosotros</a>
                    <a href="toes.html">Terminos & Condiciones</a>
          </div>
    </div>

  </footer>
