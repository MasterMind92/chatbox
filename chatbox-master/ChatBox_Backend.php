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

	if ( isset($insert) ) {
	?>
		<script type="text/javascript">
			alert('Les informations ont bien ete enregistrees');
		</script>
	<?php 
	}else{
		?>
		<script type="text\javascript">
		alert("impossible d'enregistre le message");
		</script>
	<?php
	}

	// algorithme de selection 
	$Sel = "SELECT * FROM message";

	$affich= $idcom->query($Sel);

	while ($donnees = $affich->fetch_array(MYSQLI_NUM)) {
		echo $donnees['1']."<br>";
	}
}

print_r($_GET);
print_r($donnees);
?>