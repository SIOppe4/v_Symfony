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
        $__internal_0fa27ef5719a7a0f9700845e4d078b8eb3c6e70c435b7a143e9c06b85bb4b6fa = $this->env->getExtension("native_profiler");
        $__internal_0fa27ef5719a7a0f9700845e4d078b8eb3c6e70c435b7a143e9c06b85bb4b6fa->enter($__internal_0fa27ef5719a7a0f9700845e4d078b8eb3c6e70c435b7a143e9c06b85bb4b6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa27ef5719a7a0f9700845e4d078b8eb3c6e70c435b7a143e9c06b85bb4b6fa->leave($__internal_0fa27ef5719a7a0f9700845e4d078b8eb3c6e70c435b7a143e9c06b85bb4b6fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b43fe343d641134d530a9f4fc76d302e3e11f09557f45132113646bb2ba8ec87 = $this->env->getExtension("native_profiler");
        $__internal_b43fe343d641134d530a9f4fc76d302e3e11f09557f45132113646bb2ba8ec87->enter($__internal_b43fe343d641134d530a9f4fc76d302e3e11f09557f45132113646bb2ba8ec87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b43fe343d641134d530a9f4fc76d302e3e11f09557f45132113646bb2ba8ec87->leave($__internal_b43fe343d641134d530a9f4fc76d302e3e11f09557f45132113646bb2ba8ec87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_997caa19479160532494fa6bc6306de98b98e960f4daf45a9b59107cf1b5264b = $this->env->getExtension("native_profiler");
        $__internal_997caa19479160532494fa6bc6306de98b98e960f4daf45a9b59107cf1b5264b->enter($__internal_997caa19479160532494fa6bc6306de98b98e960f4daf45a9b59107cf1b5264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_997caa19479160532494fa6bc6306de98b98e960f4daf45a9b59107cf1b5264b->leave($__internal_997caa19479160532494fa6bc6306de98b98e960f4daf45a9b59107cf1b5264b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3095697ef02ab98c5c6aaff553defc0a65a16a2d32e041647453c49d9d69859a = $this->env->getExtension("native_profiler");
        $__internal_3095697ef02ab98c5c6aaff553defc0a65a16a2d32e041647453c49d9d69859a->enter($__internal_3095697ef02ab98c5c6aaff553defc0a65a16a2d32e041647453c49d9d69859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3095697ef02ab98c5c6aaff553defc0a65a16a2d32e041647453c49d9d69859a->leave($__internal_3095697ef02ab98c5c6aaff553defc0a65a16a2d32e041647453c49d9d69859a_prof);

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
