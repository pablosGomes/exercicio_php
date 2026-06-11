<?php 

    $senha = 123456;

    function verificarAcesso($senhaDigitada) {
        global $senha;
        if ($senhaDigitada == $senha) {
            return "acesso liberado";
        } else {
            return "acesso negado";
        }
    }

    echo verificarAcesso(123456);

?>