<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_921f29a0f84df3634bd40748ab73d14c156cfe4233ce32f40ae7371dfd20836e extends Twig_Template
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
        $__internal_12385bd543ea32bc2e3a325f5334bff8cd71264a3f8887dfffd4adb3fa3dfd83 = $this->env->getExtension("native_profiler");
        $__internal_12385bd543ea32bc2e3a325f5334bff8cd71264a3f8887dfffd4adb3fa3dfd83->enter($__internal_12385bd543ea32bc2e3a325f5334bff8cd71264a3f8887dfffd4adb3fa3dfd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_12385bd543ea32bc2e3a325f5334bff8cd71264a3f8887dfffd4adb3fa3dfd83->leave($__internal_12385bd543ea32bc2e3a325f5334bff8cd71264a3f8887dfffd4adb3fa3dfd83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
