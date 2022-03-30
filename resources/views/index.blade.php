<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hackers PROJECT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href=>Hackers PROJECT</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{route('index')}}">Hackers</a></li>
								<li>
									<a href="{{route('grupos')}}">Grupos de Hackers</a>
								</li>

								<li>
									<a href="{{route('postales')}}">API CODIGO POSTALES</a>
									<ul>
										<li><a href="{{route('postales')}}">Zona 1</a></li>
										<li><a href="{{route('postalesdos')}}">Zona 2</a></li>
										<li><a href="{{route('postalestres')}}">Zona 3</a></li>
										<li><a href="{{route('postalcuatro')}}">Zona 4</a></li>
										<li><a href="{{route('postalcinco')}}">Zona 5</a></li>
									</ul>
								</li>




							</ul>
						</nav>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Hackers PROJECT</h2>
								<p>¡Proyecto dedicado a la consulta de informacion sobre Hackers famosos!</p>
							</header>
						</section>

					<!-- Intro -->
						<section id="intro" class="container">
					
						</section>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>Registros de Hackers</h2>
										</header>

									
										<div class="row">

										@foreach($perfiles as $hacks)
									
											<div class="col-4 col-6-medium col-12-large">
											<section class="box">
										
												
													
													<a  class="image featured"><img src="{{$hacks->imagen}}" alt="" /></a>
													<header>
														<h3>{{$hacks->nombre}}</h3>
													</header>
													<p>Especialidad: {{$hacks->datosHackers->nombre}} </p>
													<h1></h1>
													<h1>{{$hacks->bio}}</h1>
													<footer>
													</footer>
											
												</section>
												
											</div>
											
										@endforeach


							

						

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
								</section>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Hackers PROJECT</li><li>Hackers PROJECT CO.</li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>