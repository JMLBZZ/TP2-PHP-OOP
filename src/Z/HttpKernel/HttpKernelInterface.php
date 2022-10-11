<?php
namespace App\Z\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

    Interface HttpKernelInterface
    {
        /**
         * Cette méthode du Kernel, lui permet de soummettre la requête du client
         * et de récupérer la réponse correspondante
         *
         * @return Response
         */
        public function handleRequest() : Response;
    }