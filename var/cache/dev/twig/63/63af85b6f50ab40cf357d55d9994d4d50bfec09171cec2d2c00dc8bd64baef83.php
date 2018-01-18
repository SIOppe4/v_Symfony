<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_464d5844fb36a21da9adbe68244d193edac56529d927be3dfd254bb6aede2584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b44bfa688709bad99d52294b39324aba9306c676e12803a41da9c2d0047adcb = $this->env->getExtension("native_profiler");
        $__internal_1b44bfa688709bad99d52294b39324aba9306c676e12803a41da9c2d0047adcb->enter($__internal_1b44bfa688709bad99d52294b39324aba9306c676e12803a41da9c2d0047adcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b44bfa688709bad99d52294b39324aba9306c676e12803a41da9c2d0047adcb->leave($__internal_1b44bfa688709bad99d52294b39324aba9306c676e12803a41da9c2d0047adcb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e83bc4d20f3098618a2063a462272d863f4ee924b5e713e3f36f968ff50f33a = $this->env->getExtension("native_profiler");
        $__internal_7e83bc4d20f3098618a2063a462272d863f4ee924b5e713e3f36f968ff50f33a->enter($__internal_7e83bc4d20f3098618a2063a462272d863f4ee924b5e713e3f36f968ff50f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e83bc4d20f3098618a2063a462272d863f4ee924b5e713e3f36f968ff50f33a->leave($__internal_7e83bc4d20f3098618a2063a462272d863f4ee924b5e713e3f36f968ff50f33a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bfaaf3402c8cc58f74bdbb89e5d1024ebbe21b453530d898f4c7a85d4cf0cd2 = $this->env->getExtension("native_profiler");
        $__internal_1bfaaf3402c8cc58f74bdbb89e5d1024ebbe21b453530d898f4c7a85d4cf0cd2->enter($__internal_1bfaaf3402c8cc58f74bdbb89e5d1024ebbe21b453530d898f4c7a85d4cf0cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bfaaf3402c8cc58f74bdbb89e5d1024ebbe21b453530d898f4c7a85d4cf0cd2->leave($__internal_1bfaaf3402c8cc58f74bdbb89e5d1024ebbe21b453530d898f4c7a85d4cf0cd2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8512826b3b8c38f80e8be30cd1fb7be3ca7c456949fa281b61963fb9cb354a13 = $this->env->getExtension("native_profiler");
        $__internal_8512826b3b8c38f80e8be30cd1fb7be3ca7c456949fa281b61963fb9cb354a13->enter($__internal_8512826b3b8c38f80e8be30cd1fb7be3ca7c456949fa281b61963fb9cb354a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8512826b3b8c38f80e8be30cd1fb7be3ca7c456949fa281b61963fb9cb354a13->leave($__internal_8512826b3b8c38f80e8be30cd1fb7be3ca7c456949fa281b61963fb9cb354a13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
