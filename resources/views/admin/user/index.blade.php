@extends('layouts.admin')
@section('title','Tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách tài khoản</h3>
  </div>
  <div class="panel-body">
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <a class="btn btn-md btn-default" href="{{route('addUser')}}">Thêm mới tài khoản</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Level</th>
          <th>Ngày tạo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->level}}</td>
          <td>{{$user->created_at}}</td>
          <td>
            <a class="fa fa-edit btn btn-xs btn-primary" href="{{route('editUser',['id'=>$user->id])}}"></a>
            <a class="fa fa-trash btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không??')" href="{{route('deleteUser',['id'=>$user->id])}}"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop()