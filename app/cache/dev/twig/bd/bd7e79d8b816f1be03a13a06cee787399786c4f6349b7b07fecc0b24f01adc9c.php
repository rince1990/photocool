<?php

/* AdrianGRegisterBundle:Default:login.html.twig */
class __TwigTemplate_0bce94977a75d700a6fd19c2ee4b8c5277084f70c7c678269682da401c512189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdrianGRegisterBundle:Default:login.html.twig", 1);
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
        $__internal_75031e5125878c25e51d6704960753eb24858b3d4a3c75d41b8b95db7e823627 = $this->env->getExtension("native_profiler");
        $__internal_75031e5125878c25e51d6704960753eb24858b3d4a3c75d41b8b95db7e823627->enter($__internal_75031e5125878c25e51d6704960753eb24858b3d4a3c75d41b8b95db7e823627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75031e5125878c25e51d6704960753eb24858b3d4a3c75d41b8b95db7e823627->leave($__internal_75031e5125878c25e51d6704960753eb24858b3d4a3c75d41b8b95db7e823627_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a4dee3403a451e6efd3ec10f369ab72ad86cffa69a19bf5a3bfbd88bd87446 = $this->env->getExtension("native_profiler");
        $__internal_66a4dee3403a451e6efd3ec10f369ab72ad86cffa69a19bf5a3bfbd88bd87446->enter($__internal_66a4dee3403a451e6efd3ec10f369ab72ad86cffa69a19bf5a3bfbd88bd87446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_66a4dee3403a451e6efd3ec10f369ab72ad86cffa69a19bf5a3bfbd88bd87446->leave($__internal_66a4dee3403a451e6efd3ec10f369ab72ad86cffa69a19bf5a3bfbd88bd87446_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_b121db852129a7da050d5830045daaa1801336722a81677e09c6605248140d65 = $this->env->getExtension("native_profiler");
        $__internal_b121db852129a7da050d5830045daaa1801336722a81677e09c6605248140d65->enter($__internal_b121db852129a7da050d5830045daaa1801336722a81677e09c6605248140d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_b121db852129a7da050d5830045daaa1801336722a81677e09c6605248140d65->leave($__internal_b121db852129a7da050d5830045daaa1801336722a81677e09c6605248140d65_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_33a52fcd50300727c3a72d98008ffdb31b02604dc354161e5a2425dae0c90d91 = $this->env->getExtension("native_profiler");
        $__internal_33a52fcd50300727c3a72d98008ffdb31b02604dc354161e5a2425dae0c90d91->enter($__internal_33a52fcd50300727c3a72d98008ffdb31b02604dc354161e5a2425dae0c90d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<center>
<h1>LOGIN</h1>

<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
  <table>
    <tr>
    <td><label for=\"username\">Username:</label></td>
    <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /></td>
    </tr>
    <tr>
    <td><label for=\"password\">Password:</label></td>
    <td><input type=\"password\" id=\"password\" name=\"_password\" /></td>
    </tr>

    ";
        // line 25
        echo "<tr>
    <td colspan=\"2\"><center><button type=\"submit\">login</button></center></td>
</tr>
";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "    <div class=\"errorMessage\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 31
        echo "
<center>
";
        
        $__internal_33a52fcd50300727c3a72d98008ffdb31b02604dc354161e5a2425dae0c90d91->leave($__internal_33a52fcd50300727c3a72d98008ffdb31b02604dc354161e5a2425dae0c90d91_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3767c144515357312b87de208ba0ad5701cd79f4717c8836d565b36a088e880e = $this->env->getExtension("native_profiler");
        $__internal_3767c144515357312b87de208ba0ad5701cd79f4717c8836d565b36a088e880e->enter($__internal_3767c144515357312b87de208ba0ad5701cd79f4717c8836d565b36a088e880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "<script>
\$('#loginlink').addClass('selected')
</script>
";
        
        $__internal_3767c144515357312b87de208ba0ad5701cd79f4717c8836d565b36a088e880e->leave($__internal_3767c144515357312b87de208ba0ad5701cd79f4717c8836d565b36a088e880e_prof);

    }

    public function getTemplateName()
    {
        return "AdrianGRegisterBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  119 => 35,  110 => 31,  104 => 29,  102 => 28,  97 => 25,  87 => 13,  80 => 9,  75 => 6,  69 => 5,  55 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% block sidemenu %} {{ parent() }} {% endblock sidemenu %}*/
/* {% block content %}*/
/* <center>*/
/* <h1>LOGIN</h1>*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*   <table>*/
/*     <tr>*/
/*     <td><label for="username">Username:</label></td>*/
/*     <td><input type="text" id="username" name="_username" value="{{ last_username }}" /></td>*/
/*     </tr>*/
/*     <tr>*/
/*     <td><label for="password">Password:</label></td>*/
/*     <td><input type="password" id="password" name="_password" /></td>*/
/*     </tr>*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* <tr>*/
/*     <td colspan="2"><center><button type="submit">login</button></center></td>*/
/* </tr>*/
/* {% if error %}*/
/*     <div class="errorMessage">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <center>*/
/* {% endblock content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('#loginlink').addClass('selected')*/
/* </script>*/
/* {% endblock %}*/
/* */
