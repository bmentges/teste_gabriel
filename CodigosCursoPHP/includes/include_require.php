<div class="titulo">Include Vs. Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo...<br>';

// OBS.: O require gera um erro fatal, então usando o require você já sabe exatamente onde está o erro quando parar de renderizar.