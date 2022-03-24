<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies_router')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }

    #[Route('/movies/{name}', name: 'movie_router')]
    public function list(): Response
    {
        return $this->json([
            'message' => 'Movie Controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }    
}
