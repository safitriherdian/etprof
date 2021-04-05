@extends('template')

@section('title', 'Etika Profesi | Detail')

@section('detail')

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Artikel Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="portfolio.html">Artikel</a></li>
          <li>Artikel Details</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="col-lg-12">
        <div class="portfolio-details-slider swiper-container">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/portfolio/artikel-1.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/artikel-1.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/portfolio/artikel-1.jpg" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header">
          Peran Etika dalam perkembangan IPTEK
        </div>
        <div class="card-body">
          <p class="card-text">Perkembangan Ilmu Pengetahuan dan Teknologi berlangsung sangat cepat. Dengan perkembangan tersebut diharapkan akan dapat mempertahankan dan meningkatkan taraf hidup manusia untuk menjadi manusi secara utuh. Maka tidak cukup dengan mengandalkan Ilmu Pengetahuan dan Teknologi, manusia juga harus menghayati secara mendalam kode etik ilmu, teknologi dan kehidupan. <br><br>
            Para pakar ilmu kognitif telah menemukan bahwa teknologi mengambil alih fungsi mental manusia, pada saat yang sama terjadi kerugian yang diakibatkan oleh hilangnya fungsi tersebut dari kerja mental manusia. Perubahan yang terjadi pada cara berfikir manusia sebagai akibat perkembangan teknologi sedikit banyak berpengaruh terhadap pelaksanaan dan cara pandang manusia terhadap etika dan norma dalam kehidupannya. <br><br>
            Etika profesi merupakan bagian dari etika sosial yang menyangkut bagaimana mereka harus menjalankan profesinya secara profesional agar diterima oleh masyarakat. Dengan etika profesi diharapkan kaum profesional dapat bekerja sebaik mungkin, serta dapat mempertanggungjawabkan tugas yang dilakukan dari segi tuntutan pekerjaannya.</p>
        </div>
      </div>

      <br>

      <p class="text-end">Share with</p>

      <div class="d-grid gap-1 d-md-flex justify-content-md-end">
        <button class="btn btn-sm btn-primary me-md-2" type="button">Facebook</button>
        <button class="btn btn-sm btn-primary" type="button">Twitter</button>
      </div>

    </div>
    </div>
    </div>
  </section>
</main><!-- End #main -->

@endsection