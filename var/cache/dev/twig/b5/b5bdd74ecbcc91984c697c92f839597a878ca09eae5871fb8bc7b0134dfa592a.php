<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_96ac765172c10477c14a94b1d0d1b72745ca056a496e58b2928c52bf192e9512 extends Twig_Template
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
        $__internal_cc119d4caecf3972efb6c3f711a11e25b3792f428c8d3961b6662fbccb43dc7d = $this->env->getExtension("native_profiler");
        $__internal_cc119d4caecf3972efb6c3f711a11e25b3792f428c8d3961b6662fbccb43dc7d->enter($__internal_cc119d4caecf3972efb6c3f711a11e25b3792f428c8d3961b6662fbccb43dc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc119d4caecf3972efb6c3f711a11e25b3792f428c8d3961b6662fbccb43dc7d->leave($__internal_cc119d4caecf3972efb6c3f711a11e25b3792f428c8d3961b6662fbccb43dc7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
