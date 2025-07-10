<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AduanKU</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">
   @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- =======================================================
  * Template Name: Learner
  * Template URL: https://bootstrapmade.com/learner-bootstrap-course-template/
  * Updated: Jul 07 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
        }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
        }
        .form-control:focus, .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: background-color 0.2s ease, border-color 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .alert {
            border-radius: 8px;
        }
        .text-danger {
            font-size: 0.875em; /* Ukuran font untuk pesan error */
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5c636a;
            border-color: #565e64;
        }
        .ticket-info {
            margin-top: 20px;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 10px;
            border: 1px solid #dee2e6;
        }
        .ticket-info h5 {
            color: #0d6efd;
            margin-bottom: 15px;
        }
        .ticket-info p {
            margin-bottom: 8px;
        }
        .status-badge {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .status-baru { background-color: #0dcaf0; color: white; } /* Cyan */
        .status-proses { background-color: #ffc107; color: black; } /* Yellow */
        .status-selesai { background-color: #198754; color: white; } /* Green */
        .status-ditolak { background-color: #dc3545; color: white; } /* Red */
    </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">AduanKU</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#pengaduanModal">Pengaduan</a></li>
          <li><a href="#"  data-bs-toggle="modal" data-bs-target="#cariTiketModal">Cek Tiket</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Courses Hero Section -->
    <section id="courses-hero" class="courses-hero section light-background">
      <div class="hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="hero-text">
                <h1>Aduanku</h1>
                <p>Platform khusus OPD Kabupaten Konawe untuk aduan dan masukan. Dikelola Diskominfo, aplikasi ini memastikan setiap laporan ditindaklanjuti cepat dan transparan demi pelayanan prima.</p>

              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-image">
                <div class="main-image">
                  <img src="{{ asset('template/assets/img/education/courses-13.webp') }}" alt="Online Learning" class="img-fluid">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="hero-background">
        <div class="bg-shapes">
          <div class="shape shape-1"></div>
          <div class="shape shape-2"></div>
          <div class="shape shape-3"></div>
        </div>
      </div>
    </section><!-- /Courses Hero Section -->

    <div class="modal fade modal-lg" id="pengaduanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('home')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-lg" id="cariTiketModal" tabindex="-1" aria-labelledby="cariTiketLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('cari-tiket')
                </div>
            </div>
        </div>
    </div>

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">AduanKU</span>
          </a>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#pengaduanModal">Pengaduan</a></li>
            <li><a href="#"  data-bs-toggle="modal" data-bs-target="#cariTiketModal">Cek Tiket</a></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">AduanKU</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  @livewireScripts

</body>

</html>
