@extends('layouts.master')

@section('content')

   <h1> Update Post!</h1>


    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' =>  'put')) }}
    

		@include('posts.form')	


	{{ Form::submit('Save Changes', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}



    
@stop