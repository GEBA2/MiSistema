	<html lang="en">
	<head>
    <h1>votacion</h1>
	    <title>Votacion otra forma</title>
	    <meta charset = "utf-8">
	</head>
	<hr/>
	 <body align="center">
	    <header>
 <body bgcolor="white" text="BLACK"  
	    </header>  
	     <!--Nombre-->
	     <h2><label="nombre">Ingrese DUI:</label></h2>
	     <script>
    texto="";

     var Tletras=new Array ("0","1","2","3","4","5","6","7","8","-","9");
     var z=0;
     var Numero=true

     function anadir(letra){
     	 texto = document.f.barra.value;

if (letra == "\b") {
                    numeroLetras = texto.length - 1
                    texto = texto.substring(0, numeroLetras);
                }
                else {
                    if (!Numero) {
                        letra = letra.toLowerCase()
                    }
                    texto = texto + letra;
                    if (texto.length == 8) {
                        texto = texto + "-";
                    }
                }
                if (texto.length <= 10) {
                    document.f.barra.value = texto;
                }V
     }
  function mostrar(){
  if (z==0){z=1;document.getElementById('botones').style.visibility="visible";pregunta.innerHTML="Ocultar teclado";}
  else {z=0;document.getElementById('botones').style.visibility="hidden";pregunta.innerHTML="Mostrar teclado";}
  }
</script>


</head>
<body style="font:normal 10px/15px verdana">
<form action="sesionDui.php" name="f">
<br><br>
<center>
<div style="width:300px">
<input type="Text" name="barra" style="width:300px;border:solid 2px black" maxlength="10" placeholder="00000000-0">
<br>
<br>
<h2><a id="pregunta" href=javascript:mostrar()>Mostrar teclado</a><br></h2>


<div align=center id="botones" style="font:normal 8px/4px verdana;visibility:hidden;"></div>
<script>
var c="0";
var letras="";
var p=0;
for (a=0;a<Tletras.length;a++){
letras=letras+"<input style='width:50px;' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
p=p+1;
if(p==10){p=0;letras=letras+"<br><br>";}
}

document.getElementById('botones').innerHTML=letras+"<input style='width:40px;' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')><br><font style='font:20px'></font>";

</script>
<input type="submit" value="Entrar" name="bot" class="btn btn-primary"/>   
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

</style>
</body>
</html>