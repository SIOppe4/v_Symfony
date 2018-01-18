<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_776902ea22f880b6d42ab1cdebc255cd39112d95d5647010e702b5e8ded8dbf8 extends Twig_Template
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
        $__internal_20cd8e87f9103e4df12167b5a27bb04c0ad0f22b9c9facded35b92a44cee30d0 = $this->env->getExtension("native_profiler");
        $__internal_20cd8e87f9103e4df12167b5a27bb04c0ad0f22b9c9facded35b92a44cee30d0->enter($__internal_20cd8e87f9103e4df12167b5a27bb04c0ad0f22b9c9facded35b92a44cee30d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_20cd8e87f9103e4df12167b5a27bb04c0ad0f22b9c9facded35b92a44cee30d0->leave($__internal_20cd8e87f9103e4df12167b5a27bb04c0ad0f22b9c9facded35b92a44cee30d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
