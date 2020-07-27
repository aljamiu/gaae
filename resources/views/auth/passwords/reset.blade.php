
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ghana Association of Agriculture Economists</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="../../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../../plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="../../plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="../../plugins/slick/slick.css" rel="stylesheet">
  <link href="../../plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="../../css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="../../images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">

<section class="registration">
	<div class="container-fuild p-0">
		<div class="row">
			<div class="col-lg-12 col-md-12 p-0">
				<div class="registration-block bg-registration overlay-dark">
					<div class="block">
						<div class="title text-left">
							<h3>reset password <span class="alternate">GAAE</span></h3>
							
            </div>


                
                    <form method="POST" action="{{ route('password.update') }}" class="row">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control main @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control main" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="form-control main btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                    </form>
                    </div>

</div>
</div>
</div>
</div>
</div>
</section>

<!--================================
=            Google Map            =
=================================-->

<section class="map">
<!-- Google Map -->
<div id="map"></div>
<div class="address-block">
<h4>GAAC kumasi Office</h4>
<ul class="address-list p-0 m-0">
<li><i class="fa fa-home"></i><span>24AZ SOS, mampong, <br>kumasi, Ghana.</span></li>
<li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
</ul>
<a href="#" class="btn btn-white-md">Get Direction</a>
</div>
</section>

<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="block text-center">
<div class="footer-logo">
<img src="../../images/footer-logo.png" alt="logo" class="img-fluid">
</div>
<ul class="social-links-footer list-inline">
<li class="list-inline-item">
<a href="#"><i class="fa fa-facebook"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fa fa-twitter"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fa fa-instagram"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fa fa-rss"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fa fa-vimeo"></i></a>
</li>
</ul>
</div>

</div>
</div>
</div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
<div class="container">
<div class="row">
<div class="col-md-6 align-self-center">
<div class="copyright-text">
<p><a href="#">Eventre</a> &#169; 2020 All Right Reserved</p>
</div>
</div>
<div class="col-md-6">
<a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
</div>
</div>
</div>
</footer>

<!-- JAVASCRIPTS -->
<!-- jQuey -->
<script src="../../plugins/jquery/jquery.js"></script>
<!-- Popper js -->
<script src="../../plugins/popper/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Smooth Scroll -->
<script src="../../plugins/smoothscroll/SmoothScroll.min.js"></script>  
<!-- Isotope -->
<script src="../../plugins/isotope/mixitup.min.js"></script>  
<!-- Magnific Popup -->
<script src="../../plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Carousel -->
<script src="../../plugins/slick/slick.min.js"></script>  
<!-- SyoTimer -->
<script src="../../plugins/syotimer/jquery.syotimer.min.js"></script>
<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script type="text/javascript" src="../../plugins/google-map/gmap.js"></script>
<!-- Custom Script -->
<script src="../../js/custom.js"></script>
</body>

</html>