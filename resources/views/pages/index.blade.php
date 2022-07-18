{{-- @extends('layout.app')
@section('title')

Add New User

@endsection


@section('content')

i am content
@endsection --}}

@extends('layout.app')
@section('title')
    Add New User
@endsection
@section('content')
 
<div class="col-md-4">



{{-- {!! Form::open(['action' => 'UserController@createUser', 'method' => "POST"]) !!} --}}
{!! Form::open(['action' => "UserController@createUser", 'method' => "POST", "class" => "form-control" ]) !!}
  {{ csrf_field() }}
<div class="form-group">
    {!! Form::label("", 'Name:', ['class' => 'form-label', ]) !!}
    {!! Form::text("name", "", ['class' => 'form-control', 'Placeholder' =>'Name' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label("", 'Email:', ['class' => 'form-label', ]) !!}
    {!! Form::email("email", "", ['class' => 'form-control', 'Placeholder' =>'Email' ]) !!}
  </div>


  <div class="form-group">
    {!! Form::label("", 'Phone :', ['class' => 'form-label', ]) !!}
    {!! Form::text("phone", "", ['class' => 'form-control', 'Placeholder' =>'Phone ' ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit("Add User", ["class" => "btn btn-success mt-3"]) !!}

  </div>
 {!! Form::close() !!} 
</div>
 @endsection

     