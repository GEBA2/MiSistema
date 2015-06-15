<?php include './clases/Coneccion.php';?>


<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'stvt');
?>


<html>
<title>Inscripcion De candidatos</title>
<head>




<script src="./libs/validacion_text_y_num.js"></script>
<script src="./libs/jquery.validate.min.js"></script>
<script src="./libs/jquery.messages.min.js"></script>
<script src="./libs/skel-layers.min.js"></script>



<script type="text/javascript">

function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}
</script>





<link rel="stylesheet" type="text/css" href="./css/estilo.css">
<meta charset="utf-8">
</head>
<body align="center">
<body bgcolor="white">
<center><img src="img.jpg" width=400 height=150 border=6></center>
<center><h1>Inscripcion De candidatos<h1/></center>
<hr></hr>

<form action="manejadorcandidato.php?accion=save" id="registro" method="post">
<table>
  <tr>
    <td>Genero : M<input type="radio" name ="genero" value="Masculino" checked></td>

    <td>Genero : F<input type="radio" name ="genero" value="Femenino" checked></td>

    <td>Direccion: <input type="text" size="20" maxlength="30" placeholder="Ingrese su Direccion" value="" name="Direccion" required autocomplete="on"></td>

    <td>Departamento:

<select name="id_depa" id="departamento" width="120" class="required form-control" required="true" onkeydown="return validarLetras(event)">
          <option value="algo">Seleccionar...</option>

          <option value="Nada">Nada...</option>
          <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
        </select></td>

    <td></td>

  </tr>
  <tr>
    <td>Nombre: <input type="text" size="15" maxlength="30" placeholder="Ingrese su nombre"  value="" name="Nombre" required autocomplete="on" required="true" onkeypress="return validarLetras(event)"></td>
    <td>Apellido: <input  type="text" size="15" maxlength="30"  placeholder="Ingrese su Apellido" value="" name="Apellido" required autocomplete="on" required="true" onkeypress="return validarLetras(event)"></td>
  </tr>
  <td></td>
  <td></td>
  <tr>
  </tr>

  </table>

<table>
  <tr>
    <td>Municipio:
<Select name="id_muni" id="municipio" class="required form-control" onkeydown="return validarLetras(event)">
        <option value="">Seleccionar...</option>
        <option value="Nada">Nada...</option>
      </select></td>
      <td>DUI: <input type="text" size="20" maxlength="30"  placeholder="Ingrese DUI" Ingrese Departamento value="" name="DUI" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);"></td>
      <td><label for="pass">Candidatura:</label>
        <select name="candidatura"> 
          <option value="">........</option> 
<option value="Independiente">Independiente</option> 
<option value="Partidario">Partidario</option> 
</select> </td>
      <td><label for="pass">Partido:</label>

        <select name="Partido"> 
          <option value="">........</option> 
<option value="ARENA">ARENA</option> 
<option value="FMLN">FMLN</option> 
<option value="PCN">PCN</option> 
<option value="PDC">PDC</option> 
<option value="CD">CD</option> 
<option value="Otros">Otros</option> 
</select> 

</center></td>
<td><input name = "Coalicion" type="checkbox" /> Coalicion</td>




  </tr>

</table>


<hr></hr>

<hr></hr>


     







<style>

nav ul li{
display: inline-block;
margin:4px
}

nav ul li:hover {
	-webkit-transform: rotate(0deg);
}

nav a {
	padding: 4px;
	border: 1px dotted skyblue;
	border-radius:20px;
	background: skyblue;
	color: white;
	text-decoration: none;

}

nav a:hover {
	border: 1px solid skyblue;
	border-radius: 20px; 
	background: white;
	color: skyblue;
	text-decoration: none;

}

</style>


<center>

<nav>
	<ul>



		<li><a href="INDEX.php">Inicio</a>
		
	</ul>

</style>





<center><li><input type="submit" name="bot" value="Registrar" title="REGISTRAR"></a>
</center>
</form>
</body>

</html>