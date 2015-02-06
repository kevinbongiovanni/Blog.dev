@extends('layouts.master')

@section('content')

<h3> {{{ $post->title }}} </h3>
<h5>by {{{ $post->user->email }}}</h5>


<div class = "post-body">
	<p> {{ $post->renderBody() }} </p>
	
	@if (Auth::check())
		Logged in as: {{{ Auth::user()->email }}}
		<a href="{{{ action('PostsController@edit', $post->id) }}}" class="pull-right">Edit Post</a>
	
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}

			{{ Form::submit('Delete Post', array('class' => 'btn btn-danger')) }}

		{{ Form::close() }}
	@endif
</div>

@stop
