<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Productos - DHIMEX</title>
	<link rel="stylesheet" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
		<header id="headerWeb" class="">
		<div class="ContainerHeader">
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
		</div>


		<div id="CatalogoProductos" class="">
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
					<a href="contacto.html#form" title="Contactar a DHIMEX"><button class="buttonPie" style="vertical-align:middle"><span>Contacto </span></button></a>
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
						    <button class="buttonPie" style="vertical-align:middle"><span>Enviar </span></button>
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
<!---->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activeAcordion");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {

      panel.style.maxHeight = panel.scrollHeight + "px";
      //panel.style.maxHeight = "100%";
    }
  });
}
</script>

<!-- AJAX IMPLEMENTED -->
<script>
function showUser(str,fil) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str+"&p="+fil,true);
  xmlhttp.send();
}
</script>

</body>
</html>
