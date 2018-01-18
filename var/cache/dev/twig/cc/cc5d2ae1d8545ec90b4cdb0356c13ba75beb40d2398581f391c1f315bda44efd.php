<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4f7de1ce8a095488c7ae52f0ffb039865faef411874cd27e735c62dbf4574196 extends Twig_Template
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
        $__internal_0a65aa9275aa5f96bf0a0d67a3d3f14e827137deed4985fbbfd0ff4b669536f2 = $this->env->getExtension("native_profiler");
        $__internal_0a65aa9275aa5f96bf0a0d67a3d3f14e827137deed4985fbbfd0ff4b669536f2->enter($__internal_0a65aa9275aa5f96bf0a0d67a3d3f14e827137deed4985fbbfd0ff4b669536f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0a65aa9275aa5f96bf0a0d67a3d3f14e827137deed4985fbbfd0ff4b669536f2->leave($__internal_0a65aa9275aa5f96bf0a0d67a3d3f14e827137deed4985fbbfd0ff4b669536f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
