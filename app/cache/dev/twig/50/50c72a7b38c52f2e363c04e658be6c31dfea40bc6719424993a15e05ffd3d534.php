<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3741da57ea042ab5181e6ddf262441e1e5004aabba19c64fac82e6469f367274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b85d2ceefe12bd7b1c132c1b74fbe929b7b40c69155b6aedcad9c7af2d95236c = $this->env->getExtension("native_profiler");
        $__internal_b85d2ceefe12bd7b1c132c1b74fbe929b7b40c69155b6aedcad9c7af2d95236c->enter($__internal_b85d2ceefe12bd7b1c132c1b74fbe929b7b40c69155b6aedcad9c7af2d95236c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85d2ceefe12bd7b1c132c1b74fbe929b7b40c69155b6aedcad9c7af2d95236c->leave($__internal_b85d2ceefe12bd7b1c132c1b74fbe929b7b40c69155b6aedcad9c7af2d95236c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fefe4a780fdd6814ed5d45fbeba7a59def867cf964ca54aac9f266dcdc85b7d5 = $this->env->getExtension("native_profiler");
        $__internal_fefe4a780fdd6814ed5d45fbeba7a59def867cf964ca54aac9f266dcdc85b7d5->enter($__internal_fefe4a780fdd6814ed5d45fbeba7a59def867cf964ca54aac9f266dcdc85b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fefe4a780fdd6814ed5d45fbeba7a59def867cf964ca54aac9f266dcdc85b7d5->leave($__internal_fefe4a780fdd6814ed5d45fbeba7a59def867cf964ca54aac9f266dcdc85b7d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34683503e994f93afa666e0f8ac0ecc2f092d7bcb29b843aea9c4bd1235af8aa = $this->env->getExtension("native_profiler");
        $__internal_34683503e994f93afa666e0f8ac0ecc2f092d7bcb29b843aea9c4bd1235af8aa->enter($__internal_34683503e994f93afa666e0f8ac0ecc2f092d7bcb29b843aea9c4bd1235af8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34683503e994f93afa666e0f8ac0ecc2f092d7bcb29b843aea9c4bd1235af8aa->leave($__internal_34683503e994f93afa666e0f8ac0ecc2f092d7bcb29b843aea9c4bd1235af8aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f50d312ae70b6c2bca4f3e2b860d34a134b7979a5bec10440b37f74350ac3319 = $this->env->getExtension("native_profiler");
        $__internal_f50d312ae70b6c2bca4f3e2b860d34a134b7979a5bec10440b37f74350ac3319->enter($__internal_f50d312ae70b6c2bca4f3e2b860d34a134b7979a5bec10440b37f74350ac3319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f50d312ae70b6c2bca4f3e2b860d34a134b7979a5bec10440b37f74350ac3319->leave($__internal_f50d312ae70b6c2bca4f3e2b860d34a134b7979a5bec10440b37f74350ac3319_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
