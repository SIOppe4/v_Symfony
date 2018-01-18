<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fbd0410f62580b7d91c7080bb25d153ab62ec081acedaf49b1e4378f6e5d8f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51894de7bbcd69bdab7ca2e5b71ee5489aa20729ca6acec414c08c1a78ab3a14 = $this->env->getExtension("native_profiler");
        $__internal_51894de7bbcd69bdab7ca2e5b71ee5489aa20729ca6acec414c08c1a78ab3a14->enter($__internal_51894de7bbcd69bdab7ca2e5b71ee5489aa20729ca6acec414c08c1a78ab3a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51894de7bbcd69bdab7ca2e5b71ee5489aa20729ca6acec414c08c1a78ab3a14->leave($__internal_51894de7bbcd69bdab7ca2e5b71ee5489aa20729ca6acec414c08c1a78ab3a14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7e065c6849830cf670692fd98077203a72c5ee4f1c964822012d461f7516583 = $this->env->getExtension("native_profiler");
        $__internal_c7e065c6849830cf670692fd98077203a72c5ee4f1c964822012d461f7516583->enter($__internal_c7e065c6849830cf670692fd98077203a72c5ee4f1c964822012d461f7516583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7e065c6849830cf670692fd98077203a72c5ee4f1c964822012d461f7516583->leave($__internal_c7e065c6849830cf670692fd98077203a72c5ee4f1c964822012d461f7516583_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f91585a8a5c9d1d2e70da12126ce28340c4e97ca37ca85299b63b265e3423303 = $this->env->getExtension("native_profiler");
        $__internal_f91585a8a5c9d1d2e70da12126ce28340c4e97ca37ca85299b63b265e3423303->enter($__internal_f91585a8a5c9d1d2e70da12126ce28340c4e97ca37ca85299b63b265e3423303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f91585a8a5c9d1d2e70da12126ce28340c4e97ca37ca85299b63b265e3423303->leave($__internal_f91585a8a5c9d1d2e70da12126ce28340c4e97ca37ca85299b63b265e3423303_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fdd0ca559316e3d586f7cc10635dd82fe167a10be2e7c5f8ccacdbd11c47457 = $this->env->getExtension("native_profiler");
        $__internal_8fdd0ca559316e3d586f7cc10635dd82fe167a10be2e7c5f8ccacdbd11c47457->enter($__internal_8fdd0ca559316e3d586f7cc10635dd82fe167a10be2e7c5f8ccacdbd11c47457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fdd0ca559316e3d586f7cc10635dd82fe167a10be2e7c5f8ccacdbd11c47457->leave($__internal_8fdd0ca559316e3d586f7cc10635dd82fe167a10be2e7c5f8ccacdbd11c47457_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
