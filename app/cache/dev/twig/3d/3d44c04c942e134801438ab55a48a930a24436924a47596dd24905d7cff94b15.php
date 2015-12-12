<?php

/* AdrianGRegisterBundle:Default:register.html.twig */
class __TwigTemplate_f4b667b889f67cf311f92e98350ada25f02412b17297d56886012b04fd2568dc extends Twig_Template
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
        $__internal_dd122d9d179990cbebac2c8535cef41973164a78bb9b6dd245937241b6dbd674 = $this->env->getExtension("native_profiler");
        $__internal_dd122d9d179990cbebac2c8535cef41973164a78bb9b6dd245937241b6dbd674->enter($__internal_dd122d9d179990cbebac2c8535cef41973164a78bb9b6dd245937241b6dbd674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd122d9d179990cbebac2c8535cef41973164a78bb9b6dd245937241b6dbd674->leave($__internal_dd122d9d179990cbebac2c8535cef41973164a78bb9b6dd245937241b6dbd674_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b1a53d7d1303c05f7d5d97276e6b9b110f0beabc90747c6ca5becc4c0042f6e = $this->env->getExtension("native_profiler");
        $__internal_7b1a53d7d1303c05f7d5d97276e6b9b110f0beabc90747c6ca5becc4c0042f6e->enter($__internal_7b1a53d7d1303c05f7d5d97276e6b9b110f0beabc90747c6ca5becc4c0042f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7b1a53d7d1303c05f7d5d97276e6b9b110f0beabc90747c6ca5becc4c0042f6e->leave($__internal_7b1a53d7d1303c05f7d5d97276e6b9b110f0beabc90747c6ca5becc4c0042f6e_prof);

    }

    // line 5
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_83af383971143859cd0766875a5f7330e0caab439cc24a053b249fdf196379b8 = $this->env->getExtension("native_profiler");
        $__internal_83af383971143859cd0766875a5f7330e0caab439cc24a053b249fdf196379b8->enter($__internal_83af383971143859cd0766875a5f7330e0caab439cc24a053b249fdf196379b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_83af383971143859cd0766875a5f7330e0caab439cc24a053b249fdf196379b8->leave($__internal_83af383971143859cd0766875a5f7330e0caab439cc24a053b249fdf196379b8_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ba2ea7ad22f9c98904f8317699019fa9d96a847a7508f480ebd7b0798ef9d48 = $this->env->getExtension("native_profiler");
        $__internal_8ba2ea7ad22f9c98904f8317699019fa9d96a847a7508f480ebd7b0798ef9d48->enter($__internal_8ba2ea7ad22f9c98904f8317699019fa9d96a847a7508f480ebd7b0798ef9d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
<center>
";
        
        $__internal_8ba2ea7ad22f9c98904f8317699019fa9d96a847a7508f480ebd7b0798ef9d48->leave($__internal_8ba2ea7ad22f9c98904f8317699019fa9d96a847a7508f480ebd7b0798ef9d48_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c0cbe90d9d76661b9ad027626a1b5026e21e5f3a3cdef0a6895e7af25680614 = $this->env->getExtension("native_profiler");
        $__internal_4c0cbe90d9d76661b9ad027626a1b5026e21e5f3a3cdef0a6895e7af25680614->enter($__internal_4c0cbe90d9d76661b9ad027626a1b5026e21e5f3a3cdef0a6895e7af25680614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "</script>
";
        
        $__internal_4c0cbe90d9d76661b9ad027626a1b5026e21e5f3a3cdef0a6895e7af25680614->leave($__internal_4c0cbe90d9d76661b9ad027626a1b5026e21e5f3a3cdef0a6895e7af25680614_prof);

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
/* <center>*/
/* {% endblock content %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* </script>*/
/* {% endblock %}*/
/* */
