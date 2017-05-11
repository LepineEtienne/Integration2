<?php

include_once('includes/header.php');
include_once('includes/connexionBDD.php');


// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM film');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Film numéro</strong> : <?php echo $donnees['CodeFilm']; ?><br />
    Le film est : <?php echo $donnees['titre']; ?>, sa déscription : <?php echo $donnees['description']; ?><br /></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>

<form action="connexion_user_fonction.php" method="post" enctype="multipart/form-data">
        <p>
                Login : <input type="text" name="login" /><br />
                Mot de passe : <input type="password" name="mdp" /><br />
                <input type="submit" value="Connexion" />
        </p>
</form>
