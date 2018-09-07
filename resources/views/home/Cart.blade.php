@extends('layouts.home')
@section('content')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout</li>
			</ol>
		</div>
	</div>
<!---->
@if($cart->total_amount>0)
<div class="container">
	<div class="check-out">
		<h2>Checkout</h2>
		<div class="">
			@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
			@endif
		</div>
    	    <table >
		  <tr>
			<th>Sản phẩm</th>
			<th>Tên </th>
			<th>Số lượng</th>		
			<th>Giá</th>
			<th>Delivery details</th>
			<th>Thành tiền</th>
			<th></th>
		  </tr>
		  @foreach($cart->items as $item)
		  <tr>
		  <td class=""><a href="single.html" class="at-in"><img src="{{url('uploads/product')}}/{{$item['image']}}" class="img-responsive" alt="image"></a>

			<div class="clearfix"> </div>
		</td>
		<td><h4>{{$item['name']}}</h4></td>
			<td class="check">
				<form action="{{route('update_cart',['id'=>$item['id']])}}" method="GET">
					<input type="text" name="qty" value="{{$item['qty']}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="update">
				</form>
			</td>		
			<td>{{number_format($item['price'])}}đ</td>
			<td>FREE SHIPPING</td>
			<td>{{number_format($item['price']*$item['qty'])}}đ</td>
			<td>
				<a class="btn btn-xs btn-danger" href="{{route('deleteCart',['id'=>$item['id']])}}"></a>
			</td>
		  </tr>
		  @endforeach
	</table>
	<div class="text-center jumbotron">
		<div class="container">
			<h3>Tổng tiền: {{number_format($cart->total_amount)}}đ</h3>
			<a href="{{route('home')}}" class=" to-buy">Tiếp tục mua hàng</a>
			<a href="#" class=" to-buy">Tiến hành thanh toán</a>
			<a href="{{route('clearCart')}}" class=" to-buy">Hủy giỏ hàng</a>
			<div class="clearfix"> </div>
		</div>
	</div>
    </div>
</div>
@else
<div class="jumbotron">
	<div class="text-center container">
		<h2 class="animated wow fadeInRight">Bạn chưa có sản phẩm nào trong giỏ hàng</h2>
		<p class="animated wow fadeInLeft">..</p>
		<p>
			<a href="{{route('home')}}" class="btn btn-default btn-lg animated wow fadeInLeft">Tiếp tục mua hàng</a>
		</p>
	</div>
</div>
@endif
@stop()