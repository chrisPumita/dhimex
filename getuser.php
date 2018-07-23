

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','dhimex_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
if ($q == '0') {
  $sql="SELECT * FROM producto";
}
else {
  $sql="SELECT * FROM producto WHERE id = '".$q."'";
}
$result = mysqli_query($con,$sql);
$cont = 1;
while($row = mysqli_fetch_array($result)) {
//\'
echo ' NUMERO DE RECORRIDOS:
'.$cont.'
';

$cont++;
}
mysqli_close($con);
?>


<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>



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
