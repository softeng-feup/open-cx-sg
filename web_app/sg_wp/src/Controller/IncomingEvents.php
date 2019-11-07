<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// Use auto router 
use Symfony\Component\Routing\Annotation\Route;

class IncomingEvents
{
    
    /**
     * @Route("/incoming")
     */
    public function page()
    {
            return new Response(
            '<html><body>Example_page</body></html>'
        );
    }
}