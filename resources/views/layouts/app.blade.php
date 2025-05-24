<!DOCTYPE html>
<html lang="en">
<head>

    @extends('layouts.head')
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center light-background sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
    
          <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Rifki</h1>
          </a>
            @include('layouts.navbar')
    <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>   
    @yield('content')


    <footer id="footer" class="footer light-background">

        <div class="container">
          <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Rifki</strong> <span>All Rights Reserved<br></span></p>
          </div>
          <div class="social-links d-flex justify-content-center">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href="ikiivlgll"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">rifkidesigh</a> Distributed by <a href=“https://themewagon.com>personal</a>
          </div>
        </div>
    
      </footer>
    
      @include('layouts.footer')
    </body>
    
    </html>