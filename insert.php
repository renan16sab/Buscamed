<?php

include("Conexao.php");
$pdo=conectar();


$email=$_GET["email"];


$buscarmedico=$pdo->query("SELECT * FROM medico WHERE ID='1'");

$buscasegura=$pdo->prepare("INSERT INTO medico (email) VALUES (:email)");


$buscasegura->bindvalue(":email",$email);


$validar=$pdo->prepare("SELECT * FROM medico WHERE email=?");
$validar->execute(array($email));

if ($validar->rowCount() == 0):

	

$buscasegura->execute();

else:
	echo "Ja existe";

endif;


?>
