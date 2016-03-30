<?php


//QUESTO FILE VA SALVATO IN HTDOCS E SI DEVE CONNETTERE AL DB
//////////////////////////////////////////////////
//////////////////////////////////////////////////7
//CONNESSIONE TRA UNITY E UN DATABASE PER IL PASSAGGIO DI DATI
//////////////////////////////////////////////////
//////////////////////////////////////////////////

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


////////////////////////////////////////////
////////////////////////////////////////////
//connessione al DB
////////////////////////////////////////////
// se non c'è connessione con il serverName
/*
if(!$connessione){
	die("connessione fallita". mysqli_connect_error());
} else
{
	echo ("Connessione stabilita");
}
*/
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
//DICHIARAZIONE DELLA QUERY SQL
$sql = "SELECT id, nomeUtente, punteggio FROM users";
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
		echo "ID:". $riga['id']. "|Nome:".$riga['nomeUtente']. "|Punteggio:".$riga['punteggio'].";"; 
	}
}else {
	echo "nessun dato nel DB";
}


?>