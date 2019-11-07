<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// Use auto router 
use Symfony\Component\Routing\Annotation\Route;
// Use render function
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homePage extends AbstractController
{
    
    /**
     * @Route("/home")
     */
    public function number()
    {
        const logoPath = require('../img/home/homescreen.jpg');

        return $this->render('home/home.html.twig', ['image' => $logoPath,
         ]);
    }
}