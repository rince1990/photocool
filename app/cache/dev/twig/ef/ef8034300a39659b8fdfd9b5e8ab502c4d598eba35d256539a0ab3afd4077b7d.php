<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_66e5a4ab96111014e5a206e4e619542c3fc889fbe745615b9bc0b2f0b39a27e7 extends Twig_Template
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
        $__internal_48b45a15334a7ff7d7647d1314fa9606365d837e5a5bdc06024bf21fb5513cbc = $this->env->getExtension("native_profiler");
        $__internal_48b45a15334a7ff7d7647d1314fa9606365d837e5a5bdc06024bf21fb5513cbc->enter($__internal_48b45a15334a7ff7d7647d1314fa9606365d837e5a5bdc06024bf21fb5513cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_48b45a15334a7ff7d7647d1314fa9606365d837e5a5bdc06024bf21fb5513cbc->leave($__internal_48b45a15334a7ff7d7647d1314fa9606365d837e5a5bdc06024bf21fb5513cbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
