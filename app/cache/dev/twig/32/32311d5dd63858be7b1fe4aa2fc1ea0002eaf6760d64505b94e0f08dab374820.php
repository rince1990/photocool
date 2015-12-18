<?php

/* ::base.html.twig */
class __TwigTemplate_5a4d5b4fc3dd149ca816827b796941c891d58e63170897ad7303d82c4049dd73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'title' => array($this, 'block_title'),
            'sidemenu' => array($this, 'block_sidemenu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_594f3270528a78ba5afe2305dfd16bf2235240b249b4a0bba59d53d4bf39eb08 = $this->env->getExtension("native_profiler");
        $__internal_594f3270528a78ba5afe2305dfd16bf2235240b249b4a0bba59d53d4bf39eb08->enter($__internal_594f3270528a78ba5afe2305dfd16bf2235240b249b4a0bba59d53d4bf39eb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style/colour_orange.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("style/image_viewer.css"), "html", null, true);
        echo "\" />
  ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JQuery/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <div id=\"logo\">
    <h1>photocool</h1>
  </div>
  <div id=\"menu\">
    <ul>
      <li><a id=\"homelink\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("adrian_g_index");
        echo "\">home</a></li>
      <li><a id=\"multimedialink\"href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("multimedia_index");
        echo "\">Multimedia</a></li>
      <li><a id=\"searchlink\"href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("multimedia_search");
        echo "\">Search</a></li>
      ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " <li><a id=\"adminlink\"href=\"";
            echo $this->env->getExtension('routing')->getPath("adrian_g_admin");
            echo "\">Admin</a></li> ";
        }
        // line 23
        echo "      ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 24
            echo "      <li><a id=\"logoutlink\"href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Log out</a></li>
      ";
        } else {
            // line 26
            echo "      <li><a id=\"loginlink\"href=\"";
            echo $this->env->getExtension('routing')->getPath("adrian_g_login");
            echo "\">Login</a></li>
      <li><a id=\"registerlink\"href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("user_registration");
            echo "\">Register</a></li>
      ";
        }
        // line 29
        echo "    </ul>
    <div id=\"userWelcome\"><span>Welcome ";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), "guest")) : ("guest")), "html", null, true);
        echo "<span></div>
    </div>

    <div id=\"site_content\">
      <div id=\"side_menu\">
        ";
        // line 35
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 42
        echo "      </div>
      <div id=\"content\">
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "      </div>
    </div>
    ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "  </body>
  </html>
";
        
        $__internal_594f3270528a78ba5afe2305dfd16bf2235240b249b4a0bba59d53d4bf39eb08->leave($__internal_594f3270528a78ba5afe2305dfd16bf2235240b249b4a0bba59d53d4bf39eb08_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_04d8175a7b3d2f04bb8f28ff41c69838a7daddbe60ae6be065d4e1755c9acf6a = $this->env->getExtension("native_profiler");
        $__internal_04d8175a7b3d2f04bb8f28ff41c69838a7daddbe60ae6be065d4e1755c9acf6a->enter($__internal_04d8175a7b3d2f04bb8f28ff41c69838a7daddbe60ae6be065d4e1755c9acf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_04d8175a7b3d2f04bb8f28ff41c69838a7daddbe60ae6be065d4e1755c9acf6a->leave($__internal_04d8175a7b3d2f04bb8f28ff41c69838a7daddbe60ae6be065d4e1755c9acf6a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a1840ce52b6c21fa4fcd59603e84ba052bff8c2d987a61b8c3ad5f65628455b = $this->env->getExtension("native_profiler");
        $__internal_6a1840ce52b6c21fa4fcd59603e84ba052bff8c2d987a61b8c3ad5f65628455b->enter($__internal_6a1840ce52b6c21fa4fcd59603e84ba052bff8c2d987a61b8c3ad5f65628455b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PhotoCool";
        
        $__internal_6a1840ce52b6c21fa4fcd59603e84ba052bff8c2d987a61b8c3ad5f65628455b->leave($__internal_6a1840ce52b6c21fa4fcd59603e84ba052bff8c2d987a61b8c3ad5f65628455b_prof);

    }

    // line 35
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_439ff0d727ec74dccaabd0969abd825d6d51de018deeb6ce44472f86d3002200 = $this->env->getExtension("native_profiler");
        $__internal_439ff0d727ec74dccaabd0969abd825d6d51de018deeb6ce44472f86d3002200->enter($__internal_439ff0d727ec74dccaabd0969abd825d6d51de018deeb6ce44472f86d3002200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        // line 36
        echo "          ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("multimediaBundle:MyGalleries:myGalleries"));
            echo "
          ";
        } else {
            // line 39
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("multimediaBundle:LatestGalleries:latestGalleries"));
            echo "
          ";
        }
        // line 41
        echo "        ";
        
        $__internal_439ff0d727ec74dccaabd0969abd825d6d51de018deeb6ce44472f86d3002200->leave($__internal_439ff0d727ec74dccaabd0969abd825d6d51de018deeb6ce44472f86d3002200_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_d40d0b96aec0df1800ad32a453ce1a46ae7ee8f366e4a395731ae204967a8b6a = $this->env->getExtension("native_profiler");
        $__internal_d40d0b96aec0df1800ad32a453ce1a46ae7ee8f366e4a395731ae204967a8b6a->enter($__internal_d40d0b96aec0df1800ad32a453ce1a46ae7ee8f366e4a395731ae204967a8b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
        ";
        
        $__internal_d40d0b96aec0df1800ad32a453ce1a46ae7ee8f366e4a395731ae204967a8b6a->leave($__internal_d40d0b96aec0df1800ad32a453ce1a46ae7ee8f366e4a395731ae204967a8b6a_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c09710ce387bdac5e4f1684e3466fd3df913328bc847f1205b2b661af4ed6671 = $this->env->getExtension("native_profiler");
        $__internal_c09710ce387bdac5e4f1684e3466fd3df913328bc847f1205b2b661af4ed6671->enter($__internal_c09710ce387bdac5e4f1684e3466fd3df913328bc847f1205b2b661af4ed6671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script>
    \$('#homelink').addClass('selected')
    </script>
    ";
        
        $__internal_c09710ce387bdac5e4f1684e3466fd3df913328bc847f1205b2b661af4ed6671->leave($__internal_c09710ce387bdac5e4f1684e3466fd3df913328bc847f1205b2b661af4ed6671_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 50,  204 => 49,  196 => 45,  190 => 44,  183 => 41,  177 => 39,  171 => 37,  168 => 36,  162 => 35,  150 => 10,  138 => 8,  129 => 54,  127 => 49,  123 => 47,  121 => 44,  117 => 42,  115 => 35,  107 => 30,  104 => 29,  99 => 27,  94 => 26,  88 => 24,  85 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  56 => 11,  52 => 10,  47 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="UTF-8" />*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('style/colour_orange.css') }}" />*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('style/image_viewer.css') }}" />*/
/*   {% block css %} {% endblock %}*/
/*   <script src="{{ asset('JQuery/jquery-2.1.4.min.js') }}"></script>*/
/*   <title>{% block title %}PhotoCool{% endblock %}</title>*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*   <div id="logo">*/
/*     <h1>photocool</h1>*/
/*   </div>*/
/*   <div id="menu">*/
/*     <ul>*/
/*       <li><a id="homelink" href="{{ path('adrian_g_index') }}">home</a></li>*/
/*       <li><a id="multimedialink"href="{{ path('multimedia_index') }}">Multimedia</a></li>*/
/*       <li><a id="searchlink"href="{{ path('multimedia_search') }}">Search</a></li>*/
/*       {% if is_granted('ROLE_ADMIN') %} <li><a id="adminlink"href="{{ path('adrian_g_admin') }}">Admin</a></li> {% endif %}*/
/*       {% if app.user %}*/
/*       <li><a id="logoutlink"href="{{ path('logout') }}">Log out</a></li>*/
/*       {% else %}*/
/*       <li><a id="loginlink"href="{{ path('adrian_g_login') }}">Login</a></li>*/
/*       <li><a id="registerlink"href="{{ path('user_registration') }}">Register</a></li>*/
/*       {% endif %}*/
/*     </ul>*/
/*     <div id="userWelcome"><span>Welcome {{app.user.username|default('guest')}}<span></div>*/
/*     </div>*/
/* */
/*     <div id="site_content">*/
/*       <div id="side_menu">*/
/*         {% block sidemenu %}*/
/*           {% if app.user %}*/
/*             {{ render(controller('multimediaBundle:MyGalleries:myGalleries')) }}*/
/*           {% else %}*/
/*             {{ render(controller('multimediaBundle:LatestGalleries:latestGalleries')) }}*/
/*           {% endif %}*/
/*         {% endblock %}*/
/*       </div>*/
/*       <div id="content">*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/*     {% block javascripts %}*/
/*     <script>*/
/*     $('#homelink').addClass('selected')*/
/*     </script>*/
/*     {% endblock %}*/
/*   </body>*/
/*   </html>*/
/* */
