<?php

/* AdrianGRegisterBundle:Default:login.html.twig */
class __TwigTemplate_2fcaec0dafc8cfe8cc625308f39a7cd609e843dbe8855dae9f0dad77f36ff3cd extends Twig_Template
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
        $__internal_666f7d05a4885a10d2924ed200d9328a1b34bf8120ed57dfb6328fc86277e791 = $this->env->getExtension("native_profiler");
        $__internal_666f7d05a4885a10d2924ed200d9328a1b34bf8120ed57dfb6328fc86277e791->enter($__internal_666f7d05a4885a10d2924ed200d9328a1b34bf8120ed57dfb6328fc86277e791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdrianGRegisterBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666f7d05a4885a10d2924ed200d9328a1b34bf8120ed57dfb6328fc86277e791->leave($__internal_666f7d05a4885a10d2924ed200d9328a1b34bf8120ed57dfb6328fc86277e791_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_48d56639e14e6c7d6989419cfc06b2670469a74e9e0338b6c06337d2ebf301fd = $this->env->getExtension("native_profiler");
        $__internal_48d56639e14e6c7d6989419cfc06b2670469a74e9e0338b6c06337d2ebf301fd->enter($__internal_48d56639e14e6c7d6989419cfc06b2670469a74e9e0338b6c06337d2ebf301fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 5
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_48d56639e14e6c7d6989419cfc06b2670469a74e9e0338b6c06337d2ebf301fd->leave($__internal_48d56639e14e6c7d6989419cfc06b2670469a74e9e0338b6c06337d2ebf301fd_prof);

    }

    // line 4
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_60e5c92e30ad3b2506b1d93220c185f368049198933f0a0919f87dd455275f6d = $this->env->getExtension("native_profiler");
        $__internal_60e5c92e30ad3b2506b1d93220c185f368049198933f0a0919f87dd455275f6d->enter($__internal_60e5c92e30ad3b2506b1d93220c185f368049198933f0a0919f87dd455275f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        echo " ";
        $this->displayParentBlock("sidemenu", $context, $blocks);
        echo " ";
        
        $__internal_60e5c92e30ad3b2506b1d93220c185f368049198933f0a0919f87dd455275f6d->leave($__internal_60e5c92e30ad3b2506b1d93220c185f368049198933f0a0919f87dd455275f6d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9068e2f9a0e12c71aca86e787b6d3945fe7b5876574c42f811d9abec6cfed5d5 = $this->env->getExtension("native_profiler");
        $__internal_9068e2f9a0e12c71aca86e787b6d3945fe7b5876574c42f811d9abec6cfed5d5->enter($__internal_9068e2f9a0e12c71aca86e787b6d3945fe7b5876574c42f811d9abec6cfed5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9068e2f9a0e12c71aca86e787b6d3945fe7b5876574c42f811d9abec6cfed5d5->leave($__internal_9068e2f9a0e12c71aca86e787b6d3945fe7b5876574c42f811d9abec6cfed5d5_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13a803872f15b7b96ff52b4a1128bfb42a1eefea31f0c7b8e1010aca513007fe = $this->env->getExtension("native_profiler");
        $__internal_13a803872f15b7b96ff52b4a1128bfb42a1eefea31f0c7b8e1010aca513007fe->enter($__internal_13a803872f15b7b96ff52b4a1128bfb42a1eefea31f0c7b8e1010aca513007fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "<script>
\$('#loginlink').addClass('selected')
</script>
";
        
        $__internal_13a803872f15b7b96ff52b4a1128bfb42a1eefea31f0c7b8e1010aca513007fe->leave($__internal_13a803872f15b7b96ff52b4a1128bfb42a1eefea31f0c7b8e1010aca513007fe_prof);

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
