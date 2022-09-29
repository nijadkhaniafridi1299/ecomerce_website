@extends('layout')
@section('content')
    <h1>List Page</h1>
{{--     @if(Session()::get('status'))--}}
         <div class="alert alert-success alert-dismissible fade show" role="alert">
{{--             {{Session::get('status')}}--}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
{{--     @endif--}}

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Resturent Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $items)
            <tr>
                <th scope="row">{{$items->id}}</th>
                <td>{{$items->name}}</td>
                <td>{{$items->addrees}}</td>
                <td>{{$items->email}}</td>
                <td><a href="{{ url('/edit/'.$items->id) }}">edit</a></td>
              </tr>
            @endforeach

            </tbody>
        </table>


@stop
