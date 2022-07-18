{{-- @extends('layout.app')
@section('title')

Add New User

@endsection


@section('content')

i am content
@endsection --}}

@extends('layout.app')
@section('title')
    Edit User
@endsection
@section('content')
 
<div class="col-md-4">
<h2 class="text-center">Edit User</h2>


{{-- {!! Form::open(['action' => 'UserController@createUser', 'method' => "POST"]) !!} --}}
{!! Form::open(['action' => "UserController@editUser", 'method' => "POST", "class" => "form-control" ]) !!}
  {{ csrf_field() }}
<div class="form-group">
    {!! Form::hidden("id", $user->id) !!}
    {!! Form::label("", 'Name:', ['class' => 'form-label', ]) !!}
    {!! Form::text("name", $user->name, ['class' => 'form-control', 'Placeholder' =>'Name' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label("", 'Email:', ['class' => 'form-label', ]) !!}
    {!! Form::email("email", $user->email, ['class' => 'form-control', 'Placeholder' =>'Email' ]) !!}
  </div>


  <div class="form-group">
    {!! Form::label("", 'Phone :', ['class' => 'form-label', ]) !!}
    {!! Form::text("phone", $user->phone, ['class' => 'form-control', 'Placeholder' =>'Phone ' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit("Update", ["class" => "btn btn-warning mt-3"]) !!}

  </div>
 {!! Form::close() !!} 
</div>
 @endsection

     