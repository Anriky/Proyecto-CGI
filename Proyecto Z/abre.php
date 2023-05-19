<?php

$conexion = new mysqli("localhost", "id19575724_arely", "Selenio03!", "id19575724_personas");
    if($conexion){
        echo "la gestion fue exitosa !!";
        
         
    }else{
        echo "Fallo la gestion";
    }
?>