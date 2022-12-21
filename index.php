<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap
            contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>PSYCHOCARE</title>

        <link rel="stylesheet" href="">

        <link rel="canonical"
            href="https://getbootstrap.com/docs/5.2/examples/album/">

        <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous">

        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon"
            href="/docs/5.2/assets/img/favicons/apple-touch-icon.png"
            sizes="180x180">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png"
            sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png"
            sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon"
            href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg"
            color="#712cf9">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }
    
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
    
          .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }
    
          .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }
    
          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }
    
          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }
    
          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }

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
        <header>
            <div class="bg-dark collapse" id="navbarHeader" style>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">Psychocare</h4>
                            <p class="text-muted">Website yang dibentuk khusus
                                untuk
                                memberikan layanan informasi seputar mental
                                health atau masalah mental. Selain memberikan
                                informasi, pada website ini pengguna dapat
                                berkonsultasi mengenai kesehatan mental.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://www.instagram.com"
                                        class="text-white">Instagram</a></li>
                                <li><a href="https://www.twitter.com"
                                        class="text-white">Twitter</a></li>
                                <li><a href="https://www.facebook.com"
                                        class="text-white">Facebook</a></li>
                                <li><a href="https://www.youtube.com"
                                        class="text-white">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <strong>PSYCHOCARE</strong>
                    </a>
                    <button class="navbar-toggler collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main>
            <section class="py-5 text-center container">
                <div class="container col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5
                        py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="assets/logo.png" class="d-block
                                mx-lg-auto img-fluid" alt="Bootstrap Themes"
                                width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">PSYCHOCARE</h1>
                            <p class="lead">Website khusus informasi dan
                                konsultasi Mental Health. Daftar ke Website kami
                                dan mulailah mencoba berkonsultasi.</p>
                            <div class="d-grid gap-2 d-md-flex
                                justify-content-md-start py-2">
                                <a href="signin.php" role="button"
                                    class="btn btn-primary
                                    btn-lg px-4 mx-auto"
                                    fdprocessedid="ftyhye"
                                    aria-disabled="true">Sign
                                    Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <footer class="py-0">
                    <div class="d-flex flex-column flex-sm-row
                        justify-content-between py-4 my-0 border-top">
                        <p>© 2022 Psychocare, Inc. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li><a href="https://www.instagram.com"><i class="fa
                                        fa-instagram mx-3"
                                        style="filter: invert(11%) sepia(22%)
                                        saturate(327%) hue-rotate(169deg)
                                        brightness(97%) contrast(92%);"></i></a></li>
                            <li><a href="https://twitter.com"><i class="fa
                                        fa-twitter mx-3"></i></a></li>
                            <li><a href="https://www.facebook.com"><i class="fa
                                        fa-facebook mx-3"
                                        style="filter: invert(100%) sepia(39%)
                                        saturate(6201%) hue-rotate(220deg)
                                        brightness(94%) contrast(105%);"></i></a></li>
                            <li><a href="https://www.youtube.com"><i class="fa
                                        fa-youtube mx-3"
                                        style="filter: invert(100%) sepia(60%)
                                        saturate(6186%) hue-rotate(7deg)
                                        brightness(98%) contrast(109%);"></i></a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </footer>


        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

    </body>
</html>