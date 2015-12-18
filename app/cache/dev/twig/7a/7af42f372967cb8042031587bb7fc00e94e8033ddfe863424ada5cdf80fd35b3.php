<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8549c91fe4f60fa8508b89ae17e1a933d19f3b327fa1b2147de2ebee2b87836e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b4ccbd0685aa408d0e336aa8ce112b99b77b9b7c18e7b69d55980b00baed3c3 = $this->env->getExtension("native_profiler");
        $__internal_9b4ccbd0685aa408d0e336aa8ce112b99b77b9b7c18e7b69d55980b00baed3c3->enter($__internal_9b4ccbd0685aa408d0e336aa8ce112b99b77b9b7c18e7b69d55980b00baed3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4ccbd0685aa408d0e336aa8ce112b99b77b9b7c18e7b69d55980b00baed3c3->leave($__internal_9b4ccbd0685aa408d0e336aa8ce112b99b77b9b7c18e7b69d55980b00baed3c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ff364bf03957778c77163cccfcf6cf44abdc01a487cbdcc2f654c44fcb40b44 = $this->env->getExtension("native_profiler");
        $__internal_2ff364bf03957778c77163cccfcf6cf44abdc01a487cbdcc2f654c44fcb40b44->enter($__internal_2ff364bf03957778c77163cccfcf6cf44abdc01a487cbdcc2f654c44fcb40b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ff364bf03957778c77163cccfcf6cf44abdc01a487cbdcc2f654c44fcb40b44->leave($__internal_2ff364bf03957778c77163cccfcf6cf44abdc01a487cbdcc2f654c44fcb40b44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_891935332d44c92f0c11239c09ff0a5136f7a286fb9916b5305ef8e909c32198 = $this->env->getExtension("native_profiler");
        $__internal_891935332d44c92f0c11239c09ff0a5136f7a286fb9916b5305ef8e909c32198->enter($__internal_891935332d44c92f0c11239c09ff0a5136f7a286fb9916b5305ef8e909c32198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_891935332d44c92f0c11239c09ff0a5136f7a286fb9916b5305ef8e909c32198->leave($__internal_891935332d44c92f0c11239c09ff0a5136f7a286fb9916b5305ef8e909c32198_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ba7a10ce9228ff677f50ffe2c4c860018cc248d53be657019a599c1e08e53b4 = $this->env->getExtension("native_profiler");
        $__internal_4ba7a10ce9228ff677f50ffe2c4c860018cc248d53be657019a599c1e08e53b4->enter($__internal_4ba7a10ce9228ff677f50ffe2c4c860018cc248d53be657019a599c1e08e53b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ba7a10ce9228ff677f50ffe2c4c860018cc248d53be657019a599c1e08e53b4->leave($__internal_4ba7a10ce9228ff677f50ffe2c4c860018cc248d53be657019a599c1e08e53b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
