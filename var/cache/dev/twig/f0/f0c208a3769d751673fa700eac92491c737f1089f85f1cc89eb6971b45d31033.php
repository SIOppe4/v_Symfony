<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_189f6335778d63d3d124c9d99c1c438043f33b04938132e4a0af899690a6ab97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_864c96ef098dba702177ff1e11da36dbf4fa1a1a0e8ef0fc22567df2cefe78d2 = $this->env->getExtension("native_profiler");
        $__internal_864c96ef098dba702177ff1e11da36dbf4fa1a1a0e8ef0fc22567df2cefe78d2->enter($__internal_864c96ef098dba702177ff1e11da36dbf4fa1a1a0e8ef0fc22567df2cefe78d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_864c96ef098dba702177ff1e11da36dbf4fa1a1a0e8ef0fc22567df2cefe78d2->leave($__internal_864c96ef098dba702177ff1e11da36dbf4fa1a1a0e8ef0fc22567df2cefe78d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f1c60221abd38b9135d649cfacdb61bb68608359a05b4c3925cb0fefc36e831 = $this->env->getExtension("native_profiler");
        $__internal_8f1c60221abd38b9135d649cfacdb61bb68608359a05b4c3925cb0fefc36e831->enter($__internal_8f1c60221abd38b9135d649cfacdb61bb68608359a05b4c3925cb0fefc36e831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8f1c60221abd38b9135d649cfacdb61bb68608359a05b4c3925cb0fefc36e831->leave($__internal_8f1c60221abd38b9135d649cfacdb61bb68608359a05b4c3925cb0fefc36e831_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
