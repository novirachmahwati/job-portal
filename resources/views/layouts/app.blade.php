<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>Findajob |  @yield('title')</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('style/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('style/css/jasny-bootstrap.min.css') }}" type="text/css">  
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-select.min.css') }}" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('style/fonts/font-awesome.min.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('style/fonts/themify-icons.css') }}"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('style/extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('style/extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('style/extras/owl.theme.css') }}" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{ asset('style/extras/settings.css') }}" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{ asset('style/css/slicknav.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('style/css/main.css') }}" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{ asset('style/css/responsive.css') }}" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/colors/red.css') }}" media="screen" />
    
    @yield('customCSS')
  </head>

  <body>
    <!-- Header Section Start -->
    <div class="header">
      <!-- Start intro section -->
      @yield('section-intro')   
      <div class="logo-menu">
        <nav class="navbar navbar-default @yield('main-navigation')" role="navigation" data-spy="affix" data-offset-top="50">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo d-flex" href="{{ route('landingPage') }}">
                <h1>Findajob<span class="titik-logo">.</span></h1>
              </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">              
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class=" @yield('cariLowongan_active') " href="{{ route('cari-lowongan') }}">Cari Lowongan</a>
              </li>
              <li>
                <a class=" @yield('profilPerusahaan_active') " href="{{ route('cari-profil-perusahaan') }}">Profil Perusahaan</a>
              </li>
              <li>
                <a class=" @yield('tipsKarir_active') " href="{{ route('tips-karir') }}">Tips Karir</a>
              </li>
              <li class="float-right"><a class=" @yield('registrasi_active') " href="{{ route('registrasi') }}"><i class="ti-pencil-alt"></i> Registrasi</a></li>
              <li class="float-right"><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="ti-lock"></i>  Login</a></li>
            </ul>
          </div>                           
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="about.html">Cari Lowongan</a>
          </li>
          <li>
            <a href="#">Profil Perusahaan</a>
          </li>
          <li>
            <a href="#">Tips Karir</a>
          </li>
          <li class="btn-m"><a href="{{ route('registrasi') }}"><i class="ti-pencil-alt"></i> Registrasi</a></li>
          <li class="btn-m"><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="ti-lock"></i>  Login</a></li>
        </ul>
        <!-- Mobile Menu End --> 
      </nav>

    @yield('search-container')
    </div>
    <!-- Header Section End -->

    <!-- Login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Findajob<span class="titik-logo">.</span></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Kata sandi"></div>
            <div class="form-group"><button class="btn btn-success btn-block" type="submit">Login</button></div>
            <p class="belumPunyaAkun">Belum memiliki akun? <a class="linkColor" href="#">Register</a> disini.</p>
          </div>
        </div>
      </div>
    </div>

    @yield('content')
    @yield('registrasi-perusahaan')  

    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Findajob<span class="titik-logo">.</span></h3>
                <div class="textwidget">
                  <p>Jl. Raya Janti Jl. Majapahit No.143, Jaranan, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55918</p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Halaman Terkait</h3>
  							<ul class="menu">
                  <li><a href="#">Layanan</a></li>
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Kontak</a></li>
                  <li><a href="#">Kirim Saran</a></li>
                </ul>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
                <h3 class="block-title">Layanan</h3>
                <ul class="menu">
                  <li><a href="#">Posting Lowongan Kerja</a></li>
                  <li><a href="#">Aplikasi Recruitment</a></li>
                </ul>
              </div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Follow Us</h3>
                <div class="bottom-social-icons social-icon">  
                  <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                  <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>                   
                  <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                  <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                  <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                </div>	
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info text-center">
                <p>&copy; 2022 - Findajob<span class="titik-logo">.</span></p>
              </div>   
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>

    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>
        
    <!-- Main JS  -->
    <script type="text/javascript" src="{{ asset('style/js/jquery-min.js') }}"></script>      
    <script type="text/javascript" src="{{ asset('style/js/bootstrap.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('style/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/contact-form-script.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('style/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/jquery.themepunch.tools.min.js') }}"></script>

    @yield('customJS')
  </body>
</html>