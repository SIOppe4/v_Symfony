<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6afcc7a0a2da58f5841c954f35c70b498fd85512b49bf5138cd3140c00d77663 extends Twig_Template
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
        $__internal_0ef477f9514b0c51d34328776b5c0950823764c0b1e9d46428d98d9c265ad67b = $this->env->getExtension("native_profiler");
        $__internal_0ef477f9514b0c51d34328776b5c0950823764c0b1e9d46428d98d9c265ad67b->enter($__internal_0ef477f9514b0c51d34328776b5c0950823764c0b1e9d46428d98d9c265ad67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0ef477f9514b0c51d34328776b5c0950823764c0b1e9d46428d98d9c265ad67b->leave($__internal_0ef477f9514b0c51d34328776b5c0950823764c0b1e9d46428d98d9c265ad67b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
