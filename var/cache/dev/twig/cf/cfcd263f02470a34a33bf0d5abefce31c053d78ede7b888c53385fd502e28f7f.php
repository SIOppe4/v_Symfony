<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_981992dda3e98fdc21e2c70cebfbf586c753044fdf01c6799c2ee0982c6b9b92 extends Twig_Template
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
        $__internal_47a4b4fc3eb8a8832001ec6364a70cbefea1f58fcf896c257b5d13aff118e8d7 = $this->env->getExtension("native_profiler");
        $__internal_47a4b4fc3eb8a8832001ec6364a70cbefea1f58fcf896c257b5d13aff118e8d7->enter($__internal_47a4b4fc3eb8a8832001ec6364a70cbefea1f58fcf896c257b5d13aff118e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_47a4b4fc3eb8a8832001ec6364a70cbefea1f58fcf896c257b5d13aff118e8d7->leave($__internal_47a4b4fc3eb8a8832001ec6364a70cbefea1f58fcf896c257b5d13aff118e8d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
