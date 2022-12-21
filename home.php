<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PSYCHOCARE - Home</title>

    <link rel="stylesheet" href="halstyle.css" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/" />

    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json" />
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#712cf9" />

    <!-- Style -->
    <style>
      .banner-image {
        background-image: url(assets/bg.png);
        background-size: cover;
      }
      .home-image {
        background-image: url(assets/bg-1.png);
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <!-- HEADER START -->
    <header class="p-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="home.html" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none me-auto">
            <strong style="font-size: large">PSYCHOCARE</strong>
          </a>

          <ul class="nav col-12 col-lg-auto mx-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.html" class="nav-link px-4 link-dark">Home</a></li>
            <li><a href="about.html" class="nav-link px-4 link-dark">About</a></li>
            <li><a href="service.html" class="nav-link px-4 link-dark">Service</a></li>
            <li><a href="blog.html" class="nav-link px-4 link-dark">Blog</a></li>
            <li><a href="contact.html" class="nav-link px-4 link-dark">Contact</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control h-auto w-auto" placeholder="Search..." aria-label="Search" />
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/img-home/icon.jpg" alt="account" width="32" height="32" class="rounded-circle" />
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- BANNER IMAGE START  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <div class="container col-xxl-8 px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img
                src="assets/logo.png"
                class="d-block mx-lg-auto img-fluid"
                alt="Bootstrap Themes"
                width="700"
                height="700"
                loading="lazy"
                style="filter: invert(100%) sepia(3%) saturate(0%) hue-rotate(256deg) brightness(200%) contrast(100%)"
              />
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3 bg-warning">Psychocare</h1>
              <p class="lead" style="color: white; font-style: italic">Website mengenai informasi dan konsultasi Mental Health.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BANNER IMAGE END -->

    <!-- CONTENT START -->
    <!-- ABOUT START -->
    <main>
      <div class="home-image position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-8 p-lg-5 mx-auto">
          <h1 class="display-4 fw-normal"><strong>Halo, Selamat Datang di</strong></h1>
          <h1 class="display-4 fw-normal bg-dark" style="color: white; font-style: italic"><strong>Psychocare</strong></h1>
          <p class="lead fw-normal">
            Website yang dibentuk khusus untuk memberikan layanan informasi seputar mental health atau masalah mental. Selain memberikan informasi, pada website ini pengguna dapat berkonsultasi mengenai kesehatan mental.
          </p>
          <a class="btn btn-outline-dark" href="about.html">About</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
      </div>
    </main>
    <!-- ABOUT END -->

    <!-- LAYANAN START -->
    <div class="container px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <p class="col-9" style="font-style: italic">
          Berisikan layanan apa saja yang tersedia pada Psychocare. Layanan yang diberikan untuk anda berupa konseling, saran atau masukan, hiburan dan hal-hal yang berkaitan dengan mental health.
        </p>
        <h2 class="pb-2 px-4 col-3 bg-dark mb-3 pt-2" style="color: white; font-style: italic"><strong>Psychoserve</strong></h2>
      </div>
      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="d-flex flex-column align-items-start gap-2">
          <h3 class="fw-bold">Berikut adalah beberapa Psychoserve yang diberikan kepada anda</h3>
          <p class="text-muted">Layanan ini diberikan kepada pengguna yang telah mendaftarkan diri sebagai member atau bagian dari kami.</p>
          <a href="service.html" class="btn btn-warning btn-lg">More</a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="d-flex flex-column gap-2">
            <h4 class="fw-semibold mb-0 px-2" style="background-color: #fcac06">Konseling</h4>
            <p class="">Layanan antara konselor dengan anda untuk sarana bercerita dan pemberian terapi atau perawatan ( treatment ).</p>
          </div>

          <div class="d-flex flex-column gap-2">
            <h4 class="fw-semibold mb-0" style="background-color: #fcac06">Seminar/Webinar</h4>
            <p class="">Layanan penyampaian beberapa materi dan hiburan kepada anda. Dilakukan pertemuan offline ataupun online.</p>
          </div>

          <div class="d-flex flex-column gap-2">
            <h4 class="fw-semibold mb-0" style="background-color: #fcac06">Saran dan Masukan</h4>
            <p class="">Layanan yang dapat memberikan anda saran dan masukan melalui blog yang kami sediakan atau dapat langsung menghubungi kami.</p>
          </div>

          <div class="d-flex flex-column gap-2">
            <h4 class="fw-semibold mb-0" style="background-color: #fcac06">Hiburan</h4>
            <p class="">Layanan pemberian hiburan kepada anda berupa games ataupun hadiah yang akan dilaksanakan tiap minggu.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- LAYANAN END -->

    <!-- BLOG START -->
    <div class="container px-4 py-5" id="custom-cards">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <p class="col-9" style="font-style: italic">Berisikan berita terikini mengenai mental health. Selain berita, pada halaman ini juga terdapat tips and tricks, cerita maupun artikel seputar mental health.</p>
        <h2 class="pb-2 px-4 col-3 bg-dark mb-3 pt-2" style="color: white; font-style: italic"><strong>Psychoblog</strong></h2>
      </div>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url(https://images.unsplash.com/photo-1537290030920-ce0c15681846?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80)"
          >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: #fcac06">Cara Mengatasi Kecemasan</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img-home/icon.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white" />
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small style="color: #fcac06; font-style: italic">Tips and Tricks</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1522098605161-cc0c1434c31a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60')"
          >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: #fcac06">Cara Membicarakan Bullying ..</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img-home/icon.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white" />
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small style="color: #fcac06; font-style: italic">Tips and Tricks</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('https://images.unsplash.com/photo-1621882671475-4cc7f99ae4ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80')"
          >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="color: #fcac06">Apa itu depresi?</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img-home/icon.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white" />
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                  <small style="color: #fcac06; font-style: italic">Article</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOG END -->
    <!-- CONTENT END -->

    <!-- CONTACT START -->
    <section id="contact">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-warning">Follow akun social media kami! Untuk mendapat lebih banyak informasi.</h3>
              <div class="kontak">
                <h6 class="">Contact</h6>
                <div class="mb-3 d-flex align-items-center">
                  <div>
                    <img src="assets/contact/alamat.png" alt="" />
                  </div>
                  <a href="#" class="">Jl. Ketintang Kota Surabaya, Jawa Timur, Indonesia - 60231 </a>
                </div>

                <div class="mb-3">
                  <img src="assets/contact/nomer.png" alt="" />
                  <a href="#" class="">022-6545-2041</a>
                </div>

                <div class="mb-3">
                  <img src="assets/contact/email.png" alt="" />
                  <a href="#" class="">psychocare@gmail.com</a>
                </div>
              </div>

              <h6 class="">Social Media</h6>
              <a href="https://www.facebook.com" class="me-3"><img src="assets/contact/facebook.png" alt="" /></a>
              <a href="https://www.twitter.com" class="me-3"><img src="assets/contact/twitter.png" alt="" /></a>
              <a href="https://www.instagram.com" class="me-3"><img src="assets/contact/instagram.png" alt="" /></a>
              <a href="#" class="linkthriftshop">Psychocare</a>
            </div>

            <div class="col-md-6">
              <div class="card-contact w-100">
                <form>
                  <h2 class="text-dark">Send a question</h2>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control text-dark" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Fill with your e-mail...</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" class="form-control text-dark" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Your question..</label>
                  </div>
                  <button type="submit" class="button-contact border-0" style="color: white">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT END-->
  </body>
</html>
