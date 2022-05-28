<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php') ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R + G4BR13L C4RV4LH0 @ <?= date('Y'); ?>
    </footer>
</body>
</html>