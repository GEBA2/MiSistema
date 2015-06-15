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
include './clases/candidato.php';
include './clases/candidatoControlador.php';

$candidatoA = new candidatoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
            $candidatoA->setId('NULL');
            $candidatoA->setGenero($_REQUEST['genero']);
            $candidatoA->setNombre($_REQUEST['Nombre']);
            $candidatoA->setApellido($_REQUEST['Apellido']);
            $candidatoA->setDireccion($_REQUEST['Direccion']);
            $candidatoA->setId_depa($_REQUEST['id_depa']);
            $candidatoA->setId_muni($_REQUEST['id_muni']);
            $candidatoA->setDUI($_REQUEST['DUI']);
            $candidatoA->setCandidatura($_REQUEST['candidatura']);
            $candidatoA->setPartido($_REQUEST['Partido']);
            $candidatoA->setCoalicion($_REQUEST['Coalicion']);
            $datosObj=array($candidatoA->getId(),
                            $candidatoA->getGenero(),
                            $candidatoA->getNombre(),
                            $candidatoA->getApellido(),
                            $candidatoA->getDireccion(),
                            $candidatoA->getId_depa(),
                            $candidatoA->getId_muni(),
                            $candidatoA->getDUI(),
                            $candidatoA->getCandidatura(),
                            $candidatoA->getPartido(),
                            $candidatoA->getCoalicion());

              print $candidatoA->guardarDatos($con,$datosObj);
              print '<a href=\'manejadorcandidato.php?accion=con\'>Ver datos</a>';

        }else{
            print 'No se ha enviado datos ';
        }
        break;
     case 'con':
        $sql = 'SELECT * FROM inscripcioncandidatos';
        $datoss = consultaD($con, $sql);

        print imprimetabla($datoss, "inscripcioncandidatos","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que Realizar';
     }
?>

  <li><a href="index.php" accesskey="m">R<span class="key">e</span>gresar al Menu</a><li></center>
    </body>
</html>