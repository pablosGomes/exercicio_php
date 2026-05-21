<?php
// exercicio2.php - versão simples

$numeros = [10, 20, 30, 40, 50, 65, 44, 22, 11, 90];

$quantidade = count($numeros);
$soma = 0;

for ($i = 0; $i < $quantidade; $i++) {
    $soma += $numeros[$i];
}

$media = $quantidade > 0 ? $soma / $quantidade : 0;

// Exibição simples
if (php_sapi_name() === 'cli') {
    echo "Números: ";
    for ($i = 0; $i < $quantidade; $i++) {
        echo $numeros[$i];
        if ($i < $quantidade - 1) echo ", ";
    }
    echo PHP_EOL;
    echo "Média: " . $media . PHP_EOL;
} else {
    echo "Números: ";
    for ($i = 0; $i < $quantidade; $i++) {
        echo $numeros[$i];
        if ($i < $quantidade - 1) echo ", ";
    }
    echo "<br>";
    echo "Média: " . $media . "<br>";
}
?>