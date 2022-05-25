<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero será convertido para false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) " "); // false
echo '<br>' . var_dump((bool) "0"); // todo o resto será true
echo '<br>' . var_dump((bool) "0,002"); 
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");