<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["user"];
    $email = $_POST["email"];
    $place = $_POST["place"];
    $tel = $_POST["tel"];
    $units = $_POST["Units"];
    $producto = $_POST["produc"];

} else {
    echo "El formulario no ha sido enviado.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200;400&display=swap" rel="stylesheet">


    <title>Reservar</title>
    <style>
          
      .comprar-button {
            background: linear-gradient(135deg, #ff6a00, #ffcc00); /* Cambia los colores del degradado */
            border: none;
            border-radius: 50px;
            padding: 15px 60px; /* Aumentamos el padding para hacerlo más ancho */
            color: #fff;
            font-size: 24px; /* Cambiamos el tamaño del texto */
            font-weight: bold; /* Hacemos el texto en negrita */
            cursor: pointer;
            margin-top: 20px;
            font-family: 'Lexend Deca', sans-serif;
        }
        .backgroundcolor{ 
          background: linear-gradient(135deg, #ff3131, #ff914d);
        }
        .container-sm{
          border-radius: 15px;
          width: 95%;
        }
        h1, label, input, p, a{
          font-family: 'Lexend Deca', sans-serif;
        }
        .alert {
          position: absolute;
          background-color: white;
          color: #F24738;
          padding: 5px 10px;
          border: 2px solid #F24738;
          border-radius: 10px;
          top: auto;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          z-index: 2;
          display: none;
          text-align: center;
        }

      
    
    </style>

</head>
<body>
 <!--Inicio de barra de navegacion-->
<header class="hero container-fluid border-bottom">
    <nav class="hero-nav container px-4 px-lg-0 mx-auto">
        <ul class="nav w-100 list-unstyled align-items-center p-0">
          <li class="hero-nav__item">
            <img class="hero-nav__logo" src="assets/imgs/Logo_Compu.svg">
          </li>
          <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
            <ul class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
              <li class="flex-grow-1">
                <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
                  <li class="hero-nav__item">
                    <a href="./MisionyVision.html" class="hero-nav__link">Contáctanos </a>
                  </li>
                  <li class="hero-nav__item">
                    <a href="./reservaciones.html" class="hero-nav__link">Reserva</a>
                  </li>
                  <li class="hero-nav__item">
                    <a href="./Sobre Nosotros.html" class="hero-nav__link">Sobre Nosotros</a>
                  </li>
                  <li class="hero-nav__item">
                    <a href="./Carac.html" class="hero-nav__link">Características</a>
                  </li>
                  <li class="hero-nav__item">
                    <a href="./index.html" class="hero-nav__link">Producto</a>
                  </li>
                </ul>
              </li>
            </ul>
            <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
              class="ft-menu__close-btn animated">
              <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                  clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </li>
          <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
            <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
              class="text-center px-2">
              <i class="fas fa-bars"></i>
            </button>
          </li>
        </ul>
      </nav>
      <!--Area para reservar-->
      <div id="contact-us" class="block-28 space-between-blocks border-top border-bottom">
        <div class="container-sm">
          <div class="row h-100">
            <div class="col-lg-6 h-100 block-28__content-side">
              <div class="contact-info">
                <h5 class="contact-info__title mb-3">¡ESTÁS A UN SOLO PASO DE RESERVAR!</h5>
                <p class="contact-info__paragraph mb-5">
                  A continuación, por favor ingresa tus datos para añadirte a la cola, cuando el producto este disponible se te notificará por medio de correo electrónico.
                </p>
              </div>
            </div>
            <div class="col-lg-6 h-100 block-28__form-side">
                <div class="text-center">
                    <h6 class="contact-form__title mb-3">Reserva</h6><hr>
                    <h1><?php echo $nombre ?></h1>
                    <p>Hemos registrado tu respuesta, nos contactaremos vía correo electrónico contigo pronto.</p><br>
                    <p>¡Gracias por tu reserva!</p>
                    <p>Serás redireccionado automáticamente 😁</p>
                </div>
            </div>
          </div>
        </div>
      </div>
          <hr>
    </header>
    <!--Inicio de pie de "pagina"-->
    <div class="block-44 py-5">
      <div class="container">
        <div class="row px-0 mx-0 justify-content-center align-items-center">
          <div class="block-44__logo-container">
            <img class="block-44__logo" src="assets/imgs/Logo_Compu.svg">
          </div>
          <ul class="block-44__list list-unstyled justify-content-center mb-0">
            <li class="block-44__li-1">
              <a href="#" class="block-44__link">Affiliate</a>
            </li>
            <li class="block-44__li-1">
              <a href="#" class="block-44__link">Entreprise</a>
            </li>
            <li class="block-44__li-1">
              <a href="#" class="block-44__link">Products</a>
            </li>
            <li class="block-44__li-1">
              <a href="#" class="block-44__link">Account</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="block-44__divider">
      <div class="container">
        <div class="row flex-column flex-md-row px-2 justify-content-center">
          <div class="flex-grow-1">
            <ul class="block-44__extra-links d-flex list-unstyled p-0">
              <li class="mx-2">
                <a href="#" class="block-44__link m-0">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="https://instagram.com/powersolar.x?igshid=ZDc4ODBmNjlmNQ==" class="block-44__link m-0">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="block-44__link m-0">
                  <i class="fas fa-envelope"></i>
                </a>
              </li>
            </ul>
          </div>
          <p class="block-41__copyrights">&copy; 2020 YourBrandName. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  
    <!-- =================================== -->
  
    <script src="assets/app.js"></script>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
    <script>
       setTimeout(function() {
        window.location.href = "./index.html";
        }, 5000); 
    </script>

    
</body>
</html>
