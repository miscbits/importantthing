<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Wedding of Alexandra Bozzini and Wilhem Alcivar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

	</head>
	<body>
	<div class="fh5co-loader" id="app">
	</div>
	
	<div id="page">
	<nav class="fh5co-nav navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<div class="col-xs-6">
				<div id="fh5co-logo"><a href="/">Alex and Wilhem</a></div>
			</div>
			<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
				<ul class="navbar-nav ml-auto">
					<li class="active"><a href="index.html">Home</a></li>
			        @guest
			            <li>
			                <a href="{{ route('login') }}">{{ __('Login') }}</a>
			            </li>
			        @endguest
				</ul>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(storage/img/background.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Wilhem &amp; Alex</h1>
							<h2>We Are Getting Married</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>October 13th, 2018</h3>
					<p>We are getting married!</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{ asset('storage/img/groom.jpg') }}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Wilhem Alcivar</h3>
						<p>This is a true demon prince of the underworld. They will in fact teach you about code and astronomy</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{ asset('storage/img/bride.jpg') }}" alt="bride" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Alexandra Bozzini</h3>
						<p>This is literally the cutest person ever. I mean just like, look. Can you even compare yourself to this?</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	@can('attend')
	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(storage/img/background.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Main Ceremony</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>4:00 PM</span>
										<span>6:00 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Monday 28</span>
										<span>November, 2016</span>
									</div>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Party</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>7:00 PM</span>
										<span>12:00 AM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Monday 28</span>
										<span>November, 2016</span>
									</div>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endcan

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">We are so excited to make this step. We hope you will all be a part of it</small> 
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/simplyCountdown.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

	<script>
		(function() {
		    var d = new Date(2018, 9, 13, 12, 0, 0);

		    // default example
		    simplyCountdown('.simply-countdown-one', {
		        year: d.getFullYear(),
		        month: d.getMonth() + 1,
		        day: d.getDate()
		    });
		})();
	</script>

	</body>
</html>

