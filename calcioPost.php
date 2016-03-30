<?php


$serverName = "mysql.hostinger.it";
$userName = "u149252705_users";
$password = "23y54bak";
$dbName = "u149252705_test";

/*
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "calcio";
*/

// inizializza la connessione con il DB
$connessione = new mysqli($serverName, $userName, $password, $dbName);

$id = $_GET['id'];
$nomeUtente = $_GET['nomeUtente'];
$punteggio = $_GET['punteggio'];
$password = $_GET['password'];


$sqUno = $_GET['sqUno'];
$sqDue = $_GET['sqDue'];
$risUno = $_GET['risUno'];
$risDue = $_GET['risDue'];



$intId = (int)$id;
$intPunteggio= (int)$punteggio;

$intRisUno= (int)$risUno;
$intRisDue= (int)$risDue;


$sql="INSERT INTO users (id,nomeUtente, password) 
		VALUES('$intId','$nomeUtente','$password')";
	
	mysqli_query($connessione,$sql);

echo 'nome ricevuto: ' .$nomeUtente . 'password '. $password." con id: " .$id;


?>