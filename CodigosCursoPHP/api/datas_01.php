<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>'; // Mostra a quantidade de segundos desde o marco zero da programação (01/01/1970) até hoje.
echo date('D, d \d\e M \d\e Y H:i A') . '<br>'; // Documentação PHP... Function Date

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_br.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanhã) . '<br>';

$proximaSemana = strtotime('+10 year');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(23, 59, 59, 8, 19, 2022);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);