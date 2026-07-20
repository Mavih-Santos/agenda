<?php

// 1. Detecta se é HTTP ou HTTPS
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
//!empty($_SERVER['HTTPS']): Verifica se a variável HTTPS existe e não está vazia.
//$_SERVER['HTTPS'] !== 'off': Alguns servidores (como o IIS da Microsoft) definem o valor como 'off' quando não estão usando HTTPS. Esta parte garante que o valor seja realmente positivo.
//? "https://" : "http://": Se as duas condições acima forem verdadeiras, a variável $protocol recebe "https://". Se falhar, recebe "http://".

// 2. Pega o nome do servidor
$host = $_SERVER['SERVER_NAME'];

// 3. Pega o diretório atual e limpa barras extras
$project_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
//$_SERVER['SCRIPT_NAME']: Descobre o caminho real do arquivo PHP que está rodando (ex: /meu-projeto/index.php).
//dirname(...): Corta o nome do arquivo e mantém apenas as pastas anteriores. No exemplo acima, ele retorna /meu-projeto. Se o arquivo estiver na raiz do servidor, ele retorna apenas uma barra (/).
//rtrim(..., '/\\'): Remove barras extras (/ ou \) do final do caminho. Se o dirname retornar apenas / (raiz), o rtrim apaga essa barra e deixa o texto vazio. Isso impede que a URL final fique com duas barras grudadas.


// 4. Junta tudo com uma única barra no final
$BASE_URL = $protocol . $host . $project_dir . '/';

//print_r($BASE_URL);


// $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

    // print_r($BASE_URL);
?>
    