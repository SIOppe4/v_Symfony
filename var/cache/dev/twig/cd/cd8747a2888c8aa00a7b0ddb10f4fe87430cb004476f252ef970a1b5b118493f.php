<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4940b11cd1e2ce5b7615ded8a9e55ec70196f10f48f4cc0813731b1bc062d54e extends Twig_Template
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
        $__internal_1b05f0235565739ea90214332819f12109285c335a060dc3b38846de1c642397 = $this->env->getExtension("native_profiler");
        $__internal_1b05f0235565739ea90214332819f12109285c335a060dc3b38846de1c642397->enter($__internal_1b05f0235565739ea90214332819f12109285c335a060dc3b38846de1c642397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1b05f0235565739ea90214332819f12109285c335a060dc3b38846de1c642397->leave($__internal_1b05f0235565739ea90214332819f12109285c335a060dc3b38846de1c642397_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
