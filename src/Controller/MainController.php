<?php

// Each class must have a 'namespace', normally is 'App' + '\' + 'something else inside'

namespace App\Controller;

// 'use' works like a function or 'import' on React (to understand better for myself)

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Same name of the file!
class MainController extends AbstractController
{
    // PHP attribute - '/' means the first page
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;

        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStartships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
