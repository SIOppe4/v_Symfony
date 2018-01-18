<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fe8a4432a67148996e44528032d80dfa00f3f0373b65e6482951631e45458271 extends Twig_Template
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
        $__internal_f784a79f6fcfeac6c828d823fc23008b745cb0ed7b2ce049048e01f9cd9012a3 = $this->env->getExtension("native_profiler");
        $__internal_f784a79f6fcfeac6c828d823fc23008b745cb0ed7b2ce049048e01f9cd9012a3->enter($__internal_f784a79f6fcfeac6c828d823fc23008b745cb0ed7b2ce049048e01f9cd9012a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f784a79f6fcfeac6c828d823fc23008b745cb0ed7b2ce049048e01f9cd9012a3->leave($__internal_f784a79f6fcfeac6c828d823fc23008b745cb0ed7b2ce049048e01f9cd9012a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
