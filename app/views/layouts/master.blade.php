<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  @yield('title')
  <meta name="viewport" content="width=device-width">
  @yield('meta')
  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

@yield('topscript')

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/favicon.png">
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand img-responsive" href="index.html"></img></a>
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="index.html"><i class="fa-terminal"></i>Home</a></li>
			<li><a href="blog.html">Blog</a></li>

			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio &amp; Work <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="full-width.html">Full Width</a></li>
				  <li><a href="services.html">Services</a></li>
				  <li><a href="about.html">About</a></li>
				  <li><a href="team.html">Team</a></li>
				  <li><a href="pricing.html">Pricing</a></li>
				  <li><a href="blog.html">Blog Loop</a></li>
				  <li><a href="blog-article.html">Blog Article</a></li>
				  <li><a href="login.html">Log In</a></li>
				  <li><a href="signup.html">Sign Up</a></li>
				  <li><a href="icons.html">Icons</a></li>
				</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="3-column.html">3 Column</a></li>
				  <li><a href="4-column.html">4 Column</a></li>
				  <li><a href="individual-work.html">Individual Work</a></li>
				</ul>
			  </li>
			  <li><a href="contact.php">Hire Ryan</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <!-- <li><a href="login.html">Login</a></li> -->
		  </ul>
		</div><!--/.navbar-collapse -->
	  </div>
	</div>
@yield('content')
	

	
	<!--Bottom Section-->
	<section id="bottom">
	  <div class="container">
		<div class="row margin-40">
		  <div class="col-sm-10 col-sm-offset-1 text-center">
			<p>110 E Houston St, San Antonio, TX 78205 | 210.789-9714  |  <a href="mailto:admin@ryanorsinger.com"><i class="icon-envelope-alt"></i> admin@ryanorsinger.com</a></p>
			<hr>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col-sm-10 col-sm-offset-1 text-center">
			<!--Social Icons-->          
			<ul class="social-icons">
			  <li><a class="Github" href="http://www.github.com/ryanorsinger" target="_blank"><i class="fa fa-github-alt fa-3x"></i></a></li>
			  <li><a class="linkedin" href="http://www.linkedin.com/in/ryanorsinger" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a></li>
			  <li><a class="twitter" href="http://www.twitter.com/orsinger" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
			  <li><a class="google" href="https://plus.google.com/+RyanOrsinger/" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></li>
			  <li><a class="stackoverflow" href="http://stackoverflow.com/users/2690869/ryan-orsinger" target="_blank"><i class="fa fa-stack-overflow fa-3x"></i></a></li>

			  </ul>
		  </div>
		</div>
		
	  </div>
	</section>
	
	
	<section id="footer">
	  <div class="container">
		<div class="row">
		  <div class="col-sm-12 text-center">
			<p>@ Copyright. All Rights Reserved. Created by <a href="http://www.ryanorsinger.com">Ryan Orsinger</a></p>
		  </div>
		</div>
	  </div>
	</section>
	
	
	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	
	<script>
	  !function ($) {
		$(function(){
		  $('#header').carousel()
		})
	  }(window.jQuery)
	</script>

@yield('bottomscript')
   
	</body>
</html>