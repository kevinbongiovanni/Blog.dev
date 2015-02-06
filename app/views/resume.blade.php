@extends('layouts.master')

@section('content')

    <h1>  This is my awesome resume! </h1>

    <h3> Info About me! </h3>

    	<p>
    		dhasjdhsajfhajfldfkdfsdjlfdsnfjsdljfns
    	</P>


    <h5> Social Media </h5>

    	<ul>
    		<li> <a href = "https://twitter.com/kevinbonj"> Twitter </a> </li> 
    		<li> <a href = "https://www.facebook.com/kevin.bongiovanni.12">Facebook </a> </li> 
    		<li> <a href = "https://github.com/kevinbongiovanni"> Github </a> </li>
      		<li> <a href = "www.linkedin.com/in/kevinbongiovanni"> LinkedIn </a> </li>

    	</ul>

    <a href="{{ action('HomeController@showPortfolio') }}">Click this to go to my Portfolio</a>

@stop