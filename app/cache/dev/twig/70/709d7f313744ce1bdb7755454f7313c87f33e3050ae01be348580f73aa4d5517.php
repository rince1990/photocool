<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c67a6f8ee2f6e119f45044593b1101f84287eb2700184a8c1d84c4808bd9d8a7 extends Twig_Template
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
        $__internal_c491ef9f25ee3706118520b8171f46d5e74fc00263a28345f69d6d13821543a9 = $this->env->getExtension("native_profiler");
        $__internal_c491ef9f25ee3706118520b8171f46d5e74fc00263a28345f69d6d13821543a9->enter($__internal_c491ef9f25ee3706118520b8171f46d5e74fc00263a28345f69d6d13821543a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c491ef9f25ee3706118520b8171f46d5e74fc00263a28345f69d6d13821543a9->leave($__internal_c491ef9f25ee3706118520b8171f46d5e74fc00263a28345f69d6d13821543a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
