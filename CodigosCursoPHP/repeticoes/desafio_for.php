<div class="titulo">Desafio "FOR"</div>

<!--
Usar o for para imprimir essas # abaixo
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php

// 1)
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}
echo "<hr>";

// 2)
for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}
