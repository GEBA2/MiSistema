<?php
class funcionControlador extends cargo {
   
    public function guardarDatos($con,$objfuncion) {
        $variableSql = "INSERT INTO cargo ";
        $variableSql .= "(id,tipo_cargo,year_electoral) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objfuncion[0]."',";
        $variableSql.="'".$objfuncion[1]."',";
        $variableSql.="'".$objfuncion[2]."');";        
        return consultaA($con, $variableSql);
        var_dump($variableSql)
        }{

        public function modificarDatos($con,$objfuncion) {
        $variableSql = "UPDATE cargo SET  ";
        $variableSql .= "  ,tipo_cargo = '".$objfuncion[1]."'";
        $variableSql .= " ,year_electoral= '".$objfuncion[2]."'";
        $variableSql .= " WHERE id = ".$objfuncion[0].";";                
        return consultaA($con, $variableSql);
       
        }
    }

