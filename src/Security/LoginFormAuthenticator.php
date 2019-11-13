<?php

namespace App\Security;

use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
	use TargetPathTrait;
	
	private $entityManager;
	private $router;
	private $csrfTokenManager;
	
	public function __construct(EntityManagerInterface $entityManager, RouterInterface $router, CsrfTokenManagerInterface $csrfTokenManager)
	{
		$this->entityManager    = $entityManager;
		$this->router           = $router;
		$this->csrfTokenManager = $csrfTokenManager;
	}
	
	public function supports(Request $request)
	{
		return 'loginPage' === $request->attributes->get('_route') && $request->isMethod('POST');
	}
	
	public function getCredentials(Request $request)
	{
		$credentials = [
			'name'       => $request->request->get('name'),
			'password'   => $request->request->get('password'),
			'csrf_token' => $request->request->get('_csrf_token'),
		];
		$request->getSession()->set(Security::LAST_USERNAME, $credentials['name']);
		
		return $credentials;
	}
	
	public function getUser($credentials, UserProviderInterface $userProvider)
	{
		$token = new CsrfToken('authenticate', $credentials['csrf_token']);
		if(!$this->csrfTokenManager->isTokenValid($token))
		{
			throw new InvalidCsrfTokenException();
		}
		
		$user = $this->entityManager->getRepository(Player::class)->findOneBy(['name' => $credentials['name']]);
		
		if(!$user)
		{
			throw new CustomUserMessageAuthenticationException('Name could not be found.');
		}
		
		return $user;
	}
	
	public function checkCredentials($credentials, UserInterface $user)
	{
		$account = $this->entityManager->getRepository(Player::class)->findOneBy([
			'name'     => $credentials['name'],
			'password' => md5($credentials['password']),
		]);
		
		if($account)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
	{
		/*if($targetPath = $this->getTargetPath($request->getSession(), $providerKey))
		{
			return new RedirectResponse($targetPath);
		}*/
		
		return new RedirectResponse($this->router->generate('userPage'));
	}
	
	protected function getLoginUrl()
	{
		return $this->router->generate('loginPage');
	}
}