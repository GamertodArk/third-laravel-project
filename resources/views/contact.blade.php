@extends('layouts.app')

@section('content')
	<h2>Contact Form</h2>
	{!! Form::open(['url' => 'messages/new', 'method' => 'POST']) !!}

		<div class="form-group">
	    	{{Form::label('name', 'Name')}}
	    	{{Form::text('name', '', ['placeholder' => 'Enter Name', 'class' => 'form-control'])}}
		</div>
		
		<div class="form-group">
	    	{{Form::label('email', 'Email')}}
    		{{Form::text('email', '', ['placeholder' => 'Enter Email', 'class' => 'form-control'])}}
		</div>
		
		<div class="form-group">
	    	{{Form::label('message', 'Message')}}
	    	{{Form::textarea('message', '', ['placeholder' => 'Enter Message', 'class' => 'form-control'])}}
		</div>

		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection