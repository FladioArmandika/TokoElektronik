
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Octonic | Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/back/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/> -->
    <link href="{{ URL::asset('css/back/animate.min.css') }} " rel="stylesheet">

    <!--  Paper Dashboard core CSS    -->
    <!-- <link href="assets/css/paper-dashboard.css" rel="stylesheet"/> -->
    <link href="{{ URL::asset('css/back/paper-dashboard.css') }} " rel="stylesheet">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->
    <link href="{{ URL::asset('css/back/demo.css') }} " rel="stylesheet">


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <!-- <link href="assets/css/themify-icons.css" rel="stylesheet"> -->
    <link href="{{ URL::asset('css/back/themify-icons.css') }} " rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Octonic
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ route('admin.home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.produk') }}">
                        <i class="ti-bag"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.transaksi') }}">
                        <i class="ti-shopping-cart"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.keuangan') }}">
                        <i class="ti-money"></i>
                        <p>Keuangan</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.customer') }}">
                        <i class="ti-user"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
								<!-- <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">


				@yield('top')


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Kelompok 1</a>
                </div>
            </div>
        </footer>

    </div>
</div>


<!-- MODAL -->



</body>

  <!--   Core JS Files   -->
  <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
  <script src="{{ URL::asset('js/back/jquery-1.10.2.js') }}"></script>
	<!-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> -->
  <script src="{{ URL::asset('js/back/bootstrap.min.js') }}"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<!-- <script src="assets/js/bootstrap-checkbox-radio.js"></script> -->
  <script src="{{ URL::asset('js/back/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<!-- <script src="assets/js/chartist.min.js"></script> -->
  <script src="{{ URL::asset('js/back/chartist.min.js') }}"></script>

  <!--  Notifications Plugin    -->
  <!-- <script src="assets/js/bootstrap-notify.js"></script> -->
  <script src="{{ URL::asset('js/back/bootstrap-notify.js') }}"></script>

	<!-- Chart.js -->
	<script src="{{ URL::asset('js/back/Chart.bundle.js') }}"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<!-- <script src="assets/js/paper-dashboard.js"></script> -->
  <script src="{{ URL::asset('js/back/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="assets/js/demo.js"></script> -->
  <script src="{{ URL::asset('js/back/demo.js') }}"></script>

	<!-- <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script> -->

</html>
