@extends('layouts.home')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Products</li>
		</ol>
	</div>
</div>
<!--content-->
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <div class="">
			    	<a href="#" class="thumbnail">
			    		<img class="img-responsive" src="{{url('uploads/product')}}/{{$product->image}}" alt="">
			    	</a>
			    </div>
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2>{{$product->name}}</h2>
							<p>{!!$product->description!!}</p>
							<div class="star-on">
								<ul>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
								</ul>
								<div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div>
							<div class="clearfix"> </div>
							</div>
								@if($product->sale_price>0)
								<label  class="add-to item_price">{{number_format($product->sale_price)}}đ</label>
								<s><label  class="add-to item_price">{{number_format($product->price)}}đ</label></s>
								@else
								<label  class="add-to item_price">{{number_format($product->price)}}đ</label>
								@endif
							<div class="available">
								<h6>Available Options :</h6>
								<ul>
									
								<li>Size:<select>
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select></li>
								<li>Color:
										<select>
										<option>Black</option>
										<option>White</option>
									</select></li>
							</ul>
						</div>
								<a href="{{route('addCart',['id'=>$product->id])}}" class="cart item_add">Thêm vào giỏ hàng</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{url('public')}}/images/pi6.png" alt="" />
						</a>
						<h3><a href="single.html">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{url('public')}}/images/pi7.png" alt="" />
						</a>
						<h3><a href="single.html">Jeans</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{url('public')}}/images/pi.png" alt="" />
						</a>
						<h3><a href="single.html">Palazoo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categories</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accesories</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Best Sellers</h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="{{url('public')}}/images/pr.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="{{url('public')}}/images/pr1.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="{{url('public')}}/images/pr2.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="{{url('public')}}/images/pr3.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
@stop()