<?php

spl_autoload_register(function (string $class) {
    //windows
    $caminho = str_replace('ScreenMatch', 'src', $class) . '.php';
    //linux
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);

    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;

    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    }

    require_once __DIR__ . DIRECTORY_SEPARATOR . $caminho;
});

// if (!file_exists($caminhoCompleto)) {
//     throw new \Exception("Arquivo não encontrado: {$caminho}");
// }