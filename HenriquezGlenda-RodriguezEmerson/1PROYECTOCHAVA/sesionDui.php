<?php session_start(); ?>

<?php

 $dui = $_REQUEST['barra'];


 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("stvt", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM registrovotante where Dui = '$dui' AND estado=0" ,$conexion);
  //var_dump($estandar);
  //exit();
 if (mysql_num_rows($estandar)>0) {
					$row = mysql_fetch_array($estandar);
					$_SESSION["barra"] = $row['Dui']; 
					header("location:papeletaPresidente.php?var1=".$row['Dui']."&var2=".$row['id_depa']."&var3=".$row['id_muni']);
				}
				else{
					header("Location:votacionotraforma.php?msg=1");
				}
			
		?>	

