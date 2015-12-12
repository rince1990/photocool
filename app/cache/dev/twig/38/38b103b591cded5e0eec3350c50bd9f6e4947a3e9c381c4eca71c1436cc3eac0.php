<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3f2ab68255678cb9f2bd549f65a4216ed757e1bbb4d387d7e266a2a561d27519 extends Twig_Template
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
        $__internal_d36c63682d16d6b4b66080d82fc1e34de5909d082b0b7efb0622b9afc1e11aa2 = $this->env->getExtension("native_profiler");
        $__internal_d36c63682d16d6b4b66080d82fc1e34de5909d082b0b7efb0622b9afc1e11aa2->enter($__internal_d36c63682d16d6b4b66080d82fc1e34de5909d082b0b7efb0622b9afc1e11aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d36c63682d16d6b4b66080d82fc1e34de5909d082b0b7efb0622b9afc1e11aa2->leave($__internal_d36c63682d16d6b4b66080d82fc1e34de5909d082b0b7efb0622b9afc1e11aa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
