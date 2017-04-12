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
        $__internal_e602f0444ca5212d4ecc0040a8030fb823ad210549c3f4a3b91ab0384640545b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e602f0444ca5212d4ecc0040a8030fb823ad210549c3f4a3b91ab0384640545b->enter($__internal_e602f0444ca5212d4ecc0040a8030fb823ad210549c3f4a3b91ab0384640545b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_57486ad3abd985038cc522fb16962bf4ac58cecb11dca22f0b44015b1292ba1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57486ad3abd985038cc522fb16962bf4ac58cecb11dca22f0b44015b1292ba1f->enter($__internal_57486ad3abd985038cc522fb16962bf4ac58cecb11dca22f0b44015b1292ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e602f0444ca5212d4ecc0040a8030fb823ad210549c3f4a3b91ab0384640545b->leave($__internal_e602f0444ca5212d4ecc0040a8030fb823ad210549c3f4a3b91ab0384640545b_prof);

        
        $__internal_57486ad3abd985038cc522fb16962bf4ac58cecb11dca22f0b44015b1292ba1f->leave($__internal_57486ad3abd985038cc522fb16962bf4ac58cecb11dca22f0b44015b1292ba1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18c8746d23abdb1ebab11b9e9e1a5f715d32cb36de23590e2b8b45a81fb5ab41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c8746d23abdb1ebab11b9e9e1a5f715d32cb36de23590e2b8b45a81fb5ab41->enter($__internal_18c8746d23abdb1ebab11b9e9e1a5f715d32cb36de23590e2b8b45a81fb5ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0b604a8b5e44396662c1d8b78cea5b3ea0167d9d8ef2e2fa4be5f9cbac47795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b604a8b5e44396662c1d8b78cea5b3ea0167d9d8ef2e2fa4be5f9cbac47795->enter($__internal_d0b604a8b5e44396662c1d8b78cea5b3ea0167d9d8ef2e2fa4be5f9cbac47795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d0b604a8b5e44396662c1d8b78cea5b3ea0167d9d8ef2e2fa4be5f9cbac47795->leave($__internal_d0b604a8b5e44396662c1d8b78cea5b3ea0167d9d8ef2e2fa4be5f9cbac47795_prof);

        
        $__internal_18c8746d23abdb1ebab11b9e9e1a5f715d32cb36de23590e2b8b45a81fb5ab41->leave($__internal_18c8746d23abdb1ebab11b9e9e1a5f715d32cb36de23590e2b8b45a81fb5ab41_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_129b761819648a767a11d34bbe168251f05d0e8d5238ab26045d6dce69697ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129b761819648a767a11d34bbe168251f05d0e8d5238ab26045d6dce69697ec5->enter($__internal_129b761819648a767a11d34bbe168251f05d0e8d5238ab26045d6dce69697ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc68c15f58ece35e66a06227cb5ce8af059c055189302952d4a0cb6937218ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc68c15f58ece35e66a06227cb5ce8af059c055189302952d4a0cb6937218ef2->enter($__internal_cc68c15f58ece35e66a06227cb5ce8af059c055189302952d4a0cb6937218ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cc68c15f58ece35e66a06227cb5ce8af059c055189302952d4a0cb6937218ef2->leave($__internal_cc68c15f58ece35e66a06227cb5ce8af059c055189302952d4a0cb6937218ef2_prof);

        
        $__internal_129b761819648a767a11d34bbe168251f05d0e8d5238ab26045d6dce69697ec5->leave($__internal_129b761819648a767a11d34bbe168251f05d0e8d5238ab26045d6dce69697ec5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e75719bab260da2e256f06154443aed8f829978663dba8437e56ff4fc478bbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75719bab260da2e256f06154443aed8f829978663dba8437e56ff4fc478bbb4->enter($__internal_e75719bab260da2e256f06154443aed8f829978663dba8437e56ff4fc478bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_caf8ff7a0edcad42bfe861369380bbfb0f6bff8313d1614bad9f589400ca5993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf8ff7a0edcad42bfe861369380bbfb0f6bff8313d1614bad9f589400ca5993->enter($__internal_caf8ff7a0edcad42bfe861369380bbfb0f6bff8313d1614bad9f589400ca5993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_caf8ff7a0edcad42bfe861369380bbfb0f6bff8313d1614bad9f589400ca5993->leave($__internal_caf8ff7a0edcad42bfe861369380bbfb0f6bff8313d1614bad9f589400ca5993_prof);

        
        $__internal_e75719bab260da2e256f06154443aed8f829978663dba8437e56ff4fc478bbb4->leave($__internal_e75719bab260da2e256f06154443aed8f829978663dba8437e56ff4fc478bbb4_prof);

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
