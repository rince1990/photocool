<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6a3a7e8475c2c6f1979019f8c6c085276065fd92496fbe35ef2a64fe31bf48ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f10486e7069f84a75dc610e4eadd0ab478b57eedc0d69c2e7627b6945126aef1 = $this->env->getExtension("native_profiler");
        $__internal_f10486e7069f84a75dc610e4eadd0ab478b57eedc0d69c2e7627b6945126aef1->enter($__internal_f10486e7069f84a75dc610e4eadd0ab478b57eedc0d69c2e7627b6945126aef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f10486e7069f84a75dc610e4eadd0ab478b57eedc0d69c2e7627b6945126aef1->leave($__internal_f10486e7069f84a75dc610e4eadd0ab478b57eedc0d69c2e7627b6945126aef1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9212e983d4f012f011c3ce4aa208c133f37418bedc927407fcb49593301cb3d = $this->env->getExtension("native_profiler");
        $__internal_e9212e983d4f012f011c3ce4aa208c133f37418bedc927407fcb49593301cb3d->enter($__internal_e9212e983d4f012f011c3ce4aa208c133f37418bedc927407fcb49593301cb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9212e983d4f012f011c3ce4aa208c133f37418bedc927407fcb49593301cb3d->leave($__internal_e9212e983d4f012f011c3ce4aa208c133f37418bedc927407fcb49593301cb3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
