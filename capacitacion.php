<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CURRICULUM - DHIMEX</title>
	<link rel="stylesheet" href="style/style.css">
		<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="mySidenav1" class="sidenav1">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="Contlogo">
		<img class="logoHeader" src="image/logo-dhimex.png" alt="Logo Dhimex">
	</div>
	<a href="about.html">NOSOTROS</a>
	<a href="productos.php">PRODUCTOS</a>
	<a href="servicios.html">SERVICIOS</a>
	<a href="capacitacion.php">CAPACITACIÓN</a>
	<a href="contacto.html">CONTACTO</a>
</div>
<div id="main1"  ></div>
		<header id="headerWeb" class="">
			<div class="ContainerHeader">
				<span class="MenuSpan" onclick="openNav()">&#9776;</span>
				<div class="containerLogo">
				  <a href="index.html">
					<img class="logoPage" src="image/logo-dhimex.png" alt="Logo Dhimex">
				  </a>
				</div>
				<div class="topnav" id="myTopnav">
				  <a href="about.html">NOSOTROS</a>
				  <a href="productos.php">PRODUCTOS</a>
				  <a href="servicios.html">SERVICIOS</a>
				  <a class="onFocus" href="capacitacion.php">CAPACITACIÓN</a>
				  <a href="contacto.html">CONTACTO</a>
				  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</div>
			</div>
		<div class="containerNav">
			<ul class="breadcrumb">
			  	<li><a href="index.html">Inicio</a></li>
			  	<li><a href="servicios.html">Servicios</a></li>
				<li>Capacitación</li>
			</ul>
		</div>
	</header><!-- /header -->

	<section id="section" class="">
		<div class="ContTitulo">
			<h1 class="tTittle">CURSOS</h1>
		</div>

		<div class="contContacto">
			<div class="sidenav">
				<div class="vertical-menu">
				  <a href="#" class="activeMenuLat">CATEGORIAS</a>
						<a href="#">Accesorios Hidráulicos </a>
						<a href="#">Bombas</a>
						<a href="#">Calentadores de agua</a>
						<a href="#">Incendio</a>
						<a href="#">Intercambiadores de calor</a>
						<a href="#">Motores</a>
						<a href="#">Refacciones</a>
						<a href="#">Sistemas Hidráulicos</a>
						<a href="#">Software</a>
						<a href="#">Tableros de Fuerza y Control</a>
						<a href="#">Tanques</a>
						<a href="#">Tratamiento de Agua</a>
				</div>
				<div class="vertical-menu">
				  <a href="#" class="activeMenuLat">INFORMACIÓN</a>
						<a href="about.html">ACERCA DE NOSOTROS</a>
						<a href="curriculum.html">DHIMEX EN NUMEROS</a>
						<a href="servicios.html">SERVICIOS</a>
						<a href="productos.php">CÁTALOGO</a>
						<a href="#">CAPACITACIÓN</a>
						<a href="aviso-de-privacidad.html">AVISO DE PRIVACIDAD</a>
				</div>
			</div>

			<div class="main">
				<div class="filtrerCursos">
					<div id="myBtnFilContainer">

					  <button class="fbtn txtMenuCurso active" onclick="filterSelection('all')">
					  	VER TODO</button>
					  <button class="fbtn txtMenuCurso" onclick="filterSelection('tecnico')">
					  	<img class="imgT" src="icons/tecnico.png">Curso Técnico</button>

					  <button class="fbtn txtMenuCurso" onclick="filterSelection('comercial')">
					  	<img class="imgT" src="icons/comercial.png">Presentacion Comercial</button>

					  <button class="fbtn txtMenuCurso" onclick="filterSelection('general')">
					  	<img class="imgT" src="icons/general.png">Caracter General</button>

					</div>
				</div>
			<div class="ContTiitle">
				<p class="txtAbout yearCourse">
					CURSOS 2018
				</p>
			</div>

			<div class="container">
				  <?php require 'php/dataCurso.php';?>
<?php
//Inicio de ciclo for para autollenado de cursos
				  for ($i=0; $i <= $noCursos; $i++) {
				  	echo "<!-- 	CONTENEDOR '.$i.' ->  -->";
				}
?>

<!-- INIICO DE CURSO AUTOGENERATE-->
				<div class="filterDiv contDivCurso tecnico">
				  <div class="ContCursoTop">
					<div class="iconCurso">
						<img class="imgStatus" src="icons/on.png">
						<img class="imgType" src="icons/tecnicoB.png">
					</div>
					<div class="tCurso">
						<p class="txtTittleCurso">
							Curso Técnico <br>
							<span class="txtcodeCurso">Introduccion a bombas <br>COD: CT01</span>
						</p>
					</div>
				  </div>
				  <div class="ContCursoCenter">
				  		<p class="txtDescCurso">
							INICIO: 12 de septiembre de 2018 <br>
							<div class="contCoste">
								<span class="txtcodeCurso tamCurso1">
									<img class="imgOK" src="icons/ok.png">VIA WebEx <br>
									<img class="imgOK" src="icons/clock.png">9:00 hrs.
									<br><br>
								</span>
								<span class="txtcodeCurso tamCurso2">
									<ol>
										<li class="curList">TEMARIO:</li>
										<li class="curList">INTRODUCCION</li>
										<li class="curList">DEFINICION</li>
										<li class="curList">¿QUÉ ES EL INSTITUTO DE HIDRAULICA?</li>
										<li class="curList">CLASIFICACION</li>
										<li class="curList">PRINCIPIO DE OPERACIÓN DEL DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">PRINCIPIO DE OPERACIÓN CINETICO</li>
										<li class="curList">SUB DIVISION DE LAS BOMBAS DE DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">TIPOS DE BOMBAS DE DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">SUB DIVISION DE LAS BOMBAS CINETICAS</li>
										<li class="curList">TIPOS DE BOMBAS CINETICAS</li>
										<li class="curList">MODELO, NOMENCLATURA Y TAMAÑO DE BOMBAS</li>
										<li class="curList">CLASIFICACION DE LAS BOMBAS POR SU SENTIDO DE ROTACION</li>
										<li class="curList">CLASIFICACION DE LAS BOMBAS POR SU TIPO DE ACOPLAMIENTO</li>
										<li class="curList">CLASIFICACION DE LAS BOMBAS POR SUS MATERIALES DE CONSTRUCCION</li>
										<li class="curList">CLASIFICACION POR LA CONSTRUCCION </li>
										<li class="curList">Y CARACTERISTICAS DE LA CARCAZA</li>
										<li class="curList">CLASIFICACION POR LA CONSTRUCCION Y CARACTERISTICAS DEL IMPULSOR</li>
										<li class="curList">BOMBA TIPO TURBINA REGENERATIVA</li>
										<li class="curList">BOMBA CENTRIFUGA</li>
										<li class="curList">BOMBA DE NORMA API-610</li>
										<li class="curList">BOMBA DE NORMA ANSI B73.1</li>
									</ol>
								</span>
							</div>
							<div class="txtAddres">
								<img class="imgOK" src="icons/pin.png">
								<span class="txtDirCurso">
									ONLINE
								</span>

							</div>
						</p>
				  </div>
				  <div class="ContCursoBotton">
				  	<a href="contacto.html#form"><button class="button btnAqua btnCurso disponible" style="vertical-align:middle;"><span>INSCRIBIR</span></button></a>
				  </div>
				</div>
				<!-- END DE CURSO AUTOGENERATE-->
			<div class="ContTiitle">
				<p class="txtAbout yearCourse">
					CURSOS 2019
				</p>
			</div>

			<!-- INIICO DE CURSO AUTOGENERATE-->
				<div class="filterDiv contDivCurso tecnico">
				  <div class="ContCursoTop">
					<div class="iconCurso">
						<img class="imgStatus" src="icons/on.png">
						<img class="imgType" src="icons/tecnicoB.png">
					</div>
					<div class="tCurso">
						<p class="txtTittleCurso">
							Curso Técnico <br>
							<span class="txtcodeCurso">Sistemas de Unidades<br>COD: CT02</span>
						</p>
					</div>
				  </div>
				  <div class="ContCursoCenter">
				  		<p class="txtDescCurso">
							INICIO: AÑO 2019 <br>
							<div class="contCoste">
								<span class="txtcodeCurso tamCurso1">
									<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
									<img class="imgOK" src="icons/clock.png">POR DEFINIR
									<br><br>
								</span>
								<span class="txtcodeCurso tamCurso2">
									<ol>
										<li  class="curList">INTRODUCCION</li>
										<li  class="curList">EL “SI” (Le Système International D´unités)</li>
										<li  class="curList">MAGNITUDES BASICAS, SUPLEMENTARIAS Y DERIVADAS</li>
										<li  class="curList">MULTIPLOS Y SUBMULTIPLOS</li>
										<li  class="curList">ESCRITURA DE NUMEROS Y UNIDADES</li>
										<li  class="curList">CONVERSION ENTRE DIFERENTES UNIDADES</li>
										<li  class="curList">CONSTANTES UNIVERSALES</li>
										<li  class="curList">TABLA DE EQUIVALENCIA DE TEMPERATURAS EN DIFERENTES ESCALAS</li>
										<li  class="curList">TABLAS DE CONVERSION</li>
									</ol>
								</span>
							</div>
							<div class="txtAddres">
								<img class="imgOK" src="icons/pin.png">
								<span class="txtDirCurso">
									POR DEFINIR
								</span>

							</div>
						</p>
				  </div>
				  <div class="ContCursoBotton">
				  	<button class="button btnAqua btnCurso disponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
				  </div>
				</div>
				<!-- END DE CURSO AUTOGENERATE-->

			</div>

			</div>
		</div>



		<div class="tbody">

		</div>

	</section>

	<footer id="footer">
		<div class="ContPie">
			<div class="ContEnlaces">
				<div class="ContLinksPie">
					<a href="index.html" "email me"><img class="logoPie" src="image/logo-dhimex.png"></a>
					<p>(+52) 55 • 5356 • 6530 </p>
					<p>contacto@dhimex.com</p>
					<p>Torongil No. 180- A Victorias de las Democracias CDMX. CP 02810</p>
					<a href="contacto.html#form" title="Contactar a DHIMEX">
						<button class="buttonPie" style="vertical-align:middle"><span class="txtBTN">Contacto </span></button></a>
				</div>
				<div class="ContLinksPie borderPie">
					<h3 class="titlePlie">SECTORES DE MERCADO</h3>
					<ul class="linksPies">
						<a href="about.html#sectores" title="Servicios"><li>Construcción Comercial</li></a>
						<a href="about.html#sectores" title="Servicios"><li>Construccion Residencial</li></a>
						<a href="about.html#sectores" title="Servicios"> <li>Indistria Lijera</li></a>
					</ul>
					<h3 class="titlePlie">NUESTROS SERVICIOS</h3>
					<ul class="linksPies">
					  <a href="capacitacion.php" title="Servicios"><li>Capacitación </li></a>
					  <a href="capacitacion.php" title="Servicios"><li>Cursos</li></a>
					  <a href="https://dhimex.webex.com/mw3300/mywebex/default.do?siteurl=dhimex"><li>Conferencias</li></a>
					  <a href="http://epump-flo.com/reg/login.aspx?ReturnUrl=%2fpumpselection%2fstorefront.aspx%3fdirname%3ddhimex&dirname=dhimex" title="">
					  <li>Software</li></a>
					</ul>
				</div>
				<div class="ContLinksPie borderPie">
					<h3 class="titlePlie">ENLACES RÁPIDOS</h3>
					<ul class="linksPies">
					  <a href="" title=""></a><li>Aviso de Privacidad</li>
					  <li>Legal</li>
					  <li>Bolsa de Trabajo</li>
					  <li>Noticias</li>
					</ul>

					<h3 class="titlePlie">Suscribete A Nuestro Newsletter </h3>
					<form class="news" action="index_submit" method="get" accept-charset="utf-8">
						  <div class="input-container">
						    <input class="input-field" type="text" placeholder="Escriba su correo electrónico" name="usrnm">
						    <button class="buttonPie" style="vertical-align:middle"><span class="txtBTN">Enviar </span></button>
						  </div>

					</form>
				</div>
			</div>
			<div class="ContCopy">
				<div class="contRedesFooter">
					<a href="https://www.facebook.com/DhimexDF" title="facebook de dhimex" target="_blank"><img class="imgRedes" src="icons/face.png"></a>
					<a href="https://twitter.com/DhimexDF" title="Twitter de DHIMEX" target="_blank"><img class="imgRedes" src="icons/twitter.png"></a>
					<a href="https://www.youtube.com/user/DhimexVideos/" title="Canal de Youtube de DHIMEX" target="_blank"><img class="imgRedes" src="icons/youtube.png"></a>
				</div>
				2018.© DHIMEX CIudad de México S.A de C.V. Derechos Reservados
			</div>
		</div>
	</footer>

<script src="js/effects.js"></script>
</body>
</html>
