@extends('layout')
@section('content')
    <h1>Add Page</h1>
    <form action="/save" method="post">
      @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
