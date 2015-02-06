@extends('layouts.master')


@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap-markdown.min.css">

@stop

@section('content')

    <h1> Posts!</h1>


    {{ Form::open(array('action' => 'PostsController@store', 'method' => 'post')) }}


		@include('posts.form')	


	{{ Form::submit('Create Post', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}

@stop

@section('bottom-script')

<script src= "/js/bootstrap-markdown.js"></script>

@stop
