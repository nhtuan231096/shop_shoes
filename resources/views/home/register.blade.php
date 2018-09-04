@extends('layouts.home')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
<div class="container">
	<div class="register">
		<h2>Register</h2>
		  	  <form class="register-but" action="#" method="post">
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>Full Name</span>
						<input type="text" name="name"> 
					 	@if($errors->has('name'))
						<div class="help-block">{{$errors->first('name')}}</div>
					 	@endif
						 <span>Email Address</span>
						 <input type="text" name="email">
						 @if($errors->has('email'))
						<div class="help-block">{{$errors->first('email')}}</div>
					 	@endif 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Password</span>
								<input type="password" name="password">
								@if($errors->has('password'))
								<div class="help-block">{{$errors->first('password')}}</div>
							 	@endif
								<span>Confirm Password</span>
								<input type="password" name="confirm_pass">
								@if($errors->has('confirm_pass'))
								<div class="help-block">{{$errors->first('confirm_pass')}}</div>
							 	@endif
							</div>
					 </div>
					 @csrf
					 <div class="clearfix"> </div>
					 <input type="submit" value="Register">
					 <div class="clearfix"> </div>
				</form>
				
		   </div>
</div>
@stop()