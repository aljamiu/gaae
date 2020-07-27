<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>user home page</title>
  
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
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">subscriptions<span>/</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="student">student</a>
              <a class="dropdown-item" href="standard">standard</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news">news
            <span>/</span>
          </a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Events
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="upcoming-events">Upcoming Events</a>
            <a class="dropdown-item" href="past-events">Past Events</a>
          </div>
        </li>
      </ul>

        <a class="ticket" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <img src="images/icon/ticket.png" alt="ticket">
          <span></span>
          {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        
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
			<div class="col-md-12">
        <!-- Content Block -->
        @foreach($sub as $userplan)
           <?php
              $plan = $userplan->type;
              $sstatus = $userplan->sstatus;
           ?>
        @endforeach

        @foreach($user as $user)
           <?php 
              $name = $user->name;
              $email = $user->email;
              $joined = $user->created_at;
              $pic = $user->pic;

              $date = date("d", strtotime($joined));
           ?>
          @endforeach      
						
				<div class="block">
          <h1>Welcome</h1>
          <h2>{{ $name }}</h2>
					<h3>You joined {{$joined}}</h3>
					<h6>subscription: {{ $sstatus ?? 'not yet a subscriber' }}</h6>
					<!-- Action Button -->
					<a class="btn btn-main-md" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        </div>
        
			</div>
		</div>
	</div>
</section>

<!--====  End of Banner  ====-->

  <section style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
     
				<div class="text-center p-5 shadow rounded">
        
          <div class="image-block bg-about">
          <img style="border-radius: 100px; height:200px; width:200px;" class="img-fluid" src="storage/{{$pic}}" alt="">
        </div>
					<h2 class="mb-3">{{$name}}</h2>
					<h5 class="mb-3">{{ $email }}</h5>
					<h4>Subscription Type:</h4>
					<ul class="list-unstyled mb-4">
						<li><a href="#">{{ $plan ?? 'no' }} Plan</a></li>
          </ul>
          <button class="btn btn-main" id="btnPopover" title="Edit Profile"
          data-content="
          <div class='register overlay-dark bg-registration-two'>
            <div class='block'>
              <form action='edit'  method='POST' class='row' enctype='multipart/form-data'>
                
                <div class='col-sm-10 col-md-10'>
                  <input type='file' name='pic' class='form-control main' placeholder='new pics'>
                </div>
                <div class='col-sm-10 col-md-10'>
                  <select name='field' id='' class='form-control main'>
                    <option value='email'>email</option>
                    <option value='contact'>phone</option>
                  </select>
                </div>
                <div class='col-sm-10 col-md-10'>
                  <input type='text' name='newval' class='form-control main' placeholder='new value'>
                </div>
                <div class='col-12 text-center'>
                  <button type='submit' class='btn btn-white-md'>Send</button>
                </div>
              </form>
            </div>
          </div>
          "
          data-toggle="popover"
          data-html="true"
          data-placement="bottom">
            Edit Profile
          </button-->			
				</div>
			</div>
		</div>
	</div>
</section>

<!--================================
=            Google Map            =
=================================-->

<section class="map new">
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
	<div class="register overlay-dark bg-registration-two">
		<div class="block">
			<div class="title text-center">
				<h3>Message <span class="alternate"> GAAE</span></h3>
				<p>please share your concerns GAAE is always at your tasks</p>
			</div>
			<form action="comment"  method="POST" class="row">
      @csrf
				<div class="col-md-6">
					<input type="text" name="name" class="form-control main" placeholder="Your Name">
				</div>
				<div class="col-md-6">
					<input type="email" name="email" class="form-control main" placeholder="Email">
				</div>
				<div class="col-md-6">
					<input type="text" name="contact" class="form-control main" placeholder="Phone">
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<textarea name="body" class="form-control main" placeholder="your message"></textarea>
					</div>
				</div>
				<div class="col-12 text-center">
					<button type="submit" class="btn btn-white-md">Send</button>
				</div>
			</form>
		</div>
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
          <p><a href="#">GAAE</a> &#169; 2020 All Right Reserved</p>
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
  <script type="text/javascript">
     $(document).ready(function () {
    //$('#btnPopover').popover();
      $("[data-toggle=popover]").popover();
  });
</script>
</body>

</html>