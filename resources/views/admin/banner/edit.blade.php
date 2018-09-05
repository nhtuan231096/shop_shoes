@extends('layouts.admin')
@section('title','Banner')
@section('links','Banner')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sửa Banner</h3>
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
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" id="" value="{{$banner->name}}" placeholder="Input field">
        @if($errors->has('name'))
        {{$errors->first('name')}}
        @endif
      </div>
      <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="file_upload" id="" placeholder="Input field">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <a href="#" class="thumbnail">
            <img src="{{url('uploads/banner')}}/{{$banner->image}}" alt="image">
          </a>
        </div>
        <div class="clearfix"></div>
        @if($errors->has('file_upload'))
        {{$errors->first('file_upload')}}
        @endif
      </div>
      <div class="form-group">
        <label for="">Liên kết</label>
        <input type="text" class="form-control" name="links" id="" value="{{$banner->links}}" placeholder="Input field">
        @if($errors->has('links'))
        {{$errors->first('links')}}
        @endif
      </div>
      <div class="form-group">
        <label for="">Chú thích 1</label>
        <input type="text" class="form-control" name="caption_1" id="" value="{{$banner->caption_1}}" placeholder="Input field">
        @if($errors->has('caption_1'))
        {{$errors->first('caption_1')}}
        @endif
      </div>
      <div class="form-group">
        <label for="">Chú thích 2</label>
        <input type="text" class="form-control" name="caption_2" id="" value="{{$banner->caption_2}}" placeholder="Input field">
        @if($errors->has('caption_2'))
        {{$errors->first('caption_2')}}
        @endif
      </div>
      <div class="form-group">
        <label for="">Chú thích 3</label>
        <input type="text" class="form-control" name="caption_3" id="" value="{{$banner->caption_3}}" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Chú thích 4</label>
        <input type="text" class="form-control" name="caption_4" id="" value="{{$banner->caption_4}}" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Trạng thái</label>
        <select name="status" id="inputStatus" class="form-control" >
          @if($banner->status==1)
          <option selected value="1">Hiển thị</option>
          <option value="0">Ẩn</option>
          @else
          <option value="1">Hiển thị</option>
          <option selected value="0">Ẩn</option>
          @endif
        </select>
      </div>
    
      @csrf  
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop()