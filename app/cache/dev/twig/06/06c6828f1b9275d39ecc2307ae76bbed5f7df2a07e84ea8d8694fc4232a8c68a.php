<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d00904d7b88e618b7dc6d4e844b440cfd253b2fc1a0ffb13657efd4d63d07a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_35fa48bd37a579196620b8fd619b229f994f2eb35a2f97724bda104766c9fb5b = $this->env->getExtension("native_profiler");
        $__internal_35fa48bd37a579196620b8fd619b229f994f2eb35a2f97724bda104766c9fb5b->enter($__internal_35fa48bd37a579196620b8fd619b229f994f2eb35a2f97724bda104766c9fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35fa48bd37a579196620b8fd619b229f994f2eb35a2f97724bda104766c9fb5b->leave($__internal_35fa48bd37a579196620b8fd619b229f994f2eb35a2f97724bda104766c9fb5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acb518de207c43f4b8a06885db92638bf26438ac4a09f4cd7c4d0ac9644004f6 = $this->env->getExtension("native_profiler");
        $__internal_acb518de207c43f4b8a06885db92638bf26438ac4a09f4cd7c4d0ac9644004f6->enter($__internal_acb518de207c43f4b8a06885db92638bf26438ac4a09f4cd7c4d0ac9644004f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_acb518de207c43f4b8a06885db92638bf26438ac4a09f4cd7c4d0ac9644004f6->leave($__internal_acb518de207c43f4b8a06885db92638bf26438ac4a09f4cd7c4d0ac9644004f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ec0d53903c53be9e5dc6dba999e6150e5805553604d33cd6128eec7fa61b6bc = $this->env->getExtension("native_profiler");
        $__internal_9ec0d53903c53be9e5dc6dba999e6150e5805553604d33cd6128eec7fa61b6bc->enter($__internal_9ec0d53903c53be9e5dc6dba999e6150e5805553604d33cd6128eec7fa61b6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ec0d53903c53be9e5dc6dba999e6150e5805553604d33cd6128eec7fa61b6bc->leave($__internal_9ec0d53903c53be9e5dc6dba999e6150e5805553604d33cd6128eec7fa61b6bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9bedc645b0906495187ff763a0ac55fb2c404f0b5e079cddd09485451a0bb1 = $this->env->getExtension("native_profiler");
        $__internal_6b9bedc645b0906495187ff763a0ac55fb2c404f0b5e079cddd09485451a0bb1->enter($__internal_6b9bedc645b0906495187ff763a0ac55fb2c404f0b5e079cddd09485451a0bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6b9bedc645b0906495187ff763a0ac55fb2c404f0b5e079cddd09485451a0bb1->leave($__internal_6b9bedc645b0906495187ff763a0ac55fb2c404f0b5e079cddd09485451a0bb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
