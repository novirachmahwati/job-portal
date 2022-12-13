@extends('layouts.app')

@section('title', 'Portal Lowongan Kerja')

@section('section-intro')
<!-- Start intro section -->
  <section id="intro" class="section-intro">
@endsection

@section('search-container')
  <div class="search-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Temukan Pekerjaan Impianmu di Findajob<span class="titik-logo">.</span></h1>
          <br>
          <h2><span class="highlight">Situs lowongan kerja terbaru dan peluang karir terlengkap 2022.</span></h2>
          <div class="content">
            <form method="" action="">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Jabatan, kata kunci, perusahaan">
                    <i class="ti-time"></i>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Pilih lokasi">
                    <i class="ti-location-pin"></i>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="search-category-container">
                    <label class="styled-select">
                      <select class="dropdown-product selectpicker">
                        <option>Pilih spesialisasi</option>
                        <option>Finance</option>
                        <option>IT & Engineering</option>
                        <option>Education/Training</option>
                        <option>Art/Design</option>
                        <option>Sale/Markting</option>
                        <option>Healthcare</option>
                        <option>Science</option>                              
                        <option>Food Services</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="col-md-1 col-sm-6">
                  <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
<!-- end intro section -->
@endsection
      
@section('content')
    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Lowongan Terbaru</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="{{ asset('style/img/jobs/img-1.jpg') }}" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Need a web designer</a><span class="full-time">Full-Time</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><a href="browse-categories.html"><i class="ti-briefcase"></i>PT BANK BNI Persero</a></span>
                      <span><i class="ti-location-pin"></i>Yogyakarta</span>
                      <span><i class="ti-credit-card"></i>IDR 10 jt - 17 jt per bulan</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-heart"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
            </div>                    
            <ul class="pagination pull-right">              
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="active"><a href="#" class="btn btn-common"> <i class="ti-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Find Job Section End -->

    <!-- Start Purchase Section -->
    <section class="section purchase" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="section-content text-center">
            <h1 class="title-text">
             Temukan Pekerjaan Baru
            </h1>
            <p>Gabung bersama kami untuk mendapatkan informasi berbagai lowongan pekerjaan!</p>
            <a href="my-account.html" class="btn btn-common">Registrasi</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Purchase Section -->
     
    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h2 class="section-title">
          Tips Karir
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('style/img/blog/home-items/img1.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Dec 20, 2017</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    Tips to write an impressive resume online for beginner
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('style/img/blog/home-items/img2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Jan 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    Let's explore 5 cool new features in JobBoard theme
                  </h3>
                </a>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset('style/img/blog/home-items/img3.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">
                <div class="meta-tags">
                  <span class="date"><i class="ti-calendar"></i> Mar 20, 2018</span>
                  <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>
                </div>
                <a href="single-post.html">
                  <h3>
                    How to convince recruiters and get your dream job
                  </h3>
                </a>
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

     <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-briefcase"></i>
              </div>
              <div class="desc">                
                <h2>Lowongan Dipasang</h2>
                <h1 class="counter">12050</h1>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-user"></i>
              </div>
              <div class="desc">
                <h2>Member</h2>
                <h1 class="counter">10890</h1>                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="counting">
              <div class="icon">
                <i class="ti-write"></i>
              </div>
              <div class="desc">
                <h2>Perusahaan</h2>
                <h1 class="counter">700</h1>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->
@endsection

@section('registrasi-perusahaan')
  @include('layouts.registrasi-perusahaan')
@endsection