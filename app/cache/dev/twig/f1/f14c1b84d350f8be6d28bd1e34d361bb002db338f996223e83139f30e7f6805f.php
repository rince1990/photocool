<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7023c9829a30fa2a531ed35b800b40ecb3a53c427137c87e2bc34bd30414f5c7 extends Twig_Template
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
        $__internal_3e91e08b3fdeecc73ac373c6188bcf29cc6e038a3712df498d58a23025a88b4a = $this->env->getExtension("native_profiler");
        $__internal_3e91e08b3fdeecc73ac373c6188bcf29cc6e038a3712df498d58a23025a88b4a->enter($__internal_3e91e08b3fdeecc73ac373c6188bcf29cc6e038a3712df498d58a23025a88b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3e91e08b3fdeecc73ac373c6188bcf29cc6e038a3712df498d58a23025a88b4a->leave($__internal_3e91e08b3fdeecc73ac373c6188bcf29cc6e038a3712df498d58a23025a88b4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
