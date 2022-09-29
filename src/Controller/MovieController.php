<?php

namespace App\Controller;

// use App\Repository\MovieRepository;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/movie', name: 'movie_')]

class MovieController extends AbstractController
{
    // public function __construct(private MovieRepository $movieRepository)
    // {

    // }
    #[Route('', name: 'list')]
    public function list(MovieRepository $movieRepository): Response
    {
        $movies = $this->movieRepository->findAll();

        return $this->render('movie/listMovie.html.twig', [
            'movies' => $movies,
        ]);
    }



    #[Route('/create', name: 'create')]
    public function form(): Response
    {
        return $this->render('movie/formMovie.html.twig', [
        ]);
    }

    #[Route('/stats', name: 'stats')]
    public function stats(): Response
    {
        return $this->render('movie/statsMovie.html.twig', [
        ]);
    }

    #[Route('/{id}', name: 'single', requirements:["id"=>"\"d+"])]
    public function single(): Response
    {
        return $this->render('movie/singleMovie.html.twig', [

        ]);
    }

    
}
