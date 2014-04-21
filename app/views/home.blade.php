@extends('layouts.master')


@section('title')
	<title>Ryan Orsinger | Web Application Developer | San Antonio</title>
	</title>
@stop

@section('meta')
	<meta name="keywords" content="web application developer, san antonio web application developer, ryan orsinger, ryan orsinger web developer">
	<meta name="description" content="Ryan Orsinger">
@stop

@section('style')
	<style>
		
		
	</style>
@stop

@section('topscript')
<script>

</script>
@stop


@section('content')

<!-- Carousel
	Change your images in the main.css file.
	================================================== -->
	<div id="header" class="carousel slide animated fadeIn" data-ride="carousel">
	  
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#header" data-slide-to="0" class="active"></li>
		<li data-target="#header" data-slide-to="1"></li>
		<li data-target="#header" data-slide-to="2"></li>
	  </ol>
	  
	  <div class="carousel-inner">
		<div class="item one active">
		  <div class="container animated fadeInUp">
			<div class="carousel-caption">
			  <h1>Web Development</h1>
			  <p class="lead margin-40"><em>Full Stack Web Application Developement</em></p>
			  <a class="btn-main" href="about.html"><i class="icon-chevron-right"></i> More</a>
			</div>
		  </div>
		</div>
		<div class="item two">
		  <div class="container">
			<div class="carousel-caption">
			  <h1>IT Consulting</h1>
			  <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
			  <a class="btn-main" href="services.html"><i class="icon-chevron-right"></i> More</a>
			</div>
		  </div>
		</div>
		<div class="item three">
		  <div class="container">
			<div class="carousel-caption">
			  <h1>100% Responsive</h1>
			  <p class="lead margin-40"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</em></p>
			  <a class="btn-main" href="pricing.html"><i class="icon-chevron-right"></i> More</a>
			</div>
		  </div>
		</div>
	  </div>
	  <a class="left carousel-control hidden-xs" href="#header" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	  <a class="right carousel-control hidden-xs" href="#header" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div><!-- /.carousel -->
	
	
	<!--Services-->
	<section id="services" class="section">
	  <div class="container">
		<div class="row text-center">
		  
		  <!--Seciton 1-->
		  <div class="col-sm-4 service margin-30">
			<a href="#">
			  <i class="fa fa-code fa-4x gray"></i>
			<h3>Full Stack Development</h3>
			<p>I develop PHP and JavaScript web applications using Laravel, jQuery, and Bootstrap frameworks to program full front-end and back-end functionality.</p>
			<p>For organizations using Microsoft, I develop automation and business intelligence applications with Microsoft SharePoint and Dynamics CRM.</p>
			
			</a>
		  </div>
		  
		  <!--Seciton 2-->
		  <div class="col-sm-4 service margin-30">
			<a href="#">
			  <i class="fa fa-bug fa-4x gray"></i>
			  <h3>Tech Consulting</h3>
			  <p>I start by listening. My interview process with clients helps me understand the needs, constraints, and core business logic necessary to create an appropriate and maintainable solution.</p>
			</a>

		  </div>
		  
		  <!--Seciton 3-->
		  <div class="col-sm-4 service margin-30">
			  <i class="fa fa-code-fork fa-4x gray"></i>
			<a href="#">
			  <h3>Problem Solving</h3>
			  <p>Problem solving begins with caring and executes with persistence, adaptability, and networking to get the right answers. </p>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			</a>

		  </div>
		  
		</div>
	  </div>
	</section>
	
	
	<!--Message Section-->
	<section id="message" class="section">
	  <div class="container">
		<div class="row margin-40">
		  <div class="col-sm-12 text-center">
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.</h2>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col-sm-12 text-center">
			<a class="more" href="about.html"><i class="fa fa-chevron-circle-right fa-2x white"></i></a>
		  </div>
		</div>
	  </div>
	</section>
	
	
	<!--Latest Work-->
	<section id="latest-work" class="section">
	  <div class="container text-center">
		<div class="row">
		  <div class="col-sm-12 margin-40">
			<h3>Latest Work</h3>
		  </div>
		</div>
		  
		<div class="row margin-40">
		  
		  <!--Project Thumbnail One-->
		  <div class="col-sm-4">
			<div class="thumbs">
			  <img src="img/portfolio1.jpg" class="img-responsive" alt="Image Size 430x280">
			  <a href="individual-work.html">
				<span class="title">
				  <span><i class="fa fa-link fa-2x"></i></span>
				</span> 
			  </a>
			</div>
			
			<div class="project-title margin-30">
			  <h4>Breakroom</h4>
			</div>
		  </div>
		  
		  <!--Project Thumbnail Two-->
		  <div class="col-sm-4">
			<div class="thumbs">
			  <img src="img/portfolio2.jpg" class="img-responsive" alt="Image Size 430x280">
			  <a href="individual-work.html">
				<span class="title">
				  <span><i class="fa fa-link fa-2x"></i></span>
				</span> 
			  </a>
			</div>
			
			<div class="project-title margin-30">
			  <h4>White Sneaker</h4>
			</div>
		  </div>
		  
		  <!--Project Thumbnail Three-->
		  <div class="col-sm-4">
			<div class="thumbs">
			  <img src="img/portfolio3.jpg" class="img-responsive" alt="Image Size 430x280">
			  <a href="individual-work.html">
				<span class="title">
				  <span><i class="fa fa-link fa-2x"></i></span>
				</span> 
			  </a>
			</div>
			
			<div class="project-title margin-30">
			  <h4>Theme Armada</h4>
			</div>
		  </div>
		  
		</div><!--End Row of Work-->
		  
		<div class="row">
		  <div class="col-sm-12 text-center">
			<a class="more" href="3-column.html"><i class="fa fa-chevron-circle-right fa-2x gray"></i></a>
		  </div>
		</div>
		
	  </div>
	</section>

@stop

@section('bottomscript')
<script>
	

</script>
@stop
