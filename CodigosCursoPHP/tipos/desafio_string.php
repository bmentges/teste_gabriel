<div class="titulo">Desafio String</div>

<?php

echo 'Enunciado';
echo '<br>';
echo 'Avaliando os métodos da documentação da string, qual o método que a posição de texto abc na string !AbcaBcabc retorne 1?';
echo '<br>';

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>'; // <---- Resposta correta
echo strpos(strtolower('!AbcaBcabc'), 'abc');