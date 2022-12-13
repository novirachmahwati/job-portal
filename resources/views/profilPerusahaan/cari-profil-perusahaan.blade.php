@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('main-navigation', 'main-navigation')
@section('profilPerusahaan_active', 'active')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('style/css/cari-profil-perusahaan.css') }}" type="text/css">
@endsection

@section('content')
     <!-- Page Header Start -->
     <div class="page-header">
        <div class="container">
          <div class="row">         
            <div class="col-md-7">
              <h3 style="padding-left: 10px">Temukan Perusahaan Terbaik di Findajob<span class="titik-logo">.</span></h3>
              <div class="search-container-cari-lowongan">
                <div class="content">
                <form method="" action="">
                    <div class="row">
                    <div class="col-md-11 col-sm-6">
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Cari Perusahaan">
                        <i class="ti-time"></i>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                    </div>
                    {{-- <div class="col-md-1 col-sm-6">
                        <p>Sort By</p>
                    </div> --}}
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End --> 

      <!-- company profile Section Start -->
    <section class="company-profile section" style="margin-top: -40px">
      <div class="container">
        <div class="job-sortBy">
          <p class="dropbtn">
            Urut Berdasarkan <b>Relevansi</b> <i class="fa fa-angle-down"></i>
          </p>
          <div class="dropdown-job-sortBy">
            <a href="#" class="active">Relevansi</a>
            <a href="#">Lowongan Terbanyak</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="company-item">
              <div class="company-wrap">
                <div class="company-inner">
                  <div class="company-logo">
                    <img src="{{ asset('style/img/company/company-airmas.png') }}" alt="" style="">
                  </div>
                  <figure class="item-thumb">
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title" style="text-align: center"><a href="job-page.html">PT Tangkas Cipta Optimal</a></h3>
                    <p style="color: #999;">Manufaktur</p>
                    <p>Membuka 1 Lowongan</p>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-location-pin"></i> Jawa Timur</span>
                <div style="border-left:1px solid #e5e5e5;height:40px; float: left;margin-top:-10px;margin-bottom: 0; margin-right: 10px"></div>
                <span> Surabaya</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="company-item">
              <div class="company-wrap">
                <div class="company-inner">
                  <div class="company-logo">
                    <img src="{{ asset('style/img/company/company-infiniti.png') }}" alt="" style="">
                  </div>
                  <figure class="item-thumb">
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title" style="text-align: center"><a href="job-page.html">PT Tangkas Cipta Optimal</a></h3>
                    <p style="color: #999;">Manufaktur</p>
                    <p>Membuka 1 Lowongan</p>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-location-pin"></i> Jawa Timur</span>
                <div style="border-left:1px solid #e5e5e5;height:40px; float: left;margin-top:-10px;margin-bottom: 0; margin-right: 10px"></div>
                <span> Surabaya</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="company-item">
              <div class="company-wrap">
                <div class="company-inner">
                  <div class="company-logo">
                    <img src="{{ asset('style/img/company/company-taco.png') }}" alt="" style="">
                  </div>
                  <figure class="item-thumb">
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title" style="text-align: center"><a href="job-page.html">PT Tangkas Cipta Optimal</a></h3>
                    <p style="color: #999;">Manufaktur</p>
                    <p>Membuka 1 Lowongan</p>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-location-pin"></i> Jawa Timur</span>
                <div style="border-left:1px solid #e5e5e5;height:40px; float: left;margin-top:-10px;margin-bottom: 0; margin-right: 10px"></div>
                <span> Surabaya</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
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
    </section>
    <!-- company profile Section End -->
@endsection

@section('registrasi-perusahaan')
  @include('layouts.registrasi-perusahaan')
@endsection

@section('customJS')
    <script>
      $('.posted-job-list').on('click', 'a', function() {
          $('.posted-job-list a.active').removeClass('active');
          $(this).addClass('active');
      });
    </script>
@endsection