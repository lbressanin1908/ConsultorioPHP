<?php

spl_autoload_register(function ($nomeClasses) {

    $pastaClasses = 'classes/';

    $possiveisCaminhosPasta = [
        $pastaClasses,
        $pastaClasses . 'models/',
        $pastaClasses . 'views/',
        $pastaClasses . 'controllers/',
    ];

    foreach ($possiveisCaminhosPasta as $pastaAtual) {
        $nomeArquivo = $pastaAtual . $nomeClasses . '.php';
        if (file_exists($nomeArquivo)) {
            require_once $nomeArquivo;
            break;
        }
    }


});

?>