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
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}