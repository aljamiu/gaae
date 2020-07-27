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
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="/">
        <img src="images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Home
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/">Homepage</a>
            <a class="dropdown-item" href="homepage-two">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register">Register<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
      </ul>
      <a href="register" class="ticket">
        <img src="images/icon/ticket.png" alt="ticket">
        <span>Register Now</span>
      </a>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


<!--============================
=            Banner            =
=============================-->

<section class="banner bg-banner-one overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Content Block -->
				<div class="block">
					<!-- Coundown Timer -->
					<!--div class="timer"></div-->
					<h1>Ghana  Association of Agricultural  Economists</h1><h2>(GAAE)</h2>
					
					<h6>found since 02-05 July 2017</h6>
					<!-- Action Button -->
					<a href="#" class="btn btn-white-md">See Member Benefits</a>
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--====  End of Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="section about">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-10 align-self-center">
				<div class="content-block">
					<h2>welcome to <span class="alternate">GAAE</span></h2>
					<div class="description-one">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
						</p>
					</div>
					<div class="description-two">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
					</div>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="register" class="btn btn-main-md">sign up</a>
						</li>
						<li class="list-inline-item">
							<a href="about" class="btn btn-transparent-md">about GAAE</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--============================
=            container            =
=============================-->


<section style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="text-center p-5 shadow rounded">
					<h2 class="mb-3">Ghana Association of Agricultural Economists <span class="alternate"> (GAAE)</span></h2>
					<h4 class="mb-3">agriculture is the future. so let's invest for our nation's future</h4>
					<h4>please below are our missions</h4>
					<ul class="list-unstyled mb-4">
						<li>promotion of agriculture</li>
						<li>reviving agricultural sector</li>
						<li>Documentation Included</li>
						<li>Monthly Update</li>
						<li>Lifetime Download</li>
					</ul>
					<a href="register" class="btn btn-main">Join The Community</a>			
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of container  ====-->

<!--==============================
=            past programs            =
===============================-->

<section class="section speakers bg-speaker overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>Past <span class="alternate">Programs</span></h3>
					<p>click on any of the four popup platforms to follow the program</p>
				</div>
			</div>
		</div>
		<div class="row">
		   @foreach($project as $proj)
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- past prog 1 -->
				
				<div class="speaker-item">
					<div class="image">
					
						<img src="{{$proj->pic}}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker">{{$proj->title}}</a></h5>
						<p>{{$proj->ddate}}</p>
					</div>
				</div>
				
			</div>
			@endforeach
		</div>
	</div>
</section>

<!--====  End of past prog  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="news" method="POST" class="row">
				@csrf
					<div class="col-lg-8 col-md-12">
						<input type="email" name="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--==============================
= projects  Schedule  achievements    =
===============================-->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>GAAE 2020 Hot <span class="alternate">Projects</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="#nov20" data-toggle="pill">
							TECHNOLOGY
							<?php $i=0 ?>
							   @foreach($project as $index => $proj)
							   @if($proj->category == 'technology')
								 <?php $i++ ?>
								@endif
							   @endforeach
							   
							   @if($i == '1')
							   <span>{{$i}} machinery</span>
							   @else
							   <span>{{$i}} machineries</span>
							   @endif
							
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov21" data-toggle="pill">
							HUMAN POTENTIAL
							<?php $i=0 ?>
							   @foreach($project as $index => $proj)
							   @if($proj->category == 'human')
								 <?php $i++ ?>
								@endif
							   @endforeach
							   
							   @if($i == '1')
							   <span>{{$i}} beneficiary</span>
							   @else
							   <span>{{$i}} beneficiaries</span>
							   @endif
							 
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov22" data-toggle="pill">
							PRODUCTIONS
							<?php $i=0 ?>
							   @foreach($project as $index => $proj)
							   @if($proj->category == 'production')
								 <?php $i++ ?>
								@endif
							   @endforeach
							   
							   @if($i == '1')
							   <span>{{$i}} factory</span>
							   @else
							   <span>{{$i}} factories</span>
							   @endif
						
					    </a>
					  </li>
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active schedule-item" id="nov20">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Region</div>
					  			<div class="speaker">Project</div>
					  			<div class="subject">Remark</div>
					  			<div class="venue">Place</div>
					  		</li>
							  <!-- Schedule Details -->
							@foreach($project as $proj)
							   @if($proj->category == 'technology')
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$proj->region}}</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">{{$proj->title}}</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">{{$proj->pstatus}}</div>
							  		<!-- Venue -->
							  		<div class="venue">{{$proj->place}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  		
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov21">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
							  <div class="time">Region</div>
					  			<div class="speaker">Project</div>
					  			<div class="subject">Remark</div>
					  			<div class="venue">Place</div>
					  		</li>
					  		<!-- Schedule Details -->
							@foreach($project as $proj)
							  @if($proj->category == 'human')
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$proj->region}}</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">{{$proj->title}}</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">{{$proj->pstatus}}</div>
							  		<!-- Venue -->
							  		<div class="venue">{{$proj->place}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov22">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
							  <div class="time">Region</div>
					  			<div class="speaker">Project</div>
					  			<div class="subject">Remark</div>
					  			<div class="venue">Place</div>
					  		</li>
					  		<!-- Schedule Details -->
							@foreach($project as $proj)
							    @if($proj->category == 'production') 
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$proj->region}}</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">{{$proj->title}}</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">{{$proj->pstatus}}</div>
							  		<!-- Venue -->
							  		<div class="venue">{{$proj->place}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  	</ul>
					  </div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Schedule  ====-->

<!--==================================
=            Registration            =
===================================-->

<section class="registration">
	<div class="container-fuild p-0">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 p-0">
				<div class="registration-block bg-registration overlay-dark">
					<div class="block">
						<div class="title text-left">
							<h3>Signup to <span class="alternate">GAAE</span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<form method="POST" action="{{ route('register') }}" class="row">
                            @csrf
							<div class="col-md-6">
                                <input id="name" type="text" class="form-control main @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-6">
                                <input id="email" type="email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-6">
                                <input id="contact" type="text" class="form-control main @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" placeholder="phone">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            <div class="col-md-6">
                               <input id="region" type="text" class="form-control main @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region" placeholder="region">

                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control main @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="username">

                                @error('username')
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
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control main" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                            </div>
							<div class="col-12">
                                <button type="submit" class="form-control main btn btn-white-md">
                                    {{ __('Register') }}
                                </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Registration  ====-->

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
              <img src="images/footer-logo.png" alt="logo" class="img-fluid">
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
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>



