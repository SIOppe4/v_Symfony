<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_679ba37efdc442b39073922e7775729fcaacb19c70e709a01da4ee87779a68d3 extends Twig_Template
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
        $__internal_57e400891b7c73eb99a831e5cb9fc198812b0e274785dcac88fcb2c057af9882 = $this->env->getExtension("native_profiler");
        $__internal_57e400891b7c73eb99a831e5cb9fc198812b0e274785dcac88fcb2c057af9882->enter($__internal_57e400891b7c73eb99a831e5cb9fc198812b0e274785dcac88fcb2c057af9882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_57e400891b7c73eb99a831e5cb9fc198812b0e274785dcac88fcb2c057af9882->leave($__internal_57e400891b7c73eb99a831e5cb9fc198812b0e274785dcac88fcb2c057af9882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
