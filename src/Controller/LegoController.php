<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Lego;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        $lego = new Lego(1, 'Volkswagen Beetle', 'Creator Expert');

        return $this->render('lego.html.twig', [
            'lego' => $lego,
        ]);
    }

    #[Route('/me', name: 'me')]
    public function me()
    {
        die("BradSavary");
    }
}
?>
