<?php
if (isset($_COOKIE['pseudo'])) {
	include_once('includes/header.php');
	include_once('includes/connexionBDD.php');
	
	
	$reponse = $bdd->query("SELECT count(*) FROM film");
	$reponse1 = $bdd->query("SELECT count(*) FROM utilisateur");
	$donnees = $reponse->fetch();
	$donnees1 = $reponse1->fetch();
	
	echo "Nombres de films sur le site : " . $donnees['count(*)'] . "<br>";
	echo "Nombres de d'utilisateurs sur le site : " . $donnees1['count(*)'] . "<br>";
	echo "Nombres de films sur le site : " . $donnees['count(*)'] . "<br>";
	echo "Nombres de films sur le site : " . $donnees['count(*)'] . "<br>";
	echo "Nombres de films sur le site : " . $donnees['count(*)'] . "<br>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}else{
	echo 'Vous pouvez pas voir cette page';
}
?>