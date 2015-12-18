<?php

/* multimediaBundle:Default:latestgalleries.html.twig */
class __TwigTemplate_bf84a11f0bbb525c719a6ada6af165ce0fd979ca181c60df3e9619465d146f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8941d95f9dc8508c6b5af2109b5ffdc294090db330d5409790551aed3e15df29 = $this->env->getExtension("native_profiler");
        $__internal_8941d95f9dc8508c6b5af2109b5ffdc294090db330d5409790551aed3e15df29->enter($__internal_8941d95f9dc8508c6b5af2109b5ffdc294090db330d5409790551aed3e15df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "multimediaBundle:Default:latestgalleries.html.twig"));

        // line 1
        echo "<h2 class='OrangeText' id='myGalleriesh2'>Latest galleries<h2>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : $this->getContext($context, "galleries")));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 3
            echo "  <div class=\"side_menu_item\">
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_view_gallery", array("galleryID" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
            echo "\">
      <img class=\"galleryLogo\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["gallery"], "path", array())), "html", null, true);
            echo "\" alt=\"gallery image\" width=\"142\" height=\"50\" />
    </a> <span class=\"info\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</span>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8941d95f9dc8508c6b5af2109b5ffdc294090db330d5409790551aed3e15df29->leave($__internal_8941d95f9dc8508c6b5af2109b5ffdc294090db330d5409790551aed3e15df29_prof);

    }

    public function getTemplateName()
    {
        return "multimediaBundle:Default:latestgalleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <h2 class='OrangeText' id='myGalleriesh2'>Latest galleries<h2>*/
/* {% for gallery in galleries %}*/
/*   <div class="side_menu_item">*/
/*     <a href="{{path('multimedia_view_gallery',{'galleryID': gallery.id})}}">*/
/*       <img class="galleryLogo" src="{{asset(gallery.path) }}" alt="gallery image" width="142" height="50" />*/
/*     </a> <span class="info">{{ gallery.name }}</span>*/
/*   </div>*/
/* {% endfor %}*/
/* */
