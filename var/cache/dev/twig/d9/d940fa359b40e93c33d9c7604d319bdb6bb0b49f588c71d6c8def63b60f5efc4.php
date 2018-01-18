<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_78136f328a2c2ecb71113099e8f21ac799adfe483c0a92bee0ced510501a0a01 extends Twig_Template
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
        $__internal_40989092f7005ea3fd6503362b59ee9af6204cfdb82450335e2d992c00d020d0 = $this->env->getExtension("native_profiler");
        $__internal_40989092f7005ea3fd6503362b59ee9af6204cfdb82450335e2d992c00d020d0->enter($__internal_40989092f7005ea3fd6503362b59ee9af6204cfdb82450335e2d992c00d020d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_40989092f7005ea3fd6503362b59ee9af6204cfdb82450335e2d992c00d020d0->leave($__internal_40989092f7005ea3fd6503362b59ee9af6204cfdb82450335e2d992c00d020d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
