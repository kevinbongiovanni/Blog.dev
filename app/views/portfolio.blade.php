@extends('layouts.master')

@section('content')

    <h1> This is my awesome portfolio!</h1>

    <ul>
    	<li>HTML</li>
    	<li>CSS</li>
    </ul>

    <a href="{{ action('HomeController@showResume') }}">Click this to go to my Resume</a>

@stop