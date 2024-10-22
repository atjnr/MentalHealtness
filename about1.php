<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>MENTAL HEALTHNESS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="text-primary"><img src="img/logo.png" class="image" />MENTAL HEALTHNESS</h2>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="welcome.php" class="nav-item nav-link">Home</a>
          <a href="about1.php" class="nav-item nav-link active">About</a>
          <a href="tanyadokter.php" class="nav-item nav-link">Doctors</a>
          <a href="travel1.php" class="nav-item nav-link">Travel</a>
          <a href="contact1.php" class="nav-item nav-link">Contact</a>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="btn btn-primary d-lg-block px-lg-5 nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <p>Halo,</p>
            <p><?php echo $_SESSION['username']; ?></p></a
          >
          <div class="dropdown-menu fade-down">
            <a href="php/logout.php" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
            <div class="position-relative h-100">
              <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpeg" alt="" style="object-fit: cover" />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
            <h1 class="mb-4">Welcome to Mental Healthness</h1>
            <p class="mb-4">Mental Healthness merupakan sebuah website yang dirancang untuk memudahkan kamu melakukan konsultasi dengan psikolog/psikiater terbaik kami.</p>
            <p class="mb-4">Kamu bisa membuat janji dengan psikolog/psikiater sesuai yang kamu inginkan.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
          <h1 class="mb-5">Expert Instructors</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-1.jpg" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/atjnr_/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">Asta Juniar</h5>
                <small>Web Design</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-2.jpg" alt="" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/helenam951_/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">Helena Meiliani</h5>
                <small>Web Ide</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-3.jpg" alt="" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/irmafni/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">Irma Fitriani</h5>
                <small>Web Programmer</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/kikilidyaaaa/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">Kiki Lidya Koswara</h5>
                <small>Web Developer</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-5.jpg" alt="" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/tiaa_psptasrii/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0">Tia Puspita Sari</h5>
                <small>Web Master</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Quick Link</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Soekarno Hatta No.378, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 851 5766 2141</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>mentalhealthnes@gmail.com</p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Newsletter</h4>
            <p>Dapatkan informasi dan berita dengan berlangganan jejaring email kami.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="E-mail" />
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Berlangganan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>