<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aadde2bca63e30844398a852254cc8b1f8faef2b772fc8116762feaf89d10126 extends Twig_Template
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
        $__internal_15dcd351df41a648efd5a05bdf2a43313eea0bf49f25aabb02cca721e90a8cda = $this->env->getExtension("native_profiler");
        $__internal_15dcd351df41a648efd5a05bdf2a43313eea0bf49f25aabb02cca721e90a8cda->enter($__internal_15dcd351df41a648efd5a05bdf2a43313eea0bf49f25aabb02cca721e90a8cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15dcd351df41a648efd5a05bdf2a43313eea0bf49f25aabb02cca721e90a8cda->leave($__internal_15dcd351df41a648efd5a05bdf2a43313eea0bf49f25aabb02cca721e90a8cda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
