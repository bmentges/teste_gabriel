<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo "Eu aceito pontos" . ' para concatenar';
echo '<br>', "Também aceito", " vírgulas, mas sem concatenar";
echo '<br>', ("Posso misturar ABC e " . 123);
echo '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maíuscula');
echo '<br>' . ucwords('todas as palavras com primeira letra maiúscula');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Aqui também!", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');