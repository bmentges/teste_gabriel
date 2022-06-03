<?php
$login_cookie = $_COOKIE['login'];

    if(isset($login_cookie)) {
        echo "Bem vindo(a), $login_cookie!<br>";
        echo "Essas informações <font color='green'>PODEM</font> ser acessadas por você";
    } else {
        echo "Bem vindo(a), convidado(a)!<br>";
        echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
        echo "<br><a href='login.html'>Faça Login</a> para acessar as informações";
    }
?>