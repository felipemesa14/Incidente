<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5e1c05ea7316dd2b8da63b0b06b2b8d450e4ad428493e0581e265274b28a9c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1c05ea7316dd2b8da63b0b06b2b8d450e4ad428493e0581e265274b28a9c2d->enter($__internal_5e1c05ea7316dd2b8da63b0b06b2b8d450e4ad428493e0581e265274b28a9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cedb1956e3d96172d6789ce1497ab311e79043a089045ed430e815d9fa41f59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedb1956e3d96172d6789ce1497ab311e79043a089045ed430e815d9fa41f59b->enter($__internal_cedb1956e3d96172d6789ce1497ab311e79043a089045ed430e815d9fa41f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1c05ea7316dd2b8da63b0b06b2b8d450e4ad428493e0581e265274b28a9c2d->leave($__internal_5e1c05ea7316dd2b8da63b0b06b2b8d450e4ad428493e0581e265274b28a9c2d_prof);

        
        $__internal_cedb1956e3d96172d6789ce1497ab311e79043a089045ed430e815d9fa41f59b->leave($__internal_cedb1956e3d96172d6789ce1497ab311e79043a089045ed430e815d9fa41f59b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_750818c1a980f4f108b5b16211d12c896e60f3871d81e6219792fb7a41bc3a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750818c1a980f4f108b5b16211d12c896e60f3871d81e6219792fb7a41bc3a60->enter($__internal_750818c1a980f4f108b5b16211d12c896e60f3871d81e6219792fb7a41bc3a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7c8f760b9c34068749f0ccda0135b6511a3afdd7c7c91691a6f0a090fbe1dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c8f760b9c34068749f0ccda0135b6511a3afdd7c7c91691a6f0a090fbe1dc8->enter($__internal_a7c8f760b9c34068749f0ccda0135b6511a3afdd7c7c91691a6f0a090fbe1dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7c8f760b9c34068749f0ccda0135b6511a3afdd7c7c91691a6f0a090fbe1dc8->leave($__internal_a7c8f760b9c34068749f0ccda0135b6511a3afdd7c7c91691a6f0a090fbe1dc8_prof);

        
        $__internal_750818c1a980f4f108b5b16211d12c896e60f3871d81e6219792fb7a41bc3a60->leave($__internal_750818c1a980f4f108b5b16211d12c896e60f3871d81e6219792fb7a41bc3a60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4a1bcb0b59d1fb1b923943f1ee98ea5f9910995872719adb3d8022a22eb4c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a1bcb0b59d1fb1b923943f1ee98ea5f9910995872719adb3d8022a22eb4c59->enter($__internal_c4a1bcb0b59d1fb1b923943f1ee98ea5f9910995872719adb3d8022a22eb4c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c665271668d5a98bbf81474b58de0ef0c889973d878cd469e55ebfd7ea400fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c665271668d5a98bbf81474b58de0ef0c889973d878cd469e55ebfd7ea400fe1->enter($__internal_c665271668d5a98bbf81474b58de0ef0c889973d878cd469e55ebfd7ea400fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c665271668d5a98bbf81474b58de0ef0c889973d878cd469e55ebfd7ea400fe1->leave($__internal_c665271668d5a98bbf81474b58de0ef0c889973d878cd469e55ebfd7ea400fe1_prof);

        
        $__internal_c4a1bcb0b59d1fb1b923943f1ee98ea5f9910995872719adb3d8022a22eb4c59->leave($__internal_c4a1bcb0b59d1fb1b923943f1ee98ea5f9910995872719adb3d8022a22eb4c59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8091af0a78434ae55b4b428426a83fb782599410a2d8d50d16f82312b24035b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8091af0a78434ae55b4b428426a83fb782599410a2d8d50d16f82312b24035b->enter($__internal_b8091af0a78434ae55b4b428426a83fb782599410a2d8d50d16f82312b24035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6e56279fe1d843620741da6560d74b73a6f53e3e0c3d99d21173836cba0003e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e56279fe1d843620741da6560d74b73a6f53e3e0c3d99d21173836cba0003e->enter($__internal_a6e56279fe1d843620741da6560d74b73a6f53e3e0c3d99d21173836cba0003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a6e56279fe1d843620741da6560d74b73a6f53e3e0c3d99d21173836cba0003e->leave($__internal_a6e56279fe1d843620741da6560d74b73a6f53e3e0c3d99d21173836cba0003e_prof);

        
        $__internal_b8091af0a78434ae55b4b428426a83fb782599410a2d8d50d16f82312b24035b->leave($__internal_b8091af0a78434ae55b4b428426a83fb782599410a2d8d50d16f82312b24035b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
