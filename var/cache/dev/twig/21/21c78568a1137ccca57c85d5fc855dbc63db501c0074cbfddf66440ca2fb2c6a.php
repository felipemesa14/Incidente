<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_b0902410c7eb228301b5bcbd8593dcc763172188318d3280a0f3cfaec55f71a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0902410c7eb228301b5bcbd8593dcc763172188318d3280a0f3cfaec55f71a6->enter($__internal_b0902410c7eb228301b5bcbd8593dcc763172188318d3280a0f3cfaec55f71a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c21f8c64b575f63d865493a763f145efb5d88f8ad43cc399fbfe281e4cd77e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21f8c64b575f63d865493a763f145efb5d88f8ad43cc399fbfe281e4cd77e73->enter($__internal_c21f8c64b575f63d865493a763f145efb5d88f8ad43cc399fbfe281e4cd77e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0902410c7eb228301b5bcbd8593dcc763172188318d3280a0f3cfaec55f71a6->leave($__internal_b0902410c7eb228301b5bcbd8593dcc763172188318d3280a0f3cfaec55f71a6_prof);

        
        $__internal_c21f8c64b575f63d865493a763f145efb5d88f8ad43cc399fbfe281e4cd77e73->leave($__internal_c21f8c64b575f63d865493a763f145efb5d88f8ad43cc399fbfe281e4cd77e73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_465bcac44642b49c48ec2d1d8a800c9ad8f1666cdc3198dd50e47a1038472c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465bcac44642b49c48ec2d1d8a800c9ad8f1666cdc3198dd50e47a1038472c3a->enter($__internal_465bcac44642b49c48ec2d1d8a800c9ad8f1666cdc3198dd50e47a1038472c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_420ca89bcedff83cec8928c4cf93c78340a911708fcc6893647d23d6bdf6f3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420ca89bcedff83cec8928c4cf93c78340a911708fcc6893647d23d6bdf6f3ea->enter($__internal_420ca89bcedff83cec8928c4cf93c78340a911708fcc6893647d23d6bdf6f3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_420ca89bcedff83cec8928c4cf93c78340a911708fcc6893647d23d6bdf6f3ea->leave($__internal_420ca89bcedff83cec8928c4cf93c78340a911708fcc6893647d23d6bdf6f3ea_prof);

        
        $__internal_465bcac44642b49c48ec2d1d8a800c9ad8f1666cdc3198dd50e47a1038472c3a->leave($__internal_465bcac44642b49c48ec2d1d8a800c9ad8f1666cdc3198dd50e47a1038472c3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d5f12cf12379733680c6ee7012ec4c70507e567c6cf4e41e121b10a26cddf300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f12cf12379733680c6ee7012ec4c70507e567c6cf4e41e121b10a26cddf300->enter($__internal_d5f12cf12379733680c6ee7012ec4c70507e567c6cf4e41e121b10a26cddf300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e40bdc2b25b0e24b8737f934d4227b0cd47f13aeb07d3968b3d40eb91c39193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e40bdc2b25b0e24b8737f934d4227b0cd47f13aeb07d3968b3d40eb91c39193->enter($__internal_3e40bdc2b25b0e24b8737f934d4227b0cd47f13aeb07d3968b3d40eb91c39193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3e40bdc2b25b0e24b8737f934d4227b0cd47f13aeb07d3968b3d40eb91c39193->leave($__internal_3e40bdc2b25b0e24b8737f934d4227b0cd47f13aeb07d3968b3d40eb91c39193_prof);

        
        $__internal_d5f12cf12379733680c6ee7012ec4c70507e567c6cf4e41e121b10a26cddf300->leave($__internal_d5f12cf12379733680c6ee7012ec4c70507e567c6cf4e41e121b10a26cddf300_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bec42b96a69eba0bef2ced07d0e254fb7190fc2c481fadfc609c92ce81c40c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec42b96a69eba0bef2ced07d0e254fb7190fc2c481fadfc609c92ce81c40c52->enter($__internal_bec42b96a69eba0bef2ced07d0e254fb7190fc2c481fadfc609c92ce81c40c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b99007671e725fe77120db470e540a73211a1e08349dda819a7dca37b14a943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99007671e725fe77120db470e540a73211a1e08349dda819a7dca37b14a943a->enter($__internal_b99007671e725fe77120db470e540a73211a1e08349dda819a7dca37b14a943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b99007671e725fe77120db470e540a73211a1e08349dda819a7dca37b14a943a->leave($__internal_b99007671e725fe77120db470e540a73211a1e08349dda819a7dca37b14a943a_prof);

        
        $__internal_bec42b96a69eba0bef2ced07d0e254fb7190fc2c481fadfc609c92ce81c40c52->leave($__internal_bec42b96a69eba0bef2ced07d0e254fb7190fc2c481fadfc609c92ce81c40c52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
