<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3403059302c989ab7a983efff145e7c88eaea4d68c8425635376d40125138357 extends Twig_Template
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
        $__internal_98f0f7bd55513c35f2fdcf80334fef319ee56ccc076cbf9e904b6a33a14e5b3f = $this->env->getExtension("native_profiler");
        $__internal_98f0f7bd55513c35f2fdcf80334fef319ee56ccc076cbf9e904b6a33a14e5b3f->enter($__internal_98f0f7bd55513c35f2fdcf80334fef319ee56ccc076cbf9e904b6a33a14e5b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_98f0f7bd55513c35f2fdcf80334fef319ee56ccc076cbf9e904b6a33a14e5b3f->leave($__internal_98f0f7bd55513c35f2fdcf80334fef319ee56ccc076cbf9e904b6a33a14e5b3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
