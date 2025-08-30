<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KataKita</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ilanding/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ilanding/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('ilanding/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('ilanding/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('ilanding/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('ilanding/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

@include('partial.header2')

  <main class="main">

  @if(session('success'))
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK'
      })
    });
  </script>
@endif



    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">

            <!-- Kiri: teks -->
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

                <h1 class="mb-4">
                    Baca buku, <br>
                    tulis ulasan, <br>
                    <span class="accent-text">bagikan inspirasi.</span>
                </h1>

                <p class="mb-4 mb-md-5">
                    Platform review buku yang bikin setiap kata punya arti. 
                    Dari pembaca, untuk pembaca.
                </p>

                </div>
            </div> <!-- tutup col kiri -->

            <!-- Kanan: gambar -->
            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{asset('ilanding/assets/img/hero.png')}}" alt="Hero Image" class="img-fluid">
                </div>
            </div> <!-- tutup col kanan -->
            </div> <!-- tutup row -->
        </div> <!-- tutup container -->
    </section><!-- /Hero Section -->

    <!-- About Section -->
<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">

        <span class="about-meta">MORE ABOUT US</span>
        <h2 class="about-title">KataKita</h2>
        <p class="about-description" style="text-align: justify;">
        KataKita adalah platform review buku yang lahir dari semangat membaca dan berbagi.
        Kami percaya bahwa setiap buku menyimpan dunia baru, dan setiap pembaca memiliki perspektif unik
        yang pantas untuk disuarakan. Melalui KataKita, kamu bisa menulis ulasan, memberikan rating, 
        dan menemukan rekomendasi bacaan yang sesuai dengan minatmu. <br> <br>
      
        Lebih dari sekadar tempat membaca review, KataKita adalah ruang bagi komunitas 
        pecinta buku untuk saling terhubung. Di sini, pembaca bisa berdiskusi, berbagi inspirasi, 
        dan menemukan karya-karya yang mungkin sebelumnya tak pernah mereka temukan. Kami ingin 
        setiap ulasan menjadi jembatan yang menghubungkan satu pembaca dengan pembaca lainnya. <br> <br>
        
        Dengan semangat “dari pembaca, untuk pembaca”, KataKita hadir untuk menjadikan pengalaman 
        membaca lebih bermakna. Setiap kata yang ditulis, setiap ulasan yang dibagikan, adalah 
        kontribusi untuk menciptakan ekosistem literasi yang lebih kaya, terbuka, dan penuh inspirasi.
        </p>

        <div class="row feature-list-wrapper">
        <div class="col-md-6">
        <ul class="feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Nggak bingung lagi milih buku yang worth it</li>
            <li><i class="bi bi-check-circle-fill"></i> Bisa curhat bacaan lewat review jujur</li>
            <li><i class="bi bi-check-circle-fill"></i> Tambah teman baru sesama pecinta literasi</li>
        </ul>
        </div>
        <div class="col-md-6">
        <ul class="feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Dapet insight random yang kadang relate banget</li>
            <li><i class="bi bi-check-circle-fill"></i> Menambah referensi bacaantanpa scroll lama</li>
            <li><i class="bi bi-check-circle-fill"></i> Baca buku jadi nggak sendirian</li>
        </ul>
        </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="100092" data-purecounter-duration="1" class="purecounter">2</span>
              <p>Pengguna</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Genre</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Judul</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="11981" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ulasan</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Di KataKita, setiap testimoni adalah kisah yang tumbuh bersama kata.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Hani Lutfi Az Zahra</h3>
              <h4>AI Engineer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>"Dulu aku sering bingung banget mau baca buku apa, apalagi kalau liat rak toko 
                    buku yang isinya ratusan judul. Setelah pakai KataKita, aku bisa lihat ulasan dari 
                    pembaca lain, jadi lebih gampang nentuin buku yang cocok buat aku.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Naila Nazhifa Dhia</h3>
              <h4>Psikolog</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>"Aku suka banget sama KataKita karena di sini aku bisa bebas cerita 
                    soal buku yang aku baca. Kadang aku nulis panjang, kadang cuma satu paragraf 
                    singkat, tapi tetap ada yang baca. Rasanya kayak punya tempat khusus buat curhat 
                    tentang bacaan tanpa harus mikirin format atau aturan yang ribet."</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Fadjri Yuliandari</h3>
              <h4>Akuntan</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>"Awalnya aku cuma coba-coba bikin akun di KataKita. Ternyata asik banget 
                    karena aku bisa nemuin banyak ulasan dari pembaca lain yang punya selera mirip 
                    sama aku. Dari situ aku jadi dapet banyak rekomendasi bacaan baru, bahkan beberapa 
                    buku yang sebelumnya nggak pernah kepikiran buat aku baca."</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Meikito</h3>
              <h4>Penulis</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>"Hal yang paling aku suka dari KataKita adalah rasa kebersamaannya. 
                    Walaupun kita nggak saling kenal, lewat ulasan-ulasan yang ada, aku bisa 
                    merasa dekat dengan orang-orang yang punya hobi sama. Rasanya kayak punya 
                    circle baru yang sama-sama suka membaca."</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> <br> <br>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('ilanding/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ilanding/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('ilanding/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('ilanding/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('ilanding/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('ilanding/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('ilanding/assets/js/main.js')}}"></script>

</body>

</html>





