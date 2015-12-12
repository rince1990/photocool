<?php

/* ::base.html.twig */
class __TwigTemplate_4b0da6009291b6803269fe1bd678f9db3cc66c4e220eb3b37f0dd2b07d44ef17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidemenu' => array($this, 'block_sidemenu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cffc74e5e84d17760f132a5e7387e4bacf78fea8da054e24afe767280c45f578 = $this->env->getExtension("native_profiler");
        $__internal_cffc74e5e84d17760f132a5e7387e4bacf78fea8da054e24afe767280c45f578->enter($__internal_cffc74e5e84d17760f132a5e7387e4bacf78fea8da054e24afe767280c45f578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JQuery/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
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
        // line 18
        echo $this->env->getExtension('routing')->getPath("adrian_g_index");
        echo "\">home</a></li>
          <li><a id=\"loginlink\"href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("adrian_g_login");
        echo "\">Login</a></li>
          <li><a id=\"registerlink\"href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
          <li><a id=\"adminlink\"href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("adrian_g_admin");
        echo "\">Admin</a></li>
          <li><a id=\"logoutlink\"href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Log out</a></li>
        </ul>
        <div id=\"userWelcome\"><span>Welcome ";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), "guest")) : ("guest")), "html", null, true);
        echo "<span></div>
      </div>

      <div id=\"site_content\">
          <div id=\"side_menu\">
          ";
        // line 29
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 37
        echo "          </div>
          <div id=\"content\">
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "          </div>
      </div>
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
        
        $__internal_cffc74e5e84d17760f132a5e7387e4bacf78fea8da054e24afe767280c45f578->leave($__internal_cffc74e5e84d17760f132a5e7387e4bacf78fea8da054e24afe767280c45f578_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_086bd4d7293b859cf98959fe06c42d834bb6deff124581eaaf3f0c5970827e9d = $this->env->getExtension("native_profiler");
        $__internal_086bd4d7293b859cf98959fe06c42d834bb6deff124581eaaf3f0c5970827e9d->enter($__internal_086bd4d7293b859cf98959fe06c42d834bb6deff124581eaaf3f0c5970827e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PhotoCool";
        
        $__internal_086bd4d7293b859cf98959fe06c42d834bb6deff124581eaaf3f0c5970827e9d->leave($__internal_086bd4d7293b859cf98959fe06c42d834bb6deff124581eaaf3f0c5970827e9d_prof);

    }

    // line 29
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_3685a8705747d762af7475fcc70382d6e9a96aeb17bc3410e8e4bbfb2ad83013 = $this->env->getExtension("native_profiler");
        $__internal_3685a8705747d762af7475fcc70382d6e9a96aeb17bc3410e8e4bbfb2ad83013->enter($__internal_3685a8705747d762af7475fcc70382d6e9a96aeb17bc3410e8e4bbfb2ad83013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        // line 30
        echo "            <h2><u>Latest Galleries</u></h2>
            <div class=\"side_menu_item\"> <a href=\"#\"><img class=\"galleryLogo\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/series_one.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"142\" height=\"50\" /></a> <span class=\"info\">Series_One</span> </div>
            <div class=\"side_menu_item\"> <a href=\"#\"><img class=\"galleryLogo\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/series_two.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"142\" height=\"50\" /></a> <span class=\"info\">Series_Two</span> </div>
            <div class=\"side_menu_item\"> <a href=\"#\"><img class=\"galleryLogo\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/series_three.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"142\" height=\"50\" /></a> <span class=\"info\">Series_Three</span> </div>
            <div class=\"side_menu_item\"> <a href=\"#\"><img class=\"galleryLogo\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/series_four.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"142\" height=\"50\" /></a> <span class=\"info\">Series_Four</span> </div>
            <div class=\"side_menu_item\"> <a href=\"#\"><img class=\"galleryLogo\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/series_five.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"142\" height=\"50\" /></a> <span class=\"info\">Series_Five</span> </div>
          ";
        
        $__internal_3685a8705747d762af7475fcc70382d6e9a96aeb17bc3410e8e4bbfb2ad83013->leave($__internal_3685a8705747d762af7475fcc70382d6e9a96aeb17bc3410e8e4bbfb2ad83013_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e89e93236f502612c05c8c86e9e77e982362681485c1659a40c3013cac65a2f = $this->env->getExtension("native_profiler");
        $__internal_1e89e93236f502612c05c8c86e9e77e982362681485c1659a40c3013cac65a2f->enter($__internal_1e89e93236f502612c05c8c86e9e77e982362681485c1659a40c3013cac65a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
            ";
        
        $__internal_1e89e93236f502612c05c8c86e9e77e982362681485c1659a40c3013cac65a2f->leave($__internal_1e89e93236f502612c05c8c86e9e77e982362681485c1659a40c3013cac65a2f_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e45a70aa551780525788550e2c989d87b062f536b3124d82e7c98bd615b156c0 = $this->env->getExtension("native_profiler");
        $__internal_e45a70aa551780525788550e2c989d87b062f536b3124d82e7c98bd615b156c0->enter($__internal_e45a70aa551780525788550e2c989d87b062f536b3124d82e7c98bd615b156c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <script>
        \$('#homelink').addClass('selected')
        </script>
      ";
        
        $__internal_e45a70aa551780525788550e2c989d87b062f536b3124d82e7c98bd615b156c0->leave($__internal_e45a70aa551780525788550e2c989d87b062f536b3124d82e7c98bd615b156c0_prof);

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
        return array (  181 => 45,  175 => 44,  167 => 40,  161 => 39,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  133 => 30,  127 => 29,  115 => 9,  106 => 49,  104 => 44,  100 => 42,  98 => 39,  94 => 37,  92 => 29,  84 => 24,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('style/colour_orange.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('style/image_viewer.css') }}" />*/
/*         <script src="{{ asset('JQuery/jquery-2.1.4.min.js') }}"></script>*/
/*         <title>{% block title %}PhotoCool{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <div id="logo">*/
/*         <h1>photocool</h1>*/
/*       </div>*/
/*       <div id="menu">*/
/*         <ul>*/
/*           <li><a id="homelink" href="{{ path('adrian_g_index') }}">home</a></li>*/
/*           <li><a id="loginlink"href="{{ path('adrian_g_login') }}">Login</a></li>*/
/*           <li><a id="registerlink"href="{{ path('user_registration') }}">Register</a></li>*/
/*           <li><a id="adminlink"href="{{ path('adrian_g_admin') }}">Admin</a></li>*/
/*           <li><a id="logoutlink"href="{{ path('logout') }}">Log out</a></li>*/
/*         </ul>*/
/*         <div id="userWelcome"><span>Welcome {{app.user.username|default('guest')}}<span></div>*/
/*       </div>*/
/* */
/*       <div id="site_content">*/
/*           <div id="side_menu">*/
/*           {% block sidemenu %}*/
/*             <h2><u>Latest Galleries</u></h2>*/
/*             <div class="side_menu_item"> <a href="#"><img class="galleryLogo" src="{{ asset('images/series_one.jpg') }}" alt="" width="142" height="50" /></a> <span class="info">Series_One</span> </div>*/
/*             <div class="side_menu_item"> <a href="#"><img class="galleryLogo" src="{{ asset('images/series_two.jpg') }}" alt="" width="142" height="50" /></a> <span class="info">Series_Two</span> </div>*/
/*             <div class="side_menu_item"> <a href="#"><img class="galleryLogo" src="{{ asset('images/series_three.jpg') }}" alt="" width="142" height="50" /></a> <span class="info">Series_Three</span> </div>*/
/*             <div class="side_menu_item"> <a href="#"><img class="galleryLogo" src="{{ asset('images/series_four.jpg') }}" alt="" width="142" height="50" /></a> <span class="info">Series_Four</span> </div>*/
/*             <div class="side_menu_item"> <a href="#"><img class="galleryLogo" src="{{ asset('images/series_five.jpg') }}" alt="" width="142" height="50" /></a> <span class="info">Series_Five</span> </div>*/
/*           {% endblock %}*/
/*           </div>*/
/*           <div id="content">*/
/*             {% block content %}*/
/* */
/*             {% endblock %}*/
/*           </div>*/
/*       </div>*/
/*         {% block javascripts %}*/
/*         <script>*/
/*         $('#homelink').addClass('selected')*/
/*         </script>*/
/*       {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
