@extends('layouts.admin')
@section('title','Danh mục')
@section('links','Danh mục')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách danh mục</h3>
  </div>
  <div class="panel-body">
    <form action="" method="GET" class="form-inline" role="form">
    
      <div class="form-group">
        <input type="" class="form-control" name="search" id="" placeholder="Nhập danh mục cần tìm">
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
          <th>Trạng thái</th>
          <th>Ngày tạo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($cates as $cate)
        <tr>
          <td>{{$cate->id}}</td>
          <td>{{$cate->name}}</td>
          <td>{{$cate->slug}}</td>
          <td><span class="label label-primary">{{$cate->status==1?"Hiện":"Ẩn"}}</span></td>
          <td>{{$cate->created_at}}</td>
          <td>
            <a class="btn btn-xs btn-success fa fa-edit" href="{{route('editCate',['id'=>$cate->id])}}"></a>
            <a class="btn btn-xs btn-success fa fa-trash" href="{{route('deleteCate',['id'=>$cate->id])}}"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$cates->links()}}
  </div>
</div>
@stop()