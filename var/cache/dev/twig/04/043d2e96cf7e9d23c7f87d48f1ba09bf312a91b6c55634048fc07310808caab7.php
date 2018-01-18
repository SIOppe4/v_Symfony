<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0f4cec56618bead8c970008c84727c59e90a96ee6f67a7457befb06e27d0e175 extends Twig_Template
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
        $__internal_89be37babaa073f128da079541ebc91be2dbd461d6370ae7f658106c7f14cb7a = $this->env->getExtension("native_profiler");
        $__internal_89be37babaa073f128da079541ebc91be2dbd461d6370ae7f658106c7f14cb7a->enter($__internal_89be37babaa073f128da079541ebc91be2dbd461d6370ae7f658106c7f14cb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_89be37babaa073f128da079541ebc91be2dbd461d6370ae7f658106c7f14cb7a->leave($__internal_89be37babaa073f128da079541ebc91be2dbd461d6370ae7f658106c7f14cb7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
