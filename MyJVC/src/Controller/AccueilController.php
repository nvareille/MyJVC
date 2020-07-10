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
			]
        ]);
    }
	
}
?>