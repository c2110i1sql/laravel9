@extends('layouts.master')

@section('title','Đăng nhập')
@section('main')
<div class="row">
    <div class="col-md-4">
        
        <form action="" method="POST" role="form">
            @csrf
            <legend>Form login</legend>
        
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" name="email" placeholder="Input Email">
            </div>
        
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" name="password" placeholder="Input Password">
            </div>
        
        
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
    </div>
</div>
@stop()