<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3741da57ea042ab5181e6ddf262441e1e5004aabba19c64fac82e6469f367274 extends Twig_Template
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
        $__internal_0b6d1965db92aff57d4e8a1ec31c695972b32db6b4a0d567d00d021b07bad66d = $this->env->getExtension("native_profiler");
        $__internal_0b6d1965db92aff57d4e8a1ec31c695972b32db6b4a0d567d00d021b07bad66d->enter($__internal_0b6d1965db92aff57d4e8a1ec31c695972b32db6b4a0d567d00d021b07bad66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6d1965db92aff57d4e8a1ec31c695972b32db6b4a0d567d00d021b07bad66d->leave($__internal_0b6d1965db92aff57d4e8a1ec31c695972b32db6b4a0d567d00d021b07bad66d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e0d6707979091adc477c978a830625959d9a537107d184df04d46b137afc8e9 = $this->env->getExtension("native_profiler");
        $__internal_5e0d6707979091adc477c978a830625959d9a537107d184df04d46b137afc8e9->enter($__internal_5e0d6707979091adc477c978a830625959d9a537107d184df04d46b137afc8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e0d6707979091adc477c978a830625959d9a537107d184df04d46b137afc8e9->leave($__internal_5e0d6707979091adc477c978a830625959d9a537107d184df04d46b137afc8e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5c1a21eaab170717c8ec51c1f59135dcf791d8c98f2c2e26f6b48b4743c309f = $this->env->getExtension("native_profiler");
        $__internal_e5c1a21eaab170717c8ec51c1f59135dcf791d8c98f2c2e26f6b48b4743c309f->enter($__internal_e5c1a21eaab170717c8ec51c1f59135dcf791d8c98f2c2e26f6b48b4743c309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5c1a21eaab170717c8ec51c1f59135dcf791d8c98f2c2e26f6b48b4743c309f->leave($__internal_e5c1a21eaab170717c8ec51c1f59135dcf791d8c98f2c2e26f6b48b4743c309f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_025f85177a8b42c59b244dda2919654b988ee791f7ec80b69832e9d15be07414 = $this->env->getExtension("native_profiler");
        $__internal_025f85177a8b42c59b244dda2919654b988ee791f7ec80b69832e9d15be07414->enter($__internal_025f85177a8b42c59b244dda2919654b988ee791f7ec80b69832e9d15be07414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_025f85177a8b42c59b244dda2919654b988ee791f7ec80b69832e9d15be07414->leave($__internal_025f85177a8b42c59b244dda2919654b988ee791f7ec80b69832e9d15be07414_prof);

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
