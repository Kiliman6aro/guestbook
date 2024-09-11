<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/conference', name: 'conference')]
    public function index(): Response
    {
        return new Response(<<<EOF
            <html>
                <body>
                    <img src="{{ asset('/images/under-construction.gif') }}" />
                </body>
            </html>
EOF);

    }
}
