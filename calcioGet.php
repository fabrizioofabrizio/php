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

$sql = "SELECT id, nomeUtente, password FROM users";
//ISTANZA DELLA QUERY
$istanza = mysqli_query($connessione, $sql);

//condizione per vedere quali e quante sono le colonne

if (mysqli_num_rows($istanza) > 0){
	//fammi vedere i dati per ogni riga
	while($riga = mysqli_fetch_assoc($istanza)){
		//stampami il contenuto di ogni campo della riga
		
		//versione per una pagina php web
		//echo "ID: ". $riga['id']. "Nome: ".$riga['nome']. "Quantitia: ".$riga['quantita']. "Tipo: ".$riga['tipo']."<br>"; 
		
		//mentre per unity bisogna togliere i tag html e gli spazzi vuoti
		// il carattere | serve a separare i campi
		//echo "|Nome:".$riga['nomeUtente'].";". "Password:".$riga['password'].";" . "ID:".$riga['id'].";"; 
		echo  "|Nome".$riga['nomeUtente']. "|Password".$riga['password']. "|ID".$riga['id'] . ";"; 
	}
}


?>