<?php

/* multimediaBundle:Default:index.html.twig */
class __TwigTemplate_2f3c2b3d063ceda2e79e20d88ebd32e921c7c2293529920606898ab3887b3299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "multimediaBundle:Default:index.html.twig", 2);
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
        $__internal_3c8960941628de656cf591a2733bd7a95f01cdd2ca16dd2b14ad9b4388bf67b7 = $this->env->getExtension("native_profiler");
        $__internal_3c8960941628de656cf591a2733bd7a95f01cdd2ca16dd2b14ad9b4388bf67b7->enter($__internal_3c8960941628de656cf591a2733bd7a95f01cdd2ca16dd2b14ad9b4388bf67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "multimediaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8960941628de656cf591a2733bd7a95f01cdd2ca16dd2b14ad9b4388bf67b7->leave($__internal_3c8960941628de656cf591a2733bd7a95f01cdd2ca16dd2b14ad9b4388bf67b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b18f35b722beed579a993f393f934c895f06c5f4ddab697da3023f3c6387df8 = $this->env->getExtension("native_profiler");
        $__internal_8b18f35b722beed579a993f393f934c895f06c5f4ddab697da3023f3c6387df8->enter($__internal_8b18f35b722beed579a993f393f934c895f06c5f4ddab697da3023f3c6387df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_8b18f35b722beed579a993f393f934c895f06c5f4ddab697da3023f3c6387df8->leave($__internal_8b18f35b722beed579a993f393f934c895f06c5f4ddab697da3023f3c6387df8_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_655b63b6e0b701a5ae90aa74794c291c0665380b7e4ecaf8c8d363098f104900 = $this->env->getExtension("native_profiler");
        $__internal_655b63b6e0b701a5ae90aa74794c291c0665380b7e4ecaf8c8d363098f104900->enter($__internal_655b63b6e0b701a5ae90aa74794c291c0665380b7e4ecaf8c8d363098f104900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<center>
<h1>Multimedia Menu</h1>
<center>
  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("multimedia_create_gallery");
        echo "\">
    <img class =\"multimediaMenuImage\"src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gallery.png"), "html", null, true);
        echo "\"/>
  </a>
  <br>Create a new Gallery<br>
  <hr>
  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("multimedia_accesible_gallery");
        echo "\">
    <img class =\"multimediaMenuImage\"src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gallery-icon.png"), "html", null, true);
        echo "\"/>
  </a>
  <br>Accesible Galleries<br>
  <hr>
  <a href=\"#\">
    <img class =\"multimediaMenuImage\"src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/profile.png"), "html", null, true);
        echo "\"/>
  </a>
  <br><p style='text-decoration:line-through'>Edit my profile</p>(under construction)<br>

";
        
        $__internal_655b63b6e0b701a5ae90aa74794c291c0665380b7e4ecaf8c8d363098f104900->leave($__internal_655b63b6e0b701a5ae90aa74794c291c0665380b7e4ecaf8c8d363098f104900_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d8155a0da4077798bff205ac0baf3845a95c96c4025f6a3c32df0e82db81759 = $this->env->getExtension("native_profiler");
        $__internal_1d8155a0da4077798bff205ac0baf3845a95c96c4025f6a3c32df0e82db81759->enter($__internal_1d8155a0da4077798bff205ac0baf3845a95c96c4025f6a3c32df0e82db81759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "<script>\$('#multimedialink').addClass('selected');</script>

";
        
        $__internal_1d8155a0da4077798bff205ac0baf3845a95c96c4025f6a3c32df0e82db81759->leave($__internal_1d8155a0da4077798bff205ac0baf3845a95c96c4025f6a3c32df0e82db81759_prof);

    }

    public function getTemplateName()
    {
        return "multimediaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 29,  82 => 21,  74 => 16,  70 => 15,  63 => 11,  59 => 10,  54 => 7,  42 => 6,  36 => 5,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% block content %}*/
/* <center>*/
/* <h1>Multimedia Menu</h1>*/
/* <center>*/
/*   <a href="{{ path('multimedia_create_gallery') }}">*/
/*     <img class ="multimediaMenuImage"src="{{ asset('images/gallery.png') }}"/>*/
/*   </a>*/
/*   <br>Create a new Gallery<br>*/
/*   <hr>*/
/*   <a href="{{ path('multimedia_accesible_gallery') }}">*/
/*     <img class ="multimediaMenuImage"src="{{ asset('images/gallery-icon.png') }}"/>*/
/*   </a>*/
/*   <br>Accesible Galleries<br>*/
/*   <hr>*/
/*   <a href="#">*/
/*     <img class ="multimediaMenuImage"src="{{ asset('images/profile.png') }}"/>*/
/*   </a>*/
/*   <br><p style='text-decoration:line-through'>Edit my profile</p>(under construction)<br>*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* <script>$('#multimedialink').addClass('selected');</script>*/
/* */
/* {% endblock %}*/
/* */
