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
      <!--a href="register" class="ticket">
        <img src="images/icon/ticket.png" alt="ticket">
        <span>Register Now</span>
      </a-->
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


<!--============================
=            Banner            =
=============================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>welcome back</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="/">Home</a></li>
				  <li class="breadcrumb-item active">Executives</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Schedule  ====-->

<!--==================================
=            Registration            =
===================================-->

<!--====  executives  ====-->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					  <li class="nav-item">
					    <a style="font-size: 15px;" class="nav-link active" href="#nov20" data-toggle="pill">
							PRESIDENTS
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov21" data-toggle="pill">
							VICE PRESIDENTS
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov22" data-toggle="pill">
							SECRETARIES
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov23" data-toggle="pill">
							TREASURERS
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov24" data-toggle="pill">
							VICE SECRETARIES
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov25" data-toggle="pill">
							BUSSINESS MANAGER
							
					    </a>
					  </li>
					  <li class="nav-item">
					  <a style="font-size: 15px;" class="nav-link" href="#nov26" data-toggle="pill">
							EDITOR-IN-CHIEF
							
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
					  			<div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
							  <!-- Schedule Details -->
							@foreach($executive as $exc)
							   @if($exc->position == 'president')
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										<!-- <span class="name">{{$exc->email}}</span> -->
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		<!-- Venue -->
							  		<div class="venue">{{$exc->dstatus}}</div>
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
							  <div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
					  		<!-- Schedule Details -->
							@foreach($executive as $exc)
							   @if($exc->position == 'vicep')
					  		<li class="schedule-details">
							  <div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										<!-- <span class="name">{{$exc->email}}</span> -->
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		<!-- Venue -->
							  		<div class="venue">{{$exc->dstatus}}</div>
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
							  <div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
					  		<!-- Schedule Details -->
							@foreach($executive as $exc)
							   @if($exc->position == 'sec')
					  		<li class="schedule-details">
							  <div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										<!-- <span class="name">{{$exc->email}}</span> -->
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		<!-- Venue -->
							  		<div class="venue">{{$exc->dstatus}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  	</ul>
					  </div>
					  <div class="tab-pane fade show active schedule-item" id="nov23">
					  	
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
							  
							@foreach($executive as $exc)
							   @if($exc->position == 'treas')
					  		<li class="schedule-details">
					  			<div class="block">
					  				
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										
							  		</div>
							  		
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		
							  		<div class="venue">{{$exc->dstatus}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  		
					  	</ul>
					  </div>
					  <!--<div class="tab-pane fade show active schedule-item" id="nov24">
					  	
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
							  
							@foreach($executive as $exc)
							   @if($exc->position == 'vices')
					  		<li class="schedule-details">
					  			<div class="block">
					  				
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										
							  		</div>
							  		
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		
							  		<div class="venue">{{$exc->dstatus}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  		
					  	</ul>
					  </div>
					  <div class="tab-pane fade show active schedule-item" id="nov25">
					  	
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
							  
							@foreach($executive as $exc)
							   @if($exc->position == 'manager')
					  		<li class="schedule-details">
					  			<div class="block">
					  				
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  	    
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										
							  		</div>
							  		
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		
							  		<div class="venue">{{$exc->dstatus}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  		
					  	</ul>
					  </div>
					  <div class="tab-pane fade show active schedule-item" id="nov26">
					  	
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Year</div>
					  			<div class="speaker">Picture</div>
					  			<div class="subject">Name</div>
					  			<div class="venue">Portfolio</div>
					  		</li>
							  
							@foreach($executive as $exc)
							   @if($exc->position == 'editor')
					  		<li class="schedule-details">
					  			<div class="block">
					  				
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">{{$exc->period}}</span>
							  		</div>
							  		
							  		<div class="speaker">
							  			<img style="max-width: 80px; max-height:80px; border-radius:100px;" src="storage/{{$exc->pic}}" alt="speaker-thumb-one">
										
							  		</div>
							  		
							  		<div class="subject"><a href="#" class="">{{$exc->name}}</a></div>
							  		
							  		<div class="venue">{{$exc->dstatus}}</div>
					  			</div>
							  </li>
							  @endif
						    @endforeach
					  		
					  	</ul>
					  </div> -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!--================================
=            end of executives           =
=================================-->

<!--====  End of Call to Action Ticket  ====-->

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



