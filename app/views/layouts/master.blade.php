<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>

body { padding-top: 70px; }

p { text-indent: 10px;
    font-family:courier;
    font-size:120%;
}
footer {
    font-family: Arial, Helvetica, sans-serif;
    width: 981px;
    margin: 0 auto 8px;
    text-shadow: 0 1px 0px #fff;
    text-align: center;
    font-weight: bold;  
}
h1 {
    text-align: center;
    font-weight: bold;
}

</style>

@yield('top-script')

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">


  	@if (Session::has('errorMessage'))

  		<div class="alert alert-danger">
  			{{{ Session::get('errorMessage') }}}
  		</div>
	@endif

	@if (Session::has('successMessage'))
    	
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}
    	</div>
	@endif


	@yield('content')

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
    
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li> <a href="/posts">Home</a></li>
                <li> <a href="/posts/create">Create New Post</a></li>
                <li> <a href="/users">Users</a></li>
                <li> <a href="/resume">Rèsumè</a></li>
                <li> <a href="/portfolio">Portfolio</a></li>
            </ul>



        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" name = "search" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
    </div>

</nav>
    

</div>

<footer>
  <p>Posted by: Kevin Bongiovanni</p>
  <p> Comments or Concerns? <a href="/submit">Submit Here </a> </p>
  <p>Contact information: <a href="mailto:whoppingbark@gmail.com">
  whoppingbark@gmail.com</a>.</p>
</footer>

@yield('bottom-script')

</body>
</html>