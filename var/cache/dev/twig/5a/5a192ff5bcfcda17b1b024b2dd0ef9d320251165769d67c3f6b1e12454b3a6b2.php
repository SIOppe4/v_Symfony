<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1241568665bdc0c3b2813aba8257b0e57afb13f46b90501b86becd63345902b1 extends Twig_Template
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
        $__internal_fee0d8601c73c9a280370ad1fd8eddba21db81fd24c633530e6027177b1865c1 = $this->env->getExtension("native_profiler");
        $__internal_fee0d8601c73c9a280370ad1fd8eddba21db81fd24c633530e6027177b1865c1->enter($__internal_fee0d8601c73c9a280370ad1fd8eddba21db81fd24c633530e6027177b1865c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fee0d8601c73c9a280370ad1fd8eddba21db81fd24c633530e6027177b1865c1->leave($__internal_fee0d8601c73c9a280370ad1fd8eddba21db81fd24c633530e6027177b1865c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
