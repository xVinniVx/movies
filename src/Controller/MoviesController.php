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
        return $this->render('index.html.twig');
    }

    #[Route('/movies/{name}', name: 'movie_router', defaults: ['name' => null], methods: ['GET', 'HEAD'])]
    public function list(string $name): Response
    {
        return $this->json([
            'message' => $name . ' Movie Controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
