<?php 

$host = "localhost";
$user = "root";
$pass = "";
$base = "chat";


$idcom = new mysqli($host,$user,$pass,$base);

if ($idcom) {
	echo "La connexion a ete effectuee <br>";
}



if (!empty($_GET['Message'])) {
	// algorithme d'insertion
	$id_msg = "\N";
	$message = $idcom->escape_string(htmlentities($_GET['Message']));
	
	$reqInsert = "INSERT INTO message VALUES('$id_msg','$message')";

	$insert = $idcom->query($reqInsert);
}
?>