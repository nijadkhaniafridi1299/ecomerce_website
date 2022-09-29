@extends('layout')
@section('content')
    <h1>Edit Page</h1>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" class="form-control" id="exampleInputPassword1" value="{{$data->id}}" name="id">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->name}}" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$data->email}}">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Address</label>
            <input type="text" class="form-control" name="address" value="{{$data->addrees}}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">update</button>
    </form>
@stop
