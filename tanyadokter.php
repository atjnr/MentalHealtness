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
          <a href="about1.php" class="nav-item nav-link">About</a>
          <a href="tanyadokter.php" class="nav-item nav-link active">Doctors</a>
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
            <h1 class="display-3 text-white animated slideInDown">Doctors</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Doctors</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Dokter Spesialis Psikiatri/Psikologi</h6>
          <h1 class="mb-5">Dokter Populer Spesialis Psikiatri/Psikologi</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-1.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="list-dokter/dokter1.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 45.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>97%</small>
                </div>
                <h5 class="mb-4">Psikiatri - Spesialis Kesehatan Jiwa</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Dr. dr. Tjhin Wiguna, SpKJ (K)</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>4 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-2.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                  <a href="list-dokter/dokter2.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 35.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>97%</small>
                </div>
                <h5 class="mb-4">Psikiatri - Spesialis Kesehatan Jiwa</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>dr. Dwidjo Saputro, SpKJ (K)</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>6 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-3.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="list-dokter/dokter3.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 35.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>98%</small>
                </div>
                <h5 class="mb-4">Psikiatri - Spesialis Kesehatan Jiwa</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>dr. Jerry Silitonga, SpKJ</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>4 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-4.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="list-dokter/dokter4.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 45.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>97%</small>
                </div>
                <h5 class="mb-4">Psikiatri - Spesialis Kesehatan Jiwa</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>dr. LEMAN, SpKJ, Mkes</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>3 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-5.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="list-dokter/dokter5.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 55.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>100%</small>
                </div>
                <h5 class="mb-4">Psikiatri - Spesialis Kesehatan Jiwa</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>dr. Darien Alfa Cipta, SpKJ</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>5 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/dokter-6.jpg" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="list-dokter/dokter6.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px">Chat</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">Rp 35.000</h3>
                <div class="mb-3">
                  <small class="fa fa-thumbs-up text-primary"></small>
                  <small>100%</small>
                </div>
                <h5 class="mb-4">Psikologi - Psikolog</h5>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Dewiarti Soemantri, SPsi</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-briefcase text-primary me-2"></i>2 Tahun</small>
                <small></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Courses End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
          <h1 class="mb-5">Our Patient Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
          <div class="testimonial-item text-center">
            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimoni-1.svg" style="width: 80px; height: 80px" />
            <h5 class="mb-0">Eva</h5>
            <p>Anxiety, Social Anxiety, TMS</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                “Saya mencintai teman-teman saya, dan saya ingin itu ada di sekitar mereka. Tapi kecemasan saya membuat saya panik, seperti, bagaimana jika mereka tidak menyukai saya lagi? (Sekarang) saya lebih percaya diri, dan tenang.
                Saya tidak menahan apa pun. Saya merasa lebih mudah didekati. Saya hanya merasa jauh lebih baik.”
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimoni-2.svg" style="width: 80px; height: 80px" />
            <h5 class="mb-0">Dimas</h5>
            <p>Depression, Anxiety, Suicidal, Acting, TMS</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                “Saya benar-benar berdiri di tepi, siap untuk melompat. Dan sekarang saya tidak pernah berpikir seperti itu selama berminggu-minggu.” “Saya merasa lebih seperti diri saya sendiri dari hari-hari emas saya. Saya, seperti, siap
                untuk mulai mengerjakan berbagai hal lagi. Ini benar-benar mengasyikkan. Memiliki energi untuk melakukan itu lagi.”
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimoni-3.svg" style="width: 80px; height: 80px" />
            <h5 class="mb-0">Alesa</h5>
            <p>Postpartum Depression, Ketamine, Motherhood</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                “24 jam setelah perawatan ketamin pertama saya, itu adalah perubahan besar bagi saya. Saya merasa senang. Saya tidak ingin bunuh diri. Saya bahkan tidak bisa memikirkan pikiran untuk bunuh diri. Aku tidak ingin menyakiti
                diriku sendiri. Saya senang dan bahagia berada di sini… Saya tidak pernah benar-benar percaya bahwa saya bisa sampai ke titik ini. Saya di sini untuk memberi tahu orang-orang bahwa itu bisa terjadi, dan ada harapan di luar
                sana.”
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimoni-4.svg" style="width: 80px; height: 80px" />
            <h5 class="mb-0">Ryan</h5>
            <p>Depression, Anxiety, Anger</p>
            <div class="testimonial-text bg-light text-center p-4">
              <p class="mb-0">
                “Sangat sulit untuk bangun dari tempat tidur di pagi hari sepanjang waktu … sampai saat ini, saya merasa jauh lebih baik daripada sebelumnya. Saya memiliki lebih banyak kejelasan, saya merasa lebih positif, saya merasakan
                lebih banyak energi. Ada begitu banyak aspek berbeda dalam hidup saya sehingga saya merasa ini membantu.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

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
