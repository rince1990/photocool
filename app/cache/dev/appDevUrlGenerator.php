<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_upload' => array (  0 =>   array (    0 => 'galleryID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\UploadController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleryID',    ),    1 =>     array (      0 => 'text',      1 => '/multimedia/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_accesible_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::accesibleGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/galleryAcess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_view_gallery' => array (  0 =>   array (    0 => 'galleryID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::viewGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleryID',    ),    1 =>     array (      0 => 'text',      1 => '/multimedia/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_view_image' => array (  0 =>   array (    0 => 'imageID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::viewImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'imageID',    ),    1 =>     array (      0 => 'text',      1 => '/multimedia/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_modify_image' => array (  0 =>   array (    0 => 'imageID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modify',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'imageID',    ),    2 =>     array (      0 => 'text',      1 => '/multimedia/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_modify_imageSQL' => array (  0 =>   array (    0 => 'imageID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyimageSQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifySQL',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'imageID',    ),    2 =>     array (      0 => 'text',      1 => '/multimedia/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_create_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::createGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/createGallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_create_gallerySQL' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::createGallerySQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/createGallerySQL',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_delete_gallerySQL' => array (  0 =>   array (    0 => 'galleryID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::deleteGallerySQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleryID',    ),    1 =>     array (      0 => 'text',      1 => '/multimedia/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_delete_imageSQL' => array (  0 =>   array (    0 => 'imageID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::deleteImageSQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'imageID',    ),    1 =>     array (      0 => 'text',      1 => '/multimedia/delete/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_modify_gallery' => array (  0 =>   array (    0 => 'galleryID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modify',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleryID',    ),    2 =>     array (      0 => 'text',      1 => '/multimedia/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_modify_gallerySQL' => array (  0 =>   array (    0 => 'galleryID',  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::modifyGallerySQLAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifySQL',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleryID',    ),    2 =>     array (      0 => 'text',      1 => '/multimedia/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXSearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_ajax_search_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXDataGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/search/AJAX/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'multimedia_ajax_search_photo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'multimediaBundle\\Controller\\DefaultController::AJAXDataPhotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/multimedia/search/AJAX/photo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_status' => array (  0 =>   array (    0 => 'status',  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::statusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'status',    ),    1 =>     array (      0 => 'text',      1 => '/user/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::messageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_allGallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::allGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/admingalleries',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adrian_g_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdrianG\\RegisterBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
