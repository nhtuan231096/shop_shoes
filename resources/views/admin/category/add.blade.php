@extends('layouts.admin')
@section('title','Danh mục')
@section('links','Danh mục')
@section('main')
<a class="fa fa-long-arrow-left btn btn-md btn-default" href="{{route('listCate')}}"></a>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Thêm mới danh mục</h3>
  </div>
  <div class="panel-body">
    <form action="" method="POST" role="form">
    
      <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
        @if($errors->has('name'))
        <div class="help-block">{{$errors->first('name')}}</div>
        @endif
      </div>
      
      <div class="form-group">
        <label for="">Đường dẫn tĩnh</label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="Nhập đường dẫn tĩnh">
        @if($errors->has('slug'))
        <div class="help-block">{{$errors->first('slug')}}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="">Trạng thái</label>
        <select name="status" id="inputStatus" class="form-control">
          <option value="1">Hiện</option>
          <option value="0">Ẩn</option>
        </select>
      </div>
      @csrf
    
      <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
  </div>
</div>
@stop()