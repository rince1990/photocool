<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4eccf363a28483861a3e488cd4c0a61473b52b3d3906955de3f522cb141c9168 extends Twig_Template
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
        $__internal_ccb636296d0aba92b2606c874b36547511f1b2b30a882c97bdd42bbc183eaabc = $this->env->getExtension("native_profiler");
        $__internal_ccb636296d0aba92b2606c874b36547511f1b2b30a882c97bdd42bbc183eaabc->enter($__internal_ccb636296d0aba92b2606c874b36547511f1b2b30a882c97bdd42bbc183eaabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ccb636296d0aba92b2606c874b36547511f1b2b30a882c97bdd42bbc183eaabc->leave($__internal_ccb636296d0aba92b2606c874b36547511f1b2b30a882c97bdd42bbc183eaabc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
