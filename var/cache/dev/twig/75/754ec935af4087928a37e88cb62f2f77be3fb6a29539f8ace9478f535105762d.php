<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
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
        $__internal_758a106582cfa7a175308a1542919d23b0babf8bdcb5eea165d0302dc370733e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758a106582cfa7a175308a1542919d23b0babf8bdcb5eea165d0302dc370733e->enter($__internal_758a106582cfa7a175308a1542919d23b0babf8bdcb5eea165d0302dc370733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f6f12947613cc8a74bce1d48d3699b0df7231440c3314a01686b8e31bbe3ec27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f12947613cc8a74bce1d48d3699b0df7231440c3314a01686b8e31bbe3ec27->enter($__internal_f6f12947613cc8a74bce1d48d3699b0df7231440c3314a01686b8e31bbe3ec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758a106582cfa7a175308a1542919d23b0babf8bdcb5eea165d0302dc370733e->leave($__internal_758a106582cfa7a175308a1542919d23b0babf8bdcb5eea165d0302dc370733e_prof);

        
        $__internal_f6f12947613cc8a74bce1d48d3699b0df7231440c3314a01686b8e31bbe3ec27->leave($__internal_f6f12947613cc8a74bce1d48d3699b0df7231440c3314a01686b8e31bbe3ec27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d4bb000617b8e595482d17217da30c2e4de107252a88c3df42eb1bf19a6c697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4bb000617b8e595482d17217da30c2e4de107252a88c3df42eb1bf19a6c697->enter($__internal_8d4bb000617b8e595482d17217da30c2e4de107252a88c3df42eb1bf19a6c697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_171c976e56d451004493f07022800514ed37b59aec4c44f4f7d4fc4f223a7c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171c976e56d451004493f07022800514ed37b59aec4c44f4f7d4fc4f223a7c6c->enter($__internal_171c976e56d451004493f07022800514ed37b59aec4c44f4f7d4fc4f223a7c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_171c976e56d451004493f07022800514ed37b59aec4c44f4f7d4fc4f223a7c6c->leave($__internal_171c976e56d451004493f07022800514ed37b59aec4c44f4f7d4fc4f223a7c6c_prof);

        
        $__internal_8d4bb000617b8e595482d17217da30c2e4de107252a88c3df42eb1bf19a6c697->leave($__internal_8d4bb000617b8e595482d17217da30c2e4de107252a88c3df42eb1bf19a6c697_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d66af59d9be080c536c0d46efe6e2ae3e790f0972be84867087d0cea934bcc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66af59d9be080c536c0d46efe6e2ae3e790f0972be84867087d0cea934bcc74->enter($__internal_d66af59d9be080c536c0d46efe6e2ae3e790f0972be84867087d0cea934bcc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca8ac5b72ba58ef08b8da2b8488bbeaa46087601c2a45be7bc1d385c1a51edc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8ac5b72ba58ef08b8da2b8488bbeaa46087601c2a45be7bc1d385c1a51edc5->enter($__internal_ca8ac5b72ba58ef08b8da2b8488bbeaa46087601c2a45be7bc1d385c1a51edc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca8ac5b72ba58ef08b8da2b8488bbeaa46087601c2a45be7bc1d385c1a51edc5->leave($__internal_ca8ac5b72ba58ef08b8da2b8488bbeaa46087601c2a45be7bc1d385c1a51edc5_prof);

        
        $__internal_d66af59d9be080c536c0d46efe6e2ae3e790f0972be84867087d0cea934bcc74->leave($__internal_d66af59d9be080c536c0d46efe6e2ae3e790f0972be84867087d0cea934bcc74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7db44eaa96948d2fbf8f21a36c6928e323b2072e784cda8f1bbf6ed23bff2162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db44eaa96948d2fbf8f21a36c6928e323b2072e784cda8f1bbf6ed23bff2162->enter($__internal_7db44eaa96948d2fbf8f21a36c6928e323b2072e784cda8f1bbf6ed23bff2162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c92f0b90355b90e2727e75e3f9471126af4670e399f19eb1e70673d4f84fd0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92f0b90355b90e2727e75e3f9471126af4670e399f19eb1e70673d4f84fd0f0->enter($__internal_c92f0b90355b90e2727e75e3f9471126af4670e399f19eb1e70673d4f84fd0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c92f0b90355b90e2727e75e3f9471126af4670e399f19eb1e70673d4f84fd0f0->leave($__internal_c92f0b90355b90e2727e75e3f9471126af4670e399f19eb1e70673d4f84fd0f0_prof);

        
        $__internal_7db44eaa96948d2fbf8f21a36c6928e323b2072e784cda8f1bbf6ed23bff2162->leave($__internal_7db44eaa96948d2fbf8f21a36c6928e323b2072e784cda8f1bbf6ed23bff2162_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
