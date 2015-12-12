<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e7aa3486162a93c9cd0c0be95dadb8132295d9f7ed5223d64ca071b92971019b extends Twig_Template
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
        $__internal_2c2c837be1c5838aa69453fdd360a8fabdc69a6859464643ed52ad48aa75b965 = $this->env->getExtension("native_profiler");
        $__internal_2c2c837be1c5838aa69453fdd360a8fabdc69a6859464643ed52ad48aa75b965->enter($__internal_2c2c837be1c5838aa69453fdd360a8fabdc69a6859464643ed52ad48aa75b965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2c2c837be1c5838aa69453fdd360a8fabdc69a6859464643ed52ad48aa75b965->leave($__internal_2c2c837be1c5838aa69453fdd360a8fabdc69a6859464643ed52ad48aa75b965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
