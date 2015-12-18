<?php

/* AdrianGRegisterBundle:Default:index.html.twig */
class __TwigTemplate_f307d2c36153c6964d9de44e8673e5820d77778bfb533e8a4106fcedb95c2f0f extends Twig_Template
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
        $__internal_68e5e07dee9ff758b67d7582084843d22e66d349677f2d452dd57c9dcd7765f1 = $this->env->getExtension("native_profiler");
        $__internal_68e5e07dee9ff758b67d7582084843d22e66d349677f2d452dd57c9dcd7765f1->enter($__internal_68e5e07dee9ff758b67d7582084843d22e66d349677f2d452dd57c9dcd7765f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e5e07dee9ff758b67d7582084843d22e66d349677f2d452dd57c9dcd7765f1->leave($__internal_68e5e07dee9ff758b67d7582084843d22e66d349677f2d452dd57c9dcd7765f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ae960f057d209798684cda94ae9a041946df343ab9f37781ff9e3b44db33c6 = $this->env->getExtension("native_profiler");
        $__internal_f4ae960f057d209798684cda94ae9a041946df343ab9f37781ff9e3b44db33c6->enter($__internal_f4ae960f057d209798684cda94ae9a041946df343ab9f37781ff9e3b44db33c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_f4ae960f057d209798684cda94ae9a041946df343ab9f37781ff9e3b44db33c6->leave($__internal_f4ae960f057d209798684cda94ae9a041946df343ab9f37781ff9e3b44db33c6_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_7fa0d1b6920305ee80fe95ef6f7baac72308fe59023c84bdda17dacaecef0f38 = $this->env->getExtension("native_profiler");
        $__internal_7fa0d1b6920305ee80fe95ef6f7baac72308fe59023c84bdda17dacaecef0f38->enter($__internal_7fa0d1b6920305ee80fe95ef6f7baac72308fe59023c84bdda17dacaecef0f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_7fa0d1b6920305ee80fe95ef6f7baac72308fe59023c84bdda17dacaecef0f38->leave($__internal_7fa0d1b6920305ee80fe95ef6f7baac72308fe59023c84bdda17dacaecef0f38_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_27512414d0d24d3263b0cc84ba34d6b27d18230f3688d845273464d98f508b86 = $this->env->getExtension("native_profiler");
        $__internal_27512414d0d24d3263b0cc84ba34d6b27d18230f3688d845273464d98f508b86->enter($__internal_27512414d0d24d3263b0cc84ba34d6b27d18230f3688d845273464d98f508b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
<h2>HOME</h2>
<img id=\"welcome\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/welcome.png"), "html", null, true);
        echo "\"><br>
Welcome to photocool, you are free for searching galleries, photos, or register to upload yours!
</center
";
        
        $__internal_27512414d0d24d3263b0cc84ba34d6b27d18230f3688d845273464d98f508b86->leave($__internal_27512414d0d24d3263b0cc84ba34d6b27d18230f3688d845273464d98f508b86_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f00d0e39b9e1680393d95b6f6e81a70d86f39a4600c52d605b1898dccf85bacf = $this->env->getExtension("native_profiler");
        $__internal_f00d0e39b9e1680393d95b6f6e81a70d86f39a4600c52d605b1898dccf85bacf->enter($__internal_f00d0e39b9e1680393d95b6f6e81a70d86f39a4600c52d605b1898dccf85bacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_f00d0e39b9e1680393d95b6f6e81a70d86f39a4600c52d605b1898dccf85bacf->leave($__internal_f00d0e39b9e1680393d95b6f6e81a70d86f39a4600c52d605b1898dccf85bacf_prof);

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
        return array (  96 => 14,  90 => 13,  79 => 8,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h2>HOME</h2>*/
/* <img id="welcome" src="{{asset('images/welcome.png')}}"><br>*/
/* Welcome to photocool, you are free for searching galleries, photos, or register to upload yours!*/
/* </center*/
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
