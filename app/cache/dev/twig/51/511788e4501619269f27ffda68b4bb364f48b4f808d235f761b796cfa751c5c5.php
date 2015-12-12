<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e643bf2d2203c0c09fab5e91e1b0b984e8eb22f9685f545d520e278d0e31bf9 extends Twig_Template
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
        $__internal_23f50a3ad0a24b72f060e82105bcddeb8979c97e292c8b33efb04771e3d324c5 = $this->env->getExtension("native_profiler");
        $__internal_23f50a3ad0a24b72f060e82105bcddeb8979c97e292c8b33efb04771e3d324c5->enter($__internal_23f50a3ad0a24b72f060e82105bcddeb8979c97e292c8b33efb04771e3d324c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23f50a3ad0a24b72f060e82105bcddeb8979c97e292c8b33efb04771e3d324c5->leave($__internal_23f50a3ad0a24b72f060e82105bcddeb8979c97e292c8b33efb04771e3d324c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
