<?php

// Each class must have a 'namespace', normally is 'App' + '\' + 'something else inside'
namespace App\Controller;

// 'use' works like a function or 'import' on React (to understand better for myself)
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// Same name of the file!
class MainController
{
    // PHP attribute - '/' means the first page
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong>Startshop</strong>: your monopoly-busting option for Startship parts!');
    }
}