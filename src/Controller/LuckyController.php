<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'lucky')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/LuckyController.php',
        ]);
    }

    #[Route('/lucky/random', name: 'lucky_random')]
    public function random(): Response
    {
        return $this->json([
            'number' => random_int(0, 100),
        ]);
    }
}
