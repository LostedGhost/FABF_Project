<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PasswordChangeMailController extends AbstractController
{
    #[Route('/passwordChangeMail', name: 'app_password_change_mail')]
    public function index(): Response
    {
        return $this->render('password_change_mail/index.html.twig', [
            'controller_name' => 'PasswordChangeMailController',
        ]);
    }
}
