<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_ea3b92a07deb31473484782b734b56771f3c9633e3b294f2fcdc3beb81d24913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidemenu' => array($this, 'block_sidemenu'),
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
        $__internal_2f4d990708124afeed757d0362ef778b5e575f0e8b43124abdd2908836be704c = $this->env->getExtension("native_profiler");
        $__internal_2f4d990708124afeed757d0362ef778b5e575f0e8b43124abdd2908836be704c->enter($__internal_2f4d990708124afeed757d0362ef778b5e575f0e8b43124abdd2908836be704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f4d990708124afeed757d0362ef778b5e575f0e8b43124abdd2908836be704c->leave($__internal_2f4d990708124afeed757d0362ef778b5e575f0e8b43124abdd2908836be704c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9afb9f62fac448692d449bcb23a30235c1a37eeca9b8eaeee1b7de3d3f1809f = $this->env->getExtension("native_profiler");
        $__internal_d9afb9f62fac448692d449bcb23a30235c1a37eeca9b8eaeee1b7de3d3f1809f->enter($__internal_d9afb9f62fac448692d449bcb23a30235c1a37eeca9b8eaeee1b7de3d3f1809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d9afb9f62fac448692d449bcb23a30235c1a37eeca9b8eaeee1b7de3d3f1809f->leave($__internal_d9afb9f62fac448692d449bcb23a30235c1a37eeca9b8eaeee1b7de3d3f1809f_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_e1ffcccc42ff9224f058d1d0d262e205227d470887aae7735be30a3a0eb19d18 = $this->env->getExtension("native_profiler");
        $__internal_e1ffcccc42ff9224f058d1d0d262e205227d470887aae7735be30a3a0eb19d18->enter($__internal_e1ffcccc42ff9224f058d1d0d262e205227d470887aae7735be30a3a0eb19d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_e1ffcccc42ff9224f058d1d0d262e205227d470887aae7735be30a3a0eb19d18->leave($__internal_e1ffcccc42ff9224f058d1d0d262e205227d470887aae7735be30a3a0eb19d18_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3259b9dbc87bf40b5be46922ecf87d7762a02a7d48b0093e2a5cc647c522c73 = $this->env->getExtension("native_profiler");
        $__internal_e3259b9dbc87bf40b5be46922ecf87d7762a02a7d48b0093e2a5cc647c522c73->enter($__internal_e3259b9dbc87bf40b5be46922ecf87d7762a02a7d48b0093e2a5cc647c522c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
  <h1>ERROR ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</h1>
  <h2>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h2>

";
        
        $__internal_e3259b9dbc87bf40b5be46922ecf87d7762a02a7d48b0093e2a5cc647c522c73->leave($__internal_e3259b9dbc87bf40b5be46922ecf87d7762a02a7d48b0093e2a5cc647c522c73_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_411485d0d439edd0e73e264bec42936c1e6f076ce1acc2cf1b5a64d2546c523d = $this->env->getExtension("native_profiler");
        $__internal_411485d0d439edd0e73e264bec42936c1e6f076ce1acc2cf1b5a64d2546c523d->enter($__internal_411485d0d439edd0e73e264bec42936c1e6f076ce1acc2cf1b5a64d2546c523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_411485d0d439edd0e73e264bec42936c1e6f076ce1acc2cf1b5a64d2546c523d->leave($__internal_411485d0d439edd0e73e264bec42936c1e6f076ce1acc2cf1b5a64d2546c523d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  92 => 12,  82 => 8,  78 => 7,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/*   <h1>ERROR {{status_code}}</h1>*/
/*   <h2>{{status_text}}</h2>*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
