<!-- Início do PHP -->
<?php 
/* VERIFICO SE OS DADOS DO FORMULÁRIO FORAM ENVIADOS */
if(count($_POST) > 0) {
	$erros = array();
	$dados = array();
	
	foreach($_POST as $campo => $valor) {
		/* SE O CAMPO VIER VAZIO */
		if(empty($valor)) {
			$erros[$campo] = 'O campo <strong>'.ucwords($campo).'</strong> não pode ficar vazio';	
		} else {
			$dados[$campo] = $valor;	
		}
	}
	/* VERIFICO SE NÃO EXISTE ERROS  */
	if(count($erros) == 0) {
		/* FAÇO A CONEXÃO COM O BANCO DE DADOS E COM A BASE DE DADOS acesso */	
		$conn = new mysqli('localhost', 'root', 'root', 'acesso');
		if ($conn->connect_error) {
			die('Falha ao estabelecer uma conexão: '.$conn->connect_error);
		} else {
			$login = $dados['login'];
			$senha = md5($dados['senha']);
			
			$verificar = $conn->query('SELECT * FROM login WHERE login = \''.$login.'\' AND senha = \''.$senha.'\' ');
			
			/* SE O LOGIN E SENHA ESTÃO CORRETOS REDIRECIONO PARA A PÁGINA DE SUCESSO */
			if($verificar->num_rows > 0) {
				header('location: sucesso.php');	
			} else {
				/* CASO NÃO ESTEJA, GRAVO UMA MENSAGEM DE AVISO */
				$erros['acesso_erro'] = 'Você não tem cadastro ou seus dados estão incorretos';	
			}
		}
	}
}
?>
<!-- Fim do PHP -->

<!-- Início do HTML com PHP -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Login e senha com criptografia</title>

</head>
<body>
<form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <ul>
        <li>
            <label for="login">Login</label>
            <input type="text" id="login" name="login" value="" />
            <?php if(isset($erros['login'])) { ?>
            <label class="erro" for="login"><?php echo $erros['login']; ?></label>
            <?php } ?>
        </li>
        <li>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" value="" />
            <?php if(isset($erros['senha'])) { ?>
            <label class="erro" for="senha"><?php echo $erros['senha']; ?></label>
            <?php } ?>            
        </li>
        <li>
        	<input type="submit" id="entrar" value="Acessar" />
        </li>    
    </ul>
</form><!-- #login -->
<?php if(isset($erros['acesso_erro'])) { ?>
<div id="aviso">
	<p><?php echo $erros['acesso_erro']; ?></p>
</div><!-- #aviso -->
<?php } ?>
</body>
</html>
<!-- Fim do HTML com PHP -->