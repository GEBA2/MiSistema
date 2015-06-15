<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'stvt');
?>


<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql = "SELECT * FROM inscripcioncandidatos WHERE id ='".$_REQUEST['id']."';";$datos= consultaD($con, $sql,3) ?>
      
       </pre>

<html>
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








<meta charset="utf-8">
<title>Inscripcion candidatos</title>
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.messages.min.js"></script>
<script src="./js/skel-layers.min.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<style type="text/css">
.auto-style1 {
	text-align: center;
	font-size: medium;
}
.auto-style2 {
	text-align: left;
	margin-bottom: 1;
	font-size: 12.0pt;
	line-height: 115%;
	font-family: Arial;
	color: #FFFFFF;
}
p
	{margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	}
.auto-style3 {
	font-size: xx-large;
}
.auto-style4 {
	font-size: x-large;
}
.auto-style5 {
	border-width: 0px;
}
.auto-style6 {
	font-family: Arial;
	color: #FFFFFF;
}
.auto-style7 {
	text-align: center;
}
.auto-style8 {
	text-decoration: underline;
	font-size: large;
}

.google {
  padding: 6px 10px;
  -webkit-border-radius: 2px 2px;
  border-radius: 2px 2px;
  border: solid 1px rgb(153, 153, 153);
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(255, 255, 255)), to(rgb(221, 221, 221)));
  background: gradient(linear, 0% 0%, 0% 100%, from(rgb(255, 255, 255)), to(rgb(221, 221, 221)));
  color: #333;
  text-decoration: none;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  text-shadow: 0px 1px 1px rgba(255,255,255,1);
  -webkit-text-shadow: 0px 1px 1px rgba(255,255,255,1);
  line-height: 1;
  cursor: pointer;
  margin-top: 10px;
  margin-bottom: 15px;

}
div.menu
{
    padding: 4px 0px 4px 8px;
}

div.menu ul
{
    list-style: none;
    margin: 0px;
    padding: 0px;
    width: auto;
}
</style>
</head>
<body >
	<div class="container" style="height: 600px">
		<div id="button" class="auto-style1" style="left: 0px; top: -4px; height: 50px">
		</div>
	<center>
	<table>
	<h1>inscripcioncandidatos</h1>
	<form action="modificarcandidato.php" method="post" id="registro">

<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>


	<center>
<table>
  <tr>

<td>Genero: M<input type="radio" name ="genero" value="Masculino" checked></td>

<td>Genero: F<input type="radio" name ="genero" value="Femenino" checked value='<?php print $datos[0][1]?>'
class="required digits form-control"></td>
<td>Nombre: <input type="text" size="15" maxlength="30" placeholder="Ingrese su nombre" name="Nombre" required autocomplete="on" value='<?php print $datos[0][2]?>'
class="required digits form-control" required="true" onkeypress="return validarLetras(event)"></td>
<td>Apellido: <input  type="text" size="15" maxlength="30"  placeholder="Ingrese su Apellido" name="Apellido" required autocomplete="on" value='<?php print $datos[0][3]?>'
class="required digits form-control" required="true" onkeypress="return validarLetras(event)"></td>
<td>Direccion: <input type="text" size="20" maxlength="30" placeholder="Ingrese su Direccion" name="Direccion" required autocomplete="on" value='<?php print $datos[0][4]?>'
class="required digits form-control"></td>


<td>Departamento:<select name="id_depa" id="departamento" width="120" class="required form-control" required="true" onkeydown="return validarLetras(event)" value='<?php print $datos[0][5]?>'
class="required digits form-control">
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

</tr>
<table>
<tr>
  <td>Municipio:
<Select name="id_muni" id="municipio" class="required form-control" onkeydown="return validarLetras(event)" value='<?php print $datos[0][6]?>'
class="required digits form-control">
        <option value="">Seleccionar...</option>
        <option value="Nada">Nada...</option>
      </select></td>
    <td>DUI: <input type="text" size="20" maxlength="30"  placeholder="Ingrese DUI" Ingrese Departamento name="DUI" onkeydown="return validarNumeros(event)" required autocomplete="on" value='<?php print $datos[0][7]?>'
class="required digits form-control" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);"></td>
      <td><label for="pass">Candidatura:</label>
        <select name="candidatura" value='<?php print $datos[0][8]?>'
class="required digits form-control"> 
          <option >........</option> 
<option value="Independiente">Independiente</option> 
<option value="Partidario">Partidario</option> 
</select> </td>
        <td><label for="pass">Partido:</label>

        <select name="Partido"  value='<?php print $datos[0][9]?>'
class="required digits form-control"> 
          <option value="">........</option> 
<option value="ARENA">ARENA</option> 
<option value="FMLN">FMLN</option> 
<option value="PCN">PCN</option> 
<option value="PDC">PDC</option> 
<option value="CD">CD</option> 
<option value="Otros">Otros</option > 
</select> </td>
          <td><input name = "Coalicion" type="checkbox" value='<?php print $datos[0][10]?>'
class="required digits form-control"> Coalicion</td>
            <td></td>

 </tr> 
</table>

</table>

    

<hr></hr>





</center>

<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar"></center></td>
			<td><center><input type="submit" name="" value="Cancelar" class="google" title="Cancelar"></center></td>
		
		</table>
	</form>
	</center>
	
</div>
</div>
<script type="text/javascript">
    $().ready(function () {
    	$("#registro").validate({});
    });
    $(document).ready(
        function(){
            $("#fechac").datepicker(
                {
                	changeMonth: true,
                	changeYear: true,
                	dateFormat: "yy-mm-dd",
                	showAnim: 'slide'
                }
            );
        }
  )
	</script>
	</body>
</html>