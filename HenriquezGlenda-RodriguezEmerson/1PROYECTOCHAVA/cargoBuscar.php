<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM cargo WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre>
<html>
<head>
<meta charset="utf-8">
<title>Registro cargo</title>
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
	<h1>Inscripción cargo</h1>
	<form action="ModificarCargo.php" method="post" id="registro">
		<table>
		<tr><input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'></tr>
		<tr>
			<font ><h2></h2></font>
			<td><h2>Presidenciales<input type="radio" name ="tipo_cargo" value="Presidenciales" checked></h2></td>
	        <td><h2>Diputados<input type="radio" name ="tipo_cargo" value="Diputados" checked></h2></td>
	        <td><h2>alcalde<input type="radio" name ="tipo_cargo" value="alcalde" checked  value='<?php print $datos[0][1]?>'
                    class="required digits form-control"></h2></td>
		</tr>
		<center>
		<tr>
			
     <td><label for="pass"><h2>Año A Efectuar </h2></label>
 
          
	      <select name="year_electoral" value='<?php print $datos[0][2]?>'
                    class="required digits form-control"> 
	      	<option value="">........</option> 
            <option value="2015">2015</option> 
            <option value="2018">2018</option> 
            <option value="2023">2023</option> 
           </select>
</td>
		</tr>
	</center>
		
		
		<tr>
			<td><center><input type="submit" name="bot" value="Registrar" class="google" title="Clic Para Registrar"></center></td>
			<td><center><input type="submit" name="" value="Cancelar" class="google" title="Cancelar"></center></td>
		</tr>
		</table>
	</form>
	</center>
	</table>
</div>
</div>
<script type="text/javascript">.

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