<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/multimedia')) {
            // multimedia_index
            if ($pathinfo === '/multimedia/index') {
                return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'multimedia_index',);
            }

            // multimedia_upload
            if (0 === strpos($pathinfo, '/multimedia/upload') && preg_match('#^/multimedia/upload/(?P<galleryID>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_upload')), array (  '_controller' => 'multimediaBundle\\Controller\\UploadController::uploadAction',));
            }

            if (0 === strpos($pathinfo, '/multimedia/gallery')) {
                // multimedia_accesible_gallery
                if ($pathinfo === '/multimedia/galleryAcess') {
                    return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::accesibleGalleryAction',  '_route' => 'multimedia_accesible_gallery',);
                }

                // multimedia_view_gallery
                if (preg_match('#^/multimedia/gallery/(?P<galleryID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_view_gallery')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::viewGalleryAction',));
                }

            }

            if (0 === strpos($pathinfo, '/multimedia/image')) {
                // multimedia_view_image
                if (preg_match('#^/multimedia/image/(?P<imageID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_view_image')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::viewImageAction',));
                }

                // multimedia_modify_image
                if (preg_match('#^/multimedia/image/(?P<imageID>[^/]++)/modify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_modify_image')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyImageAction',));
                }

                // multimedia_modify_imageSQL
                if (preg_match('#^/multimedia/image/(?P<imageID>[^/]++)/modifySQL$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_modify_imageSQL')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyimageSQLAction',));
                }

            }

            if (0 === strpos($pathinfo, '/multimedia/createGallery')) {
                // multimedia_create_gallery
                if ($pathinfo === '/multimedia/createGallery') {
                    return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::createGalleryAction',  '_route' => 'multimedia_create_gallery',);
                }

                // multimedia_create_gallerySQL
                if ($pathinfo === '/multimedia/createGallerySQL') {
                    return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::createGallerySQLAction',  '_route' => 'multimedia_create_gallerySQL',);
                }

            }

            if (0 === strpos($pathinfo, '/multimedia/delete')) {
                // multimedia_delete_gallerySQL
                if (preg_match('#^/multimedia/delete/(?P<galleryID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_delete_gallerySQL')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::deleteGallerySQLAction',));
                }

                // multimedia_delete_imageSQL
                if (0 === strpos($pathinfo, '/multimedia/delete/image') && preg_match('#^/multimedia/delete/image/(?P<imageID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_delete_imageSQL')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::deleteImageSQLAction',));
                }

            }

            if (0 === strpos($pathinfo, '/multimedia/gallery')) {
                // multimedia_modify_gallery
                if (preg_match('#^/multimedia/gallery/(?P<galleryID>[^/]++)/modify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_modify_gallery')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyGalleryAction',));
                }

                // multimedia_modify_gallerySQL
                if (preg_match('#^/multimedia/gallery/(?P<galleryID>[^/]++)/modifySQL$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'multimedia_modify_gallerySQL')), array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyGallerySQLAction',));
                }

            }

            if (0 === strpos($pathinfo, '/multimedia/search')) {
                // multimedia_search
                if ($pathinfo === '/multimedia/search') {
                    return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXSearchAction',  '_route' => 'multimedia_search',);
                }

                if (0 === strpos($pathinfo, '/multimedia/search/AJAX')) {
                    // multimedia_ajax_search_gallery
                    if ($pathinfo === '/multimedia/search/AJAX/gallery') {
                        return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXDataGalleryAction',  '_route' => 'multimedia_ajax_search_gallery',);
                    }

                    // multimedia_ajax_search_photo
                    if ($pathinfo === '/multimedia/search/AJAX/photo') {
                        return array (  '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXDataPhotoAction',  '_route' => 'multimedia_ajax_search_photo',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_registration
            if ($pathinfo === '/user/register') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
            }

            if (0 === strpos($pathinfo, '/user/admin')) {
                // adrian_g_admin
                if ($pathinfo === '/user/admin') {
                    return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::adminAction',  '_route' => 'adrian_g_admin',);
                }

                // adrian_g_status
                if (0 === strpos($pathinfo, '/user/admin/status') && preg_match('#^/user/admin/status/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adrian_g_status')), array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::statusAction',));
                }

            }

            // adrian_g_message
            if ($pathinfo === '/user/message') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::messageAction',  '_route' => 'adrian_g_message',);
            }

            // adrian_g_allGallery
            if ($pathinfo === '/user/admingalleries') {
                return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::allGalleryAction',  '_route' => 'adrian_g_allGallery',);
            }

        }

        // adrian_g_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'adrian_g_index');
            }

            return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'adrian_g_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // adrian_g_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AdrianG\\RegisterBundle\\Controller\\LoginController::loginAction',  '_route' => 'adrian_g_login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
