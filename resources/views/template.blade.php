<!DOCTYPE html>
<html>
<head>
	<title>Club de Beneficios</title>
	@include('partials.header')
</head>
<body>

	<!--  <nav class="navbar nav-config">
	<div class="container">
		<div class="col-6">
	  		<form class="form-inline">
	  		  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
	 		 </form>
		</div>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
   			 <i class="fas fa-bars"></i>
  		</button>
		<div class="col-lg-5 col-12">
		  	<ul class="nav nav-pills align-social">
				<li class="nav-item mx-2">
					<a class="nav-link" href="#"><i class="fab fa-instagram fa-2x"></i></a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link" href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
				</li>
		    </ul>
		</div>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<div class="m-auto">
				<a class="nav-link btn btn-block btn-login">Ingresar</a>
			</div>
		  </div>
	</div>
</nav>
 -->
<!-- Navbar -->
@include('partials.navbar')

@yield('content')

<footer class="footer-edit">
	@include('partials.footer')
</footer>

@include('partials.scripts')

</body>
</html>