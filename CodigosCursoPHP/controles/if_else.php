<div class="titulo">If / Else</div>

<?php

if(true) {
    echo "Serei impresso?<br>";   
}

if(false) {
    echo "Serei impresso novamente?<br>";   
}

if(true) {
    echo "True<br>";
} else {
    echo "False<br>";
}

if(false) {
    echo "True<br>";
} else {
    echo "False<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} else {
    echo "Passo C<br>";
}

if(true) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else {
    echo "Passo C<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else if(false) {
    echo "Passo C<br>";
} else {
    echo "Passo D<br>";
}

echo "<br>Fim!";