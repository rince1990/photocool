<?php

/* multimediaBundle:Default:viewGallery.html.twig */
class __TwigTemplate_4eca56fc1cff7a78e58cab317c8dc064b7b8413eb2e25119712b9dad393404b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "multimediaBundle:Default:viewGallery.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b096aae12cfcef3e6c91d3b17111a13b9c1b98793e598fb8c760f7c4fbe8519 = $this->env->getExtension("native_profiler");
        $__internal_1b096aae12cfcef3e6c91d3b17111a13b9c1b98793e598fb8c760f7c4fbe8519->enter($__internal_1b096aae12cfcef3e6c91d3b17111a13b9c1b98793e598fb8c760f7c4fbe8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "multimediaBundle:Default:viewGallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b096aae12cfcef3e6c91d3b17111a13b9c1b98793e598fb8c760f7c4fbe8519->leave($__internal_1b096aae12cfcef3e6c91d3b17111a13b9c1b98793e598fb8c760f7c4fbe8519_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6dc338c60740cc94da92f86d7714f0bc8032a24279993bc94f06a9cbcca7fe = $this->env->getExtension("native_profiler");
        $__internal_6b6dc338c60740cc94da92f86d7714f0bc8032a24279993bc94f06a9cbcca7fe->enter($__internal_6b6dc338c60740cc94da92f86d7714f0bc8032a24279993bc94f06a9cbcca7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "  ";
        
        $__internal_6b6dc338c60740cc94da92f86d7714f0bc8032a24279993bc94f06a9cbcca7fe->leave($__internal_6b6dc338c60740cc94da92f86d7714f0bc8032a24279993bc94f06a9cbcca7fe_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4bfc32dd5e66aeff50324e36b6a3307fdb0cffbdd5e28f754c3c5055d7e27a7 = $this->env->getExtension("native_profiler");
        $__internal_f4bfc32dd5e66aeff50324e36b6a3307fdb0cffbdd5e28f754c3c5055d7e27a7->enter($__internal_f4bfc32dd5e66aeff50324e36b6a3307fdb0cffbdd5e28f754c3c5055d7e27a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "owner", array())) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                // line 8
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_upload", array("galleryID" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "id", array()))), "html", null, true);
                echo "\"><img id=\"uploadButton\"src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/upload_button.png"), "html", null, true);
                echo "\"></a>
<a onclick=\"return confirm('Are you sure you would like to delete this gallery?');\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_delete_gallerySQL", array("galleryID" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "id", array()))), "html", null, true);
                echo "\">
  <img id=\"deleteButton\"src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/delete_button.png"), "html", null, true);
                echo "\"></a>
  ";
            }
        }
        // line 12
        echo "<center>
  <h1>Gallery: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "name", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "visibility", array()), "html", null, true);
        echo ")</h1>
  ";
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "owner", array())) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                // line 15
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_modify_gallery", array("galleryID" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "id", array()))), "html", null, true);
                echo "\"><button>Modify</button></a>
  ";
            }
        }
        // line 17
        echo "</center>
    <div id=\"gallery\">
      <em id=\"thumbs\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_view_image", array("imageID" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\">
            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["image"], "path", array())), "html", null, true);
            echo "\" alt=\"\" />
          </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          ";
        // line 26
        echo "        </em>
      </div>


    ";
        
        $__internal_f4bfc32dd5e66aeff50324e36b6a3307fdb0cffbdd5e28f754c3c5055d7e27a7->leave($__internal_f4bfc32dd5e66aeff50324e36b6a3307fdb0cffbdd5e28f754c3c5055d7e27a7_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60e645d5741e4a849ff8553fd805b6c18bb06d0f59c6a4a5aaec3afa6899bf5a = $this->env->getExtension("native_profiler");
        $__internal_60e645d5741e4a849ff8553fd805b6c18bb06d0f59c6a4a5aaec3afa6899bf5a->enter($__internal_60e645d5741e4a849ff8553fd805b6c18bb06d0f59c6a4a5aaec3afa6899bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "  <script>
  \$('#multimedialink').addClass('selected');


  </script>
";
        
        $__internal_60e645d5741e4a849ff8553fd805b6c18bb06d0f59c6a4a5aaec3afa6899bf5a->leave($__internal_60e645d5741e4a849ff8553fd805b6c18bb06d0f59c6a4a5aaec3afa6899bf5a_prof);

    }

    public function getTemplateName()
    {
        return "multimediaBundle:Default:viewGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  132 => 32,  121 => 26,  119 => 25,  110 => 22,  105 => 21,  101 => 20,  96 => 17,  89 => 15,  86 => 14,  80 => 13,  77 => 12,  71 => 10,  67 => 9,  60 => 8,  57 => 7,  51 => 6,  44 => 31,  42 => 6,  36 => 5,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% block content %}*/
/* {% if app.user %}{% if (app.user == gallery.owner or app.user.hasRole('ROLE_ADMIN')) %}*/
/* <a href="{{path('multimedia_upload',{'galleryID': gallery.id})}}"><img id="uploadButton"src="{{ asset('images/upload_button.png')}}"></a>*/
/* <a onclick="return confirm('Are you sure you would like to delete this gallery?');" href="{{path('multimedia_delete_gallerySQL',{'galleryID': gallery.id})}}">*/
/*   <img id="deleteButton"src="{{ asset('images/delete_button.png')}}"></a>*/
/*   {% endif %}{% endif %}*/
/* <center>*/
/*   <h1>Gallery: {{ gallery.name }} ({{gallery.visibility}})</h1>*/
/*   {% if app.user %}{% if (app.user == gallery.owner or app.user.hasRole('ROLE_ADMIN')) %}*/
/*   <a href="{{path('multimedia_modify_gallery',{'galleryID': gallery.id})}}"><button>Modify</button></a>*/
/*   {% endif %}{% endif %}*/
/* </center>*/
/*     <div id="gallery">*/
/*       <em id="thumbs">*/
/*         {% for image in images %}*/
/*           <a href="{{path('multimedia_view_image',{'imageID': image.id})}}">*/
/*             <img src="{{asset(image.path) }}" alt="" />*/
/*           </a>*/
/*           {% endfor %}*/
/*           {# this is still disabled <a href="{{path('multimedia_view_gallery',{'galleryID': gallery.id})}}"> #}*/
/*         </em>*/
/*       </div>*/
/* */
/* */
/*     {% endblock %}*/
/*   {% endblock %}*/
/*   {% block javascripts %}*/
/*   <script>*/
/*   $('#multimedialink').addClass('selected');*/
/* */
/* */
/*   </script>*/
/* {% endblock %}*/
/* */
