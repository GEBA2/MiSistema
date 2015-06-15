<?php
class cargoControlador extends cargo {
   
    public function guardarDatos($con,$objcargo) {
        $variableSql = "INSERT INTO cargo ";
        $variableSql .= "(id,tipo_cargo,year_electoral) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objcargo[0]."',";
        $variableSql.="'".$objcargo[1]."',";
        $variableSql.="'".$objcargo[2]."');";        
        return consultaA($con, $variableSql);
        //var_dump($variableSql);
        }

        public function modificarDatos($con,$objcargo) {
        $variableSql = "UPDATE cargo SET  ";
        $variableSql .= "  ,tipo_cargo = '".$objcargo[1]."'";
        $variableSql .= " ,year_electoral= '".$objcargo[2]."'";
        $variableSql .= " WHERE id = ".$objcargo[0].";";             
        return consultaA($con, $variableSql);
        var_dump($variableSql); 
        }
    }

