<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PasswordForgottenController extends AbstractController
{
    #[Route('/passwordForgotten', name: 'app_password_forgotten')]
    public function index(): Response
    {
        return $this->render('password_forgotten/index.html.twig', [
            'controller_name' => 'PasswordForgottenController',
        ]);
    }
}
