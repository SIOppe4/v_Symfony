<?php

/* TobatBundle:ClientController:index.html.twig */
class __TwigTemplate_cabffe891d4fbc06a09a34f7c6a4f163e38e317bb8d4dd48d322272781450076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TobatBundle:ClientController:index.html.twig", 1);
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
        $__internal_a2e45949f977429a181a246befc0699fe445816f43bacf2c2961a2fb2286fd07 = $this->env->getExtension("native_profiler");
        $__internal_a2e45949f977429a181a246befc0699fe445816f43bacf2c2961a2fb2286fd07->enter($__internal_a2e45949f977429a181a246befc0699fe445816f43bacf2c2961a2fb2286fd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobatBundle:ClientController:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e45949f977429a181a246befc0699fe445816f43bacf2c2961a2fb2286fd07->leave($__internal_a2e45949f977429a181a246befc0699fe445816f43bacf2c2961a2fb2286fd07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c03ea221580e6ddb4ce1735d8c7e51917714882f5c3ba6642e42389e44966ec1 = $this->env->getExtension("native_profiler");
        $__internal_c03ea221580e6ddb4ce1735d8c7e51917714882f5c3ba6642e42389e44966ec1->enter($__internal_c03ea221580e6ddb4ce1735d8c7e51917714882f5c3ba6642e42389e44966ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TobatBundle:ClientController:index";
        
        $__internal_c03ea221580e6ddb4ce1735d8c7e51917714882f5c3ba6642e42389e44966ec1->leave($__internal_c03ea221580e6ddb4ce1735d8c7e51917714882f5c3ba6642e42389e44966ec1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_444d0040ac6e696ecc9cbcd512dd9beff6e1ce12a43bea9ffc46acf880bf24ef = $this->env->getExtension("native_profiler");
        $__internal_444d0040ac6e696ecc9cbcd512dd9beff6e1ce12a43bea9ffc46acf880bf24ef->enter($__internal_444d0040ac6e696ecc9cbcd512dd9beff6e1ce12a43bea9ffc46acf880bf24ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the ClientController:index page</h1>
";
        
        $__internal_444d0040ac6e696ecc9cbcd512dd9beff6e1ce12a43bea9ffc46acf880bf24ef->leave($__internal_444d0040ac6e696ecc9cbcd512dd9beff6e1ce12a43bea9ffc46acf880bf24ef_prof);

    }

    public function getTemplateName()
    {
        return "TobatBundle:ClientController:index.html.twig";
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
