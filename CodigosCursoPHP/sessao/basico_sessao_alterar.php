<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielfilho@zmail.com';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>E-mail: </b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href='basico_sessao.php'>Voltar</a>
</p>

<p>
    <a href='basico_sessao_limpar.php'>Limpar Sessão</a>
</p>