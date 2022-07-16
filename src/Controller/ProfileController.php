<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('/profile', name: 'profile')]
class ProfileController extends AbstractController
{

    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
      
       return $this->render('first/index.html.twig', [
            'controller_name' => 'ProfileController',
           'firstName'=>'Amani',
           'name'=>'salah'
        ]);
    }
}