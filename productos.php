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
				  <a href="curriculum.html">CURRICULUM</a>
				  <a class="onFocus" href="productos.php">PRODUCTOS</a>
				  <a href="servicios.html">SERVICIOS</a>
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
				    <button class="dropbtn " onclick="myFunctionMenu()">Marcas<i class="fa fa-caret-down"></i></button>
				    <div id="myDropdown" class="dropdown-content">
				      <a href="#">TODAS</a>
				      <a href="#">CMYK MOTORS</a>
				      <a href="#">RGB HIDRAULICA</a>
				    </div>
				</div> 
				<div class="dropdown noBorder">
				    <button class="dropbtn " onclick="myFunctionMenu()">Categorias<i class="fa fa-caret-down"></i></button>
				    <div id="myDropdown" class="dropdown-content sizeDefin">
					    <a href="#">TODAS</a>
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
				</div> 
				
			</div>
			<div class="ContFiltros">
				<p>FILTRAR</p>
				<div class="caja">
						<select name="conocimiento">
						<option value="all">Ver Todos</option>
						<option value="costeMin">Precio: El más bajo primero</option>
						<option value="costeMax">Precio: Mas caros primero</option>
						<option value="nameASC">Nombre del Producto: A a Z</option>
						<option value="nameDES">Nombre del Producto: Z a A</option>
						<option value="stok">Stok</option>
						<option value="RelMin">Menos Relevancia</option>
						<option value="RelMax">Mayor Relevancia</option>
						</select>
		  		</div>
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
<!--*********  CONTENEDOR  de producto **********-->
			<div class="ContProd">
				<button class="accordion"><img class="imgProdIcon" src="image/products/motor_001.png"> BOMBA - Combustion Interna cmyk 2552</button>
				<div class="panel">
					<div class="ConBoxIMGProd">
						<div class="boxIMGProd contenedorIMG">
							<img class="img imgProd" src="image/products/motor_001.png"><br>
						</div>
						<div class="boxTXTProd">
							<h2 class="tService formatTXTDetails">MOTOR DISEDEL</h2><br>
							<p class="txtDetailsPro">
								 <strong>MARCA</strong> DIesel Gasoline		<br>
								Modelo: CY3434				<br>
								FRABRICANTE: CMYK MOTORS 	<br>
							</p><br>
							<button class="button btnAqua" style="vertical-align:middle; margin-left: 30%;"><span>Cotizar</span></button>
						</div>

					</div>
					<div class="ConBoxDetallesProd">

						<div class="detallesContenedor">
							<div class="tabs">

							   <div class="tab">
							       <input type="radio" id="tab-11" name="tab-group-1" checked>
							       <label for="tab-11">Descripción</label>

							       <div class="content">
								    <div class="ContContenidoDescr">
								 		<h3 class="tService formatTXTDetails">Descripcion del producto</h3><br>
								  		<p class="txtDetailsPro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
							       </div> 
							   </div>

							   <div class="tab">
							       <input type="radio" id="tab-12" name="tab-group-1">
							       <label for="tab-12">Detalles Técnicos</label>

							       <div class="content">
									    <h3 class="tService formatTXTDetails">Informacion Técnica</h3><br>
								  		<p class="txtDetailsPro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									  	tempor incididunt ut labore et dolorenderit in voluptate velit esse
									  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							       </div> 
							   </div>

							    <div class="tab">
							       <input type="radio" id="tab-13" name="tab-group-1">
							       <label for="tab-13">Video</label>

							       <div class="content">
										<iframe width="100%" height="400px" src="https://www.youtube.com/embed/N0R2qcnrMDU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br>
									   <h3 class="tService formatTXTDetails">Miral el video del producto</h3><br><br><br>
							       </div> 
							   </div>

							</div>

						</div>
					</div>
				</div>
			</div>
	<!-- END PRODUCTO -->
<!--*********  CONTENEDOR  de producto **********-->
			<div class="ContProd">
				<button class="accordion"><img class="imgProdIcon" src="image/products/motor_001.png"> BOMBA - Combustion Interna cmyk 2552</button>
				<div class="panel">
					<div class="ConBoxIMGProd">
						<div class="boxIMGProd contenedorIMG">
							<img class="img imgProd" src="image/products/motor_001.png"><br>
						</div>
						<div class="boxTXTProd">
							<h2 class="tService formatTXTDetails">MOTOR DISEDEL</h2><br>
							<p class="txtDetailsPro">
								 <strong>MARCA</strong> DIesel Gasoline		<br>
								Modelo: CY3434				<br>
								FRABRICANTE: CMYK MOTORS 	<br>
							</p><br>
							<button class="button btnAqua" style="vertical-align:middle; margin-left: 30%;"><span>Cotizar</span></button>
						</div>

					</div>
					<div class="ConBoxDetallesProd">

						<div class="detallesContenedor">
							<div class="tabs">

							   <div class="tab">
							       <input type="radio" id="tab-21" name="tab-group-2" checked>
							       <label for="tab-21">Descripción</label>

							       <div class="content">
								    <div class="ContContenidoDescr">
								 		<h3 class="tService formatTXTDetails">Descripcion del producto</h3><br>
								  		<p class="txtDetailsPro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
							       </div> 
							   </div>

							   <div class="tab">
							       <input type="radio" id="tab-22" name="tab-group-2">
							       <label for="tab-22">Detalles Técnicos</label>

							       <div class="content">
									    <h3 class="tService formatTXTDetails">Informacion Técnica</h3><br>
								  		<p class="txtDetailsPro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									  	tempor incididunt ut labore et dolorenderit in voluptate velit esse
									  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							       </div> 
							   </div>

							    <div class="tab">
							       <input type="radio" id="tab-23" name="tab-group-2">
							       <label for="tab-23">Video</label>

							       <div class="content">
										<iframe width="100%" height="400px" src="https://www.youtube.com/embed/N0R2qcnrMDU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br>
									   <h3 class="tService formatTXTDetails">Miral el video del producto</h3><br><br><br>
							       </div> 
							   </div>

							</div>

						</div>
					</div>
				</div>
					<div class="ContPag">
						<div class="pagination">
							  <a href="#">&laquo;</a>
							  <a href="#" class="activePage">1</a>
							  <a href="#">2</a>
							  <a href="#">3</a>
							  <a href="#">4</a>
							  <a href="#">5</a>
							  <a href="#">6</a>
							  <a href="#">&raquo;</a>
						</div>
					</div>	
				</div>
			</div>
	<!-- END PRODUCTO -->


<!--
			<button class="accordion">Section 2</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<button class="accordion">Section 3</button>
			<div class="panel">
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
-->
		

	</section>

	<footer id="footer">
		<div class="ContPie">
			<div class="ContEnlaces">
				<div class="ContLinksPie">
					<a href="index.html" "email me"><img class="logoPie" src="image/logo-dhimex.png"></a>
					<p>55 3635-6530</p>
					<p>dhimex-cdmexico@dhimex.com</p>
					<p>Torongil No. 180- A Victorias de las Democracias CDMX. CP 02810</p>
					<button class="buttonPie" style="vertical-align:middle"><span>Contacto </span></button>
				</div>
				<div class="ContLinksPie borderPie">
					<h3 class="titlePlie">SECTORES DE MERCADO</h3>
					<ul class="linksPies">
					  <li>Construcción Comercial</li>
					  <li>Construccion Residencial</li>
					  <li>Indistria Lijera</li>
					</ul>
					<h3 class="titlePlie">NUESTROS SERVICIOS</h3>
					<ul class="linksPies">
					  <li>Capacitación </li>
					  <li>Cursos</li>
					  <li>Conferencias</li>
					  <li>Software</li>
					</ul>
				</div>
				<div class="ContLinksPie borderPie">
					<h3 class="titlePlie">ENLACES RÁPIDOS</h3>
					<ul class="linksPies">
					  <li>Aviso de Privacidad</li>
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
					<img class="imgRedes" src="icons/F_icon.png">
					<img class="imgRedes" src="icons/F_icon.png">
					<img class="imgRedes" src="icons/F_icon.png">
				</div>
				2018.© DHIMEX CIudad de México S.A de C.V. Derechos Reservados 
			</div>
		</div>
	</footer>

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


</body>
</html>