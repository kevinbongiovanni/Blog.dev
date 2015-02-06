@extends('layouts.master')

@section('content')
  
    <div class = "page-header">
    <h1> Blog Posts!</h1>
  </div>

   @foreach ($posts as $post)

    	<h2>	{{ $post->title }}	</h2>
      <h6>by {{{ $post->user->email }}} </h6>
<!-- <br>
    	<blockquote> -->

      <p> {{ $post->renderBody() }} </p>

    	<small>  Created : {{  $post->created_at->diffForHumans() }}</small>
      <br>
      <small> Last Updated : {{  $post->updated_at->diffForHumans() }}</small>

    	<!-- <a href= "{{{ action('PostsController@edit', $post->id) }}}" > Edit the Page!</a> -->

    	<p><small>{{ link_to_action('PostsController@show', 'Read More!', $post->id) }} </small></p>

   		<!-- </blockquote> -->


   	@endforeach




   {{ $posts->appends(array('search' => Input::get('search')))->links() }}

@stop