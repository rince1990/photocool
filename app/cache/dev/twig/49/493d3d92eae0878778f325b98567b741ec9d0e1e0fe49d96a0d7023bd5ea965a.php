<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_7afce0e2af1cb10165420582374cdac634a707bee3b5bed4fc89f1b833a6622e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
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
        $__internal_e946929518d8d62ca4c4a1e174f67c309c6d92b034d5d625c54cc31cb2c662c9 = $this->env->getExtension("native_profiler");
        $__internal_e946929518d8d62ca4c4a1e174f67c309c6d92b034d5d625c54cc31cb2c662c9->enter($__internal_e946929518d8d62ca4c4a1e174f67c309c6d92b034d5d625c54cc31cb2c662c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e946929518d8d62ca4c4a1e174f67c309c6d92b034d5d625c54cc31cb2c662c9->leave($__internal_e946929518d8d62ca4c4a1e174f67c309c6d92b034d5d625c54cc31cb2c662c9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b6648f24683d78f374441767b187f3dc76952e6ca385a20718475763b4e02e = $this->env->getExtension("native_profiler");
        $__internal_d9b6648f24683d78f374441767b187f3dc76952e6ca385a20718475763b4e02e->enter($__internal_d9b6648f24683d78f374441767b187f3dc76952e6ca385a20718475763b4e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d9b6648f24683d78f374441767b187f3dc76952e6ca385a20718475763b4e02e->leave($__internal_d9b6648f24683d78f374441767b187f3dc76952e6ca385a20718475763b4e02e_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_8ec904eb7cffe9986df3d147441921da26934d6df55a2a9f6929f8dcc567689f = $this->env->getExtension("native_profiler");
        $__internal_8ec904eb7cffe9986df3d147441921da26934d6df55a2a9f6929f8dcc567689f->enter($__internal_8ec904eb7cffe9986df3d147441921da26934d6df55a2a9f6929f8dcc567689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_8ec904eb7cffe9986df3d147441921da26934d6df55a2a9f6929f8dcc567689f->leave($__internal_8ec904eb7cffe9986df3d147441921da26934d6df55a2a9f6929f8dcc567689f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e04fa91bb90acefb779d259a53e4f952004716a7da5888a11c5bb00970f112b9 = $this->env->getExtension("native_profiler");
        $__internal_e04fa91bb90acefb779d259a53e4f952004716a7da5888a11c5bb00970f112b9->enter($__internal_e04fa91bb90acefb779d259a53e4f952004716a7da5888a11c5bb00970f112b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
  <h1>ERROR ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</h1>
  <h2>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</h2>
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/errors/500.jpg"), "html", null, true);
        echo "\" class=\"imgError\" />

";
        
        $__internal_e04fa91bb90acefb779d259a53e4f952004716a7da5888a11c5bb00970f112b9->leave($__internal_e04fa91bb90acefb779d259a53e4f952004716a7da5888a11c5bb00970f112b9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8683412f5a2c9d19e47daa72cfc648d128d9b7b941b631597f140466fe8d44b = $this->env->getExtension("native_profiler");
        $__internal_f8683412f5a2c9d19e47daa72cfc648d128d9b7b941b631597f140466fe8d44b->enter($__internal_f8683412f5a2c9d19e47daa72cfc648d128d9b7b941b631597f140466fe8d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_f8683412f5a2c9d19e47daa72cfc648d128d9b7b941b631597f140466fe8d44b->leave($__internal_f8683412f5a2c9d19e47daa72cfc648d128d9b7b941b631597f140466fe8d44b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  96 => 13,  86 => 9,  82 => 8,  78 => 7,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/*   <h1>ERROR {{status_code}}</h1>*/
/*   <h2>{{status_text}}</h2>*/
/* <img src="{{ asset('images/errors/500.jpg') }}" class="imgError" />*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
