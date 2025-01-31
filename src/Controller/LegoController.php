<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\LegoService;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoService $legoService): Response
    {
        $lego = $legoService->getLego();
        return $this->render('lego.html.twig', ['lego' => $lego]);
    }

    #[Route('/me', name: 'me')]
    public function me()
    {
        die("BradSavary");
    }
}
?>
