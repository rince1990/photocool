<?php

/* AdrianGRegisterBundle:Default:message.html.twig */
class __TwigTemplate_ba07ae26657bbc132c7886dc7005663461b6aaee9275f2df17f20ca51078cf1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdrianGRegisterBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidemenu' => array($this, 'block_sidemenu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4094365d16a103c8152b8852cd2cac4e962902a0c3b34b874ae7586cc41b20a3 = $this->env->getExtension("native_profiler");
        $__internal_4094365d16a103c8152b8852cd2cac4e962902a0c3b34b874ae7586cc41b20a3->enter($__internal_4094365d16a103c8152b8852cd2cac4e962902a0c3b34b874ae7586cc41b20a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4094365d16a103c8152b8852cd2cac4e962902a0c3b34b874ae7586cc41b20a3->leave($__internal_4094365d16a103c8152b8852cd2cac4e962902a0c3b34b874ae7586cc41b20a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_419a93455a241e446d866923e1719cb941bd092131523e2b97d130f5e9f1b88f = $this->env->getExtension("native_profiler");
        $__internal_419a93455a241e446d866923e1719cb941bd092131523e2b97d130f5e9f1b88f->enter($__internal_419a93455a241e446d866923e1719cb941bd092131523e2b97d130f5e9f1b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_419a93455a241e446d866923e1719cb941bd092131523e2b97d130f5e9f1b88f->leave($__internal_419a93455a241e446d866923e1719cb941bd092131523e2b97d130f5e9f1b88f_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_72cce698a253548e2ed1c8775866ed649cf672237dc47e3151d0a8e78e1872fd = $this->env->getExtension("native_profiler");
        $__internal_72cce698a253548e2ed1c8775866ed649cf672237dc47e3151d0a8e78e1872fd->enter($__internal_72cce698a253548e2ed1c8775866ed649cf672237dc47e3151d0a8e78e1872fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_72cce698a253548e2ed1c8775866ed649cf672237dc47e3151d0a8e78e1872fd->leave($__internal_72cce698a253548e2ed1c8775866ed649cf672237dc47e3151d0a8e78e1872fd_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bc706daa11bbc142184bc799dc682c7f8371e0212de8a4c21e364ba0cf2ef63 = $this->env->getExtension("native_profiler");
        $__internal_7bc706daa11bbc142184bc799dc682c7f8371e0212de8a4c21e364ba0cf2ef63->enter($__internal_7bc706daa11bbc142184bc799dc682c7f8371e0212de8a4c21e364ba0cf2ef63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
<h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</h2>


";
        
        $__internal_7bc706daa11bbc142184bc799dc682c7f8371e0212de8a4c21e364ba0cf2ef63->leave($__internal_7bc706daa11bbc142184bc799dc682c7f8371e0212de8a4c21e364ba0cf2ef63_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66f7283254f04eca59d185ce1320b07ff79044549b48f5b770be6b5391450037 = $this->env->getExtension("native_profiler");
        $__internal_66f7283254f04eca59d185ce1320b07ff79044549b48f5b770be6b5391450037->enter($__internal_66f7283254f04eca59d185ce1320b07ff79044549b48f5b770be6b5391450037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_66f7283254f04eca59d185ce1320b07ff79044549b48f5b770be6b5391450037->leave($__internal_66f7283254f04eca59d185ce1320b07ff79044549b48f5b770be6b5391450037_prof);

    }

    public function getTemplateName()
    {
        return "AdrianGRegisterBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  89 => 12,  78 => 7,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h2>{{ message }}</h2>*/
/* */
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
