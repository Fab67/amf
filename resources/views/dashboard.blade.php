@extends ('layouts.admin')
@section('menu')


<section id="hero" class="hero d-flex align-items-center section-bg" style="background-color:#FFFFFF">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2  data-aos="fade-up">BIENVENUE DANS VOTRE COMPTE ADMIN</h2>
          <p data-aos="fade-up" data-aos-delay="100"></p>

            <p data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-check2-all"></i>  Enregistrer les actualités. <br>
                <i class="bi bi-check2-all"></i> People <br>
                <i class="bi bi-check2-all"></i> Cinéma <br>
                <i class="bi bi-check2-all"></i>  Musique<br>
                <i class="bi bi-check2-all"></i> News des stars <br>
                <i class="bi bi-check2-all"></i> Sport <br>
                <i class="bi bi-check2-all"></i>  Technologie<br>
                <i class="bi bi-check2-all"></i> Environnement <br>

         </p>

        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="/boot2/assets/img/hero-img2.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
</section><!-- End Hero Section -->

@endsection
