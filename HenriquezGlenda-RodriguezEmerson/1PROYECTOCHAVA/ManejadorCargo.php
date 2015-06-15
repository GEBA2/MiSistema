<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>cargo</title>

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
<body>

<?php
include './clases/Coneccion.php';
include './clases/cargo.php';
include './clases/cargoControlador.php';

$cargoA = new cargoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $cargoA->setId('NULL');
           $cargoA->setTipo_cargo($_REQUEST['tipo_cargo']);
           $cargoA->setYear_electoral($_REQUEST['year_electoral']);
           $datosObj=array($cargoA->getId(),
                           $cargoA->getTipo_cargo(),
                           $cargoA->getYear_electoral());
           print $cargoA->guardarDatos($con,$datosObj);
           print '<a href=\'ManejadorCargo.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM cargo';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss, "cargo","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
          
</script>
<center>
  <a href="InscripcionCargo.php"><button>Regresar</button></a>
  <li><a href="index.php" accesskey="m">R<span class="key">e</span>gresar al Menu</a><li></center>
      </body>
</html>