<?php
 session_start();
 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.php">
    <link rel="stylesheet" href="../styles/cadastrar.php">
    <title>Cadastrar Usuarios</title>
</head>
<body>
    <header>
        <nav>
            
            <ul class='nav-bar'>
                <li><a href="../Index.php">Lista de Usuários</a></li>
                <li><a href="Buscar.php">Buscar</a></li>
            </ul>
            <h1 class='logo'>Amigo Secreto</h1>
        </nav>
    </header>
    <main>
    <h1 class='titulo'>Cadastrar um novo usuário</h1>
    <div class='cad'>
    <?php
     if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']); 
     ?>
    <form method="POST" action="../back/novo_user.php">
    <br>
        <label class='text'>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>

        <label class='text'>E-mail: </label>
        <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>

        <input type="submit" value="Cadastrar">
        </form>
    </div>
    </main>
</body>
</html>