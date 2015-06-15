<?php
class candidatoControlador extends candidato{

	public function guardarDatos($con,$objcandidato) {
		$variableSql = "INSERT INTO inscripcioncandidatos ";
		$variableSql .= "(id,genero,Nombre,Apellido,Direccion,id_depa,id_muni,";
		$variableSql .= "DUI,candidatura,Partido,Coalicion)";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objcandidato[0]."',";
		$variableSql.="'".$objcandidato[1]."',";
		$variableSql.="'".$objcandidato[2]."',";
		$variableSql.="'".$objcandidato[3]."',";
		$variableSql.="'".$objcandidato[4]."',";
		$variableSql.="'".$objcandidato[5]."',";
		$variableSql.="'".$objcandidato[6]."',";
		$variableSql.="'".$objcandidato[7]."',";
		$variableSql.="'".$objcandidato[8]."',";
		$variableSql.="'".$objcandidato[9]."',";
		$variableSql.="'".$objcandidato[10]."');";
		//var_dump($variableSql);
        return consultaA($con, $variableSql);
	}

	public function modificarDatos($con,$objcandidato) {
	$variableSql = "UPDATE inscripcioncandidatos SET ";
	$variableSql .= " genero = '".$objcandidato[1]."'";
	$variableSql .= " ,Nombre = '".$objcandidato[2]."'";
	$variableSql .= " ,Apellido = '".$objcandidato[3]."'";
	$variableSql .= " ,Direccion = '".$objcandidato[4]."'";
	$variableSql .= " ,id_depa = '".$objcandidato[5]."'";
	$variableSql .= " ,id_muni = '".$objcandidato[6]."'";
	$variableSql .= " ,DUI = '".$objcandidato[7]."'";
	$variableSql .= " ,candidatura = '".$objcandidato[8]."'";
	$variableSql .= " ,Partido = '".$objcandidato[9]."'";
	$variableSql .= " ,Coalicion = '".$objcandidato[10]."'";
	$variableSql .= "WHERE id = ".$objcandidato[0].";";
	//var_dump($variableSql);
	return consultaA($con ,$variableSql);
	}
}