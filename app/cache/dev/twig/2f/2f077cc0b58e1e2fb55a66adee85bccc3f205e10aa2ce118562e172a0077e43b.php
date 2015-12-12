<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_87e27447feed0f3f8465e6b77cf439bcda0e3f75d9e4302aa0792ae2961e9f7a extends Twig_Template
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
        $__internal_864e8383c12146acc41434f2a33e3d45b4d6f2806ce902f7b9a1ca66ade7f890 = $this->env->getExtension("native_profiler");
        $__internal_864e8383c12146acc41434f2a33e3d45b4d6f2806ce902f7b9a1ca66ade7f890->enter($__internal_864e8383c12146acc41434f2a33e3d45b4d6f2806ce902f7b9a1ca66ade7f890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_864e8383c12146acc41434f2a33e3d45b4d6f2806ce902f7b9a1ca66ade7f890->leave($__internal_864e8383c12146acc41434f2a33e3d45b4d6f2806ce902f7b9a1ca66ade7f890_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
