//FUNCIONES PARA NUEVO REGISTRO
//global variable
var tipoServicio;

function newUser(){
  getfocus();
  OcultarICliente();
}

function getfocus() {
    document.getElementById("nombreClienteI").focus();
}

function OcultarICliente(){
//  Nuevo Usiario
    document.getElementById('iUser').style.display ='none';
    document.getElementById('formUserIn').style.display ='initial';
    document.getElementById('tblAgregadosInicial').style.display ='initial';
    document.getElementById('btnGenCot').style.display ='initial';
    document.getElementById('formSoc').style.display ='initial';
    document.getElementById("nombreClienteI").focus();
}
function MostrarICliente(){
    document.getElementById('iUser').style.display = 'flex';
    document.getElementById("txtidUser").focus();
    document.getElementById('formUserIn').style.display ='none';
    document.getElementById('tblAgregadosInicial').style.display ='none';
    document.getElementById('btnGenCot').style.display ='none';
    document.getElementById('formSoc').style.display ='none';
}

function verificaFecha(){
    var fecha = document.getElementById('date').value;
    var dias=["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];
    var dt = new Date(fecha);
    var nomDia = dias[dt.getUTCDay()];
    return nomDia
}

//Operaciones de cotizador SE PRESIONO EL BOTON DE AGREGAR
function addService(){
  var hi = document.getElementById('horaIni').value;
  var hf = document.getElementById('horaEnd').value;
  var getSocial = document.getElementById('razon').value;
  
  verificaFecha();
  var horas = calculaHoras(hi,hf);
  var dia =  verificaFecha();
  if (horas <= 0 || isNaN(horas) || dia===undefined  || getSocial==='' ) {
    alert("Verifique los datos de Fecha y la horas");
  } else {
  //  alert(hf+"-"+hi+"="+horas);
  
  var total = dameCosto(dia,horas,hi);
  //Seleccionando la direccion
  var edo = document.getElementById("estados");
  var edoSelect = edo.options[edo.selectedIndex].text;

  var mun = document.getElementById("selectMunicipios");
  var munSelect = mun.options[mun.selectedIndex].text;

  var col = document.getElementById("selectColonia");
  var colSelect = col.options[col.selectedIndex].text;

  var CompleteDate = document.getElementById("date").value;

  var DIRECCION = edoSelect + " " + munSelect +" "+ colSelect;
  var FECHA = dia+", "+CompleteDate+" de " + hi +":00hrs. a "+hf+":00 hrs."; 
  var COSTO = "$ "+total+ " USD";
  var hours = horas +" hrs."

    addRowTable(getSocial,DIRECCION,FECHA,COSTO, total, hours,horas);
  }

    document.getElementById('mensaje').innerHTML = "AGREGADOS-->"+ getNoFilas();
;
      
}

function deleteFila(idColumna) {
  //  document.getElementById("tblCotizaciones").deleteRow(idColumna);
    var elem = document.getElementById(idColumna);
    elem.parentNode.removeChild(elem);
    return false;

}


function addRowTable(razon,lugar,fecha,total, TOT,horas, HOURS) {
    var noROws = document.getElementById("tblCotizaciones").rows.length;
    var table = document.getElementById("tblCotizaciones");
    var row = table.insertRow(noROws);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    cell1.innerHTML = razon;
    cell2.innerHTML = lugar;
    cell3.innerHTML = fecha;
    cell4.innerHTML = total;
    cell5.innerHTML = horas;
    //Creando el boron
    cell1.setAttribute("class","tg-mrzz");
    cell2.setAttribute("class","tg-mrzz");
    cell3.setAttribute("class","tg-mrzz");

    cell4.setAttribute("class","tg-mrzz");
    cell4.setAttribute("value",TOT);
    cell4.setAttribute("id","tot"+noROws);

    cell5.setAttribute("class","tg-mrzz");
    cell5.setAttribute("value",HOURS);
    cell5.setAttribute("id","hor"+noROws);

    cell6.setAttribute("class","tg-buh4");
    cell6.innerHTML = "<input value='QUITAR' class='btnClean'  onclick=\"deleteFila('tr"+noROws+"')\"></input>";
    row.setAttribute("id", "tr"+noROws);
}

function calculaHoras(hi, hf){
  var horas = 0;
  horas = parseInt(hf) - parseInt(hi);
  return horas;
}

function dameCosto(dia, horas, horaIni){
  horai = parseInt(horaIni);
  h = parseInt(horas);

  var costoH = 0;
  costoTotal=0;
    if (h>=3) {
     // alert(h+" SON MAS DE 3 HORAS EN " + dia);
      //Se registro mas de tres horas
      //
      switch(dia) {
        case 'domingo':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 6;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 5;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=17)) {
            costoH = 2;
          } else {
            costoH = 0;
          }
        break;
        case 'lunes': case 'martes': case 'miercoles': case 'jueves': case 'viernes':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 4;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 3;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=17)) {
            costoH = 1;
          } else {
            costoH = 0;
          }
        break;
        case 'sabado':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 4;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 3;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=13)) {
            costoH = 1;
          } else
          if ((horai>=14 && horai<=17)) {
            costoH = 2;
          } else {
            costoH = 0;
          }
        break;
        default:
          costoH = 0;
        break;
      }
      costoTotal = costoH *h;
        document.getElementById('mensaje').innerHTML = dia+": "+h+" hrs x $"+costoH+" ===>"+ costoTotal;
    }
    else if (h<3) {
       switch(dia) {
        case 'domingo':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 6;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 5;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=17)) {
            costoH = 2;
          } else {
            costoH = 0;
          }
        break;
        case 'lunes': case 'martes': case 'miercoles': case 'jueves': case 'viernes':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 4;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 3;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=17)) {
            costoH = 1;
          } else {
            costoH = 0;
          }
        break;
        case 'sabado':
          if ((horai>=0 && horai<=5) ||  horai>=23) {
            //Horario de 23 Y 00 - 6 hrs hrs o de
            costoH = 4;
          } else
          if ((horai>=6 && horai<=7)|| (horai>=18 && horai<=21)) {
            costoH = 3;
            // HOrario de 6 a 7 y de 18 a 21
          } else
          if ((horai>=8 && horai<=13)) {
            costoH = 1;
          } else
          if ((horai>=14 && horai<=17)) {
            costoH = 2;
          } else {
            costoH = 0;
          }
        break;
        default:
          costoH = 0;
        break;
      }
      //Se multiplica con el minimo de 3 horas
           costoTotal = costoH *3;
    }
      else{
      alert(h+" ERORR EN HORAS " + dia);
    }

    return costoTotal;
}

// funcion para Cargar Provincias al campo <select>
function cargaEdomex() {
  var array = ["NO esta en Lista","Tlalnepantla","Naucalpan","Tultitlán","Huixquilucan","Nezahualcoyotl"];
  // Ordena el Array Alfabeticamente, es muy facil ;)):
  //array.sort(); ORDENAR ARRAY
  removeOptions(document.getElementById("selectMunicipios"));
  addOptions("selectMunicipios", array,"edomex");
}

// funcion para Cargar Provincias al campo <select>
function cargaDF() {
  var array = ["No está en lista","Azcapotzalco","Coyoacan","Cuajimalpa de Morelos","Gustavo A. Madero","Iztacalco","Iztapalapa","La Magdalena Contreras","Alvaro Obregon","Benito Juarez","Cuauhtemoc","Miguel Hidalgo","Venustiano Carranza","Tlalpan"];
  // Ordena el Array Alfabeticamente, es muy facil ;)):
  removeOptions(document.getElementById("selectMunicipios"));
  addOptions("selectMunicipios", array,"df");
}

// Rutina para agregar opciones a un <select>
function addOptions(domElement, array, whatis) {
 var select = document.getElementsByName(domElement)[0];

 for (value in array) {
  var option = document.createElement("option");
  option.text = array[value];
  select.add(option);
  option.setAttribute("value", value);
  select.setAttribute("value", whatis);
 }
}

function removeOptions(selectbox){
    var i;
    for(i = selectbox.options.length - 1 ; i >= 0 ; i--){
        selectbox.remove(i);
    }
}

////VERIFICADOR DE CASOS


function verficaEstado(idSelect){
  var id = parseInt(idSelect);
  tipoServicio = "F";
  document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;

  //verificamos el id que recibimos para ver si es interior o local
  if (id == 15) {
    document.getElementById('municipios').style.display ='flex';
    document.getElementById('inputColonia').style.display ='none';
    document.getElementById('colonias').style.display ='none';
    tipoServicio = "L";
    cargaEdomex();
      //es local por lo tanto mostramos municipios
  }
  else if (id == 9) {
    document.getElementById('municipios').style.display ='flex';
    document.getElementById('inputColonia').style.display ='flex';
    document.getElementById('colonias').style.display ='none';
    tipoServicio = "L";
    cargaDF();
  }
  else{
    //es foraneo por lo tanto ocultamos municipios y colonias y escribir colonias
    document.getElementById('municipios').style.display ='none';
    document.getElementById('colonias').style.display ='none';
    document.getElementById('inputColonia').style.display ='none';
    tipoServicio = "F";
  }
  document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;
}


//Funcion que verifica si es local el elemento seleccionado
function verficaMunicipio(idSelect){
  var id = parseInt(idSelect);
  var lugar = document.getElementById('selectMunicipios').name;
  tipoServicio = "F";
  document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;

  //verificamos el id que recibimos para ver si es interior o local
 if (id==0 && lugar === 'df') {
    document.getElementById('colonias').style.display ='none';
    document.getElementById('inputColonia').style.display ='flex';
    document.getElementById("inputColonia").focus();
    tipoServicio = "F";
  }
  else if (id==13) {
    //Selecciono Tlalpan
        document.getElementById('colonias').style.display ='flex';
        document.getElementById('inputColonia').style.display ='none';
    tipoServicio = "L";
  }
  else if(id>0) {
    //es lcoal por
    document.getElementById('colonias').style.display ='none';
    document.getElementById('inputColonia').style.display ='none';
        tipoServicio = "L";
  }
  else{
    document.getElementById('colonias').style.display ='none';
    document.getElementById('inputColonia').style.display ='none';
    tipoServicio = "F";
  }

  document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;
}

function verficaColonia(idCol){
    var id = parseInt(idCol);
    tipoServicio = "F";
    document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;

    if(id == 0){
      tipoServicio = "F";
      document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;
    }
    else{
      tipoServicio = "L";
      document.getElementById('mensaje').innerHTML = "Servicio-->"+ tipoServicio;
    }
}

function getNoFilas() {
      var nFilas = $("#tblCotizaciones tr").length;
      var regresaNoFilas = nFilas-1
      //var nColumnas = $("#mi-tabla tr:last td").length;
      //var msg = "Filas: "+nFilas+" - Columnas: "+nColumnas;
      var msg = "FILLLASS: "+regresaNoFilas;
     // alert(msg);
      return regresaNoFilas;
}

function  guardaSolicitud(){
  // VAMOS A GUARDAR LA SOLICUTUD
  //Verificar que se tenga al menos un registro
  if (getNoFilas()>=1) {
    //Existe mas de 1 cotizacion, proceso a almacernar las variables
    alert("Si hay mas de un elemento");
  } else {
    alert("Debe agrelar almenos una cotización");
  }
}

//ESCUCHA ATENTO AL CLIC PARA CREAR UN JSON Y ALMACENAR LOS DATOS EN MYSQL


$("#btnGenCot").click(function(){
  var mytabla = []
  $("#tblCotizaciones").find("tbody tr").each(function(index, el) {
    var tr = []
    $(this).find("td").each(function(index, el) {
       tr.push($(this).text())
    });
    mytabla.push(tr)
  });

  localStorage.setItem('cotizaciones', JSON.stringify(mytabla));
  //alert(mytabla);
  //console.log(mytabla);

  var guardado = localStorage.getItem('cotizaciones');

  console.log('jsonDataID: ', JSON.parse(guardado));

})

  $.ajax({
        type: "POST",
        dataType: "json",
        url: "guardaSol.php",
        data: guardado,
        success: function(data){
            alert('Items added');
        },
        error: function(e){
            alert('NO AGREGADOS');
            console.log(e.message);
        }
});
/*

$(function () {
  $("#btnGenCot").click(function () {
      var nFilas = $("#tblCotizaciones tr").length;
      //var nColumnas = $("#mi-tabla tr:last td").length;
      //var msg = "Filas: "+nFilas+" - Columnas: "+nColumnas;
      var msg = "Filas: "+nFilas;
      alert(msg);
    });
});
 */
