<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0259b5cea1be5c156786fcedc261965356eca44bc5b1ffe7a85fdc09287135cd extends Twig_Template
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
        $__internal_59cb6327070dbe0cf5dcce135e6f715dbf2705f9f221f27eca0bd3a8cf292fbc = $this->env->getExtension("native_profiler");
        $__internal_59cb6327070dbe0cf5dcce135e6f715dbf2705f9f221f27eca0bd3a8cf292fbc->enter($__internal_59cb6327070dbe0cf5dcce135e6f715dbf2705f9f221f27eca0bd3a8cf292fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_59cb6327070dbe0cf5dcce135e6f715dbf2705f9f221f27eca0bd3a8cf292fbc->leave($__internal_59cb6327070dbe0cf5dcce135e6f715dbf2705f9f221f27eca0bd3a8cf292fbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
