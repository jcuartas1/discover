<!--=====================================
CABEZOTE
======================================-->

<?php include "cabezote.php";?>

<!--====  Fin de CABEZOTE  ====-->

<section class="page-section about-heading">
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="views/img/about.jpg" alt="">
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Asistencias Viajes</span>
              <span class="section-heading-lower">J&C Discover Plus SAS</span>
            </h2>
            <p> Somos una empresa dedicada totalmente a la
                prestación de servicios de asistencia a viajeros.
                Con aliados mundiales reconocidos por su prestigio.</p>
            <p>Nuestra moderna plataforma web permite en tiempo real y de manera
              segura proveer al canal de distribución,
              una venta inmediata y a sus clientes la atención de
              emergencias al instante.</p>
            <p class="mb-0">No importa que tan compleja sea la emergencia lejos de su <em>País</em>
              nuestra red esta en la capacidad de asistir a los viajeros 24/7 en
              cualquier lugar del mundo, con tan solo comunicarse con cualquiera
              de nuestras Centrales de Asistencias en los diferentes lugares del mundo.</p>

            <hr>

            <h5><span class="section-heading-upper">Oficinas</span></h5>
            <p>Carrera 41A # 30C-56 Nucleo 1 Interior H211</p>
            <p>Medellin Colombia</p>
            <p>Email: info@discoverassistance.com</p>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Valores Corporativos</span>
            </h2>
            <p>
               Estamos comprometidos con crear valor para nuestros canales de distribución,
               nuestros colaboradores, los viajeros y los Accionistas.
            </p>
            <p>
              Usamos tecnologías de ultima Generación, mantenemos relaciones
              Ganar Ganar, y estamos abiertos al cambio.
            </p>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-lg-3">
                  <button type="button" class="btn btn-lg btn-outline-dark" data-toggle="popover"
                    title="Tecnologia" data-content="Optimización de Recursos"><span class="oi oi-laptop" title="icon name" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-3">
                  <button type="button" class="btn btn-lg btn-outline-warning" data-toggle="popover"
                    title="Creación de Valor" data-content="Beneficios Compartidos"><span class="oi oi-cloudy" title="icon name" aria-hidden="true"></span>
                  </button>
                </div>

                <div class="col-xs-6 col-sm-6 col-lg-3">
                  <button type="button" class="btn btn-lg btn-outline-info" data-toggle="popover"
                    title="Relaciones Ganar, Ganar" data-content="Equidad, Respeto y Rentabilidad"><span class="oi oi-people" title="icon name" aria-hidden="true"></span>
                  </button>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-3">
                  <button type="button" class="btn btn-lg btn-outline-secondary" data-toggle="popover"
                    title="Abiertos al Cambio" data-content="Innovación y Adaptabilidad"><span class="oi oi-link-broken" title="icon name" aria-hidden="true"></span>
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Respaldo Mundial & Partner</span>
            </h2>
            <p class="mb-0" style="text-align: justify;">
              Para brindar un Excelente servicio, contamos con nuestro Partner
              Cicapital Assist líder en América Latina, con oficinas en Miami,
              Santo Domingo y Caracas y el Respaldo mundial de la empresa
              creadora del concepto de asistencia en viajes a nivel mundial,
              con más de 50 años de experiencia, y con la más grande y completa
              red de servicios y proveedores, abarcando más de 208 países,
              respaldados por una división creada por el gigante de seguros y
              reaseguros Generali, el cuál tiene casi dos siglos de operación y
              con al mayor fuerza financiera y especialización en todas las áreas
              de seguros y reaseguros en todo el
              mundo
            </p>
            <div class="liders">
              <div class="row">
                <div class="col-md-6">
                  <img src="views/img/euro-logo.png" alt="">
                </div>
                <div class="col-md-6">
                  <img src="views/img/logo-c-capital.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=====================================
  FOOTER
======================================-->

<?php include "footer.php";?>

<!--====  Fin de FOOTER  ====-->

<script>
  $(window).on('load',function(){

    var elemento = $('#inicio');
    elemento.removeClass("active");

    //var elemento3 = $('#referidos');
    //elemento3.removeClass("active");

    //var element4 = $('#perfil');
    //element4.removeClass("active");

    var element5 = $('#acerca');
    element5.addClass("active");

  });

  $(function () {
    $('[data-toggle="popover"]').popover()
  })
</script>
