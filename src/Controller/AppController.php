<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(): Response
    {

        $offer_list = [

            [
                "title" => "Offre d'emploi 1",
                "image" => "https://via.placeholder.com/300",
                "city" => "Bordeaux",
                "contract" => "CDI",
                "duration" => "Temps Plein",

            ],
            [
                "title" => "Offre d'emploi 2",
                "image" => "https://via.placeholder.com/300",
                "city" => "Marseille",
                "contract" => "CDD",
                "duration" => "Temps Partiel",

            ],
            [
                "title" => "Offre d'emploi 3",
                "image" => "https://via.placeholder.com/300",
                "city" => "Lyon",
                "contract" => "CDD",
                "duration" => "Temps Plein",

            ],
            [
                "title" => "Offre d'emploi 4",
                "image" => "https://via.placeholder.com/300",
                "city" => "Toulouse",
                "contract" => "CDI",
                "duration" => "Temps Partiel",

            ],
        ];

        return $this->render('app/index.html.twig', [
            "offer_list" => $offer_list
        ]);
    }

    /**
     * @Route("/offer", name="offer")
     */
    public function job()
    {
        $offer = [
            "title" => "Offre d'emploi",
            "image" => "https://via.placeholder.com/300",
            "city" => "Bordeaux",
            "contract" => "CDD",
            "duration" => "Temps Plein",
            ];


        return $this->render('app/offer.html.twig',[
            "offer" => $offer
        ]);
        
    }
        
}



