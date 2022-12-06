@extends('layouts.admin')

@section('title','Quản lý danh mục')

@section('main')
<a href="{{ route('category.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
            <td>
                <a href="{{route('category.edit', $cat->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
{{$cats->links()}}
@stop()