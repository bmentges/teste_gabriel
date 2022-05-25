<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
var_dump($soma);
echo '<br>';

$variavel = "Agora sou uma string!"; // tipagem fraca = maior flexibilidade de uso porém usar com cuidado, sem abuso para não perder controle do código
echo '<br>';
echo $variavel;
echo '<br>';
var_dump($variavel);
echo '<br>';

// Nomenclatura de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // Válida, porém é bom evitar acentos nas variações.
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';
// OBSERVAÇÃO: Escolha um padrão e use sempre esse mesmo padrão, não que seja obrigatório, mas o código fica mais limpo

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);