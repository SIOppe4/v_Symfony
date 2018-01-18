<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_51cde7a13380cdb2856d26f0f493118198064445dbd2195c80b8f7165ddf97a0 extends Twig_Template
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
        $__internal_17671847d6a5e8aeaf1b7a058222dd2ccea05af77ff11d675731937a5a74176f = $this->env->getExtension("native_profiler");
        $__internal_17671847d6a5e8aeaf1b7a058222dd2ccea05af77ff11d675731937a5a74176f->enter($__internal_17671847d6a5e8aeaf1b7a058222dd2ccea05af77ff11d675731937a5a74176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_17671847d6a5e8aeaf1b7a058222dd2ccea05af77ff11d675731937a5a74176f->leave($__internal_17671847d6a5e8aeaf1b7a058222dd2ccea05af77ff11d675731937a5a74176f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
