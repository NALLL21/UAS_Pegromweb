<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Portfolio</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">

    <div class="main slick_main">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a href="index.html" class="navbar-brand">
            <img src="{{asset('template/images/logo-black.png')}}" alt="">
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/portfolio">Portfolio </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact us</a>
                </li>
                <li>
                Rhenal Ahmad Syam<br/> 20665017<br/> TIM 7A</a></li>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- portfolio section -->

  <section class="portfolio_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
        Portofolio Kami
        </h2>
        <p>
          Beberapa Contoh Dari Portofolio Kami
        </p>
      </div>
    </div>
    <div class="portfolio_container slick-carousel">
      <div class="box">
        <img src="{{asset('template/images/p-1.jpg')}}" alt="">
      </div>
      <div class="box">
        <img src="{{asset('template/images/p-2.jpg')}}" alt="">
      </div>
      <div class="box">
        <img src="{{asset('template/images/p-3.jpg')}}" alt="">
      </div>
      <div class="box">
        <img src="{{asset('template/images/p-4.jpg')}}" alt="">
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

   <!-- quality section -->

   <section class="quality_section layout_padding">
    <div class="container">
      <div class="quality_container">
        <h2>
          Kualitas <br>
          Rumah Anda
        </h2>
        <div class="box">
          <div class="detail-box">
            <div class="img-box">
              <img src="{{asset('template/images/q-1.png')}}" alt="">
            </div>
            <div class="text-box">
              <h5>
                Professional Staff
              </h5>
              <p>
                Staff Kami Lulusan Arsitektur Dari Beberapa Universitas Terkenal
              </p>
            </div>
          </div>
          <div class="detail-box">
            <div class="img-box">
              <img src="{{asset('template/images/q-2.png')}}" alt="">
            </div>
            <div class="text-box">
              <h5>
                Hemat Biaya
              </h5>
              <p>
                Jasa Kami Bisa Menyesuaikan Budget Anda
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end quality section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-logo">
            <a href="">
              <img src="{{asset('template/images/info-logo.png')}}" alt="">
            </a>
            <p>
            Archpiera didirikan pada tahun 2010 dengan visi untuk menjadi pemimpin di industri desain arsitektur, menggabungkan inovasi kreatif, keberlanjutan,
            dan keahlian teknis guna menciptakan lingkungan bermakna dan estetis.
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="info-nav">
            <h4>
              Navigasi
            </h4>
            <ul>
              <li>
                <a href="/">
                  Home
                </a>
              </li>
              <li>
                <a href="/about">
                  About
                </a>
              </li>
              <li class="active">
                <a href="/portfolio">
                  Portfolio
                </a>
              </li>
              <li >
                <a href="/contact">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
        <div class="info-contact">
            <h4>
              Contact Info
            </h4>
            <div class="location">
              <h6>
                Alamat :
              </h6>
              <a href="">
                <img src="{{asset('template/images/location.png')}}" alt="">
                <span>
                  Jl.Gerilya, Samarinda
                </span>
              </a>
            </div>
            <div class="call">
              <h6>
                Contact Person:
              </h6>
              <a href="">
                <img src="{{asset('template/images/call.png')}}" alt="">
                <span>
                  ( 082315192515 )
                </span>
              </a>
            </div>
            <div class="call">
              <a href="">
                <img src="{{asset('template/images/mail.png')}}" alt="">
                <span>
                  archpiera@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="discover">
            <h4>
              Discover
            </h4>

            <div class="social-box">
              <a href="">
                <img src="{{asset('template/images/fb.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('template/images/twitter.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('template/images/insta.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('template/images/linkedin.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    
    <p>
      Rhenal Ahmad Syam 20665017 TIM 7A
    </p>
    
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- end google map js -->


  <script>
    $('.slider-for').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true,

    });
  </script>

  <script>
    $('.slick-carousel').slick({
      infinite: true,
      slidesToShow: 3, // Shows a three slides at a time
      slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
        }
      }

      ]
    });
  </script>

</body>

</html>