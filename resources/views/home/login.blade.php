@extends('layouts.home')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
	</div>
<div class="account">
	<div class="container">
		<h2>Account</h2>
		@if(Session::has('success_rg'))
			<h3 class="">{{Session::get('success_rg')}}</h3>
		@endif
		@if(Session::has('error'))
			<h3 class="">{{Session::get('error')}}</h3>
		@endif
		@if(Auth::check())
		<table class="table table-hover animated wow slideInLeft animated">
				<tr>
					<th>Name:</th>
					<td>{{Auth::user()->name}}</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{Auth::user()->email}}</td>
				</tr>
				<tr>
					<th>Phone:</th>
					<td>{{Auth::user()->phone}}</td>
				</tr>
				<tr>
					<th>Address:</th>
					<td>{{Auth::user()->address}}</td>
				</tr>
		</table>
		<div class="text-right slideInRight animated"><a href="{{route('HomeLogout')}}" class="btn btn-md btn-success ">Logout</a></div>
		<div class="clearfix"></div>
		@else
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="#" method="post">

					<span>Email Address</span>
					<input type="text" name="email"> 
				
					<span>Password</span>
					<input type="password" name="password"> 
					<div class="word-in">
				  		<a class="forgot" href="#">Forgot Your Password?</a>
				 		 <input type="submit" value="Login">
				 		 @csrf
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW CUSTOMERS</h4>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="{{route('HomeRegister')}}">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
		@endif
	</div>
</div>
@stop()