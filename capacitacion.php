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
	<a href="catalogo.html">PRODUCTOS</a>
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
				  <a href="catalogo.html">PRODUCTOS</a>
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
						<a href="catalogo.html">CÁTALOGO</a>
						<a href="#">CAPACITACIÓN</a>
						<a href="aviso-de-privacidad.html">AVISO DE PRIVACIDAD</a>
				</div>
			</div>

			<div class="main">
				<div class="filtrerCursos">
					<div id="myBtnFilContainer">
						<h1 class="txtCursosEnunciado">*Se otorga acreditacion PDH (Professional Development Hour) junto con diploma</h1>
					</div>
				</div>
			<div class="ContTiitle">
				<p class="txtAbout yearCourse">
					CURSOS 2018
				</p>
			</div>

				  <?php require 'php/dataCurso.php';?>
<?php
//Inicio de ciclo for para autollenado de cursos
				  for ($i=0; $i <= $noCursos; $i++) {
				  	echo "<!-- 	CONTENEDOR '.$i.' ->  -->";
				}
?>

<div class="container">
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
									<img class="imgOK" src="icons/pin.png">
									<span class="txtDirCurso">
										ONLINE
									</span>
								</span>
								<span class="txtcodeCurso tamCurso2">
									<ol>
										TEMARIO:
										<li class="curList">INTRODUCCION</li>
										<li class="curList">DEFINICION</li>
										<li class="curList">¿QUÉ ES EL INSTITUTO DE HIDRAULICA?</li>
										<li class="curList">CLASIFICACION</li>
										<li class="curList">PRINCIPIO DE OPERACIÓN DEL DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">PRINCIPIO DE OPERACIÓN CINETICO</li>
										<li class="curList">SUB DIVISION DE LAS BOMBAS DE DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">TIPOS DE BOMBAS DE DESPLAZAMIENTO POSITIVO</li>
										<li class="curList">SUB DIVISION DE LAS BOMBAS CINETICAS</li>
										<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>
									</ol>
								</span>
							</div>
							<div class="txtAddres">


							</div>
						</p>
				  </div>
				  <div class="ContCursoBotton">
				  	<button class="button btnAqua btnCurso disponible" style="vertical-align:middle;" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
							<span>INSCRIBIR</span></button>
				  </div>
				</div>
				<!-- END DE CURSO AUTOGENERATE-->
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
							INICIO: AÑO 2018 <br>
							<div class="contCoste">
								<span class="txtcodeCurso tamCurso1">
									<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
									<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
									<img class="imgOK" src="icons/pin.png">POR DEFINIR
									<br><br>
								</span>
								<span class="txtcodeCurso tamCurso2">
									<ol>
																				TEMARIO:
										<li  class="curList">INTRODUCCION</li>
										<li  class="curList">EL “SI” (Le Système International D´unités)</li>
										<li  class="curList">MAGNITUDES BASICAS, SUPLEMENTARIAS Y DERIVADAS</li>
										<li  class="curList">MULTIPLOS Y SUBMULTIPLOS</li>
										<li  class="curList">ESCRITURA DE NUMEROS Y UNIDADES</li>
										<li  class="curList">CONVERSION ENTRE DIFERENTES UNIDADES</li>
										<li  class="curList">CONSTANTES UNIVERSALES</li>
										<li  class="curList">TABLA DE EQUIVALENCIA DE TEMPERATURAS EN DIFERENTES ESCALAS</li>
										<li  class="curList">TABLAS DE CONVERSION</li>
										<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

									</ol>
								</span>
							</div>
						</p>
				  </div>
				  <div class="ContCursoBotton">
				  	<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
				  </div>
				</div>
				<!-- END DE CURSO AUTOGENERATE-->
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
								<span class="txtcodeCurso">Principios Hidráulicos<br>COD: CT03</span>
							</p>
						</div>
						</div>
						<div class="ContCursoCenter">
								<p class="txtDescCurso">
								INICIO: AÑO 2018 <br>
								<div class="contCoste">
									<span class="txtcodeCurso tamCurso1">
										<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
										<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
										<img class="imgOK" src="icons/pin.png">POR DEFINIR
										<br><br>
									</span>
									<span class="txtcodeCurso tamCurso2">
										<ol>
											TEMARIO:
											<li  class="curList">HIDRÁULICA	1</li>
											<li  class="curList">FLUIDO</li>
											<li  class="curList">ALTURA BAROMÉTRICA DEL AGUA</li>
											<li  class="curList">PROPIEDADES DE LOS LÍQUIDOS</li>
											<li  class="curList">POTENCIAL HIDROGENO</li>
											<li  class="curList">INFORMACIÓN NECESARIA PARA LOS FABRICANTES DE BOMBAS PARA UNA SELECCIÓN ADECUADA DE MATERIALES</li>
											<li  class="curList">VISCOSIDAD</li>
											<li  class="curList">FUJO DE LIQUIDOS EN TUBERÍAS</li>
											<li  class="curList">FRICCIÓN</li>
											<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

										</ol>
									</span>
								</div>
							</p>
						</div>
						<div class="ContCursoBotton">
							<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
						</div>
					</div>
					<!-- END DE CURSO AUTOGENERATE-->
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
									<span class="txtcodeCurso">Selección y Operación de Bombas Centrífugas<br>COD: CT04</span>
								</p>
							</div>
							</div>
							<div class="ContCursoCenter">
									<p class="txtDescCurso">
									INICIO: AÑO 2018 <br>
									<div class="contCoste">
										<span class="txtcodeCurso tamCurso1">
											<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
											<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
											<img class="imgOK" src="icons/pin.png">POR DEFINIR
											<br><br>
										</span>
										<span class="txtcodeCurso tamCurso2">
											<ol>
																						TEMARIO:
													<li  class="curList">SELECCIÓN DE BOMBAS</li>
													<li  class="curList">FUNDAMENTOS</li>
													<li  class="curList">GASTO</li>
													<li  class="curList">CARGA</li>
													<li  class="curList">POTENCIA (HP)</li>
													<li  class="curList">POTENCIA AL FRENO (BHP)</li>
													<li  class="curList">CARGA NETA DE SUCCION (NPSH)</li>
													<li  class="curList">EFICIENCIA DE LA BOMBA</li>
													<li  class="curList">VELOCIDAD ESPECIFICA</li>
												<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

											</ol>
										</span>
									</div>
								</p>
							</div>
							<div class="ContCursoBotton">
								<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
							</div>
						</div>
						<!-- END DE CURSO AUTOGENERATE-->

			</div>

			<div class="ContTiitle">
				<p class="txtAbout yearCourse">
					CURSOS 2019
				</p>
			</div>


			<div class="container">
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
										<span class="txtcodeCurso">Instalación, Operación y Mantenimiento de Bombas Centrífugas<br>COD: CT05</span>
									</p>
								</div>
							  </div>
							  <div class="ContCursoCenter">
							  		<p class="txtDescCurso">
										INICIO: 2019<br>
										<div class="contCoste">
											<span class="txtcodeCurso tamCurso1">
												<img class="imgOK" src="icons/ok.png">VIA WebEx <br>
												<img class="imgOK" src="icons/clock.png">9:00 hrs.
												<br><br>
												<img class="imgOK" src="icons/pin.png">
												<span class="txtDirCurso">
													ONLINE
												</span>
											</span>
											<span class="txtcodeCurso tamCurso2">
												<ol>
													TEMARIO:
														<li class="curList">INSTRUCCIONES DE PRE-INSTALACION</li>
														<li class="curList">PREPARACIÓN DEL SITIO</li>
														<li class="curList">INSTALACIÓN – BOMBAS HORIZONTALES</li>
														<li class="curList">PASOS DE PRE-ARRANQUE DE LA CAJA DE ESTOPEROS</li>
														<li class="curList">ALINEACION FINAL – APRIETE DE PERNOS</li>
														<li class="curList">TUBERÍA DE SUCCION Y DESCARGA – COMENTARIOS GENERALES</li>
														<li class="curList">REQUERIMIENTOS DE LA TUBERÍA DE SUCCION</li>
													<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>
												</ol>
											</span>
										</div>
										<div class="txtAddres">


										</div>
									</p>
							  </div>
							  <div class="ContCursoBotton">
							  	<a href="contacto.html#form"><button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;"><span>INSCRIBIR</span></button></a>
							  </div>
							</div>
							<!-- END DE CURSO AUTOGENERATE-->
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
										<span class="txtcodeCurso">Principios Termodinámicos e Intercambio de Calor<br>COD: CT06</span>
									</p>
								</div>
							  </div>
							  <div class="ContCursoCenter">
							  		<p class="txtDescCurso">
										INICIO: 2019 <br>
										<div class="contCoste">
											<span class="txtcodeCurso tamCurso1">
												<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
												<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
												<img class="imgOK" src="icons/pin.png">POR DEFINIR
												<br><br>
											</span>
											<span class="txtcodeCurso tamCurso2">
												<ol>
														TEMARIO:
														<li  class="curList">TEORÍA DE LA TRANSFERENCIA DE CALOR</li>
														<li  class="curList">METODO DE CALCULO</li>
														<li  class="curList">APLICACIONES</li>
														<li  class="curList">AGUA / AGUA</li>
														<li  class="curList">AGUA / ACEITE</li>
														<li  class="curList">AGUA / GLICOL</li>
													<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

												</ol>
											</span>
										</div>
									</p>
							  </div>
							  <div class="ContCursoBotton">
							  	<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
							  </div>
							</div>
							<!-- END DE CURSO AUTOGENERATE-->
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
											<span class="txtcodeCurso">Bombeo Booster<br>COD: CT07</span>
										</p>
									</div>
									</div>
									<div class="ContCursoCenter">
											<p class="txtDescCurso">
											INICIO: 2019 <br>
											<div class="contCoste">
												<span class="txtcodeCurso tamCurso1">
													<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
													<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
													<img class="imgOK" src="icons/pin.png">POR DEFINIR
													<br><br>
												</span>
												<span class="txtcodeCurso tamCurso2">
													<ol>
														TEMARIO:
															<li  class="curList">Introducción</li>
															<li  class="curList">Gasto de Diseño por método de Hunter</li>
															<li  class="curList">Gasto de Diseño por método de Ballanco</li>
															<li  class="curList">Presión de Diseño</li>
															<li  class="curList">Parámetros del equipo Booster</li>
															<li  class="curList">Modelo y secuencias de operación</li>
															<li  class="curList">Booster Simplex</li>
															<li  class="curList">Booster Duplex </li>
															<li  class="curList">Booster Triplex</li>
															<li  class="curList">Booster Cuádruplex</li>
														<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

													</ol>
												</span>
											</div>
										</p>
									</div>
									<div class="ContCursoBotton">
										<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
									</div>
								</div>
								<!-- END DE CURSO AUTOGENERATE-->
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
												<span class="txtcodeCurso">ESPECIFICACION GENERAL DE PRODUCTO<br>COD: CT08</span>
											</p>
										</div>
										</div>
										<div class="ContCursoCenter">
												<p class="txtDescCurso">
												INICIO: 2019 <br>
												<div class="contCoste">
													<span class="txtcodeCurso tamCurso1">
														<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
														<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
														<img class="imgOK" src="icons/pin.png">POR DEFINIR
														<br><br>
													</span>
													<span class="txtcodeCurso tamCurso2">
														<ol>
															TEMARIO:
																<li  class="curList">INTRODUCCION</li>
																<li  class="curList">BOMBAS</li>
																<li  class="curList">REGULACION DEL FLUJO</li>
																<li  class="curList">AHORRO DE ENERGIA</li>
																<li  class="curList">SISTEMAS CON CARGA ESTATICA</li>
																<li  class="curList">TABLERO DE FUERZA Y CONTROL DHIMEX</li>
															<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

														</ol>
													</span>
												</div>
											</p>
										</div>
										<div class="ContCursoBotton">
											<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
										</div>
									</div>
									<!-- END DE CURSO AUTOGENERATE-->
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
													<span class="txtcodeCurso">Estándar para la Instalación de Bombas Estacionarias Contra Incendio<br>COD: CT09</span>
												</p>
											</div>
											</div>
											<div class="ContCursoCenter">
													<p class="txtDescCurso">
													INICIO: 2019 <br>
													<div class="contCoste">
														<span class="txtcodeCurso tamCurso1">
															<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
															<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
															<img class="imgOK" src="icons/pin.png">POR DEFINIR
															<br><br>
														</span>
														<span class="txtcodeCurso tamCurso2">
															<ol>
																TEMARIO:
																	<li  class="curList">Introducción</li>
																	<li  class="curList">General</li>
																	<li  class="curList">Bombas centrífugas</li>
																	<li  class="curList">Bombas de flecha tipo turbina vertical</li>
																	<li  class="curList">(Reservado)</li>
																	<li  class="curList">Motor eléctrico para bombas</li>
																	<li  class="curList">Controladores de motores eléctricos y accesorios</li>
																	<li  class="curList">Motor Diesel</li>
																	<li  class="curList">Controlador de motor de combustión</li>
																<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

															</ol>
														</span>
													</div>
												</p>
											</div>
											<div class="ContCursoBotton">
												<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
											</div>
										</div>
										<!-- END DE CURSO AUTOGENERATE-->
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
														<span class="txtcodeCurso">Expansión, Presurización y Control de Aire<br>COD: CT10</span>
													</p>
												</div>
												</div>
												<div class="ContCursoCenter">
														<p class="txtDescCurso">
														INICIO: 2019 <br>
														<div class="contCoste">
															<span class="txtcodeCurso tamCurso1">
																<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
																<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
																<img class="imgOK" src="icons/pin.png">POR DEFINIR
																<br><br>
															</span>
															<span class="txtcodeCurso tamCurso2">
																<ol>
																	TEMARIO:
																		<li  class="curList">Sistemas hidráulicos abiertos y cerrados</li>
																		<li  class="curList">Accesorios hidrónicos</li>
																		<li  class="curList">Dimensionamiento de tanques de expansión</li>
																	<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

																</ol>
															</span>
														</div>
													</p>
												</div>
												<div class="ContCursoBotton">
													<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
												</div>
											</div>
											<!-- END DE CURSO AUTOGENERATE-->
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
															<span class="txtcodeCurso">SISTEMAS HIDRÓNICOS<br>COD: CT12</span>
														</p>
													</div>
													</div>
													<div class="ContCursoCenter">
															<p class="txtDescCurso">
															INICIO: 2019 <br>
															<div class="contCoste">
																<span class="txtcodeCurso tamCurso1">
																	<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
																	<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
																	<img class="imgOK" src="icons/pin.png">POR DEFINIR
																	<br><br>
																</span>
																<span class="txtcodeCurso tamCurso2">
																	<ol>
																		TEMARIO:
																			<li  class="curList">Introducción a Sistemas Hidrónicos</li>
																			<li  class="curList">Componentes básicos del sistema Hidrónico</li>
																			<li  class="curList">Transferencia de calor en sistemas hidrónicos</li>
																			<li  class="curList">Sistemas de carga</li>
																			<li  class="curList">Consideraciones básicas de un sistema de tuberías</li>
																			<li  class="curList">Filosofía de diseño</li>
																			<li  class="curList">Dimensionamiento de tubería</li>
																			<li  class="curList">Medición de gasto</li>
																			<li  class="curList">Materiales de tubería</li>
																		<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

																	</ol>
																</span>
															</div>
														</p>
													</div>
													<div class="ContCursoBotton">
														<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
													</div>
												</div>
												<!-- END DE CURSO AUTOGENERATE-->
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
																<span class="txtcodeCurso">Diseño Primario Secundario<br>COD: CT13</span>
															</p>
														</div>
														</div>
														<div class="ContCursoCenter">
																<p class="txtDescCurso">
																INICIO: 2019 <br>
																<div class="contCoste">
																	<span class="txtcodeCurso tamCurso1">
																		<img class="imgOK" src="icons/ok.png">POR DEFINIR<br>
																		<img class="imgOK" src="icons/clock.png">POR DEFINIR <br>
																		<img class="imgOK" src="icons/pin.png">POR DEFINIR
																		<br><br>
																	</span>
																	<span class="txtcodeCurso tamCurso2">
																		<ol>
																			TEMARIO:
																				<li  class="curList">INTRODUCCIÓN</li>
																				<li  class="curList">PUENTE DE CRUCE (TUBERÍA)</li>
																				<li  class="curList">TUBERÍA COMÚN</li>
																				<li  class="curList">CIRCUITO PRIMARIO</li>
																				<li  class="curList">BOMBA SECUNDARIA</li>
																			<a href="cursos/CT01.pdf" target="_blank" ><li  class="curList">VER MAS</li></a>

																		</ol>
																	</span>
																</div>
															</p>
														</div>
														<div class="ContCursoBotton">
															<button class="button btnAqua btnCurso noDisponible" style="vertical-align:middle;" disabled><span>PRÓXIMAMENTE</span></button>
														</div>
													</div>
													<!-- END DE CURSO AUTOGENERATE-->

						</div>


			</div>
		</div>


		<div id="id01" class="modal">

		  <form class="modal-content animate" action="/action_page.php">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		      <img src="image/logo-dhimex.png" alt="Avatar" class="avatar">
		    </div>

		    <div class="containerForm">
					<div class="">
						<p class="textoForms">
							Datos del Cliente:
						</p>
						<div class="cotizaForm">
							<label for="asunto"><b>*Nombre Completo:</b></label>
							<input class="textCotiza" type="text" placeholder="Nombre completo" name="nombre" required="Please">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>*Telefono Fijo:</b></label>
							<input class="textCotiza" type="tel" placeholder="Telefono Fijo" name="aPaterno" required="Please">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>Celular:</b></label>
							<input class="textCotiza" type="tel" placeholder="Celular" name="aMaterno">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>*Empresa:</b></label>
							<input class="textCotiza" type="text" placeholder="Empresa" name="telefono" required="Please">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>Puesto:</b></label>
							<input class="textCotiza" type="text" placeholder="Puesto" name="telefono" required="Please">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>*Correo Electrónico:</b></label>
							<input class="textCotiza" type="tel" placeholder="Correo Electrónico" name="telefono" required="Please">
						</div>
						<div class="cotizaForm">
							<label for="asunto"><b>CURSO:</b></label>
							<select class="despCurso" name="estados">
								<option value="0">SELECCIONE CURSO</option>
								<option value="CT01">Introduccion a bombas</option>
							</select>
						</div>
					</div>
		    </div>

		    <div class="contBtns" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btncursos">CANCELAR</button>
		      <button type="submit" class="btn btnCotizador btncursos">INSCRIBIRSE</button>
		    </div>
		  </form>
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
<style media="screen">

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.contBtns{
	display: flex;
}

.despCurso{
	position: relative;
width: 69%;
height: 40px;
margin-left: 2%;
display: flex;
margin-top: 15px;
margin-bottom: 15px;
}

.btncursos{
	width: 50%;
	padding: 2%;
	color: aliceblue;
}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
}

.containerForm {
	margin: 0%;
	margin-left: 5%;
	margin-right: 5%;
	margin-bottom: 2%;
	width: 75%;
}

span.psw {
    float: right;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<script src="js/effects.js"></script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
