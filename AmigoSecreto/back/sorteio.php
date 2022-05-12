<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/global.php">
	<link rel="stylesheet" href="../styles/sorteados.php">
	<title>Sorteados</title>
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
	<h1 class='titulo'>Sorteados</h1>
	<div class='sorteio'>
	<?php
     session_start();
     include_once("conexao.php");

     $sql= 'SELECT * From usuarios';
     $sql_users=mysqli_query($conn, $sql);
     $a = array();
     while($row=mysqli_fetch_array($sql_users, MYSQLI_ASSOC)){
	 array_Push($a,($row['nome']));
     }
     echo (json_encode(sorteia($a)));
      function sorteia($a)
	 {
		$b = $a;
		$c = array();
		$i = 0;
		shuffle($a);
		while($i<count($a))
		{
			if($a[$i]==$b[$i])
			{
				$i=0;
				shuffle($a);
			}
			else
				$i++;
		}
		foreach($b as $k => $v)
			$c[] = array('<br>'.$v.'  ---  Saiu com  ---  '.$a[$k].'<br><br><hr><br>');
			
		return $c;
	 }
    ?>
		</div>
	</main>
	
</body>
</html>
