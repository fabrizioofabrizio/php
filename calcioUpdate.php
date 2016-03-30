<?php


$serverName = "";
$userName = "";
$password = "";
$dbName = "";

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


$intId = (int)$id;
$intPunteggio= (int)$punteggio;

//per l'update vanno passati tutti i valori (chiave valore) uno dopo l'altro
// con gli apici singoli e doppi
//questa query deve essere eseguita nel database per modificare 
// "UPDATE users SET nome = " .$nome." WHERE id = " . $id;

$sql = "UPDATE users SET nomeUtente = '".$nomeUtente ."', password = '".$password ."' WHERE id = ".$intId;


mysqli_query($connessione,$sql);

?>
