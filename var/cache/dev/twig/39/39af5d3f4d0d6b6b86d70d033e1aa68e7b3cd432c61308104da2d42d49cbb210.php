<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9ac54f851042f4aac58eea67aa29ea120b87332ee24bbafd9a5990a15e50d04c extends Twig_Template
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
        $__internal_888ee0dbe1555762dcb1da7eb7d9299209d55bb4fb07f03ca4d35e4c8a95fd7a = $this->env->getExtension("native_profiler");
        $__internal_888ee0dbe1555762dcb1da7eb7d9299209d55bb4fb07f03ca4d35e4c8a95fd7a->enter($__internal_888ee0dbe1555762dcb1da7eb7d9299209d55bb4fb07f03ca4d35e4c8a95fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_888ee0dbe1555762dcb1da7eb7d9299209d55bb4fb07f03ca4d35e4c8a95fd7a->leave($__internal_888ee0dbe1555762dcb1da7eb7d9299209d55bb4fb07f03ca4d35e4c8a95fd7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
