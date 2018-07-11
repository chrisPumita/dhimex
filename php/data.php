<?php 
	$datos = array
	(
		//FORMAT
		//NAME, MAIL, TELEFONO
		/*
				ID NOMBRE 					MARCA PROVE 		MODELO 		CATEGORIA 				DETAIL 1. 2			URL VIDEO. 									STOK STARS COSTE
		*/
		array('001',"MOTOR DIESEL 1",		"CMYK MOTORS",		"CMYK-M01",		"MOTOR",				"lorem","lorem2",	"https://www.youtube.com/embed/N0R2qcnrMDU",100,5,1000.20),
		array('002',"MOTOR DIESEL 2",		"CMYK MOTORS",		"RGB-21",		"MOTOR",				"lorem","lorem2",	"https://www.youtube.com/embed/N0R2qcnrMDU",122,4,39,329.02),
		array('003',"BOMBA HIDRAULICA 123",	"RGB HIDRAULICA",	"KMAS-32CP",	"ACCESORIO HIDRAULICO",	"lorem","lorem2",	"https://www.youtube.com/embed/N0R2qcnrMDU",233,3,234.23)
	);

	  //INICIO DEL CICLO FOR shuffle Mezcla todos los elementos
		$noProductos = count($datos); // muestra no de vendedores
/*

$datos[] = array(0, 'perro', 'negro');
$datos[] = array(1, 'gato', 'blanco'); 
$datos[] = array(2, 'liebre', 'gris'); 
$datos[] = array(3, 'oso', 'marron'); 
 */
 
foreach ($datos as $key => $fila) {
            $animales[$key]  = $fila[1]; // columna de animales
            $colores[$key] = $fila[2]; //columna de colores
        }
 
//ordenamos ascendente por la columna elegida
array_multisort($animales, SORT_ASC, $datos);
print_r($datos); 
print_r("++FITRO+++");
array_filter($datos,"MOTOR");

?>