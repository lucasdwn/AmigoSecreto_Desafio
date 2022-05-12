<?php
 session_start();
 include_once("../back/conexao.php")
 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.php">
    <link rel="stylesheet" href="../styles/buscar.php">
    <title>Buscar Usuários</title>
</head>

<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li><a href="../Index.php">Lista de Usuários</a></li>
                <li><a href="Cadastrar.php">Cadastrar</a></li>
            </ul>
            <h1 class='logo'>Amigo Secreto</h1>
        </nav>
    </header>
    <main>
    <h1 class='titulo'>Buscar por usuário(s)</h1>
    <div class='busc'>
    <form method="POST" action="../back/buscar_user.php">
        <label class='text'>Buscar: </label><br>
        <input type="text" name="pesquisar" placeholder="Buscar por nome ou email"><br>
        <input type="submit" value="ENVIAR">
    </form>
    </div>
    </main>
</body>
</html>