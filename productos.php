<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Productos - DHIMEX</title>
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
				  <a class="onFocus" href="productos.php">PRODUCTOS</a>
				  <a href="servicios.html">SERVICIOS</a>
				  <a href="capacitacion.php">CAPACITACIÓN</a>
				  <a href="contacto.html">CONTACTO</a>
				  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</div>
		</div>
		<div class="containerNav">
			<ul class="breadcrumb">
			  	<li><a href="index.html">Inicio</a></li>
				<li>Productos</li>
			</ul>
		</div>
	</header><!-- /header -->

	<section id="section" class="">
		<div class="ContTitulo">
			<h1 class="tTittle">CATÁLOGO DE PRODUCTOS</h1>
		</div>

		<div class="headerFiltros">
			<div class="ContFiltros">
				<div class="dropdown noBorder">
						<div class="caja">
							<form>
								<select name="users" onchange="showUser(this.value,1)">
									<option value="" selected>MARCAS</option>
									<option value="0">Ver Todas</option>
									<?php require 'php/conecta.php';
										$sql = "SELECT `id_marca`,`name_mar` FROM `marca` ORDER BY `id_marca` ASC ";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result)) {
											echo '<option value="'.$row['id_marca'].'">'.$row['name_mar'].'</option>';
										}
									 ?>
								</select>
							</form>
						</div>
				</div>
					<div class="dropdown noBorder">
						<div class="caja">
							<form>
								<select name="users" onchange="showUser(this.value,2)">
									<option value="" selected>CATEGORÍAS</option>
									<option value="0">Ver Todas</option>
									<?php
										$sql = "SELECT `id_cat`,`name_cat` FROM `categoria` ORDER BY `id_cat` ASC";
										$result = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($result)) {
											echo '<option value="'.$row['id_cat'].'">'.$row['name_cat'].'</option>';
										}
										?>
								</select>
							</form>
						</div>
					</div>
			</div>
			<!--
			<div class="ContFiltros">
		  		<p>MOSTRAR</p>
				<div class="caja">
						<select name="conocimiento">
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
						<option value="50">50</option>
						</select>
		  		</div>
			</div>
		-->
		</div>


		<div id="CatalogoProductos">
			<h2 class="productoMje">MOSTRANDO PRODUCTOS</h2><br>

			<!--*********  AJAX CONT **********-->
			<div id="txtHint" class="ContProd">
				<div ><b>De clic en una categoría para comenzar a buscar</b></div>
	</section>

	<footer id="footer">
		<div class="ContPie">
			<div class="ContEnlaces">
				<div class="ContLinksPie">
					<a href="index.html" "email me"><img class="logoPie" src="image/logo-dhimex.png"></a>
					<p>55 3635-6530</p>
					<p>dhimex-cdmexico@dhimex.com</p>
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
