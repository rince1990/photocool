<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c07c7cb172015f14fd7db640002388f9b867152789be2c664d0badff0ec5ba59 extends Twig_Template
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
        $__internal_a3d934823dbb081e52efbfe647cbfd5b9ad8f003bf64524720b526133d3f76bf = $this->env->getExtension("native_profiler");
        $__internal_a3d934823dbb081e52efbfe647cbfd5b9ad8f003bf64524720b526133d3f76bf->enter($__internal_a3d934823dbb081e52efbfe647cbfd5b9ad8f003bf64524720b526133d3f76bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a3d934823dbb081e52efbfe647cbfd5b9ad8f003bf64524720b526133d3f76bf->leave($__internal_a3d934823dbb081e52efbfe647cbfd5b9ad8f003bf64524720b526133d3f76bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
