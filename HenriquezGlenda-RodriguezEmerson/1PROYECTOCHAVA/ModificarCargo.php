<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
<?php
include './clases/Coneccion.php';
include './clases/cargo.php';
include './clases/cargoControlador.php';

$cargoA = new cargoControlador();


if(isset($_REQUEST['bot'])){
  //print("hola");
           $cargoA->setId($_REQUEST['id']);
           $cargoA->setTipo_cargo($_REQUEST['tipo_cargo']);
           $cargoA->setYear_electoral($_REQUEST['year_electoral']);
           $datosObj=array($cargoA->getId(),
                           $cargoA->getTipo_cargo(),
                           $cargoA->getYear_electoral());
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $cargoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'ManejadorCargo.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html> 