<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_317b5e242310009b342669236880f8e04c71a1bc5b98f613505df6b7f4594e21 extends Twig_Template
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
        $__internal_d899507806572cc2be3d50f4b6db8cb546b14449a2168971a78b0593b998590c = $this->env->getExtension("native_profiler");
        $__internal_d899507806572cc2be3d50f4b6db8cb546b14449a2168971a78b0593b998590c->enter($__internal_d899507806572cc2be3d50f4b6db8cb546b14449a2168971a78b0593b998590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d899507806572cc2be3d50f4b6db8cb546b14449a2168971a78b0593b998590c->leave($__internal_d899507806572cc2be3d50f4b6db8cb546b14449a2168971a78b0593b998590c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
