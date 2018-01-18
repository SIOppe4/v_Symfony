<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9bfab0e255120830aedce8df7ef4b013bf30f6670d2a73b90532cfcfb1bda506 extends Twig_Template
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
        $__internal_c273854a2a6d52b34b0965ced035f7103e6410a1943016c5670c2e35b7dc3d6a = $this->env->getExtension("native_profiler");
        $__internal_c273854a2a6d52b34b0965ced035f7103e6410a1943016c5670c2e35b7dc3d6a->enter($__internal_c273854a2a6d52b34b0965ced035f7103e6410a1943016c5670c2e35b7dc3d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c273854a2a6d52b34b0965ced035f7103e6410a1943016c5670c2e35b7dc3d6a->leave($__internal_c273854a2a6d52b34b0965ced035f7103e6410a1943016c5670c2e35b7dc3d6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
