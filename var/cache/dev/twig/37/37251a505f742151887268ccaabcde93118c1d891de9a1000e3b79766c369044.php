<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_928c4352b22da0c2ab1ecaff3fcb67087a9881a4a94e27cb92a80e72333e2a8c extends Twig_Template
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
        $__internal_679d2d05c4106aa4b050dc26c78ab48add1d4731fc566032f9cbb89b6256050d = $this->env->getExtension("native_profiler");
        $__internal_679d2d05c4106aa4b050dc26c78ab48add1d4731fc566032f9cbb89b6256050d->enter($__internal_679d2d05c4106aa4b050dc26c78ab48add1d4731fc566032f9cbb89b6256050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_679d2d05c4106aa4b050dc26c78ab48add1d4731fc566032f9cbb89b6256050d->leave($__internal_679d2d05c4106aa4b050dc26c78ab48add1d4731fc566032f9cbb89b6256050d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
