<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Personaje {{$personaje['name']}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
                <header>
                    <h1><a href="index.html" id="logo">Personajes The Rick and Morty</a></h1>
                </header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
                                <header>
                                    <h2><a href="#">{{$personaje['name']}}</a></h2>
                                    <p>
                                        {{$personaje['species']}}
                                    </p>
                                </header>
                                <a href="#" class="image featured"><img src="{{$personaje['image']}}" alt="" /></a>
								<!--<span class="image main"><img src="images/pic04.jpg" alt="" /></span>
								<h2>Magna feugiat lorem</h2>
								<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis fames ac ante ipsum primis in faucibus.</p>
								<p>Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Consequat leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit enim turpis lorem ipsum dolor sit amet feugiat. Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet est velit quis lorem.</p>
								<h2>Tempus veroeros</h2>
								<p>Cep risus aliquam gravida cep ut lacus amet. Adipiscing faucibus nunc placerat. Tempus adipiscing turpis non blandit accumsan eget lacinia nunc integer interdum amet aliquam ut orci non col ut ut praesent. Semper amet interdum mi. Phasellus enim laoreet ac ac commodo faucibus faucibus. Curae ante vestibulum ante. Blandit. Ante accumsan nisi eu placerat gravida placerat adipiscing in risus fusce vitae ac mi accumsan nunc in accumsan tempor blandit aliquet aliquet lobortis. Ultricies blandit lobortis praesent turpis. Adipiscing accumsan adipiscing adipiscing ac lacinia cep. Orci blandit a iaculis adipiscing ac. Vivamus ornare laoreet odio vis praesent nunc lorem mi. Erat. Tempus sem faucibus ac id. Vis in blandit. Nascetur ultricies blandit ac. Arcu aliquam. Accumsan mi eget adipiscing nulla. Non vestibulum ac interdum condimentum semper commodo massa arcu.</p>-->
							</section>
                        <section>
                            <header>
                                <h3><a href="#">Otros Personajes</a></h3>
                            </header>
                            <div class="row gtr-50">
                                @foreach ($personajes as $personajeAlternativo)
                                    @if($loop->index < 15)
                                        <div class="col-4">
                                            <a href="{{route('detalle.personaje',$personajeAlternativo['id'])}}" class="image fit"><img src="{{$personajeAlternativo['imagen']}}" alt="" /></a>
                                        </div>
                                        <div class="col-8">
                                            <h4>{{$personajeAlternativo['nombre']}}</h4>
                                            <p>
                                                {{$personajeAlternativo['especie']}}
                                            </p>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="row">
                                @foreach ($personajes as $personajeAlterna)
                                    @if($loop->index >= 17)
                                        <article class="col-4 col-12-mobile special">
                                            <a href="{{route('detalle.personaje',$personajeAlterna['id'])}}" class="image featured"><img src="{{$personajeAlterna['imagen']}}" alt="" /></a>
                                            <header>
                                                <h3><a href="#">{{$personajeAlterna['nombre']}}</a></h3>
                                            </header>
                                            <p>
                                                {{$personajeAlterna['especie']}}
                                            </p>
                                        </article>
                                    @endif
                                @endforeach
                            </div>
                        </section>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<!--<section>
							<h2>Aliquam sed mauris</h2>
							<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</section>
						<section>
							<h2>Etiam feugiat</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
								<dt>Phone</dt>
								<dd>(000) 000-0000 x 0000</dd>
								<dt>Email</dt>
								<dd><a href="#">information@untitled.tld</a></dd>
							</dl>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>-->
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
