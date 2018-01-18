<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d3ac9f46ac3cd7eb1490b07a2818983c62cf0afd2c41243b9bdcfbb80aa57b37 extends Twig_Template
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
        $__internal_d4f26a0b653df8ec6dcc34fc858f10845caace78ec5b9427e3b9ee7fb663cb04 = $this->env->getExtension("native_profiler");
        $__internal_d4f26a0b653df8ec6dcc34fc858f10845caace78ec5b9427e3b9ee7fb663cb04->enter($__internal_d4f26a0b653df8ec6dcc34fc858f10845caace78ec5b9427e3b9ee7fb663cb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d4f26a0b653df8ec6dcc34fc858f10845caace78ec5b9427e3b9ee7fb663cb04->leave($__internal_d4f26a0b653df8ec6dcc34fc858f10845caace78ec5b9427e3b9ee7fb663cb04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
