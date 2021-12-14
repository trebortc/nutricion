<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::to('/') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ URL::to('/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::to('/') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Obesidad</a></li>
          <li><a class="nav-link scrollto" href="#services">Alimentos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          @if (Route::has('login'))
              @auth
                <li>
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                </li>
              @else
                <li>
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a>
                </li>      
                  @if (Route::has('register'))
                </li>  
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
                </li>
                  @endif
              @endauth
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Realizar</span> Control</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenido a Medilab</h1>
      <h2>Somos un grupo de camaradas preocupados por la buena alimentación y salud del compañero</h2>
      <a href="#about" class="btn-get-started scrollto">Comencemos</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Por qué alimentarse bien?</h3>
              <p align="justify">
              Todos sabemos que las personas que se alimentan de forma saludable y equilibrada, y con alimentos variados, tienen una mayor probabilidad de: crecer y desarrollarse sanos y fuertes; tener más energía para trabajar y disfrutar de sí mismos; sufrir menos infecciones y otras enfermedades.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Crecer, desarrollarse sanos y fuertes</h4>
                    <p align="justify">Para que una persona tenga salud y bienestar, necesita seleccionar adecuadamente los alimentos y consumirlos en las cantidades necesarias para cubrir sus requerimientos.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Más energía para trabajar y disfrutar de sí mismos</h4>
                    <p align="justify">La nutrición puede ayudar a mejorar el desempeño atlético. Un estilo de vida activo y una rutina de ejercicios, junto con una buena alimentación, es la mejor manera de permanecer saludable.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Menos infecciones y enfermedades </h4>
                    <p align="justify">El sistema inmunitario es la base de la salud. Su misión es protegerte de todo aquello potencialmente dañino, como virus y bacterias, atacándolos cuando entran en tu cuerpo.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>La obesidad es una enfermedad</h3>
            <p align="justify">Que durante décadas ha venido afectando a la sociedad en general, esta enfermedad cuyas consecuencias van desde generar problemas de trastornos metabólicos, hipertensión, problemas cardio vasculares, problemas respiratorios, en algunos casos cáncer y hasta la muerte, en las últimas décadas se ha venido observando un notable aumento de peso en la sociedad en general esto debido a los factores más importantes que son: una mala nutrición, la falta de ejercicio adecuado.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Comencemos con:</a></h4>
              <p class="description">Elegir alimentos naturales como la base de la alimentación.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">El mayor tiempo:</a></h4>
              <p class="description">Evitar alimentos procesados y ultra-procesados para prevenir enfermedades.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Empezemos con:</a></h4>
              <p class="description">Practicar un estilo de vida saludable.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>6 Alimentos Saludables:</h2>
          <p align="justify">La alimentación puede influir en la salud corporal, el estado de ánimo y el nivel de energía de las personas, por lo que es importante ingerir alimentos mediante los cuales el organismo obtenga los nutrimentos que necesita.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">HUEVO</a></h4>
              <p align="justify">El huevo es una extraordinaria fuente de proteína9 y aporta vitaminas importantes que pueden contribuir a generar energía</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">LECHE</a></h4>
              <p align="justify">La leche es una fuente rica en calcio. Se considera importante su consumo frecuente en versiones bajas en grasa para ayudar a formar y proteger los huesos</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">MANZANA</a></h4>
              <p align="justify">Esta fruta es una buena fuente de fibra tanto soluble como insoluble, por lo que se recomienda su consumo, incluyendo la cáscara, y además contiene nutrimentos con función antioxidante</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">AVENA</a></h4>
              <p align="justify">La avena es fuente de fibra, que puede ayudar en el proceso digestivo. Asi mismo, es fuente de proteína, vitaminas y minerales, como complejo B, E y Zinc, los dos últimos considerados nutrimentos con función antioxidante. La ingesta diaria de avena puede ayudar a reducir los niveles de colesterol en la sangre</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">AGUACATE</a></h4>
              <p align="justify">El aguacate es una rica fuente de grasas mono insaturadas, un tipo de grasas alimentarias benéficas para la salud. Los aguacates son también ricos en vitaminas B, K y E y son fuente de fibra. Su consumo regular puede ayudar en la disminución de los niveles de colesterol en sangre</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">ALMENDRAS</a></h4>
              <p align="justify">Las almendras son otro ejemplo de alimentos saludables que podemos integrar a nuestra alimentación diaria. Son fuente de proteína, fibra dietética, magnesio y fósforo. La proteína es el componente funcional y estructural principal de cada célula en el cuerpo, por lo que su consumo habitual puede ser benéfico para el organismo</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Control:</h2>
          <p align="justify">Controlamos tu salud.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 offset-md-4 form-group">
              <input type="text" name="peso" class="form-control" id="peso" placeholder="Ingresa tu peso" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 offset-md-4 form-group">
              <input type="text" class="form-control" name="estatura" id="estatura" placeholder="Ingresa tu estatura" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>            
          </div>
          <div class="mb-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Calcular las calorias</div>
          </div>
          <div class="text-center"><button type="submit">Calcular</button></div>
        </form>

      </div>
    <br>
      <div class="container">
        <div class="section-title">
          <h2>Resultado:</h2>
        </div>
        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group offset-md-4">
              <select name="sobrepeso" id="sobrepeso" class="form-select">
                <option value="">Tipo sobrepeso:</option>
                <option value="Department 1">Obesidad 1</option>
                <option value="Department 2">Obesidad 2</option>
                <option value="Department 3">Obesidad 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 offset-md-4 form-group">
              <input type="text" class="form-control" name="caloria" id="caloria" placeholder="Calorias" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>            
          </div>
        </form>

      </div>
    <br>
    <div class="container">
        <div class="section-title">
          <h2>Alimentación:</h2>
        </div>
        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group offset-md-4">
                <input type="date" id="fecha" name="fecha" class="form-control">
                <div class="validate"></div>
            </div>
            
            <div class="col-md-1 offset-md-5 align-self-center">
                <br><h2>Desayuno</h2>
            </div>
            <div class="col-md-10 offset-md-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Porc.</th>
                            <th scope="col">Med. Casera</th>
                            <th scope="col">Menú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lacteo/bebida</td>
                            <td>1</td>
                            <td>1 tz leche</td>
                            <td>leche con cacao</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Prot</td>
                            <td>1</td>
                            <td>30 gr. queso y 70 gram. queso</td>
                            <td>sanduche de queso</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Fruta</td>
                            <td>1</td>
                            <td>1 tz papaya</td>
                            <td>papaya picada</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-1 offset-md-5 align-self-center">
                <br><h2>Almuerzo</h2>
            </div>
            <div class="col-md-10 offset-md-1">
                <table class="table-warning">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Porc.</th>
                            <th scope="col">Med. Casera</th>
                            <th scope="col">Menú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lacteo/bebida</td>
                            <td>1</td>
                            <td>1 tz leche</td>
                            <td>leche con cacao</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Prot</td>
                            <td>1</td>
                            <td>30 gr. queso y 70 gram. queso</td>
                            <td>sanduche de queso</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Fruta</td>
                            <td>1</td>
                            <td>1 tz papaya</td>
                            <td>papaya picada</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-1 offset-md-5 align-self-center">
                <br><h2>Merienda</h2>
            </div>
            <div class="col-md-10 offset-md-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Porc.</th>
                            <th scope="col">Med. Casera</th>
                            <th scope="col">Menú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lacteo/bebida</td>
                            <td>1</td>
                            <td>1 tz leche</td>
                            <td>leche con cacao</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Prot</td>
                            <td>1</td>
                            <td>30 gr. queso y 70 gram. queso</td>
                            <td>sanduche de queso</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Fruta</td>
                            <td>1</td>
                            <td>1 tz papaya</td>
                            <td>papaya picada</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacto</h2>
          <p align="justify"></p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/d/embed?mid=1RItNNdMzXMbKqjMQTTYqJPutXeg&ehbc=2E312F" frameborder="0" allowfullscreen></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p align="justify">
              Sangolquí <br>
              ESPE<br>
              Pichincha <br><br>
              <strong>Phone:</strong> +593456981<br>
              <strong>Email:</strong> espe@espe.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menú</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::to('/') }}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="{{ URL::to('/') }}/assets/js/main.js"></script>

</body>

</html>