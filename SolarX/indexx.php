<!--Integrantes
-Eyleen Alvarado
-Genesis Dominguez
-Jose Mira
-David Alvarez
-Jeny Salguero
-Priscila Sanros
-Maria Soriano

We have neither given nor received any unauthorized aid"
-->

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- font awesome 5 free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Poppins font from Google -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/app.css">

  <title>PowerBank X</title>
</head>

<body>

    <!--Offer Alert ================================ -->
     <div class="offer-alert">
       <div class="offer-alert__container container">
         <span>🔥😍 ¡Reserva nuestro producto ahora!</span> <a href="./reservaciones.html" class="offer-alert__btn">RESERVA</a>
       </div>
     </div>
    
  <!--Hero ====================================== -->
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
                  <a href="./MisionyVision.html" class="hero-nav__link">Misión y Visión</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#faq" class="hero-nav__link">FAQ</a>
                </li>
                <li class="hero-nav__item">
                  <a href="./reservaciones.html" class="hero-nav__link">Reserva</a>
                </li>
                <li class="hero-nav__item">
                  <a href="./Sobre Nosotros.html" class="hero-nav__link">Sobre Nosotros</a>
                </li>
                <li class="hero-nav__item">
                  <a href="Carac.html" class="hero-nav__link">Características</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#product" class="hero-nav__link">Producto</a>
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
    <!--Final de barra de navegacion/principio cuerpo-->
    <div class="hero__content container mx-auto">
      <div class="row px-0 mx-0 align-items-center">
        <div class="col-lg-6 px-0">
         <!-- <h1 class="hero__title mb-3">
            Bienvenido/a
          </h1> -->
          <h1>Bienvenid@ <?php echo $Usuario ?></h1>
          <h1 class="hero__title mb-3">
            BATERÍA <span class="highlight">DONDE</span> QUIERAS.
          </h1>
          <p class="hero__paragraph mb-5">
            ¿Tu batería portátil  no te proporciona lo que necesitas? No te preocupes nosotros tenemos la solución. 
          </p>
          <div class="hero__btns-container">
            <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="./Compra.html">
              Comprar
            </a>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
            <img src="assets/imgs/Powerbank Solar Abierta.png" class="hero__img w-100">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ===================================== -->

  <div id="product" class="block-5 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <p class="block__pre-title mb-2">¿POR QUÉ ESCOGERNOS?</p>
        <h1 class="block__title mb-3">Carac<span class="highlight">terísticas</span></h1>
        <p class="block__paragraph mb-0">
          Nuestro powerbank te proporciona las siguientes ventajas, frente a otros competidores.
        </p>
      </div>
      <div class="row align-items-center flex-column-reverse flex-lg-row px-2">
        <!-- LEFT CONTENT -->
        <div class="col-lg-4">
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-solar-panel"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Carga Solar</h3>
              <p class="card-2__paragraph">
                Paneles solares de última generación, capaz de recargar tu Powerbank en poco tiempo.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-battery-full"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Alta capacidad de batería</h3>
              <p class="card-2__paragraph">
                Batería de 7000 Mha capaz de brindarte energía en todo momento.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex flex-row flex-lg-row-reverse">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fab fa-usb"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Compatibilidad</h3>
              <p class="card-2__paragraph">
                Compatible con todos los dispositivos del mercado.
              </p>
            </div>
          </div>
        </div>
        <!-- IMAGE -->
        <div class="col-lg-4 my-5 text-center">
          <img src="assets/imgs/PowerBank__Imagen_Carac.png" class="w-75">
        </div>
        <!-- RIGHT CONTENT -->
        <div class="col-lg-4">
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-charging-station"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Carga en cualquier lugar</h3>
              <p class="card-2__paragraph">
                No tienes una fuente de energía cerca, no te preocupes nosotros pensamos en ello.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-bolt"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Seguridad</h3>
              <p class="card-2__paragraph">
                Una corriente constante y segura para tu móvil.
              </p>
            </div>
          </div>
          <div class="card-2 d-flex">
            <div>
              <span class="card-2__symbol mx-auto">
                <i class="fas fa-mobile"></i>
              </span>
            </div>
            <div class="px-2"></div>
            <div>
              <h3 class="card-2__title mb-2">Portabilidad</h3>
              <p class="card-2__paragraph">
                Tamaño reducido, capaz de entrar en cualquier bolsillo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================================== -->

  <div id="features" class="block-11 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center">
        <p class="block__pre-title mb-2">GET MORE DETAILS</p>
        <h1 class="block__title mb-3">Asombrosas <span class="highlight">Especificaciones</span></h1>
      </div>
      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="col-lg-4 col-xl-5 p-lg-5">
          <img class="w-100" style="width: auto; height: auto;" src="assets/imgs/Power OnOff.png">
        </div>
        <div class="col-lg-8 col-xl-6">
          <div class="row">
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 card-1--selected text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <h3 class="card-1__title mb-2">Indicador</h3>
                <p class="card-1__paragraph">
                  Conoce cuanta carga le resta a tu batería portátil con una precisión exacta. 
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-leaf"></i>
                </span>
                <h3 class="card-1__title mb-2">Eco Friendly</h3>
                <p class="card-1__paragraph">
                  Energía solar amigable con el medio ambiente, para así reducir el impacto de los métodos tradicionales
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fas fa-cog"></i>
                </span>
                <h3 class="card-1__title mb-2">Dimensiones contenidas</h3>
                <p class="card-1__paragraph">
                  <li class="card-1__paragraph">
                    12 cm de largo
                  </li>
                  <li class="card-1__paragraph">
                    5 cm de ancho
                  </li>
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-2-1rem">
              <div class="card-1 text-center">
                <span class="card-1__symbol mx-auto mb-4">
                  <i class="fal fa-bolt"></i>
                </span>
                <h3 class="card-1__title mb-2">Alta Capacidad</h3>
                <p class="card-1__paragraph">
                  Batería de alta capacidad y duración, capas de recargar de 2-3 antes de necesitar cargarla. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======================================== -->

  <div id="testimonials" class="block-20 space-between-blocks">
    <div class="container">
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">Opiniones sobre nosotros</h1>
        <p class="block__paragraph">
          Esto opinan nuestros clientes 
        </p>
      </div>
      <div class="row px-2 pt-4">
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Muy innovador y capaz de renovar las formas de inversión, dejando de un lado el consumismo y al mismo tiempo, mejorando la salud del medio ambiente
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/1.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Brandon Melendez</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Opino que es una buena opción el usar este tipo de dispositivos porque este contribuye a usar energía solar y por ende ayuda al medio ambiente.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/3.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Alison Andrea</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Una idea revolucionaria ya que a través de recursos naturales van a lograr obtener la carga. 
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Carolina Hernandez</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =================================== -->

  <div id="pricing" class="block-17 px-4 space-between-blocks">
    <div class="container">
      <div class="block-17__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">RESERVA</h1>
        <p class="block__paragraph">
          Puedes pre-reservar nuestro producto dando click en el siguiente botón. 
        </p>
      </div>
      <div class="block-17__card row flex-column-reverse flex-lg-row justify-content-center">
        <div class="testimonial-card-3 text-center col-lg-6 px-0 d-flex align-items-center justify-content-center">
          <div class="px-4 px-lg-5">
            <img class="person__avatar" src="assets/imgs/Yuli 2.png">
            <p class="testimonial-card-3__paragraph my-4">
              ¡Gracias por preferir Solar X! Cuando adquieres nuestros productos contribuyes en el desarrollo de energías renovables.
            </p>
            <div class="flex-grow-1 d-flex flex-column mb-3">
              <span class="person__name">Eyleen Alvarado</span>
              <span class="person__info my-1">CEO</span>
              <span class="person__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
          </div>
          <span class="testimonial-card-3__quote-symbol">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>
        <div class="cta-card col-lg-5 px-0">
          <div class="plan-card text-center">
            <h6 class="plan-card__name mb-0">Reserva gratis</h6>
            <p class="discount mt-3 mb-0 d-flex align-items-center justify-content-center">
              <span class="discount__old-price mx-2">$60</span>
              <span class="discount__percentage mx-2">100% off</span>
            </p>
            <p class="plan-card__price my-2">$0</p>
            <span class="plan-card__duration">90 días de garantía</span>
            <ul class="plan-features list-unstyled mt-5 mb-0">
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">PowerBank</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Acessorios extras </span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Asistencia</span>
              </li>
              <li class="mt-5">
                <a href="./reservaciones.html" class="d-block btn btn-primary px-5 mx-auto">
                  RESERVA EL TUYO
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =================================== -->

  <div id="faq" class="block-39 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <h1 class="block__title">Preguntas Frecuentes</h1>
      </div>
      <div class="row px-2">
        <div class="col-lg-6">
          <div class="content-block">
            <h4 class="content-block__title">
              ¿Cuánto tiempo tarda en cargarse el Power Bank con energía solar?
            </h4>
            <p class="content-block__paragraph">
              El tiempo de carga del Power Bank a través de energía solar puede variar según las condiciones de luz solar disponibles. En promedio, puede tardar alrededor de 10-15 horas para una carga completa en condiciones de luz solar óptimas.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-block">
            <h4 class="content-block__title">
              ¿Puedo cargar el Power Bank mediante un cable USB además de la energía solar?
            </h4>
            <p class="content-block__paragraph">
              ¡Sí! El powerbank viene con un puerto de carga USB estándar, lo que te permite cargarlo también a través de una fuente de energía convencional, como un adaptador de corriente o una computadora. Esto proporciona una opción adicional de carga en caso de que no haya suficiente luz solar disponible
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-block">
            <h4 class="content-block__title">
              ¿Cuántas veces puedo cargar mi dispositivo móvil con el Power Bank?
            </h4>
            <p class="content-block__paragraph">
              La capacidad de carga del Power Bank depende del modelo específico y de la capacidad de su batería interna. Por lo general, nuestros modelos ofrecen múltiples cargas completas para teléfonos inteligentes y otros dispositivos móviles. Por ejemplo, algunos modelos pueden cargar un teléfono inteligente de alta capacidad hasta 2 o 3 veces antes de requerir una recarga.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-block">
            <h4 class="content-block__title">
              ¿Es resistente al agua el Power Bank?
            </h4>
            <p class="content-block__paragraph">
              El modelo actual no posee resistencia al agua ni a ningún liquido por lo que se recomienda no utilizarlo en momentos de lluvia o cerca de piscinas
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- =================================== -->

  <div class="container" id="destiny">
          <form onsubmit="vsubmitContactForm(event)" class="contact-form text-center">
            <div class="contact-form__header mb-5">
              <h6 class="contact-form__title mb-3" style="color: black;">Contáctanos</h6>
              <p class="contact-form__paragraph mb-0 mx-auto" style="color: black;">
                Si tienes mas dudas, por favor contáctanos. 
              </p>
            </div>
            <div class="row">
              <div class="col">
                <label for="firstname" style="color: black;">Nombre:</label style="text-align: left">
                <input type="text" class="contact-form__input" id="name">
              </div>
              <div class="col">
                <label for="lastname" style="color: black;">Apellido:</label>
                <input type="text" class="contact-form__input" id="lastname">
              </div>
            </div>
            <label for="email" style="color: black;">Correo:</label>
            <input type="email" class="contact-form__input">
            <textarea class="contact-form__input" placeholder="Mensaje" id="message"></textarea>
            <input type="checkbox" name="aceptar-terminos" id="aceptar-terminos" > <label for="me" style="color: black;">Al utilizar este formulario, aceptas que tus datos personales serán procesados de acuerdo con nuestra politica de privacidad.</label>
            <button type="submit" class="btn btn-primary w-100">ENVIAR</button>
          </form>
        
      
    </div>
  <br>
  <br>

  <!-- =================================== -->


  <div class="block-44 py-5">
    <div class="container">
      <div class="row px-0 mx-0 justify-content-center align-items-center">
        <div class="block-44__logo-container">
          <img class="block-44__logo" src="assets/imgs/Logo_Compu.svg">
        </div>
        <ul class="block-44__list list-unstyled justify-content-center mb-0">
          <li class="block-44__li-1">
            <a href="#destiny" class="block-44__link">Contactanos</a>
          </li>
          <li class="block-44__li-1">
            <a href="./Compra.html" class="block-44__link">Comprar</a>
          </li>
          <li class="block-44__li-1">
            <a href="#" class="block-44__link">Products</a>
          </li>
          <li class="block-44__li-1">
            <a href="Registro.html" class="block-44__link">Registrarse</a>
          </li>
          <li class="block-44__li-1">
            <a href="./InicioSS.html" class="block-44__link">Iniciar Sesion</a>
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

</body>

</html>
