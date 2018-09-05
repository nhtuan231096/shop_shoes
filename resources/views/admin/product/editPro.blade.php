@extends('layouts.admin')
@section('title','Sản phẩm')
@section('links','Sản phẩm')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Cập nhật sản phẩm</h3>
  </div>
  <div class="panel-body">
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <form action="" method="POST" role="form" enctype="multipart/form-data">
    
      <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$pro->name}}" placeholder="Nhập tên sản phẩm">
        @if($errors->has('name'))
        <div class="help-block">
          {{$errors->first('name')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="">Đường dẫn tĩnh</label>
        <input type="text" class="form-control" name="slug" id="slug" value="{{$pro->slug}}" placeholder="Nhập đường dẫn tĩnh">
        @if($errors->has('slug'))
        <div class="help-block">
          {{$errors->first('slug')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="">Danh mục</label>
        <select name="category_id" id="inputCategory_id" class="form-control">
          <option value="">Chọn danh mục</option>
          @foreach($cates as $cate)
          <?php $selected=$cate->id==$pro->category_id ? "Selected":""; ?>
          <option {{$selected}} value="{{$cate->id}}">{{$cate->name}}</option>
          @endforeach
        </select>
        @if($errors->has('category_id'))
        <div class="help-block">
          {{$errors->first('category_id')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="file_upload" id="">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="thumbnail">
            <img width="300px" src="{{url('uploads/product')}}/{{$pro->image}}" alt="image">
          </a>
        </div>
        @if($errors->has('file_upload'))
        <div class="help-block">
          {{$errors->first('file_upload')}}
        </div>
        @endif
      </div>
      <div class="clearfix"></div>
      <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" id="" value="{{$pro->price}}" placeholder="Nhập giá sản phẩm">
        @if($errors->has('price'))
        <div class="help-block">
          {{$errors->first('price')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="">Giá sale sản phẩm</label>
        <input type="text" class="form-control" name="sale_price" value="{{$pro->sale_price}}" id="" placeholder="Nhập giá sale sản phẩm">

      </div>
      <div class="form-group">
        <label for="">Trạng thái</label>
        <select name="status" id="inputStatus" class="form-control">
          @if($pro->status==1)
          <option selected value="1">Hiển thị</option>
          <option value="0">Ẩn</option>
          @else
          <option value="1">Hiển thị</option>
          <option selected value="0">Ẩn</option>
          @endif
        </select>
      </div>
      @csrf
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
  </div>
</div>
@stop()