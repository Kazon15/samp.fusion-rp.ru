<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
	/**
	 * @Route("/", name="mainPage")
	 */
	public function indexAction()
	{
		$user = $this->getUser();
		
		return $this->render('main/index.html.twig', [
			'controller_name' => 'MainController',
			'user'            => $user,
		]);
	}
}