@extends('layouts.admin')
@section('title','Banner')
@section('links','Banner')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Thêm mới Banner</h3>
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
        <input type="text" class="form-control" name="name" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="file_upload" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Liên kết</label>
        <input type="text" class="form-control" name="links" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Chú thích 1</label>
        <input type="text" class="form-control" name="caption_1" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Chú thích 2</label>
        <input type="text" class="form-control" name="caption_2" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Chú thích 3</label>
        <input type="text" class="form-control" name="caption_3" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Chú thích 4</label>
        <input type="text" class="form-control" name="caption_4" id="" placeholder="Input field">
      </div>
      <div class="form-group">
        <label for="">Trạng thái</label>
        <select name="status" id="inputStatus" class="form-control" >
          <option value="1">Hiển thị</option>
          <option value="0">Ẩn</option>
        </select>
      </div>
    
      @csrf  
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@stop()