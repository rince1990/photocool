<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_221c8fe0d86a38aad1424a8f781dc5c886a0434d743a804f0f8d819b6a42b752 extends Twig_Template
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
        $__internal_d58af16c343f00308acf577557fe1deaa4705593153a371c821a6bc1270c65f4 = $this->env->getExtension("native_profiler");
        $__internal_d58af16c343f00308acf577557fe1deaa4705593153a371c821a6bc1270c65f4->enter($__internal_d58af16c343f00308acf577557fe1deaa4705593153a371c821a6bc1270c65f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d58af16c343f00308acf577557fe1deaa4705593153a371c821a6bc1270c65f4->leave($__internal_d58af16c343f00308acf577557fe1deaa4705593153a371c821a6bc1270c65f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
