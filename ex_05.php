<?php

    $temperaturas = [22.5, 24.0, 25.5, 23.0];

    function calcularMediaTemperatura($listaDeTemperaturas)
    {
        $soma = 0;

        foreach ($listaDeTemperaturas as $temperatura) {
            $soma += $temperatura;
        }

        $quantidade = count($listaDeTemperaturas);
        $media = $soma / $quantidade;

        return $media;
    }

    $media = calcularMediaTemperatura($temperaturas);
    echo "Média de temperatura: " . $media . "°C";

?>