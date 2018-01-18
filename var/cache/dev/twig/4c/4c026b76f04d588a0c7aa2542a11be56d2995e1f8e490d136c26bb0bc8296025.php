<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1ebe107c8ce0f66a47904fdb09fee9a6d6874468dc2923c577bd9cc0c2813f4c extends Twig_Template
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
        $__internal_bcbd62cf86d19b38e709ee577a9c4eb990193d1708e0603ce90ad1cccac306df = $this->env->getExtension("native_profiler");
        $__internal_bcbd62cf86d19b38e709ee577a9c4eb990193d1708e0603ce90ad1cccac306df->enter($__internal_bcbd62cf86d19b38e709ee577a9c4eb990193d1708e0603ce90ad1cccac306df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bcbd62cf86d19b38e709ee577a9c4eb990193d1708e0603ce90ad1cccac306df->leave($__internal_bcbd62cf86d19b38e709ee577a9c4eb990193d1708e0603ce90ad1cccac306df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
