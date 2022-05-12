<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de busca</title>
    <link rel="stylesheet" href="../styles/global.php">
    <link rel="stylesheet" href="../styles/busca_user.php">
</head>
<body>
<header>
        <nav>
            <ul class='nav-bar'>
                <li><a href="../Index.php">Lista de Usuários</a></li>
                <li><a href="../front/Cadastrar.php">Cadastrar</a></li>
                <li><a href="../front/Buscar.php">Buscar</a></li>
            </ul>
            <h1 class='logo'>Amigo Secreto</h1>
        </nav>
    </header>
    <main>
    <h1 class='titulo'>Resultado de usuários</h1>
    <div class='teste'>
    <?php
 include_once("conexao.php");
 

 $pesquisar = $_POST['pesquisar'];
 $result_usuarios = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisar%'";
 $resultado_usuario = mysqli_query($conn, $result_usuarios);
 $result_email = "SELECT * FROM usuarios WHERE email LIKE '$pesquisar'";
 $resultado_email = mysqli_query($conn, $result_email);

 while($rows_usuarios = mysqli_fetch_array($resultado_usuario)){
     echo '<br>';
     echo "Nome: " . $rows_usuarios['nome']. "<br>";
     echo "E-mail: " . $rows_usuarios['email']. "<br><br><hr>";
 }
 
 while($rows_usuarios = mysqli_fetch_array($resultado_email)){
    echo '<br>';
    echo "Nome: " . $rows_usuarios['nome']. "<br>";
    echo "E-mail: " . $rows_usuarios['email']. "<br><br><hr>";
 }

?>
    </div>
    </main>
</body>
</html>
