<?php
/**
 * Created by PhpStorm.
 * User: Grégory
 * Date: 08-02-18
 * Time: 09:14
 */


// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');