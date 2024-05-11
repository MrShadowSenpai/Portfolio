<?php
/*
  Intégration des librairies communes.
  ------------------------------------------------

  Fichier : bootstrap.php
*/

// les constantes de configuration pour la base
$is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");
if ( $is_localhost )
{
	require 'Config/config.local.php';
  	// la constante indique le mode de travail (ici DEVELOPPEMENT)
  	define('APP_MODE', 'dev');
} else {
 	 // ... sinon, on est en production
 	 require 'Config/config.prod.php';
 	 // la constante indique le mode de travail (ici PRODUCTION)
 	 define('APP_MODE', 'prod');
}

// le debug avec les commandes debug() et dd()

// les fonctions utilisateur
require 'Libs/functions.php';

// processus de connexion à la base de données
try {
    $dsn = 'mysql:host=' . APP_DB_HOST . ';dbname=' . APP_DB_NAME . ';charset=UTF8';
    $dbh = new PDO(
        $dsn,
        APP_DB_USER,
        APP_DB_PASSWORD,
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
    // déclencher une erreur à chaque erreur dans un traitement SQL
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // affichage d'un message résumé
    echo "<h3>ERREUR</h3><p>{$e->getMessage()}</p>";
    // arrêt du script
    die();
}