<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f10c1621d86a0169f5a4fc8d07252d56cc24cd21aa4c145953b91b6216785c89 extends Twig_Template
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
        $__internal_6ab63ecd140ede3315a090a5f346fc1c370ee685a0e23386df077cf26cc60cc9 = $this->env->getExtension("native_profiler");
        $__internal_6ab63ecd140ede3315a090a5f346fc1c370ee685a0e23386df077cf26cc60cc9->enter($__internal_6ab63ecd140ede3315a090a5f346fc1c370ee685a0e23386df077cf26cc60cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6ab63ecd140ede3315a090a5f346fc1c370ee685a0e23386df077cf26cc60cc9->leave($__internal_6ab63ecd140ede3315a090a5f346fc1c370ee685a0e23386df077cf26cc60cc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
