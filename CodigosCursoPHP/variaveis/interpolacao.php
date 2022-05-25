<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // Não interpola com ' '
echo "<br> $numero"; // Interpola com " "

$texto = "A sua noté é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 ${objeto}s.";
echo "<br>Eu tenho 5 { $objeto}s, mas perdi 3 {$objeto }s."; // Espaço antes da $objeto dentro das { } não é reconhecido, mas depois do $objeto dentro das { } é reconhecido
echo '<br>';
echo "$numero";