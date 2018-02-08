<?php
/**
 * Created by PhpStorm.
 * User: Grégory
 * Date: 08-02-18
 * Time: 09:19
 */

// page php pour la connexion

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Vérification des identifiants
$req = $bdd->prepare('SELECT idUtilisateur FROM Utilisateur WHERE Email = :email AND MotDePasse = :mdp');
$req->execute(array(
    'Email' => $email,
    'MotDePasse' => $mdp));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['idUtilisateur'] = $resultat['idUtilisateur'];
    $_SESSION['Email'] = $email;
    echo 'Vous êtes connecté !';
}