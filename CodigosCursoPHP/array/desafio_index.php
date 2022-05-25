<div class="titulo">Desafio Index</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

// array( [0] => 8 [4] => 2 [3] => 3 ['a'] => 4
// [5] => 5 ['9'] => 6 ['06'] => 7 )
print_r($lista);

// OBSERVAÇÃO: ESSA NÃO É UMA ESTRATÉGIA INTERESSANTE!!!