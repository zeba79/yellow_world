<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function bonjour(): Response
    {
        return $this->render('bonjour/index.html.twig', [
            'bonjour' => 'Yess Controller',
        ]);
    }
}
