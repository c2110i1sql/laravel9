@extends('layouts.master')

@section('title','Trang chủ')
@section('main')
<h1 class="text-center">Danh mục</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$cats->links()}}
@stop()