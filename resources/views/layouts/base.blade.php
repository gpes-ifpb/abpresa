<!DOCTYPE html>
<html>
<head>
	<title>ABPRES</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.0.0/sandstone/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
		  	<a class="navbar-brand" href="#">ABPRES</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarColor01">
			    <ul class="navbar-nav mr-auto">
			      	<li class="nav-item active">
			        	<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="/categoria">Categoria</a>
			      	</li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      	<input class="form-control mr-sm-2" type="text" placeholder="Search">
			      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			    </form>
		  	</div>
	  	</div>
	</nav>


	<div class="container" style="padding-top: 20px;">
        @yield('content')
    </div>

</body>
</html>