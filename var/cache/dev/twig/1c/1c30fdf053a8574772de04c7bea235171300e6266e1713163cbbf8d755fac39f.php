<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5fe8a4309b95e49c84d4df837753828cf8b7d4093cc884b6de436498abcdeafe extends Twig_Template
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
        $__internal_2f93b00fe9e9b141a133c3eae75419304e1bd99dd328fa402c0bffe576a7a39f = $this->env->getExtension("native_profiler");
        $__internal_2f93b00fe9e9b141a133c3eae75419304e1bd99dd328fa402c0bffe576a7a39f->enter($__internal_2f93b00fe9e9b141a133c3eae75419304e1bd99dd328fa402c0bffe576a7a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f93b00fe9e9b141a133c3eae75419304e1bd99dd328fa402c0bffe576a7a39f->leave($__internal_2f93b00fe9e9b141a133c3eae75419304e1bd99dd328fa402c0bffe576a7a39f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
