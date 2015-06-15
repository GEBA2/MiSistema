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
    include './clases/votante.php';
    include './clases/votanteControlador.php';

    $votanteA = new VotanteControlador();

    $accion= $_REQUEST['accion'];
    switch ($accion) {
        case 'save':
            if(isset($_REQUEST['bot'])){
                $votanteA->setId('NULL');
                $votanteA->setDui($_REQUEST['dui']);
                $votanteA->setGenero($_REQUEST['genero']);
                $votanteA->setNombre($_REQUEST['nombre']);
                $votanteA->setApellido($_REQUEST['apellido']);
                $votanteA->setDireccion($_REQUEST['direccion']);
                $votanteA->setId_depa($_REQUEST['id_depa']);
                $votanteA->setId_muni($_REQUEST['id_muni']);
                $votanteA->setFechavenci($_REQUEST['fechavenci']);
                $datosObj=array($votanteA->getId(),
                                $votanteA->getDui(),
                                $votanteA->getGenero(),
                                $votanteA->getNombre(),
                                $votanteA->getApellido(),
                                $votanteA->getDireccion(),
                                $votanteA->getId_depa(),
                                $votanteA->getId_muni(),
                                $votanteA->getFechavenci());
               
      print $votanteA->guardarDatos($con,$datosObj);
      print '<a href=\'manejadorvotante.php?accion=con\'>Ver datos</a>';
        }else{
            print 'NO se ha enviado datos ';
        }
         break;
     case 'con':
         $sql = 'SELECT * FROM registrovotante';
         $datoss = consultaD($con, $sql);

         print imprimetabla($datoss,"registrovotante","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
    }
?>

<li><a href="index.php" accesskey="m">R<span class="key">e</span>gresar al Menu</a><li></center>
    </body>
</html>

