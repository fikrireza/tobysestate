<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Toby's Estate Indonesia</title>
    <link rel="shortcut icon" href="#">

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./fonts/fonts.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">


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
    <div class="container">
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
                <!-- <li><a class="page-scroll" href="#menu">Menu</a></li> -->
                <li><a class="page-scroll" href="#findus">Location</a></li>
                <li><a class="page-scroll" href="#">Career</a></li>
                <li><a class="" href="mailto:tobysestate@normi.co.id">Contact Us</a></li>
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
              <li><a class="page-scroll" href="{{ route('index')}}#home">Home</a></li>
              <li><a class="page-scroll" href="{{ route('index')}}#about">About</a></li>
              <li><a class="page-scroll" href="{{ route('index')}}#gallery">Gallery</a></li>
              <!-- <li><a class="page-scroll" href="#menu">Menu</a></li> -->
              <li><a class="page-scroll" href="{{ route('index')}}#findus">Location</a></li>
              <li class="active"><a class="page-scroll" href="#career">Career</a></li>
              <li><a class="" href="mailto:tobysestate@normi.co.id">Contact Us</a></li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
  </nav>
  <!-- Navigation -->

	<section id="career" class="career-section">

    <div class="container-fluid container-career">
      <div class="container">

        <div class="col-md-12 col-md-career">
          <img src="{{ asset('img/logo-career.png') }}" class="logo-career" />
          <ul class="square">
            <li>Brand, Marketing, and Promotion Manager <a href="" class="btn btn-apply">Submit</a></li>
            <li>Executive Chef <a href="" class="btn btn-apply">Submit</a></li>
            <li>Operational Manager <a href="" class="btn btn-apply">Submit</a></li>
            <li>Sales and Distribution Manager <a href="" class="btn btn-apply">Submit</a></li>
            <li>Restaurant/Cafe/Outlet Manager <a href="" class="btn btn-apply">Submit</a></li>
            <li>Graphic Designer and Social Media Manager <a href="" class="btn btn-apply">Submit</a></li>
          </ul>
        </div>
      </div>
    </div>

  </section><!-- home-section -->
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

</body>

</html>
