<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Space Dynamic - SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatemo-space-dynamic.css')}}">
  <link rel="stylesheet" href="{{asset('css/animated.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.css')}}">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>Spac<span>Dyna</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="{{url('/about')}}">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li> 
              <li class="scroll-to-section"><a href="#contact">Message Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



  @yield('content')



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>?? Copyright 2021 Space Dynamic Co. All Rights Reserved. 
          
          <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </div>
      </div>
    </div>

  </footer>
  {{-- @stack('script') --}}
  <!-- Scripts -->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/animation.js')}}"></script>
<script src="{{asset('js/imagesloaded.js')}}"></script>
<script src="{{asset('js/templatemo-custom.js')}}"></script>

</body>
</html>