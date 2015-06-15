


<?php include './clases/Coneccion.php';?>
<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'stvt');
?>
<!doctype html>
<html>
<title>Inscripcion De Partidos</title>
<head>
<link rel="stylesheet" type="text/css" href="./css/estilo.css">
<meta charset="utf-8">




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


</head>



<body align="center">
<body bgcolor="white">
<center><img src="img.jpg" width=400 height=150 border=6></center>
<center><h1>Inscripcion De Partidos<h1/></center>
<hr></hr>


<form action="manejadorPartido.php?accion=save" id="file-submit" enctype="multipart/form-data" method="post">

Nombre: <input type="text" size="27" placeholder="Ingrese Nombre De Partido"   name="nombre_partido" required="true" onkeypress="return validarLetras(event)">
<br>
<br>
Imagen: <input type="file" size="26"  name="bandera" onkeypress="return validarLetras(event)">
<br>
<br>
DUI:<input type="text" maxlength="10" size="27" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" placeholder="Ingrese Dui De Responsable"   onkeydown="return validarNumeros(event)" name="dui" >
<br>
<br>
Representante: <input type="text" size="24" placeholder="Ingrese Nombre De Responsable "  name="representante"  required="true" onkeypress="return validarLetras(event)">
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

</style>
</center>
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
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>

    <center><li><input type="submit" name="bot" value="Registrar" title="REGISTRAR"></a>

</center>
</body>
</html>