<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e62f79f2ffba5e78f3713214b63dde49d4b167479268d1ed24bea96faecad095 extends Twig_Template
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
        $__internal_37677738af3faf0c3d1dbaeb7e337c33ab95588545bc861e3786051a8c89a75c = $this->env->getExtension("native_profiler");
        $__internal_37677738af3faf0c3d1dbaeb7e337c33ab95588545bc861e3786051a8c89a75c->enter($__internal_37677738af3faf0c3d1dbaeb7e337c33ab95588545bc861e3786051a8c89a75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_37677738af3faf0c3d1dbaeb7e337c33ab95588545bc861e3786051a8c89a75c->leave($__internal_37677738af3faf0c3d1dbaeb7e337c33ab95588545bc861e3786051a8c89a75c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
