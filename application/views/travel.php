<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- Favicon icon -->
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

  <!-- header -->
  <header>
    <div id="whatsapp">
      <a class="whatsapp" id="toggle1" target="blank" href="https://api.whatsapp.com/send?phone=6285643928888">
        <i class="fa fa-phone"></i>
      </a>
    </div>
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
  <!-- end header -->
  <!-- banner -->
  <section id="banner">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($rows as $row) : ?>
          <div class="swiper-slide satu">
            <img style="width:100%; height:100vh;" src="<?= base_url('img/banner/' . $row->foto) ?>" alt="">
            <div class="caption">
              <div class="container">
                <h4><?= $row->cp_1 ?></h5>
                  <h1 class="h1 h1-responsif"><?= $row->cp_2 ?></h1>
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                      <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                    </svg> <?= $row->cp_3 ?></span>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- end banner -->
  <!-- Listing -->
  <section id="listing">
    <div class="title mt-4">
      <h3 class="title-primary secondary ">Choose your tour</h3>
      <h1 class="h1 h1-responsive title-secondary mt-4 fourth">Type of tour</h1>
    </div>
    <div class="container mt-5">
      <div class="row">
        <?php foreach ($anekas as $aneka) : ?>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xm-12">
            <div class="card shadow-sm mt-2">
              <div class="card-body">
                <img src="<?= base_url('img/fitur/' . $aneka->foto) ?>" alt="">
                <h4 class="card-title text-center"><?= $aneka->rating ?></h4>
                <p class="card-body text-center">Paket Full : Rp.<?= $aneka->title ?></p>
                <p class="fourth text-center justify-content-center"><a href="<?= site_url('aneka/' . $aneka->id_fitur); ?>">View details</a></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- showcase section -->
  <section id="showcase">
    <div class="title">
      <h3 class="title-primary third ">Galery showcase</h3>
      <h1 class="h1 h1-responsive title-secondary first mt-5">interest spot</h1>
    </div>
    <div class="swiper mb-4">
      <div class="swiper-wrapper ml-2">
        <?php foreach ($showcases as $showcase) : ?>
          <div class="swiper-slide one">
            <img style="width:100%; padding:5px;" src="<?= base_url() ?>/img/showcase/<?= $showcase->foto_showcase ?>" alt="">
          </div>
        <?php endforeach ?>
      </div>
    </div>

  </section>
  <!-- end showcase -->
  <!-- Featured Section -->
  <section id="featured" class="mt-2">
    <div class="title">
      <h3 class="title-primary secondary">Blog</h3>
      <h1 class="h1 h1-responsive title-secondary  mt-4">Dapatkan Rekomendasi</h1>
    </div>
    <div class="container mt-5">
      <div class="row mt-3">
        <?php foreach ($listings as $listing) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xm-1">
            <div class="card bg-first">
              <img src="<?= base_url() ?>/img/listing/<?= $listing->foto ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-text"><?= $listing->judul ?></h5>
                <p class="card-text">
                  <a class="fourth" href="<?= site_url('listing/' . $listing->id_listing); ?>">Read More</a>
                </p>
                <small class="card-text">Blog . <?= $listing->admin ?> . <?= $listing->tanggal ?></small>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <section id="newslatter">
    <div class="container">
      <div class="row background">
        <div class="col-md-6">
          <div class="title-newslatter">
            <h3 class="title-primary-newslatter secondary mt-5 mb-4">Receive the best offers</h3>
            <h1 class="title-secondary first">Newsletters</h3>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control mt-5" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append mt-5">
              <button class="btn btn-ku bg-second first" type="button">subcribe now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->

  <!-- footers -->
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
          <i class="fab fa-facebook"></i>
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
  <script src="<?= base_url() ?>travel_ku/assets/js/myjs.js"></script>
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