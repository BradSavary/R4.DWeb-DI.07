<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\LegoRepository;
use App\Repository\LegoCollectionRepository;
use App\Entity\LegoCollection;

class LegoController extends AbstractController
{
    #[Route('/', name: 'all')]
    public function all(LegoRepository $legoService, LegoCollectionRepository $collectionRepository): Response
    {
        $response = new Response();
        $legos = $legoService->findAll();
        $collections = $collectionRepository->findAll();
        foreach ($legos as $lego) {
            $response->setContent($response->getContent() . $this->renderView('lego.html.twig', [
                'lego' => $lego,
                'collections' => $collections
            ]));
        }
        return $response;
    }

    #[Route('/{collection}', name: 'filter_by_collection', requirements: ['collection' => 'creator|star_wars|creator_expert'])]
    public function filter(string $collection, LegoRepository $legoService, LegoCollectionRepository $collectionRepository): Response
    {
        $response = new Response();
        if ($collection == 'star_wars') {
            $collection = 'Star Wars';
        } else if ($collection == 'creator_expert') {
            $collection = 'creator expert';
        }
        $legos = $legoService->findByCollection($collection);
        $collections = $collectionRepository->findAll();
        foreach ($legos as $lego) {
            $response->setContent($response->getContent() . $this->renderView('lego.html.twig', [
                'lego' => $lego,
                'collections' => $collections
            ]));
        }
        return $response;
    }

    #[Route('/collection', name: 'test')]
    public function test(LegoCollectionRepository $collectionRepository): Response
    {
        $collections = $collectionRepository->findAll();
        return $this->render('collections.html.twig', ['collections' => $collections]);
    }
}
?>
