<!DOCTYPE html>
<html lang="en">

  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>

    <div class="page">
      <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
          <div class="img" style="background-image: url({{ asset('images/bg_1.jpg') }}); width: 100%"></div>
          <div class="colorlib-table-cell js-fullheight">
            <div class="row no-gutters">
              <div class="col-md-12 text-center">
                <h1 class="mb-4"><a href="/htdocphp/perfumestore/public/home" class="logo">Perfume<br></a></h1>
                <ul>
                  <li class="active"><a href="/htdocphp/perfumestore/public/home"><span>Home</span></a></li>

                  @if (Session::has("roles") != "")
                  <li><a href="/htdocphp/perfumestore/public/purchased"><span>Purchased</span></a></li>
                  <li><a href="/htdocphp/perfumestore/public/cart"><span>Cart</span></a></li>
                  <li><a href="/htdocphp/perfumestore/public/logout"><span>Log Out</span></a></li>
                  @if (Session::has("roles") == 1)
                  <li><a href="/htdocphp/perfumestore/public/viewadd"><span>Add Product</span></a></li>
                  <li><a href="/htdocphp/perfumestore/public/edit"><span>Edit Product</span></a></li>
                  @endif
                  @else
                  <li><a href="/htdocphp/perfumestore/public/login"><span>Log in</span></a></li>
                  <li><a href="/htdocphp/perfumestore/public/registration"><span>Registration</span></a></li>
                  @endif

                  <li><a href=""><span>About</span></a></li>
                  <li><a href=""><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div id="colorlib-page">
        <header>
          <div class="container">
            <div class="colorlib-navbar-brand">
              <a class="colorlib-logo" href="index.html">Perfume<br></a>
            </div>
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
          </div>
        </header>

        <section id="home" class="video-hero js-fullheight"
          style="height: 700px; background-image: url({{ asset('images/bg_1.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;">
          <div class="overlay"></div>
          <a class="player"
            data-property="{videoURL:'https://www.youtube.com/watch?v=X-Jbo7B4lNI',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
          <div class="container">
            <div class="row js-fullheight justify-content-center d-flex align-items-center">
              <div class="col-md-8">
                <div class="text text-center">
                  <span class="subheading">Welcome to</span>
                  <h2>Perfume</h2>
                </div>
              </div>
            </div>
          </div>
        </section>