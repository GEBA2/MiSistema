<?php
class VotanteControlador extends Votante{

	public function guardarDatos($con,$objVotante) {
		   $variableSql = "INSERT INTO registrovotante ";
		   $variableSql  .= "(id,dui,genero,nombre,apellido,";
		   $variableSql  .= "direccion,id_depa,id_muni,fechavenci)";
         $variableSql .= "VALUES (";
         $variableSql.="'".$objVotante[0]."',";
         $variableSql.="'".$objVotante[1]."',";
         $variableSql.="'".$objVotante[2]."',";
         $variableSql.="'".$objVotante[3]."',";
         $variableSql.="'".$objVotante[4]."',";
         $variableSql.="'".$objVotante[5]."',";
         $variableSql.="'".$objVotante[6]."',";
         $variableSql.="'".$objVotante[7]."',";
         $variableSql.="'".$objVotante[8]."');";
//var_dump($variableSql);
         return consultaA($con, $variableSql);
         
         }

      public function modificarDatos($con, $objVotante) {
      	 $variableSql = "UPDATE registrovotante SET ";
      	 $variableSql .= "dui = '".$objVotante[1]."'";
      	 $variableSql .= " ,genero = '".$objVotante[2]."'";
      	 $variableSql .= " ,nombre = '".$objVotante[3]."'";
      	 $variableSql .= " ,apellido = '".$objVotante[4]."'";
      	 $variableSql .= " ,direccion = '".$objVotante[5]."'";
      	 $variableSql .= " ,id_depa = '".$objVotante[6]."'";
      	 $variableSql .= " ,id_muni = '".$objVotante[7]."'";
      	 $variableSql .= " ,fechavenci = '".$objVotante[8]."'";
      	 $variableSql .= " WHERE id = ".$objVotante[0].";";
      	 //var_dump($variableSql);
          return consultaA($con ,$variableSql);

    }   
}