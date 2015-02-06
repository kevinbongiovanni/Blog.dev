@extends('layouts.master')

@section('content')


<h1> What seems to be the issue? </h1>


  
    {{ Form::open(array('action' => 'PostsController@store', 'method' => 'post')) }}


	{{ Form:: label('title', 'First Name') }}
		<br>
	
	{{ Form:: text('title', Input::old('title'),  array('class' => 'form-control')) }}
		<br>
	
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}

		<br>

{{ Form:: label('title', 'Last Name') }}
		<br>
	
	{{ Form:: text('body', Input::old('body'), array('class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '4')) }}
	
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}

		<br>

	{{ Form::submit('Submit', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}

@stop