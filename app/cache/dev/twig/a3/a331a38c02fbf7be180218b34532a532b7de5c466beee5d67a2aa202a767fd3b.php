<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_00f2ebcc00b88ca5291ee1bd77846dbff0f8969608e4ef4b62dce4d961a6aa7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_43a58b92d378a3db92fd9842d3baf1b762f65293589f153ce7e277de6b81e4af = $this->env->getExtension("native_profiler");
        $__internal_43a58b92d378a3db92fd9842d3baf1b762f65293589f153ce7e277de6b81e4af->enter($__internal_43a58b92d378a3db92fd9842d3baf1b762f65293589f153ce7e277de6b81e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43a58b92d378a3db92fd9842d3baf1b762f65293589f153ce7e277de6b81e4af->leave($__internal_43a58b92d378a3db92fd9842d3baf1b762f65293589f153ce7e277de6b81e4af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd8ab93ec364a1010835edac786b3b642aab192705f0d3daf750d452007079b7 = $this->env->getExtension("native_profiler");
        $__internal_fd8ab93ec364a1010835edac786b3b642aab192705f0d3daf750d452007079b7->enter($__internal_fd8ab93ec364a1010835edac786b3b642aab192705f0d3daf750d452007079b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_fd8ab93ec364a1010835edac786b3b642aab192705f0d3daf750d452007079b7->leave($__internal_fd8ab93ec364a1010835edac786b3b642aab192705f0d3daf750d452007079b7_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_cdf7a766d24f53e77f56ca6d6e02ddefd13b568d717619bb47a63505c291ce0c = $this->env->getExtension("native_profiler");
        $__internal_cdf7a766d24f53e77f56ca6d6e02ddefd13b568d717619bb47a63505c291ce0c->enter($__internal_cdf7a766d24f53e77f56ca6d6e02ddefd13b568d717619bb47a63505c291ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_cdf7a766d24f53e77f56ca6d6e02ddefd13b568d717619bb47a63505c291ce0c->leave($__internal_cdf7a766d24f53e77f56ca6d6e02ddefd13b568d717619bb47a63505c291ce0c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff9d4be4e9e66db8b4f8c1b73729cde142368051de0aeb63a3074106ba3f6a38 = $this->env->getExtension("native_profiler");
        $__internal_ff9d4be4e9e66db8b4f8c1b73729cde142368051de0aeb63a3074106ba3f6a38->enter($__internal_ff9d4be4e9e66db8b4f8c1b73729cde142368051de0aeb63a3074106ba3f6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/errors/403.PNG"), "html", null, true);
        echo "\" class=\"imgError\" />

";
        
        $__internal_ff9d4be4e9e66db8b4f8c1b73729cde142368051de0aeb63a3074106ba3f6a38->leave($__internal_ff9d4be4e9e66db8b4f8c1b73729cde142368051de0aeb63a3074106ba3f6a38_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e1e97cd11cbca624cb124cc684dd97df16f744e64560ecaa6d3007115d3eb24 = $this->env->getExtension("native_profiler");
        $__internal_0e1e97cd11cbca624cb124cc684dd97df16f744e64560ecaa6d3007115d3eb24->enter($__internal_0e1e97cd11cbca624cb124cc684dd97df16f744e64560ecaa6d3007115d3eb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "<script>
\$('#homelink').addClass('selected')
</script>
";
        
        $__internal_0e1e97cd11cbca624cb124cc684dd97df16f744e64560ecaa6d3007115d3eb24->leave($__internal_0e1e97cd11cbca624cb124cc684dd97df16f744e64560ecaa6d3007115d3eb24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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
/* <h1>ERROR {{status_code}}</h1>*/
/* <h2>{{status_text}}</h2>*/
/* <img src="{{ asset('images/errors/403.PNG') }}" class="imgError" />*/
/* */
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#homelink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
