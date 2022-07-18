{{-- @extends('layout.app')
@section('title')

Add New User

@endsection


@section('content')

i am content
@endsection --}}

@extends('layout.app')
@section('title')
    Show All User
@endsection
@section('content')
 
<div class="col-md-5">



{{-- {!! Form::open(['action' => 'UserController@createUser', 'method' => "POST"]) !!} --}}


<a href="{{route('/')}}" class="btn btn-success m-2"> Add New User</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- <tr>
            <td>1</td>
            <td>kolade</td>
            <td>kolade@gmail</td>
            <td>06060844</td>
            <td><a href="" class="btn btn-success"> Edit</a></td>
            <td><a href="" class="btn btn-danger"> Delete</a></td>
        </tr> --}}

        @php
              $i =1;
        @endphp

        {{session('success')}}
        @foreach ($users as $user)
      
        <tr>
            <td> {{$i++}} </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{route('edit',[$user->id])}}" class="btn btn-success"> Edit</a></td>
            <td><a href="delete/{{$user->id}}" class="btn btn-danger"> Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
 @endsection

     