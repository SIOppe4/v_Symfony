<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_664bdfea23fd3fa9f919af0ec09b782c392aa319fa9762804771e8fdfbcf0768 extends Twig_Template
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
        $__internal_8d00a27895e91c642974a3f56fc09ef189435133eec6d903f9517705cd11e426 = $this->env->getExtension("native_profiler");
        $__internal_8d00a27895e91c642974a3f56fc09ef189435133eec6d903f9517705cd11e426->enter($__internal_8d00a27895e91c642974a3f56fc09ef189435133eec6d903f9517705cd11e426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8d00a27895e91c642974a3f56fc09ef189435133eec6d903f9517705cd11e426->leave($__internal_8d00a27895e91c642974a3f56fc09ef189435133eec6d903f9517705cd11e426_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
