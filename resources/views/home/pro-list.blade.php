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
<div class="products">
	<div class="container">
		<h2>{{$category->name}}</h2>
		<div class="col-md-9">
				@foreach($category->products as $pro)
				<div class="col-md-4 col-md4 bt">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="{{route('view',['slug'=>$pro->slug])}}">
							<img class="img-responsive" src="{{url('uploads/product')}}/{{$pro->image}}" alt="image" />
						</a>
						<h3><a href="{{route('view',['slug'=>$pro->slug])}}">{{$pro->name}}</a></h3>
						<div class="price">
							<h5 class="item_price">{{number_format($pro->sale_price>0?$pro->sale_price:$pro->price)}}đ</h5>
							<a href="{{route('addCart',['id'=>$pro->id])}}" class="item_add">Add To Cart</a>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				@endforeach	
				<div class="clearfix"></div>
		</div>

		<div class="col-md-3 product-bottom">
			<!--categories-->
			<div class=" rsidebar span_1_of_left">
				<h3 class="cate">Danh mục</h3>
				<ul class="menu-drop">
					@foreach($categorys as $cate)
					<li class="item1"><a href="#">{{$cate->name}}</a>
						@if($cate->childs()->count())
						<ul class="cute">
							@foreach($cate->childs as $c)
							<li class="subitem1"><a href="{{route('view',['slug'=>$c->slug])}}">{{$c->name}}</a></li>
							@endforeach
						</ul>
						@endif
					</li>
					@endforeach
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