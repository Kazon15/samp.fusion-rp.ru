<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
	/**
	 * @Route("/login", name="loginPage")
	 */
	public function loginAction(AuthenticationUtils $authenticationUtils) : Response
	{
		$error        = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render('security/login.html.twig', [
			'last_username' => $lastUsername,
			'error'         => $error
		]);
	}
	
	public function loginShowAction(AuthenticationUtils $authenticationUtils) : Response
	{
		$error        = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render('security/login_content.html.twig', [
			'last_username' => $lastUsername,
			'error'         => $error
		]);
	}
	
	/**
	 * @Route("/logout", name="logoutPage")
	 */
	public function logoutAction()
	{
		throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
	}
}