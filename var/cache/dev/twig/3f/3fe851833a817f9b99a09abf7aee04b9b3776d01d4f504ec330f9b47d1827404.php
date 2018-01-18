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
        $__internal_8fd51be4130d702ade4c333ec927e2d471fd5e20b3f436a17543a2466934cdeb = $this->env->getExtension("native_profiler");
        $__internal_8fd51be4130d702ade4c333ec927e2d471fd5e20b3f436a17543a2466934cdeb->enter($__internal_8fd51be4130d702ade4c333ec927e2d471fd5e20b3f436a17543a2466934cdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8fd51be4130d702ade4c333ec927e2d471fd5e20b3f436a17543a2466934cdeb->leave($__internal_8fd51be4130d702ade4c333ec927e2d471fd5e20b3f436a17543a2466934cdeb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65e6233d6e79d10ad3d4561fc8e90bd1db701bf7fe515071b38682c865bb5a1d = $this->env->getExtension("native_profiler");
        $__internal_65e6233d6e79d10ad3d4561fc8e90bd1db701bf7fe515071b38682c865bb5a1d->enter($__internal_65e6233d6e79d10ad3d4561fc8e90bd1db701bf7fe515071b38682c865bb5a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_65e6233d6e79d10ad3d4561fc8e90bd1db701bf7fe515071b38682c865bb5a1d->leave($__internal_65e6233d6e79d10ad3d4561fc8e90bd1db701bf7fe515071b38682c865bb5a1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da952c892d528ca7e332d2315e21aa92b41706dc1b7a0b579b3f93d248dcc80e = $this->env->getExtension("native_profiler");
        $__internal_da952c892d528ca7e332d2315e21aa92b41706dc1b7a0b579b3f93d248dcc80e->enter($__internal_da952c892d528ca7e332d2315e21aa92b41706dc1b7a0b579b3f93d248dcc80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da952c892d528ca7e332d2315e21aa92b41706dc1b7a0b579b3f93d248dcc80e->leave($__internal_da952c892d528ca7e332d2315e21aa92b41706dc1b7a0b579b3f93d248dcc80e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4f3d63a30ef4e5365dc4f22c86cf9014e238b3aa586f7dbb46f9b8b8e0d11af = $this->env->getExtension("native_profiler");
        $__internal_b4f3d63a30ef4e5365dc4f22c86cf9014e238b3aa586f7dbb46f9b8b8e0d11af->enter($__internal_b4f3d63a30ef4e5365dc4f22c86cf9014e238b3aa586f7dbb46f9b8b8e0d11af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4f3d63a30ef4e5365dc4f22c86cf9014e238b3aa586f7dbb46f9b8b8e0d11af->leave($__internal_b4f3d63a30ef4e5365dc4f22c86cf9014e238b3aa586f7dbb46f9b8b8e0d11af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce20bc43b3e9eeac3fe3caf61815a5e6af67427a576dc11fadb4e95619fe91c2 = $this->env->getExtension("native_profiler");
        $__internal_ce20bc43b3e9eeac3fe3caf61815a5e6af67427a576dc11fadb4e95619fe91c2->enter($__internal_ce20bc43b3e9eeac3fe3caf61815a5e6af67427a576dc11fadb4e95619fe91c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce20bc43b3e9eeac3fe3caf61815a5e6af67427a576dc11fadb4e95619fe91c2->leave($__internal_ce20bc43b3e9eeac3fe3caf61815a5e6af67427a576dc11fadb4e95619fe91c2_prof);

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
