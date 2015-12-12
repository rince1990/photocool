<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_313a16c03e9a4d246d17146847251db4c812829fe173eafb767cba24361bb95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f46f5940b570e8d5cc76ea96e02a598516a52cd09cace58a13b5c0f4cd0b77d5 = $this->env->getExtension("native_profiler");
        $__internal_f46f5940b570e8d5cc76ea96e02a598516a52cd09cace58a13b5c0f4cd0b77d5->enter($__internal_f46f5940b570e8d5cc76ea96e02a598516a52cd09cace58a13b5c0f4cd0b77d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46f5940b570e8d5cc76ea96e02a598516a52cd09cace58a13b5c0f4cd0b77d5->leave($__internal_f46f5940b570e8d5cc76ea96e02a598516a52cd09cace58a13b5c0f4cd0b77d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3adbdec068ab9533391d8b54756108e1d63d3eed34dad174d05bf1ac142d6f7 = $this->env->getExtension("native_profiler");
        $__internal_d3adbdec068ab9533391d8b54756108e1d63d3eed34dad174d05bf1ac142d6f7->enter($__internal_d3adbdec068ab9533391d8b54756108e1d63d3eed34dad174d05bf1ac142d6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3adbdec068ab9533391d8b54756108e1d63d3eed34dad174d05bf1ac142d6f7->leave($__internal_d3adbdec068ab9533391d8b54756108e1d63d3eed34dad174d05bf1ac142d6f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c23cd2eb028c10484e6a1ccb8056ede838d29de5bcbfec55236ca5b7bc5c298 = $this->env->getExtension("native_profiler");
        $__internal_8c23cd2eb028c10484e6a1ccb8056ede838d29de5bcbfec55236ca5b7bc5c298->enter($__internal_8c23cd2eb028c10484e6a1ccb8056ede838d29de5bcbfec55236ca5b7bc5c298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c23cd2eb028c10484e6a1ccb8056ede838d29de5bcbfec55236ca5b7bc5c298->leave($__internal_8c23cd2eb028c10484e6a1ccb8056ede838d29de5bcbfec55236ca5b7bc5c298_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0460562d91e94ecdfbd22ce87aae80a85e4bc3dc71a4f7bafd2ed31f5f80978c = $this->env->getExtension("native_profiler");
        $__internal_0460562d91e94ecdfbd22ce87aae80a85e4bc3dc71a4f7bafd2ed31f5f80978c->enter($__internal_0460562d91e94ecdfbd22ce87aae80a85e4bc3dc71a4f7bafd2ed31f5f80978c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0460562d91e94ecdfbd22ce87aae80a85e4bc3dc71a4f7bafd2ed31f5f80978c->leave($__internal_0460562d91e94ecdfbd22ce87aae80a85e4bc3dc71a4f7bafd2ed31f5f80978c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
