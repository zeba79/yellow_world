<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $bonjour = 'Yess papa Controller Man';
        return $this->render('bonjour/index.html.twig', [
            'bonjour' => $bonjour,
        ]);
    }
}
