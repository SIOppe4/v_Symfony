<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2cce88af708645e05ede597f9a9fce936f84314e2794f6585129035c4c9e83f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b47390a9e56a2bbb2b810cadb93eda718494225909e1fe924d0bcba75933a520 = $this->env->getExtension("native_profiler");
        $__internal_b47390a9e56a2bbb2b810cadb93eda718494225909e1fe924d0bcba75933a520->enter($__internal_b47390a9e56a2bbb2b810cadb93eda718494225909e1fe924d0bcba75933a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47390a9e56a2bbb2b810cadb93eda718494225909e1fe924d0bcba75933a520->leave($__internal_b47390a9e56a2bbb2b810cadb93eda718494225909e1fe924d0bcba75933a520_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33a8e05e6a2d97ff26d372a008e4d3738b6e8543285aebd9164ed148a79e2c5 = $this->env->getExtension("native_profiler");
        $__internal_f33a8e05e6a2d97ff26d372a008e4d3738b6e8543285aebd9164ed148a79e2c5->enter($__internal_f33a8e05e6a2d97ff26d372a008e4d3738b6e8543285aebd9164ed148a79e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f33a8e05e6a2d97ff26d372a008e4d3738b6e8543285aebd9164ed148a79e2c5->leave($__internal_f33a8e05e6a2d97ff26d372a008e4d3738b6e8543285aebd9164ed148a79e2c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_019d83146404c571275bc72f20be343727ee7d2adcf33552e9cd5d28fa06e4a7 = $this->env->getExtension("native_profiler");
        $__internal_019d83146404c571275bc72f20be343727ee7d2adcf33552e9cd5d28fa06e4a7->enter($__internal_019d83146404c571275bc72f20be343727ee7d2adcf33552e9cd5d28fa06e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_019d83146404c571275bc72f20be343727ee7d2adcf33552e9cd5d28fa06e4a7->leave($__internal_019d83146404c571275bc72f20be343727ee7d2adcf33552e9cd5d28fa06e4a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
