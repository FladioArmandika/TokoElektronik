<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toko Elektronik</title>

    <!-- Bootstrap core CSS     -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/front/bootstrap41.css') }} " rel="stylesheet">

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/> -->
    <link href="{{ URL::asset('css/front/animate.min.css') }} " rel="stylesheet">

    <!--  Paper Dashboard core CSS    -->
    <!-- <link href="assets/css/paper-dashboard.css" rel="stylesheet"/> -->


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/front/demo.css') }} " rel="stylesheet">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli|Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- <link href="assets/css/themify-icons.css" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/front/themify-icons.css') }} " rel="stylesheet">


  </head>
  <body>

    <!-- <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="true">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="">Toko Elektronik</a>
        </div>

        <div class="collapse navbar-collapse" id="head-navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Produk <span class="sr-only">(current)</span></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk &ensp;<span class="caret"></span></a>
              <ul class="dropdown-menu" style="left:-100px !important;">
                <li><a href="{{ route('customer.produk') }}">Lihat Semua Produk</a></li>
                <li role="separator" class="divider"></li>
                @foreach ($listKategori as $kategori)
                  <li><a href="#"> {{ $kategori->nama }} </a></li>
                @endforeach

              </ul>
            </li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>

          <form class="navbar-form navbar-left" action="index.html" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group  border-input" style="background:#FFFFFF !important;padding:5px;">
                  <input type="text" name="" class="form-control" >
                  <a type="submit" name="button" class="btn-sm" style="margin:0px 0px;">
                    <i class="ti-search"></i>
                  </a>
                </div>
              </div>
            </div>

          </form>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-lock"></i> Register</a>
              </li>
            @else
              <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
              <li><a href="#"><i class="ti-comment"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}&ensp;<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('customer.profile',['idCustomer' => Auth::user()->id ]) }}"><i class="fa ti-user"></i>&ensp;Profile</a></li>
                  <li><a href="#"><i class="fa ti-heart"></i>&ensp;Barang Favorit</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="fa ti-settings"></i>&ensp;Pengaturan</a></li>
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" >
                               <i class="fa ti-back-left"></i>&ensp;Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                   </li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg box-shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">TOKO DONY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produk
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('customer.produk') }}">Semua Produk</a>
                <div class="dropdown-divider"></div>
                @foreach ($listKategori as $kategori)
                  <a class="dropdown-item" href="#">{{ $kategori->nama }}</a>
                @endforeach
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('customer.tentang') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
          </ul>
            @if(Auth::guest())
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  <i class="fa fa-lock"></i> Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-lock"></i> Register</a>
              </li>
            </ul>
            @else
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ route('customer.cart') }}" class="nav-link">
                  <i class="ti-shopping-cart"></i>
                  <span class="badge">{{ Session::has('keranjang') ? Session::get('keranjang')->totalQty : '' }}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="ti-comment"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}&ensp;<span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="{{ route('customer.profile',['idCustomer' => Auth::user()->id ]) }}" class="dropdown-item"><i class="fa ti-user"></i>&ensp;Profile</a>
                  <a href="#" class="dropdown-item"><i class="fa ti-heart"></i>&ensp;Barang Favorit</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item"><i class="fa ti-settings"></i>&ensp;Pengaturan</a>
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="dropdown-item">
                             <i class="fa ti-back-left"></i>&ensp;Logout
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                   </form>
                </div>
              </li>
            </ul>
            @endif
        </div>
      </div>
    </nav>

    <div class="page-content">
      @yield('content')
    </div>


    <!-- FOOTER -->
    <nav class="navbar navbar-bottom navbar-expand-lg">
      <a class=" mr-auto ml-auto" href="#">Kelompok 1</a>
    </nav>



    <script src="{{ URL::asset('js/front/jquery-1.10.2.js') }}"></script>
    <script src="{{ URL::asset('js/front/bootstrap41.bundle.js') }}"></script>


    <script src="{{ URL::asset('js/front/chartist.min.js') }}"></script>

    <script src="{{ URL::asset('js/front/bootstrap-notify.js') }}"></script>

  	<script src="{{ URL::asset('js/front/Chart.bundle.js') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="{{ URL::asset('js/front/paper-dashboard.js') }}"></script>

    <script src="{{ URL::asset('js/front/demo.js') }}"></script>
  </body>
</html>
