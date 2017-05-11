<?php
	include_once('includes/header.php');
	include_once('includes/connexionBDD.php');
	
	
	// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query("SELECT * FROM test");

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
?>
    <p>
    <strong><?php echo $donnees['id']; ?></strong> : <?php echo $donnees['nom']; ?> <?php echo $donnees['prenom']; ?> <?php echo $donnees['mail']; ?> <br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
