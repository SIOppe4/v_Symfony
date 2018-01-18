<?php

/* base.html.twig */
class __TwigTemplate_a2e3663bde35e08e2609301e92f30e11a9c2cd3721a9f5cdc4b87b8e4be7d8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957ef07513a31e7376e820dbe54c4e6dc6347af18bf33ed09c5bb389baf6733d = $this->env->getExtension("native_profiler");
        $__internal_957ef07513a31e7376e820dbe54c4e6dc6347af18bf33ed09c5bb389baf6733d->enter($__internal_957ef07513a31e7376e820dbe54c4e6dc6347af18bf33ed09c5bb389baf6733d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_957ef07513a31e7376e820dbe54c4e6dc6347af18bf33ed09c5bb389baf6733d->leave($__internal_957ef07513a31e7376e820dbe54c4e6dc6347af18bf33ed09c5bb389baf6733d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d1a0b354d9da24391896d2091e3b830dd6496915c653dff4081d6be98cea32 = $this->env->getExtension("native_profiler");
        $__internal_e9d1a0b354d9da24391896d2091e3b830dd6496915c653dff4081d6be98cea32->enter($__internal_e9d1a0b354d9da24391896d2091e3b830dd6496915c653dff4081d6be98cea32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e9d1a0b354d9da24391896d2091e3b830dd6496915c653dff4081d6be98cea32->leave($__internal_e9d1a0b354d9da24391896d2091e3b830dd6496915c653dff4081d6be98cea32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54e70aee3d3c6a56c4d3067abe8d53e31f909645c301f870da4403358f15a480 = $this->env->getExtension("native_profiler");
        $__internal_54e70aee3d3c6a56c4d3067abe8d53e31f909645c301f870da4403358f15a480->enter($__internal_54e70aee3d3c6a56c4d3067abe8d53e31f909645c301f870da4403358f15a480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54e70aee3d3c6a56c4d3067abe8d53e31f909645c301f870da4403358f15a480->leave($__internal_54e70aee3d3c6a56c4d3067abe8d53e31f909645c301f870da4403358f15a480_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a86ef4aff7278d0db82a0f7aec53000475580ea5a8a04f0b5f732cb01927af = $this->env->getExtension("native_profiler");
        $__internal_75a86ef4aff7278d0db82a0f7aec53000475580ea5a8a04f0b5f732cb01927af->enter($__internal_75a86ef4aff7278d0db82a0f7aec53000475580ea5a8a04f0b5f732cb01927af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75a86ef4aff7278d0db82a0f7aec53000475580ea5a8a04f0b5f732cb01927af->leave($__internal_75a86ef4aff7278d0db82a0f7aec53000475580ea5a8a04f0b5f732cb01927af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ee62f788b91f9865249f03fbd30e4a16ff490b9c3c059764f652e631741daf8 = $this->env->getExtension("native_profiler");
        $__internal_0ee62f788b91f9865249f03fbd30e4a16ff490b9c3c059764f652e631741daf8->enter($__internal_0ee62f788b91f9865249f03fbd30e4a16ff490b9c3c059764f652e631741daf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ee62f788b91f9865249f03fbd30e4a16ff490b9c3c059764f652e631741daf8->leave($__internal_0ee62f788b91f9865249f03fbd30e4a16ff490b9c3c059764f652e631741daf8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
