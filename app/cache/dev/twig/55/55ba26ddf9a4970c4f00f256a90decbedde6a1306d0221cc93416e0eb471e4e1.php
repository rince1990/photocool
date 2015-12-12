<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5b1a8a9aaa2c9d8389397d2cd9a84ce51473b830500ea6eae09659fa844ccaf7 extends Twig_Template
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
        $__internal_65e1ef1e333675ae9adaa9b203a901929880a5435c7717acb8a0a0e71d477fb5 = $this->env->getExtension("native_profiler");
        $__internal_65e1ef1e333675ae9adaa9b203a901929880a5435c7717acb8a0a0e71d477fb5->enter($__internal_65e1ef1e333675ae9adaa9b203a901929880a5435c7717acb8a0a0e71d477fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_65e1ef1e333675ae9adaa9b203a901929880a5435c7717acb8a0a0e71d477fb5->leave($__internal_65e1ef1e333675ae9adaa9b203a901929880a5435c7717acb8a0a0e71d477fb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
