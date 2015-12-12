<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5f9751dfe4ede067a48fddad8e9c5f1639fa6295464ff0cd66db28fb22966a61 extends Twig_Template
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
        $__internal_eb34fc5a70ce433ec014bd46a507521aaaf52de5343bbe63a1a7a47cbcefbc56 = $this->env->getExtension("native_profiler");
        $__internal_eb34fc5a70ce433ec014bd46a507521aaaf52de5343bbe63a1a7a47cbcefbc56->enter($__internal_eb34fc5a70ce433ec014bd46a507521aaaf52de5343bbe63a1a7a47cbcefbc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb34fc5a70ce433ec014bd46a507521aaaf52de5343bbe63a1a7a47cbcefbc56->leave($__internal_eb34fc5a70ce433ec014bd46a507521aaaf52de5343bbe63a1a7a47cbcefbc56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
