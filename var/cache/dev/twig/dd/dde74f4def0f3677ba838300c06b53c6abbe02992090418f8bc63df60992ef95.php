<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_de13e4fe576d986912c028aa1333f20557536d7741d8048bde11413edc164d05 extends Twig_Template
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
        $__internal_5a382093be3f8dc51effa09ba33d028ba3ad373d5b7dfe14ff1cd73b00d46a75 = $this->env->getExtension("native_profiler");
        $__internal_5a382093be3f8dc51effa09ba33d028ba3ad373d5b7dfe14ff1cd73b00d46a75->enter($__internal_5a382093be3f8dc51effa09ba33d028ba3ad373d5b7dfe14ff1cd73b00d46a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5a382093be3f8dc51effa09ba33d028ba3ad373d5b7dfe14ff1cd73b00d46a75->leave($__internal_5a382093be3f8dc51effa09ba33d028ba3ad373d5b7dfe14ff1cd73b00d46a75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
