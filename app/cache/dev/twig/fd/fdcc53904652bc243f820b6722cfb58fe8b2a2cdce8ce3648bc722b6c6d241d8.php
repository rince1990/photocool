<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_682ae0d716798efc9083f581c13cb26330a7a4dff70bc1fa9307c1d043e61f6e extends Twig_Template
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
        $__internal_c788369f748b9339e2a386ae150613d798363cd607e4766d0812d7120c300b0c = $this->env->getExtension("native_profiler");
        $__internal_c788369f748b9339e2a386ae150613d798363cd607e4766d0812d7120c300b0c->enter($__internal_c788369f748b9339e2a386ae150613d798363cd607e4766d0812d7120c300b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c788369f748b9339e2a386ae150613d798363cd607e4766d0812d7120c300b0c->leave($__internal_c788369f748b9339e2a386ae150613d798363cd607e4766d0812d7120c300b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
