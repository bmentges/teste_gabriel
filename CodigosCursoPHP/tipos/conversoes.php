<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<p>Int para Float</p>';
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';

// float para int
echo '<p>Float para Int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.86));
echo '<br>';
var_dump((int) round(2.8));
echo '<br>';

//operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // No PHP o + não concatena, ele soma, diferente do JavaScript, que usa o + para concatenar
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
// echo '<br>', is_string("3" + 2);
