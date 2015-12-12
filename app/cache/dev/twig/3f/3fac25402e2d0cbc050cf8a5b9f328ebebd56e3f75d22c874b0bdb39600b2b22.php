<?php

/* AdrianGRegisterBundle:Default:index.html.twig */
class __TwigTemplate_a65b66283ad691e7edbd752df068711af539f063e6112c287afe6fa2fb30e49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdrianGRegisterBundle:Default:index.html.twig", 1);
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
        $__internal_6cb3590dfeb91619df7c11f1c8635167102f62f85bd240f85c259639c56ac806 = $this->env->getExtension("native_profiler");
        $__internal_6cb3590dfeb91619df7c11f1c8635167102f62f85bd240f85c259639c56ac806->enter($__internal_6cb3590dfeb91619df7c11f1c8635167102f62f85bd240f85c259639c56ac806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb3590dfeb91619df7c11f1c8635167102f62f85bd240f85c259639c56ac806->leave($__internal_6cb3590dfeb91619df7c11f1c8635167102f62f85bd240f85c259639c56ac806_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee67b032e8fc38a31f7af1be658464f5af8df7f6c9e4b3bde672927c915fa0bd = $this->env->getExtension("native_profiler");
        $__internal_ee67b032e8fc38a31f7af1be658464f5af8df7f6c9e4b3bde672927c915fa0bd->enter($__internal_ee67b032e8fc38a31f7af1be658464f5af8df7f6c9e4b3bde672927c915fa0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_ee67b032e8fc38a31f7af1be658464f5af8df7f6c9e4b3bde672927c915fa0bd->leave($__internal_ee67b032e8fc38a31f7af1be658464f5af8df7f6c9e4b3bde672927c915fa0bd_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_796d713f84c0ef773fffdbdeebdffd8afa08c1837406921c2a4f17e7d538ffb3 = $this->env->getExtension("native_profiler");
        $__internal_796d713f84c0ef773fffdbdeebdffd8afa08c1837406921c2a4f17e7d538ffb3->enter($__internal_796d713f84c0ef773fffdbdeebdffd8afa08c1837406921c2a4f17e7d538ffb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_796d713f84c0ef773fffdbdeebdffd8afa08c1837406921c2a4f17e7d538ffb3->leave($__internal_796d713f84c0ef773fffdbdeebdffd8afa08c1837406921c2a4f17e7d538ffb3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b63d5bc9ccbdd209e75b38cebe4cfdce67a822ba7275519d771b3f3cfaf6123 = $this->env->getExtension("native_profiler");
        $__internal_9b63d5bc9ccbdd209e75b38cebe4cfdce67a822ba7275519d771b3f3cfaf6123->enter($__internal_9b63d5bc9ccbdd209e75b38cebe4cfdce67a822ba7275519d771b3f3cfaf6123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
<h2>HOME</h2>

";
        
        $__internal_9b63d5bc9ccbdd209e75b38cebe4cfdce67a822ba7275519d771b3f3cfaf6123->leave($__internal_9b63d5bc9ccbdd209e75b38cebe4cfdce67a822ba7275519d771b3f3cfaf6123_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6e63e74f355a49849e629a8f4143b5eab999c75ace447dbc352a463f7b834bf = $this->env->getExtension("native_profiler");
        $__internal_e6e63e74f355a49849e629a8f4143b5eab999c75ace447dbc352a463f7b834bf->enter($__internal_e6e63e74f355a49849e629a8f4143b5eab999c75ace447dbc352a463f7b834bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_e6e63e74f355a49849e629a8f4143b5eab999c75ace447dbc352a463f7b834bf->leave($__internal_e6e63e74f355a49849e629a8f4143b5eab999c75ace447dbc352a463f7b834bf_prof);

    }

    public function getTemplateName()
    {
        return "AdrianGRegisterBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  85 => 11,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h2>HOME</h2>*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
