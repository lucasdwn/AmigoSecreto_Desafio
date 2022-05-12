<?php
 session_start();
 include_once("conexao.php");

 $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT); 
 $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
 $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
 
 //echo "Nome: $nome <br>";
 //echo "E-mail: $email <br>";
 $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
 $rs = mysqli_query($conn, $sql);
 
 if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
    header("Location: ../index.php");
 }else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado</p>";
    header("Location: ../front/editar.php");
 }
 ?>