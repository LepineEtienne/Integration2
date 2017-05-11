<?php
	include_once('includes/header.php');
	include_once('includes/connexionBDD.php');
	
	
	// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query("SELECT * FROM test2");

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
$newDate = date("d-m-Y", strtotime($donnees['date']));
?>
    <p>
    <strong><?php echo $donnees['id']; ?></strong> : <?php echo $donnees['nom']; ?> <?php echo $donnees['prenom']; ?> <?php echo $donnees['mail']; ?> <?php echo $newDate; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
$bdd->query("INSERT INTO `test2` (`id`, `nom`, `prenom`, `mail`, `date`) VALUES (NULL, 'DUPOND', 'Henry', 'henrydupond@gmail.com', '2015-10-06')");
//INSERT INTO `test2` (`id`, `nom`, `prenom`, `mail`, `date`) VALUES (NULL, 'DUPOND', 'Henry', 'henrydupond@gmail.com', '2015-10-06');
?>
