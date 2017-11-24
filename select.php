<?php

include("Conexao.php");
$pdo=conectar();

$buscarusuario=$pdo->prepare("SELECT * FROM medico");
$buscarusuario->execute();

$linha = $buscarusuario->fetchAll(PDO::FETCH_OBJ);

foreach ($linha as $listar){     

	echo "E-mail:" .$listar->email."</br>";




	
}



?>