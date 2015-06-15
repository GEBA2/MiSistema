<?php include './clases/Coneccion.php';?>

<html>
<head>
<title>Funcion</title>
<link rel="stylesheet" type="text/css" >

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


</head>
<hr></hr>


<header><center><h1>Cargo</h1></center></header>

  <form action="ManejadorCargo.php?accion=save" method="post" id="cargo" class="pager">
             <table class="table-bordered">

<hr></hr>

<center>
<table>
<tr>
	<td><h2>Presidenciales<input type="radio" name ="tipo_cargo" value="Presidenciales<" checked></h2></td>
	<td><h2>Diputados<input type="radio" name ="tipo_cargo" value="Diputados" checked></h2></td>
	<td><h2>alcalde<input type="radio" name ="tipo_cargo" value="alcalde" checked></h2>
</td>
</tr>

</table>


<hr></hr>




<br>
</center>


<center>
     <label for="pass"><h2>Año A Efectuar </h2></label>

	      <select name="year_electoral"> 
	      	<option value="">........</option> 
<option value="2015">2015</option> 
<option value="2018">2018</option> 
<option value="2023">2023</option> 
</select>

<br>
<br>
<br>
<br>

<nav>
	<ul>

		
		<li><a href="INDEX.php"><button>Salir</button></a></li>

		
	</ul>

</center>
<center><li><input type="submit" name="bot" value="Registrar" title="REGISTRAR"></a>

</center>

</body>
</html>
 
