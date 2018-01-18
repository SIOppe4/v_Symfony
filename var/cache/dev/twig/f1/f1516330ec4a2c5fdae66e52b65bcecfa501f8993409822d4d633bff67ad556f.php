<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_62a7951d9ae7d1e6523f32d11f94f45ce24d1993f972cb567b9f6c0f530df338 extends Twig_Template
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
        $__internal_bf82fc30812e97e7e5ec297d24c2cd4549caa383799878a20bac4dae39f9a6bd = $this->env->getExtension("native_profiler");
        $__internal_bf82fc30812e97e7e5ec297d24c2cd4549caa383799878a20bac4dae39f9a6bd->enter($__internal_bf82fc30812e97e7e5ec297d24c2cd4549caa383799878a20bac4dae39f9a6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bf82fc30812e97e7e5ec297d24c2cd4549caa383799878a20bac4dae39f9a6bd->leave($__internal_bf82fc30812e97e7e5ec297d24c2cd4549caa383799878a20bac4dae39f9a6bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
