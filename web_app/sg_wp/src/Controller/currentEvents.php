<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// Use auto router 
use Symfony\Component\Routing\Annotation\Route;
// Use render function
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class currentEvents extends AbstractController
{
    
    /**
     * @Route("/current")
     */
    public function getCurrentEventsPage()
    {
        return $this->render('current/current.html.twig');
    }
}