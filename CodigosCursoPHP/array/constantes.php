<div class="titulo">Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS[0] = 'Banana';
// FRUTAS[] = 'Banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];