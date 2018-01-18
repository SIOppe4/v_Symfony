<?php

/* TobatBundle:Client:index.html.twig */
class __TwigTemplate_e726b2878d895fddf8989243dfabd86f8f8228ae4aa51f38e3b6987e47169cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TobatBundle:Client:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c11fbf232107afb064849cfa2dd62d17f66b0eb34a0e595d3ab39d485f4cc29 = $this->env->getExtension("native_profiler");
        $__internal_2c11fbf232107afb064849cfa2dd62d17f66b0eb34a0e595d3ab39d485f4cc29->enter($__internal_2c11fbf232107afb064849cfa2dd62d17f66b0eb34a0e595d3ab39d485f4cc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c11fbf232107afb064849cfa2dd62d17f66b0eb34a0e595d3ab39d485f4cc29->leave($__internal_2c11fbf232107afb064849cfa2dd62d17f66b0eb34a0e595d3ab39d485f4cc29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25340d9ae981eb89932ebbe55e5f3c3d06f8128628cb59fa0997adc2255a2460 = $this->env->getExtension("native_profiler");
        $__internal_25340d9ae981eb89932ebbe55e5f3c3d06f8128628cb59fa0997adc2255a2460->enter($__internal_25340d9ae981eb89932ebbe55e5f3c3d06f8128628cb59fa0997adc2255a2460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TobatBundle:ClientController:index";
        
        $__internal_25340d9ae981eb89932ebbe55e5f3c3d06f8128628cb59fa0997adc2255a2460->leave($__internal_25340d9ae981eb89932ebbe55e5f3c3d06f8128628cb59fa0997adc2255a2460_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_353f3d3e196d0bb51ec18d5c0c5a65e395386a4a10c8d3ce6fca864bd2b5009a = $this->env->getExtension("native_profiler");
        $__internal_353f3d3e196d0bb51ec18d5c0c5a65e395386a4a10c8d3ce6fca864bd2b5009a->enter($__internal_353f3d3e196d0bb51ec18d5c0c5a65e395386a4a10c8d3ce6fca864bd2b5009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the ClientController:index page</h1>
";
        
        $__internal_353f3d3e196d0bb51ec18d5c0c5a65e395386a4a10c8d3ce6fca864bd2b5009a->leave($__internal_353f3d3e196d0bb51ec18d5c0c5a65e395386a4a10c8d3ce6fca864bd2b5009a_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}TobatBundle:ClientController:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the ClientController:index page</h1>*/
/* {% endblock %}*/
/* */
