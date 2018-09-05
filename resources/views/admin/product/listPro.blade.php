@extends('layouts.admin')
@section('title','Sản phẩm')
@section('links','Sản phẩm')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách sản phẩm</h3>
  </div>
  <div class="panel-body">
    <form action="" method="GET" class="form-inline" role="form">
    
      <div class="form-group">
        <input type="" class="form-control" name="search" id="" placeholder="Nhập sản phẩm cần tìm..">
      </div>
      @csrf
      
    
      <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Đường dẫn tĩnh</th>
          <th>Ảnh</th>
          <th>Giá</th>
          <th>Giá sale</th>
          <th>Danh mục</th>
          <th>Trạng thái</th>
          <th>Ngày tạo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($pros as $pro)
        <tr>
          <td>{{$pro->id}}</td>
          <td>{{$pro->name}}</td>
          <td>{{$pro->slug}}</td>
          <td>
            <img width="50px" src="{{url('uploads/product')}}/{{$pro->image}}" alt="image">
          </td>
          <td>{{$pro->price}}</td>
          <td>{{$pro->sale_price}}</td>
          <td>{{$pro->category->name}}</td>
          <td><span class="label label-default">{{$pro->status==1?"Hiện":"Ẩn"}}</span></td>
          <td>{{$pro->created_at}}</td>
          <td>
            <a class="btn btn-xs btn-default fa fa-edit" href="{{route('editPro',['id'=>$pro->id])}}"></a>
            <a class="btn btn-xs btn-danger fa fa-trash" onclick="return confirm('Bạn có chắc không??')" href="{{route('deletePro',['id'=>$pro->id])}}"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$pros->links()}}
  </div>
</div>
@stop()