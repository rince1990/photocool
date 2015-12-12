<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e04e6b23fcb173bd383264fddd93dcd1e1ee9390a4a9c0e87ab855d8a8d0dd14 extends Twig_Template
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
        $__internal_7c98c52699d74365fd069fd7c1b4a696837fc27c3ff03ebf271f5de785abb810 = $this->env->getExtension("native_profiler");
        $__internal_7c98c52699d74365fd069fd7c1b4a696837fc27c3ff03ebf271f5de785abb810->enter($__internal_7c98c52699d74365fd069fd7c1b4a696837fc27c3ff03ebf271f5de785abb810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7c98c52699d74365fd069fd7c1b4a696837fc27c3ff03ebf271f5de785abb810->leave($__internal_7c98c52699d74365fd069fd7c1b4a696837fc27c3ff03ebf271f5de785abb810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
