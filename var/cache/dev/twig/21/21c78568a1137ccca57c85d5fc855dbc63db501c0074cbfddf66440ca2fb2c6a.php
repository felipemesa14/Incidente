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
        $__internal_3a3ed4a9239b61f71fd61e4dd20ef524edf94c547f2cd0a4b5de4dffee38c39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3ed4a9239b61f71fd61e4dd20ef524edf94c547f2cd0a4b5de4dffee38c39d->enter($__internal_3a3ed4a9239b61f71fd61e4dd20ef524edf94c547f2cd0a4b5de4dffee38c39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_aa06ba50017b097bcaee20de54521070fa22692e7bec461a62a01ed44643ca70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa06ba50017b097bcaee20de54521070fa22692e7bec461a62a01ed44643ca70->enter($__internal_aa06ba50017b097bcaee20de54521070fa22692e7bec461a62a01ed44643ca70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3ed4a9239b61f71fd61e4dd20ef524edf94c547f2cd0a4b5de4dffee38c39d->leave($__internal_3a3ed4a9239b61f71fd61e4dd20ef524edf94c547f2cd0a4b5de4dffee38c39d_prof);

        
        $__internal_aa06ba50017b097bcaee20de54521070fa22692e7bec461a62a01ed44643ca70->leave($__internal_aa06ba50017b097bcaee20de54521070fa22692e7bec461a62a01ed44643ca70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_035cb62ca01d17dc383707cf6f29f25c0f53f8fadb2d80d6991338b0b6ede2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035cb62ca01d17dc383707cf6f29f25c0f53f8fadb2d80d6991338b0b6ede2e2->enter($__internal_035cb62ca01d17dc383707cf6f29f25c0f53f8fadb2d80d6991338b0b6ede2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d197173416529a1d994bc8488f8cb88397dd555842683e4b92ae8769f9bde886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d197173416529a1d994bc8488f8cb88397dd555842683e4b92ae8769f9bde886->enter($__internal_d197173416529a1d994bc8488f8cb88397dd555842683e4b92ae8769f9bde886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d197173416529a1d994bc8488f8cb88397dd555842683e4b92ae8769f9bde886->leave($__internal_d197173416529a1d994bc8488f8cb88397dd555842683e4b92ae8769f9bde886_prof);

        
        $__internal_035cb62ca01d17dc383707cf6f29f25c0f53f8fadb2d80d6991338b0b6ede2e2->leave($__internal_035cb62ca01d17dc383707cf6f29f25c0f53f8fadb2d80d6991338b0b6ede2e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_515fee85d042876e61cdd46a8989f050ce5f65a0d3afb505251fa06046a98279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515fee85d042876e61cdd46a8989f050ce5f65a0d3afb505251fa06046a98279->enter($__internal_515fee85d042876e61cdd46a8989f050ce5f65a0d3afb505251fa06046a98279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0d9463ea466242a549d65d730ae565847aa1f77d710c93a9c9269b490966eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d9463ea466242a549d65d730ae565847aa1f77d710c93a9c9269b490966eb4->enter($__internal_d0d9463ea466242a549d65d730ae565847aa1f77d710c93a9c9269b490966eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d0d9463ea466242a549d65d730ae565847aa1f77d710c93a9c9269b490966eb4->leave($__internal_d0d9463ea466242a549d65d730ae565847aa1f77d710c93a9c9269b490966eb4_prof);

        
        $__internal_515fee85d042876e61cdd46a8989f050ce5f65a0d3afb505251fa06046a98279->leave($__internal_515fee85d042876e61cdd46a8989f050ce5f65a0d3afb505251fa06046a98279_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae58b5187ea0e0b2f159a8c1f6ed6bf80c8a4e004376aa9fe9817e30db3024b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae58b5187ea0e0b2f159a8c1f6ed6bf80c8a4e004376aa9fe9817e30db3024b1->enter($__internal_ae58b5187ea0e0b2f159a8c1f6ed6bf80c8a4e004376aa9fe9817e30db3024b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8037e6e87e4d5c27fcaa12dd33fcbc81ac6138c8abc59b0233f799f9025c53e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8037e6e87e4d5c27fcaa12dd33fcbc81ac6138c8abc59b0233f799f9025c53e6->enter($__internal_8037e6e87e4d5c27fcaa12dd33fcbc81ac6138c8abc59b0233f799f9025c53e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8037e6e87e4d5c27fcaa12dd33fcbc81ac6138c8abc59b0233f799f9025c53e6->leave($__internal_8037e6e87e4d5c27fcaa12dd33fcbc81ac6138c8abc59b0233f799f9025c53e6_prof);

        
        $__internal_ae58b5187ea0e0b2f159a8c1f6ed6bf80c8a4e004376aa9fe9817e30db3024b1->leave($__internal_ae58b5187ea0e0b2f159a8c1f6ed6bf80c8a4e004376aa9fe9817e30db3024b1_prof);

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
