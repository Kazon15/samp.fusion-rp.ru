<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DonateController extends AbstractController
{
	/**
	 * @Route("/donate", name="donatePage")
	 */
	public function indexAction()
	{
		return $this->render('donate/index.html.twig', [
			'controller_name' => 'DonateController',
		]);
	}
}