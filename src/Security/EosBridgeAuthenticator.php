<?php

namespace App\Security;

use App\Entity\Utilisateur;
use App\Service\Bridge\SessionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Guard\Token\PostAuthenticationGuardToken;
use Twig\Environment;


class EosBridgeAuthenticator extends AbstractGuardAuthenticator
{
    private EntityManagerInterface $em;
    private SessionService $sessionService;
    private Environment $twig;

    public function __construct(EntityManagerInterface $em, SessionService $sessionService, Environment $twig)
    {
        $this->em = $em;
        $this->sessionService = $sessionService;
        $this->twig = $twig;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning `false` will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request)
    {
        return true;
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    public function getCredentials(Request $request)
    {
        return  $this->sessionService->getUserId();
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {

        if (false === $credentials) {
            // The token header was empty, authentication fails with HTTP Status
            // Code 401 "Unauthorized"
            return null;
        }
        // if a User is returned, checkCredentials() is called
        return $this->sessionService->getCurrentUser();
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {

        return new Response( $this->twig->render('bundles/TwigBundle/Exception/error401.html.twig'), Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {

        return new Response();
    }

    public function supportsRememberMe()
    {
        return false;
    }

    public function createAuthenticatedToken(UserInterface $user, $providerKey = "")
    {
        return new PostAuthenticationGuardToken(
            $user,
            $providerKey,
            []
        );
    }
}