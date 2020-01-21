<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php if(isset($_GET['pais']) and $_GET['pais']=='holanda'){
	include "holanda.php";
}
else{
?>

<html>
	<head>
		<title>Jirachi Places</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">Jirachi Places</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Bienvenido</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li><a href="contact.html">Contact us</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>Jirachi Places</h2>
						</header>
						<p>Esto es<strong> Jirachi Places</strong>, la nueva mejor
						<br />
						compañia de viajes
						<br />
						<img src="images/pic05.png" height="100" width="100">
						
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Quiero saber más</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-chart-bar"></span>
						<h2>Esto es <strong>jirachi places,</strong> compañía de viajes
						<br />
						Una nueva forma de viajar</h2>
						<p>La política de empresa de  <strong>Jirachi Places</strong> es garantizarle comodidad y seguridad a nuestros clientes.
						<br />
						Una pequeña compañía que está en crecimiento por sus servicios que ofrece,
						y, que se preocupa por la estancia de sus clientes.
						<br />
						¿A que esperas? Apúntate ya.</a>Disfruta</p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>Elija nuestro póximo <strong>destino,</strong> el destino de los estudiantes de la clase SMR2A</h2>
									</header>
									<p>El destino más votado por los estudiantes, será elegido como viaje de fin de curso de este año para los estudiantes de SMR2A</p>
								

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<li><span class="icon fa-clock"><span class="label">Feature 1</span></span></li>
										<li><span class="icon solid fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon solid fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon solid fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon solid fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>



					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Echa un vistazo a nuestros <strong>variados destinos</strong></h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="?pais=holanda" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>Holanda</h3>
										</header>
										<p>Holanda es un pequeño país situado en la desembocadura de varios de los ríos más importantes del continente, un país de llanuras, canales, pólderes y diques, un país que comparte mucha de su historia y geografías con Bélgica y Alemania.Holanda es uno de los países más desarrollados y prósperos del mundo, un país que ha pasado de depender de la agricultura a ser tierra de grandes empresas y avances industriales y tecnológicos. </p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="senegal.php" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Senegal</h3>
										</header>
										<p>Cuando se viaja a Senegal uno no debe dejar de visitar su capital; Dakar. Situado en la punta de una península, esta ciudad vertiginosa se compone la elegancia y el bullicio de la gente. Concurridas calles, mercados y vida nocturna vibrante dibujando un ritmo implacable, pero siempre hay una vía de escape.</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="japon.php" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Japón</h3>
										</header>
										<p>Conocido por ser uno de los destinos más solicitados por los viajeros y lamentablemente en ocasiones descartado por el tópico de ser un país muy caro, Japón es el lugar ideal para conocer y vivir en primera persona, como la tradición más ancestral y la modernidad más extrema, pueden convivir en verdadera armonía.Todo esto, unido a una cultura fascinante y unas gentes increíblemente educadas, hacen de este destino una apuesta segura y un viaje inolvidable.</p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="estados.php" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Estados Unidos</h3>
										</header>
										<p>Se trata de la tercera nación más grande del mundo y está formado por una población multicultural fruto de la inmigración proveniente de todas partes del mundo.Un territorio absolutamente diverso y cambiante, lleno de contrastes, más la gran variedad de culturas y lenguas diferentes, hacen de este país uno de los destinos más interesantes para viajar.</p>
								

				</article>

			

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Jirachi Places</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



<?php
 }
?>