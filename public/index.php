<?php

use App\Kernel;

/* 
 * Bienvenue dans notre Framework fait maison
 * 
 * L'index.php est le "FrontController"
 * 
 * Ses rôles :
 *      - Réaliser le bootstraping" de l'application : c'est à dire charger tout ce dont l'application à besoin pour fonctionner
 *      - Créer une nouvelle instance du noyau en lui passant le conteneur
 *      - Demander au noyau de soumettre la requête au système et de récupérer la réponse correspondante
 *      - Envoyer cette réponse au client
 */ 

    // Chargement du fichier de configuration
    require_once dirname(__DIR__) . "/config/bootstrap.php";

    // Création d'une nouvelle instance du noyau
    $kernel = new Kernel($container);
