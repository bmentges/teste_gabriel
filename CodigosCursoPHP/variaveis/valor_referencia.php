<div class="titulo">Valor Vs. Referência</div>

<?php

// Por valor (menos economia de memória)
$a = 'texto';
$b = $a;
echo "$a $b";

echo '<br>';
$a++;
echo "$a $b";

// Por referência (mais economia de memória)
echo '<br>';
$c = "Ana";
$d = $c;
echo "$c $d";

echo '<br>';
$d = "Léo";
echo "$c $d";

// OBSERVAÇÃO: Não necessariamente SEMPRE será melhor economizar memória

// Atribuição por valor
echo '<br>';
echo '<br>';
$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "<br>$variavel";
echo " $variavelReferencia";