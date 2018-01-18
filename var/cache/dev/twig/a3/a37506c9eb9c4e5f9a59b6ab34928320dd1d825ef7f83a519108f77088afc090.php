<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7c64370f70869df10d6f39b1fda8667b96928c33ea0f8171515454db3bf8c1c9 extends Twig_Template
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
        $__internal_72d28d91f84bc4ebf41d2d823bb758c97e711be90f992f068d2c35b02540647e = $this->env->getExtension("native_profiler");
        $__internal_72d28d91f84bc4ebf41d2d823bb758c97e711be90f992f068d2c35b02540647e->enter($__internal_72d28d91f84bc4ebf41d2d823bb758c97e711be90f992f068d2c35b02540647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_72d28d91f84bc4ebf41d2d823bb758c97e711be90f992f068d2c35b02540647e->leave($__internal_72d28d91f84bc4ebf41d2d823bb758c97e711be90f992f068d2c35b02540647e_prof);

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
