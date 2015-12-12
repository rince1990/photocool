<?php

/* AdrianGRegisterBundle:Default:admin.html.twig */
class __TwigTemplate_f42b51add4542c99554afc65f5ebf6fb944efa73bbddf43f4dea0880b3a5244a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdrianGRegisterBundle:Default:admin.html.twig", 1);
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
        $__internal_9adcaddfa5a726ea9ace57cd5737f4b0046072034877a19e34040d7bc027a512 = $this->env->getExtension("native_profiler");
        $__internal_9adcaddfa5a726ea9ace57cd5737f4b0046072034877a19e34040d7bc027a512->enter($__internal_9adcaddfa5a726ea9ace57cd5737f4b0046072034877a19e34040d7bc027a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adcaddfa5a726ea9ace57cd5737f4b0046072034877a19e34040d7bc027a512->leave($__internal_9adcaddfa5a726ea9ace57cd5737f4b0046072034877a19e34040d7bc027a512_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a18a58b4d8a2f34ec59177da6ea82ed326e3551a503474eb1af96c4e4ebb851 = $this->env->getExtension("native_profiler");
        $__internal_6a18a58b4d8a2f34ec59177da6ea82ed326e3551a503474eb1af96c4e4ebb851->enter($__internal_6a18a58b4d8a2f34ec59177da6ea82ed326e3551a503474eb1af96c4e4ebb851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6a18a58b4d8a2f34ec59177da6ea82ed326e3551a503474eb1af96c4e4ebb851->leave($__internal_6a18a58b4d8a2f34ec59177da6ea82ed326e3551a503474eb1af96c4e4ebb851_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_df29eea084c6badcbb9abf468b751f152671cf94575fe85334ba0b8c498dcf99 = $this->env->getExtension("native_profiler");
        $__internal_df29eea084c6badcbb9abf468b751f152671cf94575fe85334ba0b8c498dcf99->enter($__internal_df29eea084c6badcbb9abf468b751f152671cf94575fe85334ba0b8c498dcf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_df29eea084c6badcbb9abf468b751f152671cf94575fe85334ba0b8c498dcf99->leave($__internal_df29eea084c6badcbb9abf468b751f152671cf94575fe85334ba0b8c498dcf99_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_dee9fa891ee6e432cec1e9d1c3276b7dc8e2dddfec58c61c1a4b3001908543c6 = $this->env->getExtension("native_profiler");
        $__internal_dee9fa891ee6e432cec1e9d1c3276b7dc8e2dddfec58c61c1a4b3001908543c6->enter($__internal_dee9fa891ee6e432cec1e9d1c3276b7dc8e2dddfec58c61c1a4b3001908543c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
<h2>ADMIN SIDE</h2>

";
        
        $__internal_dee9fa891ee6e432cec1e9d1c3276b7dc8e2dddfec58c61c1a4b3001908543c6->leave($__internal_dee9fa891ee6e432cec1e9d1c3276b7dc8e2dddfec58c61c1a4b3001908543c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7a104f5e0f481d047c459ed12774a3fba0e11fd502653428b94f9714a32ca7d = $this->env->getExtension("native_profiler");
        $__internal_a7a104f5e0f481d047c459ed12774a3fba0e11fd502653428b94f9714a32ca7d->enter($__internal_a7a104f5e0f481d047c459ed12774a3fba0e11fd502653428b94f9714a32ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>
\$('#adminlink').addClass('selected')
</script>
";
        
        $__internal_a7a104f5e0f481d047c459ed12774a3fba0e11fd502653428b94f9714a32ca7d->leave($__internal_a7a104f5e0f481d047c459ed12774a3fba0e11fd502653428b94f9714a32ca7d_prof);

    }

    public function getTemplateName()
    {
        return "AdrianGRegisterBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  85 => 11,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h2>ADMIN SIDE</h2>*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#adminlink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
