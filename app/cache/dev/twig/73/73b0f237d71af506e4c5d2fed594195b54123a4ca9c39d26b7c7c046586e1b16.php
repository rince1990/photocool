<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f99deb759c09b5dec62303d3336e4551bf2b8e296288e7be8d4ce9cdbbbd099d extends Twig_Template
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
        $__internal_e42c19ee7844540e378eeb0b1f43e064ece3cfd25544725078933d5e59f01ba8 = $this->env->getExtension("native_profiler");
        $__internal_e42c19ee7844540e378eeb0b1f43e064ece3cfd25544725078933d5e59f01ba8->enter($__internal_e42c19ee7844540e378eeb0b1f43e064ece3cfd25544725078933d5e59f01ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e42c19ee7844540e378eeb0b1f43e064ece3cfd25544725078933d5e59f01ba8->leave($__internal_e42c19ee7844540e378eeb0b1f43e064ece3cfd25544725078933d5e59f01ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
