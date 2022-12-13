@extends('layouts.app')

@section('title', 'Cari Lowongan')

@section('main-navigation', 'main-navigation')
@section('cariLowongan_active', 'active')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('style/css/cari-lowongan.css') }}" type="text/css">
@endsection

@section('content')
     <!-- Page Header Start -->
     <div class="page-header">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <h3 style="padding-left: 10px">Temukan Pekerjaan Impianmu di Findajob<span class="titik-logo">.</span></h3>
              <div class="search-container-cari-lowongan">
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
              <nav class="filter filter-default" data-offset-top="50">
                <div class="container">
                  <div class="collapse navbar-collapse" id="navbar">              
                  <!-- Start Navigation List -->
                  <ul class="nav navbar-nav">
                    <li style="margin-left: -20px">
                      <a href="#">
                      Jenis pekerjaan <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="index.html">
                            Penuh Waktu
                          </a>
                        </li>
                        <li>
                          <a href="index-02.html">
                            Paruh Waktu
                          </a>                          
                        </li>
                        <li>
                          <a href="index-03.html">
                            Temporer
                          </a>
                        </li>
                        <li>
                          <a href="index-04.html">
                            Kontrak
                          </a>
                        </li>
                        <li>
                          <a href="index-04.html">
                            Magang
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                      Gaji <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown">
                        <li>
                          <a href="about.html">
                            Di bawah 3.000.000
                          </a>
                        </li>
                        <li>
                          <a href="job-page.html">
                            3.000.000  &nbsp;&nbsp;- &nbsp;&nbsp;5.000.0000
                          </a>
                        </li>
                        <li>
                          <a href="job-details.html">
                            5.000.000 &nbsp;&nbsp;- &nbsp;&nbsp;7.000.000
                          </a>
                        </li>
                        <li>
                          <a href="resume.html">
                            7.000.000 &nbsp;&nbsp;- &nbsp;10.000.000
                          </a>
                        </li>
                        <li>
                          <a href="privacy-policy.html">
                            10.000.000  - 20.000.000
                          </a>
                        </li>
                        <li>
                          <a href="faq.html">
                            20.000.000  - 50.000.000
                          </a>
                        </li>
                        <li>
                          <a href="pricing.html">
                            Di atas 50.000.000
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                      Tanggal Ditayangkan <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown posted-job-list">
                        <li>
                          <a class="active" href="#">
                          Kapan saja
                          </a>
                        </li>
                        <li>
                          <a href="#">
                          24 jam terakhir
                          </a>
                        </li>
                        <li>
                          <a href="#">
                          3 hari terakhir
                          </a>
                        </li>
                        <li>
                          <a href="manage-resumes.html">
                          7 hari terakhir
                          </a>
                        </li>
                        <li>
                          <a href="job-alerts.html">
                          14 hari terakhir
                          </a>
                        </li>
                        <li>
                          <a href="job-alerts.html">
                          30 hari terakhir
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>                           
              </div>
            </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End --> 

      
      <!-- Main container Start -->  
      <div class="about section" style="margin-top: -40px">
        <div class="container">
          <div class="job-sortBy" style="width: 40%">
            <p class="dropbtn">
              Urut Berdasarkan <b>Relevansi</b> <i class="fa fa-angle-down"></i>
            </p>
            <div class="dropdown-job-sortBy">
              <a href="#" class="active">Relevansi</a>
              <a href="#">Tanggal</a>
            </div>
            <p class="page-job-sortBy">Halaman 1 dari 2</p>
          </div>
          <div class="row">          
            <div class="col-md-5 col-sm-12">
              <div class="job-item active">
                <a href="single-post.html">
                  <h3 class="underline-job">Staff Admin Business Development</h3>
                  <p>PT Soundbest Elektronik Indonesia </p> 
                  {{-- <p><b>Surabaya</b></p> --}}
                  <p>Surabaya</p>
                  <div class="salary-section">
                    <span class="salary" style="margin-top: 100px;"><i class="ti-credit-card"></i> Rp. 4.500.000 - Rp. 6.000.000 per bulan</span>
                    {{-- <br> --}}
                    <span class="salary"><i class="ti-briefcase"></i> Full-time</span>
                  </div>
                 <div class="meta-tags">
                  <p>3 jam yang lalu</p>
                </div>
                </a>
              </div>
              <div class="job-item">
                <a href="single-post.html">
                  <h3 class="underline-job">Staff Admin Business Development</h3>
                  <p>PT Soundbest Elektronik Indonesia </p> 
                  <p>Surabaya</p>
                  {{-- <p><b>Surabaya</b></p> --}}
                  <div class="salary-section">
                    <span class="salary" style="margin-top: 100px;"><i class="ti-credit-card"></i> Rp. 4.500.000 - Rp. 6.000.000 per bulan</span>
                    {{-- <br> --}}
                    <span class="salary"><i class="ti-briefcase"></i> Full-time</span>
                  </div>
                 <div class="meta-tags">
                  <p>3 jam yang lalu</p>
                </div>
                </a>
              </div>
            </div>
            <div class="col-md-7 col-sm-12">
              <div class="detail-job-content">
                <div class="top-detail-job">
                  <a href="#" class="btn lamar-sekarang">Lamar Sekarang</a>
                  <a href="#" class="new-tab-detail-job">Lihat di tab baru</a>
                </div>
                <div class="detail-job">
                  <h3>Staff Admin Business Development</h3>
                  <p>PT Soundbest Elektronik Indonesia </p> 
                  <p>Surabaya</p>
                  {{-- <p><b>Surabaya</b></p> --}}
                  <p>Rp. 4.500.000 - Rp. 6.000.000 per bulan</p>
                  <p>Ditayangkan pada 8-Oct-22</p>
                  {{-- <p class="desc">Consectuture adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat utwisi veniam.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi, sapiente ex debitis quis dolorum unde, neque quibusdam eveniet nobis enim porro repudiandae nesciunt quidem.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni delectus soluta adipisci beatae ullam quisquam, quia recusandae rem assumenda, praesentium porro sequi eaque doloremque tenetur incidunt officiis explicabo optio perferendis.</p> --}}
                  <div class="description-job">
                    <hr>
                    <p><b>Deskripsi Pekerjaan</b></p>
                    <div class="responsibility-job">
                      <p>Tugas & Tanggung Jawab</p>
                      <ul>
                        <li>Monitoring kegiatan kapal dan membuat laporan time-sheet</li>
                        <li>Mengurus pengajuan permintaan barang</li>
                        <li>Mengurus pengajuan dana</li>
                        <li>Melakukan kunjungan ke kapal (Site Banjarmasin) setiap 3 bulan sekali</li>
                      </ul>
                    </div>
                    <div class="qualification-job">
                      <p>Kualifikasi</p>
                      <ul>
                        <li>Pendidikan minimal D3 jurusan Akuntansi</li>
                        <li>Diutamakan pernah memakai software accurate</li>
                        <li>Diutamakan berpengalaman menghandle AR & AP minimal 1 tahun</li>
                        <li>Wajib menguasai excel</li>
                      </ul>
                    </div>
                    <div class="opportunity-job">
                      <p>Keuntungan</p>
                      <ul>
                        <li>BPJS Kesehatan</li>
                        <li>Laptop</li>
                        <li>Dapat makan siang dari kantor</li>
                        <li>BPJS Ketenagakerjaan</li>
                      </ul>
                    </div>
                  </div>
                  <div class="information-job">
                    <hr>
                    <p><b>Informasi Tambahan</b>
                      </p>
                    
                    <p>Dibutuhkan Segera</p>
                    <p>Jenis Pekerjaan : Full-time</p>
                    <p>Kuota Rekruitmen : 1</p>
                    {{-- <p>Penuh Waktu</p>
                    <p><b>Jenis Kelamin</b></p>
                    <p>Laki-laki/Perempuan</p> --}}
                    {{-- <p><b>Deskripsi Pekerjaan</b></p> --}}
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main container End -->  
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
      $('.dropdown-job-sortBy').on('click', 'a', function() {
          $('.dropdown-job-sortBy a.active').removeClass('active');
          $(this).addClass('active');
      });
    </script>
@endsection