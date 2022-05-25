<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
    1 => "Janeiro", // O índice inicial 1 irá fazer com que todos os outros sigam a sequencia numérica.
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];