<?php
 session_start();
 include_once("back/conexao.php")
 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.php">
    <link rel="stylesheet" href="styles/index.php">
    <title>Lista de Usuários</title>
</head>
<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li><a href="front/Cadastrar.php">Cadastrar</a></li>
                <li><a href="front/Buscar.php">Buscar</a></li>
            </ul>
            <h1 class='logo'>Amigo Secreto</h1>
        </nav>
    </header>
    <main>
    <h1 class='titulo'>Lista de Usuários</h1>
    <form class='sortear' action="back/sorteio.php">
    <input type="submit" value="Sortear"></form>
    <div class="teste">
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']); 
     }
     $result_usuarios = "SELECT * FROM usuarios";
     $resultado_usuarios = mysqli_query($conn, $result_usuarios);
     while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
         echo "<br>";
         echo "Nome: " . $row_usuario['nome'] . "<br>";
         echo "E-mail: " . $row_usuario['email'] . "<br>";
         echo "<a class='edit' href='front/Editar.php?id=" . $row_usuario['id'] . "'>Editar</a>";
         echo "<a class='delete' href='back/apagar_user.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
     }
     ?>
    </div>
    </main>
</body>
</html>