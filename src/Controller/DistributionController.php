<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/casting', name: 'distribution_')]

class DistributionController extends AbstractController
{
    #[Route('/casting', name: 'list')]
    public function list(): Response
    {
        return $this->render('distribution/hallOfFame.html.twig', [
            'controller_name' => 'DistributionController',
        ]);
    }
}
