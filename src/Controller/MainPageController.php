<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'main_page')]
final class MainPageController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('pages/layout.html.twig');
    }
}