<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('', name: 'app_dashboard')]
class DashboardController extends AbstractController
{
    #[Route('', name: '_index')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'header' => 'dashboard.header',
        ]);
    }
}
