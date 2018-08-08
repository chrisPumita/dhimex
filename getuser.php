<?php
  header("Content-Type: text/html;charset=utf-8");

  //Utiliza q para saber que se filtro por obtener el ID del filtro
  $q = intval($_GET['q']);
  //se utiliza p para saber que tipo de filtro se realizara, ya sea categoria o marca, esto modificarà el SQL
  $p = intval($_GET['p']);
  //echo "FILTRO P ".$p;
  //echo " Valor Q " .$q;
	require 'php/conecta.php';
  $sql="
  SELECT producto.id,producto.nombre, marca.name_mar as marca,producto.modelo,producto.descripcion,
  producto.detalles,producto.url_video,producto.url_img,producto.stars, categoria.name_cat AS cat
  FROM producto, categoria, marca WHERE producto.status = 1
  AND categoria.id_cat = producto.id_cat AND producto.id_marca = marca.id_marca
  ";
if ($p =='1') {
  // P vale 1 por lo tanto es fultro de marca
  if ($q != '0') {
    // Quiere decir que se envio un ID con marca seleccionada
    $sqlAdd = " AND marca.id_marca = '$q'";
    //Concateno el Query generico mas la condicion agregada
    $sql = $sql."".$sqlAdd;
  }
}
elseif ($p =='2'){
  // P vale 2 por lo tanto es filtro de categoria
  if ($q != '0') {
    // Quiere decir que se envio un ID con marca seleccionada
    $sqlAdd = "AND categoria.id_cat = $q ";
    //Concateno el Query generico mas la condicion agregada
    $sql = $sql."".$sqlAdd;
  }
}
  $con->set_charset("utf8");
  mysqli_select_db($con,"ajax_demo");
  $result = mysqli_query($con,$sql);
  $cont = 1;
  echo '<section class="ac-container">';
  //echo $sql;
  while($row = mysqli_fetch_array($result)) {
    $video = $row['url_video'] ;
    $tab  = "";
    if (empty( $video)) {
      //EN caso de no tener video
      $video = "https://www.youtube.com/embed/5FGzcUIjTe4";
    }
  //SI CONTIENE VIDEO, POR LO TANTO CREAMOS EL TAB QUE LO MIESTRA
    else {
      $tab = '
      <div class="tab">
         <input type="radio" id="tab-'. $cont .'3" name="tab-group-'. $cont .'">
         <label for="tab-'. $cont .'3">Video</label>
         <div class="content">
        <iframe width="100%" height="400px" src="'.$video.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe><br>
         <h3 class="tService formatTXTDetails">Miral el video del producto</h3><br><br><br>
         </div>
     </div>
      ';
    }
  echo '
  <div class="contAcordion">
    <input id="ac-'. $cont .'" name="accordion-1" type="radio">
    <label for="ac-'. $cont .'">
      <img class="imgProdIcon" src="image/products/'.$row['url_img'].'"> '.$row['cat'].' - '.$row['nombre'].'  '.$row['modelo'].'
    </label>
    <article class="ac-small">
    <div class="panel" style="max-height: 657px;">
    					<div class="ConBoxIMGProd">
    						<div class="boxIMGProd contenedorIMG">
    							<img class="img imgProd" src="image/products/'.$row['url_img'].'"><br>
    						</div>
    						<div class="boxTXTProd">
    							<h2 class="tService formatTXTDetails">'.$row['nombre'].'</h2><br>
    							<p class="txtDetailsPro">
    								 <strong>MARCA </strong>'.$row['marca'].'<br>
    								Modelo: '.$row['modelo'].'<br>
    								FRABRICANTE: '.$row['marca'].' 	<br>
    							</p><br>
    							<button class="button btnAqua" style="vertical-align:middle; margin-left: 30%;"><span>Cotizar</span></button>
    						</div>
    					</div>
    					<div class="ConBoxDetallesProd">
    						<div class="detallesContenedor">
    							<div class="tabs">
    							   <div class="tab">
    							       <input type="radio" id="tab-'. $cont .'1" name="tab-group-'. $cont .'" checked="">
    							       <label for="tab-'. $cont .'1">Descripción</label>
    							       <div class="content">
    								    <div class="ContContenidoDescr">
    								 		<h3 class="tService formatTXTDetails">Descripcion del producto</h3><br>
    								  		<p class="txtDetailsPro">'.$row['descripcion'].'.</p>
    									</div>
    							       </div>
    							   </div>
    							   <div class="tab">
    							       <input type="radio" id="tab-'. $cont .'2" name="tab-group-'. $cont .'">
    							       <label for="tab-'. $cont .'2">Detalles Técnicos</label>
    							       <div class="content">
    									    <h3 class="tService formatTXTDetails">Informacion Técnica</h3><br>
    								  		<p class="txtDetailsPro">'.$row['detalles'].'</p>
    							       </div>
    							   </div>
                     '.$tab.'
    							</div>
    						</div>
    					</div>
    				</div>
    </article>
  </div>
  ';
  $cont++;
  //TERMINA CILOO DE LLENADO DE ACORDION
  }
  //En caso de que no encontremos productos
  if ($cont <=1) {
    echo "<div class='contProductoAJAX'>
    <img class='imgAjax'  src='image/no-result.png'>
    <br><b class='txtAjaxCont'>Lo sentimos, aun no tenemos productos disponibles en esta categoria,
    intente con otra.</b> </div>";
  }
  else {
    echo '<div class ="founNumber"><b>Se encontraron '.($cont-1).' productos</b></div>';
  }
  echo '</section>';
  mysqli_close($con);
?>
