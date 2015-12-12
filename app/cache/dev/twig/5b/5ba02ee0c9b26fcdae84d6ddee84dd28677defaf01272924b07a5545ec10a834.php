<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7e621060a8c2d5daedf4addfeaacee4053211cd754fc4af57f06489f0fce6352 extends Twig_Template
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
        $__internal_c934d81aa908f5742d32e2536c5f6c0de653d813c043284bd48faf0cc964239c = $this->env->getExtension("native_profiler");
        $__internal_c934d81aa908f5742d32e2536c5f6c0de653d813c043284bd48faf0cc964239c->enter($__internal_c934d81aa908f5742d32e2536c5f6c0de653d813c043284bd48faf0cc964239c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c934d81aa908f5742d32e2536c5f6c0de653d813c043284bd48faf0cc964239c->leave($__internal_c934d81aa908f5742d32e2536c5f6c0de653d813c043284bd48faf0cc964239c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
