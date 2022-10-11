<?php

    /*
    * Boostrap
    * 
    * Chargement des fichiers de configuration
    */


    
    // chargement de l'autoload
    require_once dirname(__DIR__)."/vendor/autoload.php";



    // Chargement des variables d'environnement
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    // Chargement du conteneur de dépendances
    $container = require_once __DIR__ . "/dependenciesInjection/container.php";