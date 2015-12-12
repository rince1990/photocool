<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e5c92cfc9d2f66691db15a7b807d7b4b7a588690ba3c3b6920c69f7dd51ce221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43fcc8c145098be2e387492f29c9318dc47e74069ecbeb32cb3b468595a9b33 = $this->env->getExtension("native_profiler");
        $__internal_a43fcc8c145098be2e387492f29c9318dc47e74069ecbeb32cb3b468595a9b33->enter($__internal_a43fcc8c145098be2e387492f29c9318dc47e74069ecbeb32cb3b468595a9b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a43fcc8c145098be2e387492f29c9318dc47e74069ecbeb32cb3b468595a9b33->leave($__internal_a43fcc8c145098be2e387492f29c9318dc47e74069ecbeb32cb3b468595a9b33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
