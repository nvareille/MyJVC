<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
	/**
     * @Route("/", name="accueil")
     */
	public function accueil()
    {
		 return $this->render('truc/notifications.html.twig',
		 [
            'user_first_name' => "Nicolas",
            'notifications' => 42,
			'cafe' => 74,
			'users' => [
				'Raphaël',
				'Guenole',
				'Alexandre'
			],
            'images' => [
                'https://www.pokepedia.fr/images/thumb/1/17/Dracaufeu-RFVF.png/250px-Dracaufeu-RFVF.png',
                'https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/250px-Florizarre-RFVF.png',
                'https://www.pokepedia.fr/images/thumb/2/24/Tortank-RFVF.png/250px-Tortank-RFVF.png'
            ],
            'articles' => 
            [
                [
                    'nom' => "Pokémons",
                    "image" => 'https://www.pokepedia.fr/images/thumb/1/17/Dracaufeu-RFVF.png/250px-Dracaufeu-RFVF.png'
                ],
                [
                    'nom' => "Pokémons 2",
                    "image" => 'https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/250px-Florizarre-RFVF.png'
                ],
            ]
        ]);
    }
	
}
?>