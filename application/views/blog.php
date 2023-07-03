<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="36x26" href="<?= base_url() ?>travel_ku/assets/images/lembah-papah(1).png">
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
  <!-- font awesome -->
  <!-- <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css” /> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- my css -->
  <link rel="stylesheet" href="<?= base_url() ?>travel_ku/assets/css/style.css">
  <!-- fonts poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;1,100&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <style type="text/css">
    #whatsapp .whatsapp {
      position: fixed;
      transform: all .5s ease;
      background-color: #25d366;
      display: block;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      border-radius: 50px;
      border-right: none;
      color: #fff;
      font-weight: 700;
      font-size: 30px;
      bottom: 70px;
      right: 20px;
      border: 0;
      z-index: 9999;
      width: 50px;
      height: 50px;
      line-height: 50px;
    }

    #whatsapp .whatsapp:before {
      content: "";
      position: absolute;
      z-index: -1;
      left: 50%;
      top: 50%;
      transform: translateX(-50%) translateY(-50%);
      display: block;
      width: 60px;
      height: 60px;
      background-color: #25d366;
      border-radius: 50%;
      -webkit-animation: pulse-border 1500ms ease-out infinite;
      animation: pulse-border 1500ms ease-out infinite;
    }

    #whatsapp .whatsapp:focus {
      border: none;
      outline: none;
    }

    @keyframes pulse-border {
      0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
      }

      100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
      }
    }
  </style>


</head>

<body class="bg-first">
  <div id="whatsapp">
    <a class="whatsapp" id="toggle1" target="blank" href="https://api.whatsapp.com/send?phone=6285643928888">
      <i class="fa fa-phone"></i>
    </a>
  </div>
  <!-- header -->
  <header>
    <!-- top nav -->
    <!-- navbar -->
    <nav style="z-index: 9999;" class="navbar navbar-expand-lg navbar-light sticky-top">
      <!-- <a class="navbar-brand" href="<?= site_url() ?>"><span class="fourth">Lembah</span><span class="secondary"> Papah</span></a> -->
      <a class="navbar-brand ml-5" href="<?= site_url() ?>">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!-- Dark Logo icon -->
          <img src="<?= base_url() ?>travel_ku/assets/images/lembah-papah(1).png" alt="homepage" width="70" height="54">
        </b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto ">
          <a class="nav-item nav-link mr-4" href="<?= site_url() ?>"><span class="fourth">Home</span></a>
          <a class="nav-item nav-link mr-4" href="<?= site_url('profile') ?>"><span class="fourth">Profile</span></a>
          <a class="nav-item nav-link mr-4" href="<?= site_url('blog') ?>"><span class="fourth">Blog</span></a>
          <a class="nav-item nav-link mr-4" href="<?= site_url('contact') ?>"><span class="fourth">Contacts</span></a>
        </div>
      </div>
    </nav>
  </header>
  <!-- banner -->
  <div class="p-5 text-center bg-image rounded-3" style="
  background-image: url('<?= base_url() ?>travel_ku/assets/images/contact-bg.jpeg');
  height: 250px; background-size: cover;
  ">
    <div class="mask">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white mt-5">
          <h4 class="mb-3"></h4>
          <h1 class="mb-3">Blog</h1>
          <a class="third" href="<?= base_url('') ?>" role="button">Blog .</a>
          <a class="third" href="<?= base_url('profile') ?>" role="button"> Profile</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- offers -->
  <section id="offers-blog mt-5">
    <div class="container mt-5">
      <div class="row mt-3">
        <?php foreach ($rows as $row) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xm-1">
            <div class="card bg-first">
              <img src="<?= base_url() ?>/img/listing/<?= $row->foto ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text"><?= $row->judul ?></h5>
                <p class="card-text"><a class="fourth" href="<?= site_url('listing/' . $row->id_listing); ?>">Read More</a></p>
                <small class="card-text">Blog . <?= $row->admin ?> . <?= $row->tanggal ?>></small>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-first text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">

      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a target="blank" href="https://www.facebook.com/profile.php?id=100083999210984" class="me-4 fourth">
          <i class="fab fa-youtube"></i>
        </a>
        <a target="blank" href="https://instagram.com/lembah.papah?igshid=YmMyMTA2M2Y=" class="me-4 fourth">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 fourth">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <a class="navbar-brand" href="<?= site_url() ?>">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="<?= base_url() ?>travel_ku/assets/images/lembah-papah(1).png" alt="homepage" width="90" height="74">
              </b>
            </a>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fourth text-uppercase fw-bold mb-4">
              Aneka Wisata
            </h6>
            <?php foreach ($anekas as $aneka) : ?>
              <p>
                <a href="<?= site_url('aneka/' . $aneka->id_fitur); ?>" class="fourth">
                  <?= $aneka->rating ?>
                </a>
              </p>
            <?php endforeach ?>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fourth text-uppercase fw-bold mb-4">
              Links
            </h6>
            <p>
              <a href="<?= SITE_URL() ?>" class="fourth">Home</a>
            </p>
            <p>
              <a href="<?= SITE_URL('profile') ?>" class="fourth">Profile</a>
            </p>
            <p>
              <a href="<?= SITE_URL('blog') ?>" class="fourth">Blogs</a>
            </p>
            <p>
              <a href="<?= SITE_URL('contact') ?>" class="fourth">Contacts</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="fourth text-uppercase fw-bold mb-4">Contact</h6>
            <p class="fourth"><i class="fas fa-map-marker-alt me-3"></i> Kalibondol Rt 39 Rw 20 Sentolo, Sentolo, Kulonprogo, Yogyakarta City, Indonesia, Special Region of Yogyakarta</p>
            <p class="fourth">
              <i class="fas fa-envelope me-3"></i>
              lembahpapah@gmail.com
            </p>
            <p class="fourth"><i class="fas fa-phone me-3"></i>+62 878-3444-4099</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      <span class="fourth">© 2022 Copyright:</span>
      <a href="<?= site_url() ?>"><span class="fourth">Lembah</span><span class="secondary"> Papah</span></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- swiper js -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $(window).on("load", function() {
        $(".preloader").addClass("loaded");
      })

      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $(".navbar").removeClass("sticky-top");
          $(".navbar").addClass("fixed-top");
          $(".navbar").addClass("bg-first");
          $(".navbar").addClass("shadow-sm");
        } else {
          $(".navbar").removeClass("fixed-top");
          $(".navbar").removeClass("bg-first");
          $(".navbar").removeClass("shadow-sm");
        }
      })
    })
  </script>
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2140895809445597');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2140895809445597&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</body>

</html>