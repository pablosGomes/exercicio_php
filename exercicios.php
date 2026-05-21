<?php

    $nomes = ["Ana", "Bruno", "Carla", "Diego", "Eduardo"];

    for ($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i] . "<br>";
    }

    $nomes[] = "Fernanda";

    $nomes[1] = "Carlos";
   
?>