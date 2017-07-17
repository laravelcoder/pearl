<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pearl Essence Home Parties</title>
<link rel="shortcut icon" href="assets/images/favicon.ico">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<!--=== Loader Start ======-->
<div id="loader-overlay">
  <div class="loader-wrapper">
    <div class="arcon-pulse"></div>
  </div>
</div>
<!--=== Loader End ======-->

<!--=== Wrapper Start ===-->
<div class="wrapper">

  <!--=== Header Start ===-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
    <!--=== Start Top Search ===-->
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="mdi mdi-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
          <i class="mdi mdi-magnify fullscreen-search-icon">
          <input value="" type="submit">
          </i>
        </form>
      </div>
    </div>
    <!--=== End Top Search ===-->

    <div class="container">
      <!--=== Start Atribute Navigation ===-->
      <div class="attr-nav">
        <ul>
         {{--  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <i class="mdi mdi-shopping"></i> <span class="badge">3</span> </a>
            <ul class="dropdown-menu cart-list">
              <li> <a href="#" class="photo"><img src="assets/images/thumb01.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Delica omtantur </a></h6>
                <p>2x - <span class="price">$99.99</span></p>
              </li>
              <li> <a href="#" class="photo"><img src="assets/images/thumb02.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Omnes ocurreret</a></h6>
                <p>1x - <span class="price">$33.33</span></p>
              </li>
              <li> <a href="#" class="photo"><img src="assets/images/thumb03.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Agam facilisis</a></h6>
                <p>2x - <span class="price">$99.99</span></p>
              </li>
              <li class="total"> <span class="pull-right"><strong>Total</strong>: $0.00</span> <a href="#" class="btn btn-default btn-cart">Cart</a> </li>
            </ul>
          </li> --}}
          <li class="search"><a href="#" id="search-button"><i class="mdi mdi-magnify"></i></a></li>
        </ul>
      </div>
      <!--=== End Atribute Navigation ===-->

      <!--=== Start Header Navigation ===-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
        <div class="logo">
          <a href="{!! url('/') !!}">
            <img class="logo logo-display" src="{!! asset('assets/images/logo-white.png') !!}" alt="pearl essence logo">
            <img class="logo logo-scrolled" src="{!! asset('assets/images/logo-black.png') !!}" alt="pearl essence logo">
          </a>
        </div>
      </div>
      <!--=== End Header Navigation ===-->

      <!--=== Collect the nav links, forms, and other content for toggling ===-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        {!! $primary->asUl(array('class' => 'nav navbar-nav', 'data-in'=> 'fadeIn', 'data-out' => 'fadeOut')) !!}
      </div>
      <!--=== /.navbar-collapse ===-->
    </div>
  </nav>
  <!--=== Header End ===-->
@yield('content')
  <!--=== Footer Start ===-->
  <footer class="footer" id="footer-fixed">
 @include('layouts.partials.footer')
  </footer>
  <!--=== Footer End ===-->

  <!--=== GO TO TOP  ===-->
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  <!--=== GO TO TOP End ===-->

</div>
<!--=== Wrapper End ===-->

<!--=== Javascript Plugins ===-->
<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/js/validator.js') !!}"></script>
<script src="{!! asset('assets/js/plugins.js') !!}"></script>
<script src="{!! asset('assets/js/master.js') !!}"></script>
<script src="{!! asset('assets/js/bootsnav.js') !!}"></script>
<!--=== Javascript Plugins End ===-->

</body>
</html>
