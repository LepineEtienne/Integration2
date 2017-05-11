<?php
include_once('includes/connexionBDD.php');


// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_POST['login']) AND isset($_POST['mdp'])){
	
	$reponse = $bdd->query("SELECT * FROM utilisateur WHERE pseudo = '" . $_POST['login'] . "' AND mdp = '" . $_POST['mdp'] . "'");
	$donnees = $reponse->fetch();
	// on définit une durée de vie de notre cookie (en secondes), donc un an dans notre cas
	$temps = 365*24*3600;

	// on envoie un cookie de nom pseudo portant la valeur de la variable $nom, c'est-à-dire la valeur qu'a saisi la personne qui a rempli le formulaire
	setcookie ("mail", $donnees['mail'], time() + $temps);
	setcookie ("pseudo", $donnees['pseudo'], time() + $temps);

	// fonction nous permettant de faire des redirections
	function redirection($url){
		if (headers_sent()){
		print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
		}
		else {
		header("Location: $url");
		}
	}

	// on effectue une redirection vers la page d'accueil
	redirection ('user_connexion.php');
}
else {
	echo 'La variable du formulaire n\'est pas déclarée.';
}

?>

