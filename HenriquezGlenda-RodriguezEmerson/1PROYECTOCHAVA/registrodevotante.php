



<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'stvt');
?>
<?php include './clases/Coneccion.php';?>
<html>
<head>
<title></title>
<meta charset="utf-8">
<script src="./js/validacion_text_y_num.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.messages.min.js"></script>
<script src="./js/skel-layers.min.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="./libs/bootstrap/css/bootstra.css">

</head>



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



<body bgcolor="white" align="center">

<center><h1>Registro de votante <h1/></center>

<center><img src="skll.png" width=500 height=150 border=6></center>

 

<form action="manejadorvotante.php?accion=save" name="registrovotante" method="post" id="registro" class="pager"> 

<br>
<br>

DUI: 
<input type="text" name="dui"  placeholder="Ingrese DUI"
 size="6" maxlength="10"  Ingrese Departamento   onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" >
<br>
<br>



<b>Genero:<b>
M<input type="radio" name ="genero" value="Masculino" checked>
F<input type="radio" name ="genero" value="Femenino" checked>


<br>
<br>


Nombre: 
<input type="text" size="15" maxlength="30" placeholder="Ingrese su nombre" name="nombre" required="true" onkeypress="return validarLetras(event)">
<br>
<br>

Apellido: 
<input type="text" size="15" maxlength="30"  placeholder="Ingrese su apellido" name="apellido" required="true" onkeypress="return validarLetras(event)">
<br>
<br>


Direccion: 
<input type="text"  size="13" maxlength="30" placeholder="Ingrese su Direccion" name="direccion"  >
<br>
<br>

Departamento:

<select name="id_depa" id="departamento" width="120" class="required form-control" required="true" onkeydown="return validarLetras(event)">
					<option value="algo">Seleccionar...</option>

					<option value="La Paz">La Paz</option>
				  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
				</select>

<br>
<br>

Municipio:
<Select name="id_muni" id="municipio" class="required form-control" onkeydown="return validarLetras(event)">
				<option value="">Seleccionar...</option>
				<option value="Zacatecoluca">Zacatecoluca</option>
			</select>
<br>
<br>

 Vencimiento De DUI: 
 <input type="Date"  name="fechavenci" value="" required autocomplete="on" style="width:135">
<br>
<br>

<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar"></center></td>
<td><center><input type="submit" name="" value="Cancelar" class="google" title="Cancelar"></center></td>
</form>

<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
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

<nav>
	<ul>

		<li><a href="INDEX.php">Inicio</a>
		
	</ul>

</style>




<script> function validarLetras(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; // backspace
		if (tecla==32) return true; // espacio
		if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
		if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
		if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
 
		patron = /[a-zA-Z]/; //patron
 
		te = String.fromCharCode(tecla); 
		return patron.test(te); // prueba de patron
	}

		function validarNumeros(e) { // 1
		tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // backspace
		if (tecla==109) return true; // menos
    if (tecla==110) return true; // punto
		if (tecla==189) return true; // guion
		if (e.ctrlKey && tecla==86) { return true}; //Ctrl v
		if (e.ctrlKey && tecla==67) { return true}; //Ctrl c
		if (e.ctrlKey && tecla==88) { return true}; //Ctrl x
		if (tecla>=96 && tecla<=105) { return true;} //numpad
 
		patron = /[0-9]/; // patron
 
		te = String.fromCharCode(tecla); 
		return patron.test(te); // prueba
	}
	</script>

   
    </form>

    



 
   </body>
</html>


