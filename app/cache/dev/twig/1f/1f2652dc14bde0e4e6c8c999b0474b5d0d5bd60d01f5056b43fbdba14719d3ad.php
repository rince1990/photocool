<?php

/* multimediaBundle:Default:viewImage.html.twig */
class __TwigTemplate_e44a5f0ff1b688108723db2a77bc88fd6df3c9a936802c2049607662d92c8ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "multimediaBundle:Default:viewImage.html.twig", 2);
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
        $__internal_69eb7d0f0fff2f64bc9ff63af5a8a0728303b0e19d3bf09351fbd585d8080bd9 = $this->env->getExtension("native_profiler");
        $__internal_69eb7d0f0fff2f64bc9ff63af5a8a0728303b0e19d3bf09351fbd585d8080bd9->enter($__internal_69eb7d0f0fff2f64bc9ff63af5a8a0728303b0e19d3bf09351fbd585d8080bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "multimediaBundle:Default:viewImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69eb7d0f0fff2f64bc9ff63af5a8a0728303b0e19d3bf09351fbd585d8080bd9->leave($__internal_69eb7d0f0fff2f64bc9ff63af5a8a0728303b0e19d3bf09351fbd585d8080bd9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_171b4cd0276f9a6a9a04ac8f840fe6782343d3ca4753a29db7aaa7b710992011 = $this->env->getExtension("native_profiler");
        $__internal_171b4cd0276f9a6a9a04ac8f840fe6782343d3ca4753a29db7aaa7b710992011->enter($__internal_171b4cd0276f9a6a9a04ac8f840fe6782343d3ca4753a29db7aaa7b710992011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "  ";
        
        $__internal_171b4cd0276f9a6a9a04ac8f840fe6782343d3ca4753a29db7aaa7b710992011->leave($__internal_171b4cd0276f9a6a9a04ac8f840fe6782343d3ca4753a29db7aaa7b710992011_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6b5cacaf8bd15c373d93bd16c9374d50d0d88bd4c907f230502aac5bee206da = $this->env->getExtension("native_profiler");
        $__internal_c6b5cacaf8bd15c373d93bd16c9374d50d0d88bd4c907f230502aac5bee206da->enter($__internal_c6b5cacaf8bd15c373d93bd16c9374d50d0d88bd4c907f230502aac5bee206da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                // line 9
                echo "<a onclick=\"return confirm('Are you sure you would like to delete this Image?');\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_delete_imageSQL", array("imageID" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id", array()))), "html", null, true);
                echo "\">
  <img id=\"deleteButton\"src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/delete_button.png"), "html", null, true);
                echo "\"></a>
  ";
            }
        }
        // line 13
        echo "<center>
  <h1>Image: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "name", array()), "html", null, true);
        echo "</h1>
  ";
        // line 15
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                // line 16
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("multimedia_modify_image", array("imageID" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id", array()))), "html", null, true);
                echo "\"><button>Modify</button></a>
  ";
            }
        }
        // line 18
        echo "
  <img id=\"ImageView\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path", array())), "html", null, true);
        echo "\" alt=\"\" />
  <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\"> <h2><-Back</h2> </a>

</center>

    ";
        
        $__internal_c6b5cacaf8bd15c373d93bd16c9374d50d0d88bd4c907f230502aac5bee206da->leave($__internal_c6b5cacaf8bd15c373d93bd16c9374d50d0d88bd4c907f230502aac5bee206da_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f94a16c77f790afc8471519f5cb7abcbcaa450160f94cd0cc89bba1489c3b05c = $this->env->getExtension("native_profiler");
        $__internal_f94a16c77f790afc8471519f5cb7abcbcaa450160f94cd0cc89bba1489c3b05c->enter($__internal_f94a16c77f790afc8471519f5cb7abcbcaa450160f94cd0cc89bba1489c3b05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "  <script>\$('#multimedialink').addClass('selected');</script>

";
        
        $__internal_f94a16c77f790afc8471519f5cb7abcbcaa450160f94cd0cc89bba1489c3b05c->leave($__internal_f94a16c77f790afc8471519f5cb7abcbcaa450160f94cd0cc89bba1489c3b05c_prof);

    }

    public function getTemplateName()
    {
        return "multimediaBundle:Default:viewImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  108 => 26,  96 => 20,  92 => 19,  89 => 18,  82 => 16,  79 => 15,  75 => 14,  72 => 13,  66 => 10,  61 => 9,  59 => 8,  57 => 7,  51 => 6,  44 => 25,  42 => 6,  36 => 5,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% block content %}*/
/* {% if app.user %}*/
/* {% if (app.user == owner or app.user.hasRole('ROLE_ADMIN')) %}*/
/* <a onclick="return confirm('Are you sure you would like to delete this Image?');" href="{{path('multimedia_delete_imageSQL',{'imageID': image.id})}}">*/
/*   <img id="deleteButton"src="{{ asset('images/delete_button.png')}}"></a>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <center>*/
/*   <h1>Image: {{ image.name }}</h1>*/
/*   {% if app.user %}{% if (app.user == owner or app.user.hasRole('ROLE_ADMIN')) %}*/
/*   <a href="{{path('multimedia_modify_image',{'imageID': image.id})}}"><button>Modify</button></a>*/
/*   {% endif %}{% endif %}*/
/* */
/*   <img id="ImageView" src="{{asset(image.path) }}" alt="" />*/
/*   <a href="{{app.request.headers.get('referer')}}"> <h2><-Back</h2> </a>*/
/* */
/* </center>*/
/* */
/*     {% endblock %}*/
/*   {% endblock %}*/
/*   {% block javascripts %}*/
/*   <script>$('#multimedialink').addClass('selected');</script>*/
/* */
/* {% endblock %}*/
/* */
