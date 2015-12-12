<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_031da4a84249951d5394471657c12048a95a142b14e9f7fe00c699a8db82382c extends Twig_Template
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
        $__internal_30258f159cee930eb5b045974f3f96d109bac1b83b3ab42b844d1d3dcb518ff1 = $this->env->getExtension("native_profiler");
        $__internal_30258f159cee930eb5b045974f3f96d109bac1b83b3ab42b844d1d3dcb518ff1->enter($__internal_30258f159cee930eb5b045974f3f96d109bac1b83b3ab42b844d1d3dcb518ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30258f159cee930eb5b045974f3f96d109bac1b83b3ab42b844d1d3dcb518ff1->leave($__internal_30258f159cee930eb5b045974f3f96d109bac1b83b3ab42b844d1d3dcb518ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
