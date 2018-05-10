<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toko Elektronik</title>

    <!-- Bootstrap core CSS     -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/front/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/> -->
    <link href="{{ URL::asset('css/front/animate.min.css') }} " rel="stylesheet">

    <!--  Paper Dashboard core CSS    -->
    <!-- <link href="assets/css/paper-dashboard.css" rel="stylesheet"/> -->
    <link href="{{ URL::asset('css/front/paper-dashboard.css') }} " rel="stylesheet">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/front/demo.css') }} " rel="stylesheet">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <!-- <link href="assets/css/themify-icons.css" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/front/themify-icons.css') }} " rel="stylesheet">

    <style>
      body {
        background: #F1F1F1 !important;
      }

      .navbar {
          background: #2C2C2C !important;
      }

    </style>

  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="true">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="">Toko Elektronik</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="head-navbar">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Produk <span class="sr-only">(current)</span></a></li> -->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk &ensp;<span class="caret"></span></a>
              <ul class="dropdown-menu" style="left:-100px !important;">
                <li><a href="{{ route('customer.produk') }}">Lihat Semua Produk</a></li>
                <li role="separator" class="divider"></li>
                <!-- <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->
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
                  <li><a href="#"><i class="fa ti-user"></i>&ensp;Profile</a></li>
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
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @yield('content')


    <script src="{{ URL::asset('js/front/jquery-1.10.2.js') }}"></script>
    <script src="{{ URL::asset('js/front/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('js/front/bootstrap-checkbox-radio.js') }}"></script>

    <script src="{{ URL::asset('js/front/chartist.min.js') }}"></script>

    <script src="{{ URL::asset('js/front/bootstrap-notify.js') }}"></script>

  	<script src="{{ URL::asset('js/front/Chart.bundle.js') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="{{ URL::asset('js/front/paper-dashboard.js') }}"></script>

    <script src="{{ URL::asset('js/front/demo.js') }}"></script>
  </body>
</html>
