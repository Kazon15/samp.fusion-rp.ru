<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
	/**
	 * @Route("/user", name="userPage")
	 */
	public function indexAction(EntityManagerInterface $em)
	{
		return $this->render('user/index.html.twig', [
			'controller_name' => 'UserController',
			'user'            => $this->getUser()
		]);
	}
}