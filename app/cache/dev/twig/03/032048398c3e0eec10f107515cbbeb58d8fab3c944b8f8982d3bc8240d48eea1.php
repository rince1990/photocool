<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_db4c1484dc8d6462adaae1678748b7d44f81018b7e29fe745cf38a3191082abb extends Twig_Template
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
        $__internal_439978ce9f5b5ebf56ef918003738663e6b9f5ce11c28111cca8a1b0816b44e2 = $this->env->getExtension("native_profiler");
        $__internal_439978ce9f5b5ebf56ef918003738663e6b9f5ce11c28111cca8a1b0816b44e2->enter($__internal_439978ce9f5b5ebf56ef918003738663e6b9f5ce11c28111cca8a1b0816b44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_439978ce9f5b5ebf56ef918003738663e6b9f5ce11c28111cca8a1b0816b44e2->leave($__internal_439978ce9f5b5ebf56ef918003738663e6b9f5ce11c28111cca8a1b0816b44e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
