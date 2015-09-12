<?php

/* base.html.twig */
class __TwigTemplate_0b8a219fcc74aead004f7ea386e2a74c8ac469d759a669895021e2b9792edccf extends Twig_Template
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
        $__internal_a5fe857b56d8e70fd809fe33103614d8f1d3454efbbe74d73b26468e03fc9477 = $this->env->getExtension("native_profiler");
        $__internal_a5fe857b56d8e70fd809fe33103614d8f1d3454efbbe74d73b26468e03fc9477->enter($__internal_a5fe857b56d8e70fd809fe33103614d8f1d3454efbbe74d73b26468e03fc9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a5fe857b56d8e70fd809fe33103614d8f1d3454efbbe74d73b26468e03fc9477->leave($__internal_a5fe857b56d8e70fd809fe33103614d8f1d3454efbbe74d73b26468e03fc9477_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8133fdedc43d572735f13ff81022c02f35eeae098ea670d68bca5e6790c91ca = $this->env->getExtension("native_profiler");
        $__internal_e8133fdedc43d572735f13ff81022c02f35eeae098ea670d68bca5e6790c91ca->enter($__internal_e8133fdedc43d572735f13ff81022c02f35eeae098ea670d68bca5e6790c91ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8133fdedc43d572735f13ff81022c02f35eeae098ea670d68bca5e6790c91ca->leave($__internal_e8133fdedc43d572735f13ff81022c02f35eeae098ea670d68bca5e6790c91ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57d4f78881e0cf88d54cc1a6e770b0c4faa5406193cf3a7f705a45ef6f651cb0 = $this->env->getExtension("native_profiler");
        $__internal_57d4f78881e0cf88d54cc1a6e770b0c4faa5406193cf3a7f705a45ef6f651cb0->enter($__internal_57d4f78881e0cf88d54cc1a6e770b0c4faa5406193cf3a7f705a45ef6f651cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57d4f78881e0cf88d54cc1a6e770b0c4faa5406193cf3a7f705a45ef6f651cb0->leave($__internal_57d4f78881e0cf88d54cc1a6e770b0c4faa5406193cf3a7f705a45ef6f651cb0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f81692f5b57518385b2462bda266f5d669c4eb2bdc3dd622c61047a3bc821ded = $this->env->getExtension("native_profiler");
        $__internal_f81692f5b57518385b2462bda266f5d669c4eb2bdc3dd622c61047a3bc821ded->enter($__internal_f81692f5b57518385b2462bda266f5d669c4eb2bdc3dd622c61047a3bc821ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f81692f5b57518385b2462bda266f5d669c4eb2bdc3dd622c61047a3bc821ded->leave($__internal_f81692f5b57518385b2462bda266f5d669c4eb2bdc3dd622c61047a3bc821ded_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d5ffd87e6ac02d4489850315e1a122d2f810e8cf7c82133b3544ddd9477a272 = $this->env->getExtension("native_profiler");
        $__internal_8d5ffd87e6ac02d4489850315e1a122d2f810e8cf7c82133b3544ddd9477a272->enter($__internal_8d5ffd87e6ac02d4489850315e1a122d2f810e8cf7c82133b3544ddd9477a272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d5ffd87e6ac02d4489850315e1a122d2f810e8cf7c82133b3544ddd9477a272->leave($__internal_8d5ffd87e6ac02d4489850315e1a122d2f810e8cf7c82133b3544ddd9477a272_prof);

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
