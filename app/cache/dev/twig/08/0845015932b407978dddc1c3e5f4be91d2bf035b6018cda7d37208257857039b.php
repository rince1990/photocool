<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b6649b26683897b76a86bd4938f87e9f6488528ccd2e2821074bea906a8f8d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c36eb55e8bc11ced962fab9bcb78caf286259325c570e5f8bec565fe2160de5b = $this->env->getExtension("native_profiler");
        $__internal_c36eb55e8bc11ced962fab9bcb78caf286259325c570e5f8bec565fe2160de5b->enter($__internal_c36eb55e8bc11ced962fab9bcb78caf286259325c570e5f8bec565fe2160de5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36eb55e8bc11ced962fab9bcb78caf286259325c570e5f8bec565fe2160de5b->leave($__internal_c36eb55e8bc11ced962fab9bcb78caf286259325c570e5f8bec565fe2160de5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21e37d90a9957562b61491664c2d6ff8e0dba21d9a81f13583bacfd050546aea = $this->env->getExtension("native_profiler");
        $__internal_21e37d90a9957562b61491664c2d6ff8e0dba21d9a81f13583bacfd050546aea->enter($__internal_21e37d90a9957562b61491664c2d6ff8e0dba21d9a81f13583bacfd050546aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_21e37d90a9957562b61491664c2d6ff8e0dba21d9a81f13583bacfd050546aea->leave($__internal_21e37d90a9957562b61491664c2d6ff8e0dba21d9a81f13583bacfd050546aea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59423c0a0c3b47c63d3140c384e2f0088cba826bc6e861c2e19aa02a1961565a = $this->env->getExtension("native_profiler");
        $__internal_59423c0a0c3b47c63d3140c384e2f0088cba826bc6e861c2e19aa02a1961565a->enter($__internal_59423c0a0c3b47c63d3140c384e2f0088cba826bc6e861c2e19aa02a1961565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_59423c0a0c3b47c63d3140c384e2f0088cba826bc6e861c2e19aa02a1961565a->leave($__internal_59423c0a0c3b47c63d3140c384e2f0088cba826bc6e861c2e19aa02a1961565a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
