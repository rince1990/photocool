<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_42277050e52875a0e110444f90a913abd45f5983c266d4434a16db75b0f842bf extends Twig_Template
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
        $__internal_dfd1006447dd62a33f701a22d909b048fdfe21d81e8f95f7b31581099bfaec38 = $this->env->getExtension("native_profiler");
        $__internal_dfd1006447dd62a33f701a22d909b048fdfe21d81e8f95f7b31581099bfaec38->enter($__internal_dfd1006447dd62a33f701a22d909b048fdfe21d81e8f95f7b31581099bfaec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dfd1006447dd62a33f701a22d909b048fdfe21d81e8f95f7b31581099bfaec38->leave($__internal_dfd1006447dd62a33f701a22d909b048fdfe21d81e8f95f7b31581099bfaec38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
