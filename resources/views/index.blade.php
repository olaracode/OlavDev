<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link rel="shortcut icon" href="{{'images/untitled.ico'}}">
		<title>OlavDev</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{'css/main.css'}}" />
		<noscript><link rel="stylesheet" href="{{'/css/noscript.css'}}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="{{route('inicio')}}">OlavDev</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="{{route('inicio')}}">Inicio</a></li>
								<li><a href="generic.html">Portafolio</a></li>
								<li><a href="elements.html">Preguntas Frequentes</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><img src="{{'images/untitled.png'}}" style="height: 78px; width: 78px;"></div>
							<h2>Octavio Lara</h2>
							<p>Diseño y desarrollo web</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="" class="image"><img src="images/web.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Diseño de paginas web</h2>
										<p>
											El diseño de una pagina web es sin duda el elemento mas importante a la hora
											de considerar adquirir una. Un diseño aburrido, barato o muy sobrecargado afecta
											de gran manera la psicología del cliente y del consumidor
										</p>
										<a href="{{route('diseño')}}" class="special">Proceso de diseño</a>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/dev.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Desarrollo Y programación</h2>
										<p>
											Con el area de programación se busca simplificar la vida del propietario de la pagina
											resolviendo problemas o simplificando tareas repetiticas que restan tiempo util a él
											y a sus empleados.
										</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/mob.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">adaptación y funcionalidad</h2>
										<p>
											En la actualidad todo transcurre dentro de el internet, las redes sociales
											funcionan de manera excelente para promocionar tu compañia y tu marca
											pero las paginas web siguen siendo el medio para agilizar las ventas de una compañía
										</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">¿Por qué una página web?</h2>
									<p>
										Una página web va a permitir que los consumidores tengan una manera fácil de
										de ver los productos, sus precios, disponibilidad y especificaciones sin tener
										contacto ni trato directo con los empleados de la empresa/tienda.

									</p>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/acc.png" alt="" /></a>
											<h3 class="major">Facilidad de acceso</h3>
											<p>
												A diferencia de las aplicaciones moviles, las paginas web pueden ser vizualidas desde casi cualquier
												 dispositivo sin importar marca, dimensiones o capacidad de almacenamiento.
											</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/int.jpg"  alt="" /></a>
											<h3 class="major">Uso intuitivo</h3>
											<p>
												Las paginas web son desarrolladas pensando directamente en la comodidad del consumidor
												, así que mantener interfaces sencillas e intuitivas es nuestro objectivo al momento del diseño y desarrollo.
											</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/inv.jpg" alt="" /></a>
											<h3 class="major">Fácil manejo de inventario</h3>
											<p>
												Con una pagina web puedes tener un fácil acceso a tu inventario desde cualquier parte del mundo,
												no importa si estas de vacaciones, o ocupado en otro emprendimiento, manejar tu inventario esta a pocos click de ti.
											</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/inf.jpg" alt="" /></a>
											<h3 class="major">Infinidad de posiilidades</h3>
											<p>
												¿Quieres un portal para que tus clientes puedan ver tus productos? o estas buscando un blog
												 donde puedas invitar usuarios a discutir temas sobre un nicho en especifico. Quizás solo quieres una
												página personal donde ofrecer tus servicios. Cual sea el caso, todo esta al alcance de tus manos.
											</p>
										</article>
									</section>
									<ul class="actions">
										<li><a href="#" class="button">Portafolio</a></li>
									</ul>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Contactanos</h2>
							<p>
								Consulta el precio para la realización de tu pagina web.
							</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Nombre</label>
										<input type="text" name="name" id="name" placeholder="Pedro Perez"/>
									</div>
									<div class="field">
										<label for="email">correo</label>
										<input type="email" name="email" id="email" placeholder="pedroperez@perez.com"/>
									</div>
									<div class="field">
										<label for="message">Consulta</label>
										<textarea name="message" id="message" rows="4" placeholder="Desglosa tu idea"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Enviar" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Octavio Lara<br />
									Matuín Monagas<br />
									Nashville, TN 00000-0000
								</li>
								<li class="icon solid fa-phone">(+58) 414 991 7175</li>
								<li class="icon solid fa-envelope"><a href="#">olav@gmail.com</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/olavcode</a></li>
							</ul>
							<ul class="copyright">
								<li>Diseño y desarrollo: Octavio Lara</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="{{'/js/jquery.min.js'}}"></script>
			<script src="{{'/js/jquery.scrollex.min.js'}}"></script>
			<script src="{{'js/browser.min.js'}}"></script>
			<script src="{{'js/breakpoints.min.js'}}"></script>
			<script src="{{'js/util.js'}}"></script>
			<script src="{{'js/main.js'}}"></script>

	</body>
</html>