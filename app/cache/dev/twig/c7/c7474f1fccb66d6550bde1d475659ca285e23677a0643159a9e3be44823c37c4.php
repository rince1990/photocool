<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_732aac2cbefbc33275ce9cdf745298478473961fdf0e5bd1f067d0545073b337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        $__internal_5685b62206a796d857fe0de2542591e80547f25f102f1105f3aeb4ed9a7cd73b = $this->env->getExtension("native_profiler");
        $__internal_5685b62206a796d857fe0de2542591e80547f25f102f1105f3aeb4ed9a7cd73b->enter($__internal_5685b62206a796d857fe0de2542591e80547f25f102f1105f3aeb4ed9a7cd73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5685b62206a796d857fe0de2542591e80547f25f102f1105f3aeb4ed9a7cd73b->leave($__internal_5685b62206a796d857fe0de2542591e80547f25f102f1105f3aeb4ed9a7cd73b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b3467d7cb67a5c58e61f5a9ab09ffcc5c1359aa73c29004fdda193f830f4cb = $this->env->getExtension("native_profiler");
        $__internal_d2b3467d7cb67a5c58e61f5a9ab09ffcc5c1359aa73c29004fdda193f830f4cb->enter($__internal_d2b3467d7cb67a5c58e61f5a9ab09ffcc5c1359aa73c29004fdda193f830f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d2b3467d7cb67a5c58e61f5a9ab09ffcc5c1359aa73c29004fdda193f830f4cb->leave($__internal_d2b3467d7cb67a5c58e61f5a9ab09ffcc5c1359aa73c29004fdda193f830f4cb_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_604b97819a95fc36b9977849c427b2b2bf261130a083d6b1355ee58c23062d1c = $this->env->getExtension("native_profiler");
        $__internal_604b97819a95fc36b9977849c427b2b2bf261130a083d6b1355ee58c23062d1c->enter($__internal_604b97819a95fc36b9977849c427b2b2bf261130a083d6b1355ee58c23062d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_604b97819a95fc36b9977849c427b2b2bf261130a083d6b1355ee58c23062d1c->leave($__internal_604b97819a95fc36b9977849c427b2b2bf261130a083d6b1355ee58c23062d1c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e68cfcce7b082121bbd50317e8995a9b64bfd14d8dfc144b53d1db43e5d8921 = $this->env->getExtension("native_profiler");
        $__internal_4e68cfcce7b082121bbd50317e8995a9b64bfd14d8dfc144b53d1db43e5d8921->enter($__internal_4e68cfcce7b082121bbd50317e8995a9b64bfd14d8dfc144b53d1db43e5d8921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>

<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/errors/404.jpg"), "html", null, true);
        echo "\" class=\"imgError\" />

";
        
        $__internal_4e68cfcce7b082121bbd50317e8995a9b64bfd14d8dfc144b53d1db43e5d8921->leave($__internal_4e68cfcce7b082121bbd50317e8995a9b64bfd14d8dfc144b53d1db43e5d8921_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44fd22e20eb45c6b8687c8cc1d49b1101d861ee78328d826b282c596316077a3 = $this->env->getExtension("native_profiler");
        $__internal_44fd22e20eb45c6b8687c8cc1d49b1101d861ee78328d826b282c596316077a3->enter($__internal_44fd22e20eb45c6b8687c8cc1d49b1101d861ee78328d826b282c596316077a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_44fd22e20eb45c6b8687c8cc1d49b1101d861ee78328d826b282c596316077a3->leave($__internal_44fd22e20eb45c6b8687c8cc1d49b1101d861ee78328d826b282c596316077a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  89 => 12,  79 => 8,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* */
/* <img src="{{ asset('images/errors/404.jpg') }}" class="imgError" />*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
