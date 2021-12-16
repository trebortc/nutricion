<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <link href="{{ URL::to('/') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<div>
        <!-- ======= Appointment Section ======= --><br>
    <section id="appointment" class="appointment section-bg">
      <div class="container">
        <!-- <form action="forms/appointment.php" method="post" role="form" class="php-email-form"> -->
          <div class="row php-email-form">
            <div class="col-md-4 offset-md-4 form-group">
              <input type="number" step=".01" name="peso" class="form-control" id="peso" placeholder="Ingresa tu peso en kilogramos" data-rule="minlen:4" data-msg="Por favor ingresa datos validos">
              <div class="validate"></div>
            </div>
            <div class="col-md-1">
              kilogramos
            </div>  
            <div class="col-md-4 offset-md-4 form-group">
              <input type="number" step=".01" class="form-control" name="estatura" id="estatura" placeholder="Ingresa tu estatura en metros" data-rule="email" data-msg="Por favor ingresa datos validos">
              <div class="validate"></div>
            </div>
            <div class="col-md-1"<>
              metros
            </div>            
          </div>
          <!-- <div class="mb-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Calcular las calorias</div>
          </div> -->
          <br>          
          <div class="text-center"><button class="btn btn-danger" id="calcular" onclick="calcularPeso()">Calcular</button></div>
        <!-- </form> -->

      </div>
    <br>
    <div class="container">
      <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group offset-md-4">
          <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Tipo sobre peso" data-rule="email" data-msg="Please enter a valid email">
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
    <div class="container" id="informacion" style="visibility: hidden; position: absolute; top: -9999px;">
        <div class="col-md-1 offset-md-5 align-self-center">
                <br><h2>Alimentación</h2>
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
            
            <div class="col-md-4 offset-md-5 align-self-center">
                <br><h2>Refrigerio AM</h2>
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
                        <td>Fruta</td>
                        <td>1</td>
                        <td>1 tz piña, melón, frutilla y 1 cdta chía</td>
                        <td>ensalada de frutas con chia</td>
                    </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-1 offset-md-5 align-self-center">
                <br><h2>Almuerzo</h2>
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
                            <td>Prot</td>
                            <td>3</td>
                            <td>100 gr carne</td>
                            <td>carne al jugo con arroz y zanahoria salteada</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ensalada</td>
                            <td>2</td>
                            <td>1 tz zanahoria cocida</td>
                            <td>carne al jugo con arroz y zanahoria salteada</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cho</td>
                            <td>3</td>
                            <td>1 1/2 tz arroz</td>
                            <td>carne al jugo con arroz y zanahoria salteada</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Grasa</td>
                            <td>1</td>
                            <td>1 cdta a oliva</td>
                            <td>carne al jugo con arroz y zanahoria salteada</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Fruta</td>
                            <td>1</td>
                            <td>1 tz fruta con gelatina light</td>
                            <td>gelatina de frutas</td>
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

            <div class="col-md-4 offset-md-5 align-self-center">
                <br><h2>Refrigerio PM</h2>
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
                        <td>Lacteo</td>
                        <td>1</td>
                        <td>1 tz yougur light</td>
                        <td>yogur con arandanos y nueces picadas</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Fruta</td>
                        <td>1</td>
                        <td>1 tz de arándanos</td>
                        <td>yogur con arandanos y nueces picadas</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Grasa</td>
                        <td>1</td>
                        <td>1/4 nueces</td>
                        <td>yogur con arandanos y nueces picadas</td>
                    </tr>
                </tbody>
              </table>  
            </div>

          </div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
</div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::to('/') }}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="{{ URL::to('/') }}/assets/js/main.js"></script>

            </div>
        </div>
    </div>
</x-app-layout>