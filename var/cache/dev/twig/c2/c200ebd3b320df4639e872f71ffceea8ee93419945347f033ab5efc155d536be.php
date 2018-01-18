<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bf7410ef339b61be8a1778b7abf65505471019cd41f9c5d037ebdbf2fe6a915f extends Twig_Template
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
        $__internal_1301bc6d216c87c77e00999437f6c65febdb44c20d2679b04a99c0926a09317d = $this->env->getExtension("native_profiler");
        $__internal_1301bc6d216c87c77e00999437f6c65febdb44c20d2679b04a99c0926a09317d->enter($__internal_1301bc6d216c87c77e00999437f6c65febdb44c20d2679b04a99c0926a09317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1301bc6d216c87c77e00999437f6c65febdb44c20d2679b04a99c0926a09317d->leave($__internal_1301bc6d216c87c77e00999437f6c65febdb44c20d2679b04a99c0926a09317d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
