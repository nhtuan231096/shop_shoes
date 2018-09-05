@extends('layouts.admin')
@section('title','Tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Sửa thông tin tài khoản</h3>
  </div>
  <div class="panel-body">
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <a class="btn btn-md btn-default fa fa-long-arrow-left" href="{{route('user')}}"></a>
    <form action="" method="POST" role="form">
      <div class="form-group">
        <label for="">Tên</label>
        <input type="text" class="form-control" name="name" id="" value="{{$user->name}}" placeholder="Nhập tên">
        @if($errors->has('name'))
        {{$errors->first('name')}}
        @endif
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" id="" value="{{$user->email}}" placeholder="Nhập email">
        @if($errors->has('email'))
        {{$errors->first('email')}}
        @endif
      </div>
    
      <div class="form-group">
        <label for="">Chọn level</label>
        <select name="level" id="inputLevel" class="form-control">
          <option value="1">admin</option>
          <option value="0">customer</option>
        </select>
      </div>
      @csrf
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
  </div>
</div>
@stop()