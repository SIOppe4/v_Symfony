<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_688c4921089b11a34810e62dbbaeea40021a884105b4384de9ddb4c8178aaa33 extends Twig_Template
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
        $__internal_ca57093b7e3bdcf1644bfd0841c4ada9f57309b32e767a65d5bc5c17157d6a95 = $this->env->getExtension("native_profiler");
        $__internal_ca57093b7e3bdcf1644bfd0841c4ada9f57309b32e767a65d5bc5c17157d6a95->enter($__internal_ca57093b7e3bdcf1644bfd0841c4ada9f57309b32e767a65d5bc5c17157d6a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ca57093b7e3bdcf1644bfd0841c4ada9f57309b32e767a65d5bc5c17157d6a95->leave($__internal_ca57093b7e3bdcf1644bfd0841c4ada9f57309b32e767a65d5bc5c17157d6a95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
