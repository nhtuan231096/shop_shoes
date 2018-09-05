@extends('layouts.admin')
@section('title','Banner')
@section('links','Banner')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách Banner</h3>
  </div>
  <div class="panel-body">
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
    @endif
    <a class="btn btn-md btn-default" href="{{route('addBanner')}}">Thêm mới Banner</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Ảnh</th>
          <th>Liên kết</th>
          <th>Chú thích 1</th>
          <th>Chú thích 2</th>
          <th>Chú thích 3</th>
          <th>Chú thích 4</th>
          <th>Trạng thái</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($banner as $bn)
          <tr>
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop()