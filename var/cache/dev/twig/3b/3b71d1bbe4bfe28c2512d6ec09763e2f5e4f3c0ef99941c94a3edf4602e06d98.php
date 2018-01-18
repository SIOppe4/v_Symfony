<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_afeb21002d03de0ff5a146ceb8fa14da6d30806cce94d175cb21eb8e8c835cf6 extends Twig_Template
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
        $__internal_07897e289898ab9aa938d96d68265593be85beb1759ec811f8df48bd8374d24b = $this->env->getExtension("native_profiler");
        $__internal_07897e289898ab9aa938d96d68265593be85beb1759ec811f8df48bd8374d24b->enter($__internal_07897e289898ab9aa938d96d68265593be85beb1759ec811f8df48bd8374d24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_07897e289898ab9aa938d96d68265593be85beb1759ec811f8df48bd8374d24b->leave($__internal_07897e289898ab9aa938d96d68265593be85beb1759ec811f8df48bd8374d24b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
