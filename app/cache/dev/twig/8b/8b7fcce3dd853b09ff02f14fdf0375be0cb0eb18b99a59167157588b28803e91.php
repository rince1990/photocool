<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ccba6dcbbe42efaf80e6c3c6d015a1a7b173d573cc751b11751a0fa1952b622d extends Twig_Template
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
        $__internal_8caf8bc2779271240986c7ce84bc9296770771ce1950626cff165ea5876ae9c6 = $this->env->getExtension("native_profiler");
        $__internal_8caf8bc2779271240986c7ce84bc9296770771ce1950626cff165ea5876ae9c6->enter($__internal_8caf8bc2779271240986c7ce84bc9296770771ce1950626cff165ea5876ae9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8caf8bc2779271240986c7ce84bc9296770771ce1950626cff165ea5876ae9c6->leave($__internal_8caf8bc2779271240986c7ce84bc9296770771ce1950626cff165ea5876ae9c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
