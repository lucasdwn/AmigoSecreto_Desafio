<?php
 session_start();
 include_once("../back/conexao.php");
 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
 $result_usuario = "SELECT * FROM usuarios WHERE ID ='$id'";
 $resultado_usuario = mysqli_query($conn, $result_usuario);
 $row_usuario = mysqli_fetch_assoc($resultado_usuario);

 ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.php">
    <link rel="stylesheet" href="../styles/editar.php">
    <title>Editar</title>
</head>
<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li><a href="../Index.php">Lista de Usuários</a></li>
                <li><a href="Cadastrar.php">Cadastrar</a></li>
                <li><a href="Buscar.php">Buscar</a></li>
            </ul>
            <h1 class='logo'>Amigo Secreto</h1>
        </nav>
    </header>
    <main>
    <h1 class='titulo'>Editar usuario</h1>
    <div class='edit'>
    <?php
     if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']); 
     ?>
    <form action="../back/editar_user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>">

        <label class='text'>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome completo" value="<?php echo $row_usuario['nome']; ?>"><br>

        <label class='text'>E-mail </label>
        <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php echo $row_usuario['email']; ?>"><br>

        <input type="submit" value="Editar">
        </form>
    </div>
    </main>
</body>
</html>