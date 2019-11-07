<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// Use auto router 
use Symfony\Component\Routing\Annotation\Route;

class homePage
{

    /**
     * @Route("/home")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}