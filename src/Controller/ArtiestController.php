<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Artiest;

use App\Repository\ArtiestRepository;

class ArtiestController extends AbstractController
{
    #[Route('/artiest', name: 'app_artiest')]
    public function index(): Response
    {
        $artiest = [
            "naam" => "Gary Clark jr.",
            "genre" => "Blues Rock",
            "omschrijving" => "Gary Clark jr.is...",
            "afbeelding_url" => "https://www.billboard.com/wp-content/uploads/media/Gary-Clark-Jr.-Portrait-Shoot-London-2015-a-billboard-1548.jpg",
            "website" => "https://www.garyclarkjr.com"
            ];

        $rep = $this->getDoctrine()->getRepository(Poppodium::class);
        $result = $rep->savePodium($artiest);

        dd($result);
    }
}
