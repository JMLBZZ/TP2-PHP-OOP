<?php
namespace App;

use Psr\Container\ContainerInterface;
use App\Z\HttpKernel\HttpKernelInterface;

/**
 * Kernel
 * 
 * Ce fichier repréneste le noyau de l'application
 * 
 * Ses rôles principaux sont :
 *  - Soummettre la requête
 *  - Récupérer la réponse correpondante
 *  - Envoyer cette réponse au "FrontController"
 * 
 * @author Jamel BOUAZZA <jamel.bouazza@gmail.fr>
 * @version 1.0.0
 */

    class Kernel implements HttpKernelInterface
    {
        /**
         * Le conteneur de dépendances
         */
        
        private $container; //le typage (l'ajout de "ContainerInterface" est uniquement pour les versions supérieures à PHP 8)

        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
            dd($container);
        }

        /**
         * Cette méthode du Kernel, lui permet de soummettre la requête du client
         * et de récupérer la réponse correspondante
         *
         * @return Response
         */
        public function handleRequest() : Response
        {
            
        }
    }