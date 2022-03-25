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
        $movies = ["Batman", "Spider Man", "Inception", "Scream"];
        return $this->render('movies.html.twig', [
            "title" => 'Lista filmów',
            "movies" => $movies
        ]);
    }

    #[Route('/movies/{name}', name: 'movie_router', defaults: ['name' => null], methods: ['GET', 'HEAD'])]
    public function list(string $name): Response
    {
        return $this->render('index.html.twig', [
            'title' => $name
        ]);
    }
}
