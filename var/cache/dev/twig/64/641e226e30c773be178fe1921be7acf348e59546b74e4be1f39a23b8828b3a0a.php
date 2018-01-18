<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_14ae98c7ba21c8fbfa0aae276222ac1c8d4b9542009a457b2d4ecb0c647557a9 extends Twig_Template
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
        $__internal_9f82a7fd28a41684adab98a8b2f7b040fac701109ac9076d5d315aaefe7dcdad = $this->env->getExtension("native_profiler");
        $__internal_9f82a7fd28a41684adab98a8b2f7b040fac701109ac9076d5d315aaefe7dcdad->enter($__internal_9f82a7fd28a41684adab98a8b2f7b040fac701109ac9076d5d315aaefe7dcdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9f82a7fd28a41684adab98a8b2f7b040fac701109ac9076d5d315aaefe7dcdad->leave($__internal_9f82a7fd28a41684adab98a8b2f7b040fac701109ac9076d5d315aaefe7dcdad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
