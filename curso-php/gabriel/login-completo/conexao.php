<?php
 
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if(!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
}
 
// Tenta se conectar ao servidor MySQL
mysql_connect('localhost', 'root', 'root') or trigger_error(mysql_error());
// Tenta se conectar a um banco de dados MySQL
mysql_select_db('usuarios') or trigger_error(mysql_error());
 
$usuario = mysql_real_escape_string($_POST['usuario']);
$senha = mysql_real_escape_string($_POST['senha']);
 
?>