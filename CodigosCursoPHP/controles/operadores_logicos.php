<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // O sinal de ! (not) inverte a operação que vem após. Operação de negação.

echo "<p class='divisao'>Tabela Verdade 'AND' '&&'</p><hr>";

var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
var_dump(false && true);

var_dump(true and true);
var_dump(true and false);
var_dump(false and false);
var_dump(false and true);

echo "<p class='divisao'>Tabela Verdade 'OR' '||'</p><hr>";

var_dump(true || true);
var_dump(true || false);
var_dump(false || false);
var_dump(false || true);

var_dump(true or true);
var_dump(true or false);
var_dump(false or false);
var_dump(false or true);

echo "<p class='divisao'>Tabela Verdade 'XOR''</p><hr>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);
var_dump(false xor true);
// Pode usar também o sinal de diferença != para executar a mesma função do xor.
var_dump(true != true);
var_dump(true != false);
var_dump(false != false);
var_dump(false != true);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar!';
} else if($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar!';
} else {
    echo 'Vai ter que trabalhar mais um pouco!';
}

