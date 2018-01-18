<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4c7b1a28316457ed8a0d790c05f11e1191a252ec1279cec8d5eac904547e740a extends Twig_Template
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
        $__internal_a033f8cfce8b26d926cd0e140aa3b52b15cfec60896426cf5181ae280bfc73c3 = $this->env->getExtension("native_profiler");
        $__internal_a033f8cfce8b26d926cd0e140aa3b52b15cfec60896426cf5181ae280bfc73c3->enter($__internal_a033f8cfce8b26d926cd0e140aa3b52b15cfec60896426cf5181ae280bfc73c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a033f8cfce8b26d926cd0e140aa3b52b15cfec60896426cf5181ae280bfc73c3->leave($__internal_a033f8cfce8b26d926cd0e140aa3b52b15cfec60896426cf5181ae280bfc73c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
