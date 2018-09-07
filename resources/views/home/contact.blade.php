@extends('layouts.home')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
				<li class="active">Liên hệ</li>
			</ol>
		</div>
	</div>
<div class="contact">
			<div class="container">
				<h3>Liên hệ</h3>
				
				<div class="contact-grids">
					<div class="contact-form">
							<form action="#" method="post">
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>Tên</span>
										<input type="text" name="name" placeholder="Nhập tên của bạn">
									</div>
									<div class="col-md-4 in-contact">
										<span>Email</span>
										<input type="text" name="email" placeholder="Nhập email của bạn" >
									</div>
									<div class="col-md-4 in-contact">
										<span>Số điện thoại</span>
										<input type="text" name="phonenumber" placeholder="Nhập số điện thoại">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom-top">
									<span>Nội dung</span>
									<textarea  name="message"> </textarea>								
									</div>
								<input type="submit" value="Gửi">
							</form>
						</div>
				<div class="address">
					<div class=" address-more">
						<h2>Địa chỉ</h2>
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<p>Nam Từ Liêm,</p>
								<p>Hà Nội</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>01657555314</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
								<p><a href="mailto:@example.com"> @example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--//content-->
<!--map-->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.78573142009!2d105.73703527508434!3d21.036972293975502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134548dd3130e79%3A0x286ab984e53ad780!2zSMOyZSBUaOG7iywgUGjGsMahbmcgQ2FuaCwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1536293909923" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<!--//map-->
@stop()