<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_20879b706c2e43c79afd69ae5a9277aef69821f1ad1d32b6f15ef6027a56e611 extends Twig_Template
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
        $__internal_ab54dc4e4d3a6b0f0ea9bd1a84fee776488aac15f7ea24514b52d72b50c5dbf8 = $this->env->getExtension("native_profiler");
        $__internal_ab54dc4e4d3a6b0f0ea9bd1a84fee776488aac15f7ea24514b52d72b50c5dbf8->enter($__internal_ab54dc4e4d3a6b0f0ea9bd1a84fee776488aac15f7ea24514b52d72b50c5dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ab54dc4e4d3a6b0f0ea9bd1a84fee776488aac15f7ea24514b52d72b50c5dbf8->leave($__internal_ab54dc4e4d3a6b0f0ea9bd1a84fee776488aac15f7ea24514b52d72b50c5dbf8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
