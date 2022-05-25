<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

echo '<br>';
const NOVA_TAXA = 2.5;
echo NOVA_TAXA;

echo '<br>';
$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel); ---> CORRETO
// const NOVISSIMA_TAXA = $valorVariavel; ---> ERRADO
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Pasta: ' . __DIR__;

// Uma vez definido uma Constante você não consegue mudar o algoritmo dentro dela depois.