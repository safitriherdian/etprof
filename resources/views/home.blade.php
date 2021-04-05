@extends('template')

@section('title', 'Etika Profesi | Home')

@section('home')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Apa itu Etika Profesi? Yuk Belajar Bersama!</h1>
                <h2>Website ini akan membantu kamu belajar mengenai etika profesi, yuk simak materinya!</h2>
                <div>
                    <a href="#services" class="btn-get-started scrollto">Baca Materi Sekarang!</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                    <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">About Us</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Kami adalah perwakilan dari kelas Etika Profesi dengan dosen pengampu Bapak Tibyani, S.T., M.T.
                        <b>Website ini kami buat dengan tujuan : </b>
                    </p>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Sarana Belajar</h4>
                            <p>Website ini menyediakan kumpulan materi mengenai Etika Profesi untuk menunjang
                            kegiatan belajar mengajar</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Sarana Diskusi</h4>
                            <p>Website ini juga digunakan sebagai ruang diskusi yang bebas dan aktif bagi semua orang 
                            dengan topik ETIKA PROFESI</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Materi Etika Profesi</h2>
                <p>Yuk pilih materi yang kamu suka</p>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">BAB I</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"DEFINISI ETIKA" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">BAB II</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"SEJARAH ETIKA PROFESI" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">BAB III</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"PEKERJAAN, PROFESI & PROFESIONAL" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">BAB IV</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"PERANAN KODE ETIK" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">BAB V</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"STANDAR KOMPETENSI PROFESI" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">BAB VI</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"ETIKA MENGGUNAKAN INTERNET"</b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">BAB VII</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"......" </b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">BAB VIII</a></h4>
                        <p class="description">Bab ini mempelajari mengenai <b>"......" </b>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Artikel</h2>
                <p>Yuk pilih artikel yang ingin kamu baca</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Etika Profesi</li>
                        <li data-filter=".filter-card">Job</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-1.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-galleryery="portfolioGallery"
                                class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu Etika Profesi? <i
                            class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Etika berasal dari kata Yunani yaitu ethos. Secara etimologis ethos berbentuk jamak yang
                            artinya sifat, kepribadian, dan karakter. Jadi bisa diartikan bahwa etika adalah tingkah
                            laku, sifat, atau karakter yang baik dari seseorang terhadap lingkungannya.

                            Sedangkan Profesi merupakan kata serapan dari kata bahasa inggris yaitu Profess yang berarti
                            Janji, Janji untuk melaksanakan kewajiban melakukan tugas - tugas secara sementara atau
                            permanen. Jadi bisa kita simpulkan bahwa Etika Profesi merupakan tingkah laku atau karakter
                            dari seorang karyawan dalam melakukan atau melaksanakan kewajibannya yaitu tugas -tugasnya
                            secara sementara atau permanen berdasarkan profesi yang diembannya.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apakah Etika Profesi Penting?
                        <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Etika Profesi ini sangatlah penting untuk seorang karyawan dimana selain kewajiban karyawan
                            adalah menyelesaikan tugas - tugas kantornya, tetapi juga memerhatikan tingkah laku dan
                            sikapnya dalam menyelesaikan tugas - tugasnya sehingga tidak merugikan rekan - rekan
                            kantornya dan bisa melengkapi Prinsip Dasar Etika Profesi yang seharusnya dimiliki oleh
                            karyawan.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah Fungsi Etika Profesi?
                        <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Etika profesi tidak hanya memiliki prinsip tertentu, melainkan juga memiliki fungsi penting
                            dalam lingkungan kerja. Fungsi-fungsi dari etika profesi adalah:

                            Sebagai panduan bagi semua karyawan pada prinsip-prinsip profesional,
                            Sebagai sarana kontrol sosial bagi masyarakat umum untuk suatu profesi tertentu,
                            dan Sebagai cara untuk mencegah intervensi dari pihak lain di luar organisasi mengenai
                            hubungan
                            pekerjaan.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah tujuan dari penerapan
                        Etika Profesi?
                        <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                    </div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Etika profesi mempunyai beberapa tujuan luhur demi terjalinnya kebaikan bersama dalam
                            lingkungan kerja perusahaan. Jika disebutkan, tujuannya adalah sebagai berikut :

                            Menghormati martabat profesi karyawan,
                            Memelihara dan mengatur kesejahteraan,
                            Meningkatkan dedikasi kerja,
                            Membantu mengembangkan kualitas profesi,
                            Menaikkan pelayanan profesi demi keuntungan pribadi,
                            Menentukan standar dasar untuk profesi,
                            dan Menjaga dan menaikkan kualitas perusahaan lebih profesional.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Our team is always here to help</p>
            </div>

            <div class="row">

                <div class="col" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/team/tes.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Adithia</h4>
                                <span>Risma Rara Putri</span>
                                <span>185150700111002</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/team/tes.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda</h4>
                                <span>Rizky Rossitika</span>
                                <span>185150700111016</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/team/tes.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Chandra</h4>
                                <span>Wira Hadikusuma</span>
                                <span>185150700111016</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/team/tes.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Safitri</h4>
                                <span>Herdian Rachmawati</span>
                                <span>185150700111007</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="zoom-in" data-aos-delay="500">
                    <div class="member">
                        <img src="assets/img/team/tes.png" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Shabrina</h4>
                                <span>Amalia Putri</span>
                                <span>185150701111008</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    @endsection