<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // arredonda pra menos
echo round(7 / 4), '<br>'; // arredonda pra mais
echo 7 % 4, '<br>';
echo 7 % 2, '<br>'; // 1 = números ímpares
echo 8 % 2, '<br>'; // 0 = números pares
echo 4 ** 2, '<br>'; // ** = elevado a x potência

// Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';