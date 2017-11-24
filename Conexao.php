<?php

function conectar(){

try{


$pdo=new PDO("mysql:host=localhost;dbname=buscamed","root",""); 

} catch(PDOException $e){

	echo $e->getMessage();

}

return $pdo;
}







?>