@extends('layouts.master')

@section('title')
	<title>Blog || Ryan Orsinger</title>
@stop

@section('meta')
	<meta name="keywords" content="Ryan Orsinger, ryan orsinger web application developer, san antonio web application developer, process automation">
	<meta name="description" content="Ryan Orsinger web application developer blog for process documation, documenting my approach to problem solving, sharing solutions, and ">
@stop

@section('content') 
    <!--Content-->
    <section id="signup">
      <div class="container">
        <div class="row margin-40">
          
            <div class="col-sm-6 col-sm-offset-3 text-center signup">
              <h3>Log In</h3><br />
              
              <ul class="list-inline social-icons-signup">
      					 <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
      					 <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
      					 <li><a class="google" href="#" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></li>
    					 </ul>
    					 
    					 <p>------------ OR -------------</p>
              
              <form  class="form-horizontal" method="post" action="#">
              {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin', id='signup-form')) }}

          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          			     <span class="add-on"><i class="fa fa-user"></i></span>
          					{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'email address', 'autofocus', 'required')) }}
  							{{ $errors->first('email', '<p><span class="help-block">:message</span><p>') }}
          					<!-- <input type="text" class="input-xlarge" id="fname" name="fname" placeholder="Username"> -->
          				</div>
          			</div>
          		</div>


          		          		          		
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          				<span class="add-on"><i class="fa fa-lock"></i></span>
          					{{ Form::password('password', array('class' => 'input-xlarge', ' placeholder' => 'password', 'required')) }}
							{{ $errors->first('password', '<p><span class="help-block">:message</span><p>') }}
							<p>{{ Form::checkbox('remember', 'remember') }} &nbsp; remember me </p>

          				</div>
          			</div>
          		</div>
          
          		<div class="control-group">
          	      <div class="controls">
          		{{ Form::submit('Sign In', array('class' => "btn btn-lg btn-primary btn-block")) }}
          	       <button type="submit" class="btn-main"><i class="fa fa-sign-in"></i> Log In</button>
				{{ Form::close() }}
          	      </div>
          	      <a class="small-message" href="#"><small>Need An Account?</small></a>
          	  </div>
      

      	  
          </div><!--End Span6-->
          
        </div><!--End Row-->
      </div><!--End Container-->
    </section>
        
@stop