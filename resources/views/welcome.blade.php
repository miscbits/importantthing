<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>The Wedding of Wilhem and Alex</title>
        
    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
  </head>
  
  <body>
    <!-- HEADER 06 -->
    <section id="home" class="header-06">
      <div class="flexslider-container">
        <nav class="fixed-top navbar navbar-expand-lg">
        <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
          <span class="navbar-toggler-icon"><i class="ion-android-menu"></i></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#story">Our Story</a></li>
              <li class="nav-item"><a class="nav-link" href="#registry">Registry</a></li>
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endguest
            </ul>
            
          </div>
        </div>
      </nav>
        
        
        
        <div class="caption">
          <div class="text-center">
            <div class="box">
              <div>
                <h1>Wilhem&Alex</h1>
                <h6>October 13, Phoenixville, PA</h6>
              </div>
            </div>
          </div>
        </div>
        
        <div class="flexslider">
          <ul class="slides">
            <li style="background-image: url( {{ asset("/images/background6.jpg") }});"></li>
            <li style="background-image: url( {{ asset("/images/background7.jpg") }});"></li>
            <li style="background-image: url( {{ asset("/images/background8.jpg") }});"></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- STORY 06 -->
    <section id="story" class="story-06">
      <div class="container">
        <div class="row">
          <div class="col-md-12 title">
            <h3>Our Story</h3>
            <h5>A LITTLE ABOUT THE COUPLE.</h5>
          </div>
          <div class="col-md-12 content">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <p>Alex and Wilhem are the best of friends. They met while attending West Chester University and quickly became great friends. From there they started spending so much time together they didn't wanna be apart. Eventually they decided to never be apart. That's where we are now and this is the story of our future together.</p>
                <h5>Wilhem&Alex</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- REGISTRY 06 -->
    <section id="registry" class="registry-06">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>GIVE THE GIFT OF PRESENTS</h3>
          </div>
          <div class="col-sm-4 offset-sm-4">
            <div class="box">
              <div><img src="{{ asset("/images/amazon-registry-logo.png") }}" alt=""></div>
              <a href="https://www.amazon.com/wedding/share/wilhem-and-alex" target="_blank" class="btn btn-default">Go to Store <i class="ion-ios-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
        
    <!-- RSVP 06 -->
    <section id="rsvp" class="rsvp-06" style="background-image: url({{ asset("/images/background6.jpg") }});">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <h3>Say you'll come</h3>
            <p>Please let us know if you want to come,
            <br>I hope to see you there.</p>
          </div>
          <div class="col-md-4">
            <form method="post" name="form" action="/attendees">
              {{ csrf_field() }}
              <div class="alert alert-danger" id="name_alert" style="display:none;"> Please enter your name!</div>
              <div class="alert alert-danger" id="email_alert" style="display:none;"> Please enter your email!</div>
              <div class="alert alert-success" style="display:none;"> Thanks for your RSVP!</div>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
              </div>
              <button type="submit" class="btn btn-default btn-block submit">Request and Invite <i class="ion-ios-arrow-right"></i></button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            We can't wait to see you there!
          </div>
        </div>
      </div>
    </footer>

    <div id="app"></div>

    <!-- Scroll to top -->
    <div class="scroll-to-top"><a href="#home"><i class="ion-ios-arrow-up"></i></a></div>
    
    <!-- JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/style-06.js') }}"></script>
  </body>
  
</html>
