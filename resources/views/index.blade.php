<!-- @extends('app')

@section('content')

@endsection -->

<!DOCTYPE html>
<html>
<head>
	<title>Club de Beneficios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<!-- 	<link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">  -->
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="{{ asset('js/js/fontawesome-all.min.js') }}"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg nav-config">
	<div class="container">
		<div class="col-6">
	  		<form class="form-inline">
	  		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
				<button class="nav-link btn-block btn-login">Ingresar</button>
			</div>
		  </div>
	</div>
</nav>


	<!-- Navbar -->
	<!-- <nav class="navbar navbar-expand-lg nav-config">
		<div class="row">
			<div class="col-10 align-self-center">
				<form class="form-inline">
					<input class="form-control mr-sm-2 empty" id="iconified" type="search" placeholder="&#xF002;" aria-label="Search">
				</form>
				</div>
			<div class="col-2">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler-icon fas fa-bars"></i>
				</button>
			</div>
		</div>
			
		<div class="col-12 col-lg-7 col-sm-6 d-inline">
			<ul class="navbar-nav nav-pills social-navbar">
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
		<div class="col-12 col-lg-2 text-right collapse navbar-collapse" id="navbarSupportedContent">
			
		</div>
	</nav>-->

	<!-- Carousel-->
	<div class="container">
		<div class="hero-section">
			<div class="hero-section-text">
				<h1>Titulo</h1>
				<h5>Subtitulo</h5>
			</div>
		</div>
	</div>

	<!-- Main -->
	<div class="container mt-5">
		<div class="box-index">
			<div class="row">
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="my-3">Categoria 1</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más</a>
					</div>
				</div>
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="mt-4">Categoria 2</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="mt-4">Categoria 3</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="mt-4">Categoria 4</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="mt-4">Categoria 5</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
				<div class="col-lg-2 col-6 text-center mt-2">
					<div class="card">
						<h4 class="mt-4">Categoria 6</h4>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<span>Beneficios</span>
						<hr>
						<a href="" data-toggle="modal" data-target="#exampleModal" class="mb-3">Ver más...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Most searched sites -->
	<div class="container mt-4">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Sitios mas buscados</h3>
			</div>
		</div>
		<div class="carousel-container mt-3">
			<div id="slider-carousel" class="owl-carousel">
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-3.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Nombreaaaaaaaaaa</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ex!</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-4.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar A</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, natus. </p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-1.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 chabracter-->
						<h5>Titulo a Mostrar B</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, eaque.</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-2.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar C</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, aspernatur. </p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-3.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar D</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, repellendus!</p>
					</div>
					<div class="align-bottom">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
				<div class="item item-edit">
					<a class="hoverfx" href="#">
						<div class="overlay">
						</div>
						<img src="img/sities/sities-4.png" height="100">
					</a>
					<div class="box-title">
						<!-- title max 50 character-->
						<h5>Titulo a Mostrar E</h5>
					</div>
					<div class="box-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, praesentium!</p>
					</div>
					<div class="">
						<ul class="rating">
							<li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li><li class="star li-config">&starf;</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="customNavigation">
				<a class="btn gray prev"><i class="icon ion-ios-arrow-left"></i></a>
				<a class="btn gray next"><i class="icon ion-ios-arrow-right"></i></a>
			</div>
		</div>
	</div>

	<!-- New benefits -->

	<div class="container my-3">
		<div class="row">
			<div class="col-12 text-center">
				<h3>Nuevos Beneficios</h3>
			</div>
		</div>
		<div class="row my-4">
			<div class="owl-carousel" id="owl-carousel2">
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-1.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div>  
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-2.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-3.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-4.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
				<div> 
					<div class="card">
						<img class="card-img-top" src="img/coupons/coupons-5.jpg" height="150" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<a href="" class="btn btn-edit-blue pull-right">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</body>
<footer class="footer-edit">
	<div class="row align-items-center m-0">
		<div class="col-lg-6 text-center">
			<a class="social-footer" href="#"><i class="fab fa-instagram fa-2x"></i></a>
			<a class="social-footer" href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
			<a class="social-footer" href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
		</div>
		<div class="col-lg-6 col-12">
			<span>Todos los derechos reservados</span>
		</div>
	</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script><script src="https://use.fontawesome.com/7886bdfbdc.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<!-- <script src="{{ asset('owlcarousel/owl.carousel.js') }}"></script>
 --><script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</html>