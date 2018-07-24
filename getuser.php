

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','dhimex_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
if ($q == '0') {
  $sql="
  SELECT producto.id,producto.nombre, producto.marca,producto.modelo,producto.descripcion,
  producto.detalles,producto.url_video,producto.url_img,producto.stars, categoria.name_cat AS cat
  FROM producto, categoria WHERE producto.status = 1
  AND categoria.id_cat = producto.id_cat
  ";
}
else {
//  $sql="SELECT * FROM producto WHERE id = '".$q."'";
  $sql= "
  SELECT producto.id,producto.nombre, producto.marca,producto.modelo,producto.descripcion,
  producto.detalles,producto.url_video,producto.url_img,producto.stars, categoria.name_cat AS cat
  FROM producto, categoria WHERE producto.status = 1
  AND categoria.id_cat = producto.id_cat AND categoria.id_cat = ".$q.";
  ";
}
$result = mysqli_query($con,$sql);
$cont = 1;
echo '<section class="ac-container">';
//echo "Mostrando".$sql;
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
//\'
echo '

<div class="contAcordion">
  <input id="ac-'. $cont .'" name="accordion-'. $cont .'" type="radio">
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
  								 <strong>MARCA</strong>'.$row['marca'].'<br>
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
  echo "<div ><b>Lo sentimos, aun no tenemos productos disponibles en esta categoria, <br>

  intente con otra.</b></div>";
}

echo '</section>';
mysqli_close($con);
?>

<!--
<section class="ac-container">
				<div>
					<input id="ac-1" name="accordion-1" type="radio" checked="">
					<label for="ac-1">About us</label>
					<article class="ac-small">
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
					</article>
				</div>
				<div>
					<input id="ac-2" name="accordion-1" type="radio">
					<label for="ac-2">How we work</label>
					<article class="ac-medium">
						<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
					</article>
				</div>
				<div>
					<input id="ac-3" name="accordion-1" type="radio">
					<label for="ac-3">References</label>
					<article class="ac-large">
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
					</article>
				</div>
				<div>
					<input id="ac-4" name="accordion-1" type="radio">
					<label for="ac-4">Contact us</label>
					<article class="ac-large">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
					</article>
				</div>
			</section>

    -->

<style>

</style>


<!--
echo "<table>
<tr>
<th>id</th>
<th>nombre</th>
<th>marca</th>
<th>modelo</th>
<th>detalles</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['marca'] . "</td>";
    echo "<td>" . $row['modelo'] . "</td>";
    echo "<td>" . $row['detalles'] . "</td>";
    echo "</tr>";
}
echo "</table>";
*/

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
-->
