<?php
/**
 * Created by PhpStorm.
 * User: Grégory
 * Date: 08-02-18
 * Time: 09:19
 */

/* page php pour l'inscription
 * => Nom
 * => Prénom
 * => Email
 * => Mot de Passe
*/

// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO utilisateur(Nom, Prenom, Email, MotDePasse) VALUES(:nom, :prenom, :email, :mdp)');
$req->execute(array(
    'Nom' => $nom,
    'Prenom' => $prenom,
    'Email' => $email,
    'MotDePasse' => $mdp));