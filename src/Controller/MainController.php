<?php

// Each class must have a 'namespace', normally is 'App' + '\' + 'something else inside'

namespace App\Controller;

// 'use' works like a function or 'import' on React (to understand better for myself)

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Same name of the file!
class MainController extends AbstractController
{
    // PHP attribute - '/' means the first page
    #[Route('/')]
    public function homepage(StarshipRepository $starshipRepository): Response
    {
        $ships = $starshipRepository->findAll();

        $myShip = $ships[array_rand($ships)];

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'ships' => $ships,
        ]);
    }
}
