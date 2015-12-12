<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_adea96cadf6b21cf219457500dfd2b3959bdd77fa8198b658030d98fd5cad07b extends Twig_Template
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
        $__internal_dd0f4b74114c79e7ee5ea15dfeec8792e9c6f6a2d76241c915e01e1537ac00eb = $this->env->getExtension("native_profiler");
        $__internal_dd0f4b74114c79e7ee5ea15dfeec8792e9c6f6a2d76241c915e01e1537ac00eb->enter($__internal_dd0f4b74114c79e7ee5ea15dfeec8792e9c6f6a2d76241c915e01e1537ac00eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dd0f4b74114c79e7ee5ea15dfeec8792e9c6f6a2d76241c915e01e1537ac00eb->leave($__internal_dd0f4b74114c79e7ee5ea15dfeec8792e9c6f6a2d76241c915e01e1537ac00eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
