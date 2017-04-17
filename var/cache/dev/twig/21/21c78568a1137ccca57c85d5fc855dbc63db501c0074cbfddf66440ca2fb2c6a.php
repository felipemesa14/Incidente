<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_227826178e4673d661939728a1a294e52d4dbb9f0166c60302d48a7eca38e78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227826178e4673d661939728a1a294e52d4dbb9f0166c60302d48a7eca38e78e->enter($__internal_227826178e4673d661939728a1a294e52d4dbb9f0166c60302d48a7eca38e78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e3e7ff1a9ffc404ff9c37eb60fde5746be0eee64dd3cb7b7be167c5c11c72935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e7ff1a9ffc404ff9c37eb60fde5746be0eee64dd3cb7b7be167c5c11c72935->enter($__internal_e3e7ff1a9ffc404ff9c37eb60fde5746be0eee64dd3cb7b7be167c5c11c72935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227826178e4673d661939728a1a294e52d4dbb9f0166c60302d48a7eca38e78e->leave($__internal_227826178e4673d661939728a1a294e52d4dbb9f0166c60302d48a7eca38e78e_prof);

        
        $__internal_e3e7ff1a9ffc404ff9c37eb60fde5746be0eee64dd3cb7b7be167c5c11c72935->leave($__internal_e3e7ff1a9ffc404ff9c37eb60fde5746be0eee64dd3cb7b7be167c5c11c72935_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_770a6fb1b1f662da50d615afb835495bba1fa94efd5531c0b2e6cdbf1c02ab30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a6fb1b1f662da50d615afb835495bba1fa94efd5531c0b2e6cdbf1c02ab30->enter($__internal_770a6fb1b1f662da50d615afb835495bba1fa94efd5531c0b2e6cdbf1c02ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf4a6115446f5ad9421c7a756a2bbb45cf3a5ae83f9165f827230a5eae8581a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4a6115446f5ad9421c7a756a2bbb45cf3a5ae83f9165f827230a5eae8581a2->enter($__internal_bf4a6115446f5ad9421c7a756a2bbb45cf3a5ae83f9165f827230a5eae8581a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bf4a6115446f5ad9421c7a756a2bbb45cf3a5ae83f9165f827230a5eae8581a2->leave($__internal_bf4a6115446f5ad9421c7a756a2bbb45cf3a5ae83f9165f827230a5eae8581a2_prof);

        
        $__internal_770a6fb1b1f662da50d615afb835495bba1fa94efd5531c0b2e6cdbf1c02ab30->leave($__internal_770a6fb1b1f662da50d615afb835495bba1fa94efd5531c0b2e6cdbf1c02ab30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91a5342df32b5a504c0985b60ec2e077a89be553c6783109837e8a3527f575ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a5342df32b5a504c0985b60ec2e077a89be553c6783109837e8a3527f575ca->enter($__internal_91a5342df32b5a504c0985b60ec2e077a89be553c6783109837e8a3527f575ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5a73012623583c26412ea0b06cb2dd3955e0427681fc427d5961d7b5377b9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a73012623583c26412ea0b06cb2dd3955e0427681fc427d5961d7b5377b9e4->enter($__internal_d5a73012623583c26412ea0b06cb2dd3955e0427681fc427d5961d7b5377b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d5a73012623583c26412ea0b06cb2dd3955e0427681fc427d5961d7b5377b9e4->leave($__internal_d5a73012623583c26412ea0b06cb2dd3955e0427681fc427d5961d7b5377b9e4_prof);

        
        $__internal_91a5342df32b5a504c0985b60ec2e077a89be553c6783109837e8a3527f575ca->leave($__internal_91a5342df32b5a504c0985b60ec2e077a89be553c6783109837e8a3527f575ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6647aa3ed22f80607c1823daa2d102d9a39522df3622850c4ca370a2c680dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6647aa3ed22f80607c1823daa2d102d9a39522df3622850c4ca370a2c680dce->enter($__internal_e6647aa3ed22f80607c1823daa2d102d9a39522df3622850c4ca370a2c680dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f699501c8117711112e296349e4ff328d3636319be8e2586bb0dd3df53622ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f699501c8117711112e296349e4ff328d3636319be8e2586bb0dd3df53622ab4->enter($__internal_f699501c8117711112e296349e4ff328d3636319be8e2586bb0dd3df53622ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f699501c8117711112e296349e4ff328d3636319be8e2586bb0dd3df53622ab4->leave($__internal_f699501c8117711112e296349e4ff328d3636319be8e2586bb0dd3df53622ab4_prof);

        
        $__internal_e6647aa3ed22f80607c1823daa2d102d9a39522df3622850c4ca370a2c680dce->leave($__internal_e6647aa3ed22f80607c1823daa2d102d9a39522df3622850c4ca370a2c680dce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
