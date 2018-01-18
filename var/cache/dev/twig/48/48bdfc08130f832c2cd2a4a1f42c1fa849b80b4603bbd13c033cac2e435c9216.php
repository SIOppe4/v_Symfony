<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c113839caaf36ce6aa5085c1e8a9baf941d838a263dbc95dafae7bfdd631e1ae extends Twig_Template
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
        $__internal_6284e342a9d7db2d96208b5f2fedd020ea527190d67d537067b53fe50d0d4e31 = $this->env->getExtension("native_profiler");
        $__internal_6284e342a9d7db2d96208b5f2fedd020ea527190d67d537067b53fe50d0d4e31->enter($__internal_6284e342a9d7db2d96208b5f2fedd020ea527190d67d537067b53fe50d0d4e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6284e342a9d7db2d96208b5f2fedd020ea527190d67d537067b53fe50d0d4e31->leave($__internal_6284e342a9d7db2d96208b5f2fedd020ea527190d67d537067b53fe50d0d4e31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
