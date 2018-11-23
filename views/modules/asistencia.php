<!--=====================================
CABEZOTE
======================================-->

<?php include "cabezote.php";?>

<!--====  Fin de CABEZOTE  ====-->

<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <h2 class="section-heading mb-5">
            <span class="section-heading-upper">Asistencia al viajero</span>
            <span class="section-heading-lower">Comunicate</span>
          </h2>
          <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
            <li class="list-unstyled-item list-hours-item d-flex">
              País
              <span class="ml-auto">Teléfono</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              España
              <span class="ml-auto">900-101-952</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Italia
              <span class="ml-auto">800-875-369</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              COSTA RICA
              <span class="ml-auto">0800-054-2051</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Peru
              <span class="ml-auto">0800-54902</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Francia
              <span class="ml-auto">0800-913-276</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              EEUU
              <span class="ml-auto">+1855-272-3511</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Reino Unido
              <span class="ml-auto">0808-1012-179</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Sudafrica
              <span class="ml-auto">0800-984-141</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Brasil
              <span class="ml-auto">0800-892-3011</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Chile
              <span class="ml-auto">188800-801-025</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Venezuela
              <span class="ml-auto">0800-100-56-04</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Mexico
              <span class="ml-auto">01800-123-8729</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Alemania
              <span class="ml-auto">0800-182-5971</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Israel
              <span class="ml-auto">180-9452074</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Nueva Zelanda
              <span class="ml-auto">0800-451-860</span>
            </li>
          </ul>
          <p class="address mb-5">
            <em>
              <strong>Central Operativa Europ Assistance</strong>
              <br>
              Golden Valley, Minnesota
            </em>
          </p>
          <p class="mb-0">
            <small>
              <em>Call Anytime</em>
            </small>
            <br>
            +5411-4814.90.51
          </p>
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

    var elemento3 = $('#portafolio');
    elemento3.removeClass("active");

    var element4 = $('#acerca');
    element4.removeClass("active");

    var element5 = $('#asistencia');
    element5.addClass("active");

  });

  $(function () {
    $('[data-toggle="popover"]').popover()
  })
</script>
