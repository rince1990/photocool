<?php

/* AdrianGRegisterBundle:Default:register.html.twig */
class __TwigTemplate_26d25d929ef025fe15080db7a9af076ead12e1f5bd961df5347141dc8a9ea96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AdrianGRegisterBundle:Default:register.html.twig", 2);
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
        $__internal_d52ea840c39aed1ba917871d52a4d768dd2eab41a4d0509b9132861d0e65f370 = $this->env->getExtension("native_profiler");
        $__internal_d52ea840c39aed1ba917871d52a4d768dd2eab41a4d0509b9132861d0e65f370->enter($__internal_d52ea840c39aed1ba917871d52a4d768dd2eab41a4d0509b9132861d0e65f370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d52ea840c39aed1ba917871d52a4d768dd2eab41a4d0509b9132861d0e65f370->leave($__internal_d52ea840c39aed1ba917871d52a4d768dd2eab41a4d0509b9132861d0e65f370_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c139724ecfd06e63c99f0c4e81a09ebcffd7db6d7b75aeda0739c647fce7a29 = $this->env->getExtension("native_profiler");
        $__internal_9c139724ecfd06e63c99f0c4e81a09ebcffd7db6d7b75aeda0739c647fce7a29->enter($__internal_9c139724ecfd06e63c99f0c4e81a09ebcffd7db6d7b75aeda0739c647fce7a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_9c139724ecfd06e63c99f0c4e81a09ebcffd7db6d7b75aeda0739c647fce7a29->leave($__internal_9c139724ecfd06e63c99f0c4e81a09ebcffd7db6d7b75aeda0739c647fce7a29_prof);

    }

    // line 5
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_ef8bc144e295ea58c0d13c2c545174663919aa977923a6dac4f69b47aedcbda0 = $this->env->getExtension("native_profiler");
        $__internal_ef8bc144e295ea58c0d13c2c545174663919aa977923a6dac4f69b47aedcbda0->enter($__internal_ef8bc144e295ea58c0d13c2c545174663919aa977923a6dac4f69b47aedcbda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_ef8bc144e295ea58c0d13c2c545174663919aa977923a6dac4f69b47aedcbda0->leave($__internal_ef8bc144e295ea58c0d13c2c545174663919aa977923a6dac4f69b47aedcbda0_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4750277d5bdb47a2886e452bb8e6ed86fcf829ef15350f46f0bda01d704fd0b = $this->env->getExtension("native_profiler");
        $__internal_c4750277d5bdb47a2886e452bb8e6ed86fcf829ef15350f46f0bda01d704fd0b->enter($__internal_c4750277d5bdb47a2886e452bb8e6ed86fcf829ef15350f46f0bda01d704fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<center>
<h1>Join us, it's free!</h1>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Register!</button>
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</center>
";
        
        $__internal_c4750277d5bdb47a2886e452bb8e6ed86fcf829ef15350f46f0bda01d704fd0b->leave($__internal_c4750277d5bdb47a2886e452bb8e6ed86fcf829ef15350f46f0bda01d704fd0b_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b623be79caffff6e6750930d1cf563847edcce434b59a6992503fc9d591829f = $this->env->getExtension("native_profiler");
        $__internal_0b623be79caffff6e6750930d1cf563847edcce434b59a6992503fc9d591829f->enter($__internal_0b623be79caffff6e6750930d1cf563847edcce434b59a6992503fc9d591829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "</script>
";
        
        $__internal_0b623be79caffff6e6750930d1cf563847edcce434b59a6992503fc9d591829f->leave($__internal_0b623be79caffff6e6750930d1cf563847edcce434b59a6992503fc9d591829f_prof);

    }

    public function getTemplateName()
    {
        return "AdrianGRegisterBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  111 => 22,  101 => 16,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 7,  69 => 6,  55 => 5,  48 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
/* */
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h1>Join us, it's free!</h1>*/
/* {{ form_start(form) }}*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}*/
/* </center>*/
/* {% endblock content %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* </script>*/
/* {% endblock %}*/
/* */
