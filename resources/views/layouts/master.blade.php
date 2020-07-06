<!DOCTYPE html>
<html>

<head>
    <title>TiketID</title>
       <meta name="viewport"  content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fa/css/all.min.css')}}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> --}}
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</head>

<body>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-2">
            <div class="container">
                <a href="#" class="navbar-brand text-uppercase font-weight-bold"><span style="font-size: 20px;">TIKET.ID</span></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div class="collapse navbar-collapse in" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link text-uppercase font-weight-bold">CATEGORY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">DEALS OF THE DAY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">SEARCH</a></li>
                        {{-- <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact us</a></li> --}}
                        <li class="nav-item"><a href="login.html" class="nav-link text-uppercase font-weight-bold">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Jumbotron -->

    <div class="jumbotron vertical-center" style="background-size: cover;
    background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.72), rgba(35, 37, 38, 0.55)), url('{{asset('img/bg.jpg')}}'); min-height: 100vh; color:white !important;">
        <div class="container " align="center" >
            <h1 class="display-3">TiketID</h1>
            <p>Menyediakan berbagai macam tiket</p>
        </div>
    </div>
    <!-- EndJumbotron -->
    <!-- Content -->
    <section style="margin-top: 24px" id="more">
        <div class="container-fluid" style="padding: 20px;">
            <div class='row'>
                <div class="col-md-12" align="center">
                    <h3>Selamat Datang</h3>
                    <hr>
                    
                </div>
                {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/cn.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding  center" >
                <div  class="deskripsi" style="padding:20px;">
               <h3 class="judul">Tiket Bioskop</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding center">
              <div class="deskripsi" style="padding:20px;">
               <h3 class="judul">Tiket Wisata</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/tour.jpg')}}'); background-size: cover;"></div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding">
                <div class="square" style="background-image: url('{{asset('img/concert.jpg')}}'); background-size: cover;"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 lesspadding center">
              <div class="deskripsi" style="padding:20px;">
               <h3 class="judul">Tiket Konser</h3><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><hr>
               <button type="button" class="btn btn-outline-success">View All</button>
           </div>

                
            </div>
        </div>
        <div class="container" style="margin-top: 30px;">
          <div class='row '>
                <div class="col-md-12" align="center">
                    <h3>New Arrivals</h3>
                    <hr>
                    
                </div>
                </div>

                </div>
            <div class="row">
               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/concert.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Konser</h2>
                           <p>Rp 500.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/bg.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Desain</h2>
                           <p>Rp 500.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/cn.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Tiket Bioskop</h2>
                           <p>Rp 100.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/tour.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Tiket Liburan</h2>
                           <p>Rp 200.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                
                </div>
            
            
            
          <div class='row mt-3' >
                <div class="col-md-12" align="center">
                    <h3>Hot Products</h3>
                    <hr>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/cn.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Tiket Bioskop</h2>
                           <p>Rp 100.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/tour.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Tiket Liburan</h2>
                           <p>Rp 200.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/concert.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Konser</h2>
                           <p>Rp 500.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="max-height: 200px;">
                    <div class="hovereffect">
                        <div  class="img"  style="background-image:url('{{asset('img/bg.jpg')}}'); background-size: cover; min-height: 200px; width: 100%;" alt=""></div>
                        <div class="overlay">
                           <h2>Desain</h2>
                           <p>Rp 500.000</p>
                           <a class="info" href="#">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                
                </div>

    </section>
    <!-- End Content -->
    <!-- Footer -->
    <footer class="section footer-classic context-dark bg-image" style="margin-top:24px;background: #00251a;">
        <div class="container-fluid" style="margin-top:24px;">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5" style="margin-top:24px;">
                    <div class="pr-xl-4">
                        <a class="brand" href="index.html"><span style="font-size: 20px;">TIKET.ID</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                </div>
                <div class="col-md-4" style="margin-top:24px;">
                    <h5>Contacts</h5>
                    <dl class="contact-list">

                        <dd><i class="fas fa-map-marked-alt  mr-2"></i> Bandung</dd>

                        <dd><a href="mailto:#"><i class="fas fa-envelope  mr-2"></i> info@tiket.id </a></dd>

                        <dd><a href="tel:#"><i class="fas fa-phone mr-2"></i> +62 234567</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3" style="margin-top:24px;">
                    <h5>Terhubung dengan kami</h5>
                    <ul class="nav-list">
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Pekerjaan</a></li>
                        <li><a href="#">Kerjasama</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <hr style="border-color: #838383;">
            <div class="row">
                <div class="col-md-6">&copy; 2020 TiketID.All Rights Reserved.</div>
                <!-- SOCMED BUTTON -->
                <div class="col-md-6" align="right">
                    <a href="#FB" class="socmed-link"><i class="fab fa-facebook-square fa-2x mr-2"></i></a>
                    <a href="#TWITTER" class="socmed-link"><i class="fab fa-twitter-square fa-2x mr-2"></i></a>
                    <a href="#IG" class="socmed-link"><i class="fab fa-instagram-square fa-2x mr-2"></i></a>
                </div>
                <!-- END SOCMED BUTTON -->
            </div>
    </footer>
    <!-- End Footer -->
</body>

</html>