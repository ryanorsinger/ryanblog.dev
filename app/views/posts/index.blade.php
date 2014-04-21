@extends('layouts.master')

@section('title')
  <title>Ryan Orsinger's Blog: </title>
@stop

@section('meta')
  <meta name="keywords" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">
  <meta name="description" content="">
@stop

@section('style')
@stop

@section('topscript')
@stop


@section('content')    

    <!--Content-->
    <section id="page-title" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>Blog</h3>
          </div>
        </div>
      </div>
    </section>
      
      
    <!--Content-->      
    <section id="content2" class="section">
      <div class="container">
        <div class="row">
          
          <!--Column One-->
          <div class="col-sm-8">
            
            <!--Blog Post-->
            <article class="blog-post margin-60">
              <div class="date-container">May <span class="day">28</span></div>
              <img src="img/pic1.jpg" class="img-responsive" alt="Title">
              <h3>Title Will Go Here</h3>
              <p>Created by <strong><em>Company Name</em></strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br />
              <a class="btn-main" href="blog-article.html"><i class="fa fa-chevron-right"></i> More</a>
            </article>
            
            <!--Blog Post-->
            <article class="blog-post margin-60">
              <div class="date-container">Apr <span class="day">18</span></div>
              <img src="img/pic2.jpg" class="img-responsive" alt="Title">
              <h3>Title Will Go Here</h3>
              <p>Created by <strong><em>Company Name</em></strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br />
              <a class="btn-main" href="blog-article.html"><i class="fa fa-chevron-right"></i> More</a>
            </article>
            
            <!--Blog Post-->
            <article class="blog-post margin-60">
              <div class="date-container">Apr <span class="day">04</span></div>
              <img src="img/pic3.jpg" class="img-responsive" alt="Title">
              <h3>Title Will Go Here</h3>
              <p>Created by <strong><em>Company Name</em></strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br />
              <a class="btn-main" href="blog-article.html"><i class="fa fa-chevron-right"></i> More</a>
            </article>
            
          </div><!--End Column One-->
          
          <!--Side Bar-->
          <div class="col-sm-4">
            <form class="margin-20">
              <input type="text" placeholder="Search">
            </form>
            
            <br />
            <h3>Side Bar</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            
            <br />
            <h3>Section Title</h3>
              <ul class="list-unstyled side-links">
                <li><a href="#">Link Here</a></li>
                <li><a href="#">Link Here</a></li>
                <li><a href="#">Link Here</a></li>
              </ul>
                          
          </div>
          
        </div><!--End Row-->
        
        <div class="row">
          <div class="col-sm-12 text-left">
              <ul class="list-inline pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
          </div>
        </div>           
                 
      </div>
    </section>
@stop
