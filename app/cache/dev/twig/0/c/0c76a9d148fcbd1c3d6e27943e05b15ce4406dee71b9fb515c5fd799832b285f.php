<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c76a9d148fcbd1c3d6e27943e05b15ce4406dee71b9fb515c5fd799832b285f extends Twig_Template
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
        $__internal_f20c2358115296176d49d4a7c6912d93487df0ec9d7da1aaf79db7803aad2177 = $this->env->getExtension("native_profiler");
        $__internal_f20c2358115296176d49d4a7c6912d93487df0ec9d7da1aaf79db7803aad2177->enter($__internal_f20c2358115296176d49d4a7c6912d93487df0ec9d7da1aaf79db7803aad2177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20c2358115296176d49d4a7c6912d93487df0ec9d7da1aaf79db7803aad2177->leave($__internal_f20c2358115296176d49d4a7c6912d93487df0ec9d7da1aaf79db7803aad2177_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31f17b3413e62d28e9818d13d6cee53570c5c14aa7eef11af5201f9da65e7309 = $this->env->getExtension("native_profiler");
        $__internal_31f17b3413e62d28e9818d13d6cee53570c5c14aa7eef11af5201f9da65e7309->enter($__internal_31f17b3413e62d28e9818d13d6cee53570c5c14aa7eef11af5201f9da65e7309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31f17b3413e62d28e9818d13d6cee53570c5c14aa7eef11af5201f9da65e7309->leave($__internal_31f17b3413e62d28e9818d13d6cee53570c5c14aa7eef11af5201f9da65e7309_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a685e8a11617e02befd6dae9674b5f31210bab97e0cc2a678cb8b001f37617cf = $this->env->getExtension("native_profiler");
        $__internal_a685e8a11617e02befd6dae9674b5f31210bab97e0cc2a678cb8b001f37617cf->enter($__internal_a685e8a11617e02befd6dae9674b5f31210bab97e0cc2a678cb8b001f37617cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a685e8a11617e02befd6dae9674b5f31210bab97e0cc2a678cb8b001f37617cf->leave($__internal_a685e8a11617e02befd6dae9674b5f31210bab97e0cc2a678cb8b001f37617cf_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e4a314b1bc4695ca7198fff98f13eb90f57e37e1794cc181e7b6932bc82300f = $this->env->getExtension("native_profiler");
        $__internal_8e4a314b1bc4695ca7198fff98f13eb90f57e37e1794cc181e7b6932bc82300f->enter($__internal_8e4a314b1bc4695ca7198fff98f13eb90f57e37e1794cc181e7b6932bc82300f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8e4a314b1bc4695ca7198fff98f13eb90f57e37e1794cc181e7b6932bc82300f->leave($__internal_8e4a314b1bc4695ca7198fff98f13eb90f57e37e1794cc181e7b6932bc82300f_prof);

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
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
