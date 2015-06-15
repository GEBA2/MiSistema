<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title></title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>

</head>
<body class="">
<?php
include './clases/Coneccion.php';
include './clases/funcion.php';
include './clases/funcionControlador.php';

$funcionA = new funcionControlador();


if(isset($_REQUEST['bot'])){
           $funcionA->setId($_REQUEST['id']);
           $funcionA->setTipo_cargo($_REQUEST['tipo_cargo']);
           $funcionA->setYear_electoral($_REQUEST['year_electoral']);
           $datosObj=array($funcionA->getId(),
                           $funcionA->getTipo_cargo(),
                           $funcionA->getYear_electoral(),
                          );
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $funcionA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'ManejadorFuncion.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>