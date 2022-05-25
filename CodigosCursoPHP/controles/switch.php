<div class="titulo">Switch</div>

<?php
$categoria = 'SUV';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 125000;
} else if($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 75000;
} else {
    $carro = 'Mobi';
    $preco = 40000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'luxo';
switch ($categoria) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv';
    case 'suv básico';
        $carro = 'Renegade';
        $preco = 125000;
        break;
    case 'sedan';
        $carro = 'Etios';
        $preco = 75000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 40000;
}
// O uso do 'break' é extremamente necessário em quase 99% dos casos.

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>"; 

