<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_93e822b625a1f307d51d71c3fad6e6fa31d281833ed28550bc481f4fdcd65c9f extends Twig_Template
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
        $__internal_edc14f26b406d8f36d8c385ef4fdd17bba17cb497a111eb309f3ad137dd347f7 = $this->env->getExtension("native_profiler");
        $__internal_edc14f26b406d8f36d8c385ef4fdd17bba17cb497a111eb309f3ad137dd347f7->enter($__internal_edc14f26b406d8f36d8c385ef4fdd17bba17cb497a111eb309f3ad137dd347f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edc14f26b406d8f36d8c385ef4fdd17bba17cb497a111eb309f3ad137dd347f7->leave($__internal_edc14f26b406d8f36d8c385ef4fdd17bba17cb497a111eb309f3ad137dd347f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_194bc0d8a597787e9c1177bd1aea017547762a7fcd9078266309384b22e04a8e = $this->env->getExtension("native_profiler");
        $__internal_194bc0d8a597787e9c1177bd1aea017547762a7fcd9078266309384b22e04a8e->enter($__internal_194bc0d8a597787e9c1177bd1aea017547762a7fcd9078266309384b22e04a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_194bc0d8a597787e9c1177bd1aea017547762a7fcd9078266309384b22e04a8e->leave($__internal_194bc0d8a597787e9c1177bd1aea017547762a7fcd9078266309384b22e04a8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9d7074a45e63dad168417475ac883a2688df7387d838ce92cd82cf7faf60c51 = $this->env->getExtension("native_profiler");
        $__internal_a9d7074a45e63dad168417475ac883a2688df7387d838ce92cd82cf7faf60c51->enter($__internal_a9d7074a45e63dad168417475ac883a2688df7387d838ce92cd82cf7faf60c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9d7074a45e63dad168417475ac883a2688df7387d838ce92cd82cf7faf60c51->leave($__internal_a9d7074a45e63dad168417475ac883a2688df7387d838ce92cd82cf7faf60c51_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99f8756bf364841dc3a318cebc3c04bac948fd1b9e00720fc2467ef3237dfe1 = $this->env->getExtension("native_profiler");
        $__internal_d99f8756bf364841dc3a318cebc3c04bac948fd1b9e00720fc2467ef3237dfe1->enter($__internal_d99f8756bf364841dc3a318cebc3c04bac948fd1b9e00720fc2467ef3237dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d99f8756bf364841dc3a318cebc3c04bac948fd1b9e00720fc2467ef3237dfe1->leave($__internal_d99f8756bf364841dc3a318cebc3c04bac948fd1b9e00720fc2467ef3237dfe1_prof);

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
