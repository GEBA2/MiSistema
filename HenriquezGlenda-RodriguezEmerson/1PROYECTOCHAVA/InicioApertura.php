<?php
  session_start();
  include 'serv.php';
  if(isset($_SESSION['user'])){
  echo '<script> window.location="Funcion.php"; </script>';
  }
  ?>

<html>
<title>Inicio De Sesion</title>

<head>
 
<link rel="stylesheet" type="text/css" href="./css/estilo.css">

<meta charset="utf-8">
</head>
<body align="center">

<body bgcolor="white">
<center><img src="img.jpg" width=400 height=150 border=6></center>


<center><h1>Apertura De Elecciones<h1/></center>




<form action="validar.php" method="post" class="pager">
<table>
<tr>
	
</td>
</tr>
</table>




<hr></hr>

<table>

Usuario: <input type="text" size="27" maxlength="30" placeholder="Ingrese Usuario"  value="" name="user">
<br>
<br>


Clave: <input type="password" size="26" maxlength="30" placeholder="Ingrese Clave " value="" name="pw">
<br>
<br>


<hr></hr>
<hr></hr>

<br>
<br>


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


                <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php echo "Error al inicio de sesion";?> 

                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>


<center>

<nav>
	<ul>

		<input type="submit" name="login" value="Entrar">
			<li><a >Cancelar</a>
		
	</ul>

</style>


</center>


</form>
</body>
</html>