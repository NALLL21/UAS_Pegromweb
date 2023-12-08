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

  <title>Archpirea</title>



  <!--slick slider stylesheet -->
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

<body>
  <div class="hero_area">

    <div class="main slick_main">
      <div class="slider slider-for main_img-container">
        <div class="main-img-box b1">

        </div>
        <div class="main-img-box b2">

        </div>
        <div class="main-img-box b3">

        </div>
      </div>
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
                <li class="nav-item active">
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
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="brand_box">
              <a href="">
                <img src="{{asset('template/images/logo.png')}}" alt="" />
              </a>
            </div>
          </div>
          <div class="col-md-8 px-0">
            <div class="slider_content ">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="detail_box">
                      <h1>
                        CREATIVE <br />
                        ARCHITECTURE
                      </h1>
                      <p>
                      Transformasi Impian, Realisasi Keindahan: Desain Arsitektur yang Menginspirasi Hidup Anda!
                      </p>
                      <div class="btn-box">
                        <a href="/contact" class="btn-1">Contact</a>
                        <a href="/about" class="btn-2">About Us</a>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>

              <div class="img_container">
                <div class="slider slider-nav slick_slider-nav">
                  <div class="img-box">
                    <img src="{{asset('template/images/img-1')}}.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('template/images/img-2.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('template/images/img-3.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="box">
        <div class="img_container">
          <div class="img-box b1">
            <img src="{{asset('template/images/a-1.jpg')}}" alt="">
          </div>
          <div class="img-box b2">
            <img src="{{asset('template/images/a-2.jpg')}}" alt="">
          </div>
        </div>
        <div class="detail-box">
          <h2>
            Tentang Studio Kami
          </h2>
          <p>
          Archpiera didirikan pada tahun 2010 dengan visi untuk menjadi pemimpin di industri desain arsitektur, menggabungkan inovasi kreatif, keberlanjutan, dan keahlian teknis guna menciptakan lingkungan bermakna dan estetis. Sejak awal berdirinya, Archpiera telah berkembang pesat dan mendapatkan reputasi sebagai perusahaan desain arsitektur yang handal dan berorientasi pada kualitas
          </p>
          <a href="/about">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

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

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
      <div class="">
        <h1 class="">
          HUBUNGI
        </h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Nama" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Nomor Telepon" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Pesan" />
            </div>
            <div class="d-flex ">
              <button>
                KIRIM
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('template/images/contact-img.png')}}" alt="">
            <div class="img_overlay">
              <h2>
                Best <br>
                Architecture <br>
                Studio
              </h2>
              <a href="">
                Hubungi Kami
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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
              <li class="active">
                <a href="/">
                  Home
                </a>
              </li>
              <li>
                <a href="/about">
                  About
                </a>
              </li>
              <li>
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