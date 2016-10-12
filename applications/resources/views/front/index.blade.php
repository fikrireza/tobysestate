<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toby's Estate Indonesia</title>
    <meta name="description" content="Welcome to the Toby's Estate Indonesia where you will find everything you need to know about our coffee, tea, chocolate and more!">
    <meta name="author" content="tobysestatecoffee.co.id">

    <link rel="shortcut icon" type="image/png" href="./img/icon.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./fonts/fonts.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">

    @if(Session::has('message'))
    <script>alert('{{ Session::get('message')}}');</script>
    @endif

    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" class="body-mobile" data-spy="scroll" data-target=".navbar-fixed-top">

  <nav class="navbar navbar-default navbar-fixed-top navbar-fixed-top-toby top-nav-collapse" role="navigation">
    <div class="container container-nav-menu">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo-homex-mobile"></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="page-scroll" href="#home">Home</a></li>
                <li><a class="page-scroll" href="#about">About</a></li>
                <li><a class="page-scroll" href="#gallery">Gallery</a></li>
                <li><a class="page-scroll" href="#findus">Location</a></li>
                <li><a class="page-scroll" href="{{ route('career') }}">Career</a></li>
                <li><a class="" href="mailto:contact@tobysestatecoffee.co.id">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
      <!-- /.container -->
  </nav>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-toby navbar-toby-white container-center" role="navigation">
      <div class="container container-nav-menu">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle navbar-toggle-desktop" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <div class="logo-homex"></div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-navone">
              <li class="active"><a class="page-scroll" href="#home">Home</a></li>
              <li><a class="page-scroll" href="#about">About</a></li>
              <li><a class="page-scroll" href="#gallery">Gallery</a></li>
              <li><a class="page-scroll" href="#findus">Location</a></li>
              <li><a class="page-scroll" href="{{ route('career') }}">Career</a></li>
              <li><a class="" href="mailto:contact@tobysestatecoffee.co.id">Contact Us</a></li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
  </nav>
  <!-- Navigation -->

	<section id="home" class="home-section">

    <div class="container-fluid container-homes">

        <div class="container">
          <div id="youtubecontainer">
            <iframe height="760px" width="1001" src="https://www.youtube.com/embed/uxef7V7Qa4U?autoplay=1&controls=0&showinfo=0&autohide=1&loop=1&playlist=uxef7V7Qa4U" frameborder="0" allowfullscreen></iframe>
          </div>

          <h1>Welcome to Our World <br />of Specialty Coffee</h1>
          <div class="clearfix"></div>
          <a href="#subscribe" class="btn btn-homes page-scroll">subscribe</a>

        </div>
    </div>

  </section><!-- home-section -->
  <div class="clearfix"></div>

  <section id="about" class="about-section">

    <div class="container-fluid container-about">

        <div class="container container-about2">

         <div class="col-md-6 col-mdabout-left">

            <h1>About Toby's Estate</h1>
            <span></span>

            <h4>A PIONEERING SPIRIT!</h4>
            <p>Our story started in the coffee plantations of Brazil, Guatemala and Colombia, where founder, Toby Smith learnt to grow, roast and cup coffee at the source. Inspired by what he had learnt, Toby returned home and converted his mum’s garage into a roastery and got to work mastering the art of speciality coffee roasting.</p>

         </div>

         <div class="col-md-6 col-mdabout-right">
            <img src="./img/about-1.png">

            <img src="./img/about-2.png">
         </div>

        </div>
    </div>

  </section><!-- about-section -->
  <div class="clearfix"></div>
    <section id="gallery" class="gallery-section">

    <div class="container-fluid container-gallery">
      <div class="container">

      <div class="cold-md-12 col-md-gallery">

      <h1></h1>
			<div class="img-gallery">
				<script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/f17490d07e0650b2b41115c2a99c98ad.html" id="lightwidget_f17490d07e" name="lightwidget_f17490d07e"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
			</div>

      <a href="https://www.instagram.com/tobysestateid/" target="_blank" class="btn btn-gallery">Show More</a>
      </div>
      </div>
    </div>

  </section><!-- gallery-section -->
  <div class="clearfix"></div>


  <section id="subscribe" class="subscribe-section">
    <div class="container-fluid container-subscribe">

      <div class="container-center">
        <div class="col-md-12 col-md-subscribe">
          <h1>Subscribe to our mailing list</h1>
        </div>

        <div class="row">
          <form action="{{ route('subscribe.Post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
          <div class="col-md-5 input-subscribe {{ $errors->has('name') ? 'has-error' : '' }}">
            <input class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" type="text">
            @if($errors->has('name'))
              <span class="help-block">
                <i>* {{$errors->first('name')}}</i>
              </span>
            @endif
          </div>
          <div class="col-md-5 input-subscribe1 {{ $errors->has('email') ? 'has-error' : '' }}">
            <input class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" type="email">
            @if($errors->has('email'))
              <span class="help-block">
                <i>* {{$errors->first('email')}}</i>
              </span>
            @endif
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-subscribe">Submit</button>
          </div>
          </form>
        </div>
      </div>

    </div>
  </section>
  <div class="clearfix"></div>

  <section id="findus" class="findus-section">

    <div class="container-fluid container-find">

        <div class="container">

        <div class="boxed container-center">
          <h1>brewing soon</h1>
        </div>
          <h3>october 2016</h3>
        <div class="clearfix"></div>

        <div class="container-find-address">
          <h4>PIK AVENUE GF #E2, NORTH JAKARTA</h4>
          <h4>GUNAWARMAN #51, SOUTH JAKARTA</h4>
          <br />
          <a href="https://www.instagram.com/tobysestateid/" target="_blank"><img src="img/ig.png" /></a>
        </div>

        </div>
    </div>

  </section><!-- find-section -->
  <div class="clearfix"></div>

  <footer>

    <div class="img-footer"></div>
    <p>© 2016 Toby's Estate Indonesia</p>
    <p>all rights reserved</p>

  </footer>

    <!-- Scrolling Nav JavaScript -->

    <!-- jQuery -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/scrolling-nav.js"></script>
    <script type="text/javascript">
    @if (count($errors) > 0)
      $('#subscribe').section('show');
    @endif
    </script>

</body>

</html>
