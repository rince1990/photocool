<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // adrian_g_register_homepage
            if (0 === strpos($pathinfo, '/user/hello') && preg_match('#^/user/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adrian_g_register_homepage')), array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::indexAction',));
            }

            // adrian_g_register
            if ($pathinfo === '/user/register') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::registerAction',  '_route' => 'adrian_g_register',);
            }

            if (0 === strpos($pathinfo, '/user/login')) {
                // adrian_g_login
                if ($pathinfo === '/user/login') {
                    return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\SecurityController::loginAction',  '_route' => 'adrian_g_login',);
                }

                // adrian_g_logincheck
                if ($pathinfo === '/user/login_check') {
                    return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'adrian_g_logincheck',);
                }

            }

            // adrian_g_registerSQL
            if ($pathinfo === '/user/registerSQL') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::registerSQLAction',  '_route' => 'adrian_g_registerSQL',);
            }

            // adrian_g_admin
            if ($pathinfo === '/user/admin') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::adminAction',  '_route' => 'adrian_g_admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
