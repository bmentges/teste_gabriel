<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?>! Que bom ter você conosco... =)</h2>
<h2><a href="logout.php">Sair</a></h2>