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
        $__internal_e16b3ad63f37ec12d3540d51ff2f42974a7208860ce9ea44e3de6bcb47176e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16b3ad63f37ec12d3540d51ff2f42974a7208860ce9ea44e3de6bcb47176e0f->enter($__internal_e16b3ad63f37ec12d3540d51ff2f42974a7208860ce9ea44e3de6bcb47176e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9e410691c203b50591b387493c061b73fb49631d250a83995923e3e709bfa8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e410691c203b50591b387493c061b73fb49631d250a83995923e3e709bfa8b4->enter($__internal_9e410691c203b50591b387493c061b73fb49631d250a83995923e3e709bfa8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e16b3ad63f37ec12d3540d51ff2f42974a7208860ce9ea44e3de6bcb47176e0f->leave($__internal_e16b3ad63f37ec12d3540d51ff2f42974a7208860ce9ea44e3de6bcb47176e0f_prof);

        
        $__internal_9e410691c203b50591b387493c061b73fb49631d250a83995923e3e709bfa8b4->leave($__internal_9e410691c203b50591b387493c061b73fb49631d250a83995923e3e709bfa8b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f5171c976218db328272721ad5eb91c4c3311540481b252f412bb3ed53b098a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5171c976218db328272721ad5eb91c4c3311540481b252f412bb3ed53b098a->enter($__internal_0f5171c976218db328272721ad5eb91c4c3311540481b252f412bb3ed53b098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffda244a34d4f4fd503105b2f5aaf011f8521519c554cc5a21e8f60131a97a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffda244a34d4f4fd503105b2f5aaf011f8521519c554cc5a21e8f60131a97a97->enter($__internal_ffda244a34d4f4fd503105b2f5aaf011f8521519c554cc5a21e8f60131a97a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ffda244a34d4f4fd503105b2f5aaf011f8521519c554cc5a21e8f60131a97a97->leave($__internal_ffda244a34d4f4fd503105b2f5aaf011f8521519c554cc5a21e8f60131a97a97_prof);

        
        $__internal_0f5171c976218db328272721ad5eb91c4c3311540481b252f412bb3ed53b098a->leave($__internal_0f5171c976218db328272721ad5eb91c4c3311540481b252f412bb3ed53b098a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5f053c23650bdd995eef51f674b6d88960cb58b4579c772e4caa82585869aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f053c23650bdd995eef51f674b6d88960cb58b4579c772e4caa82585869aab->enter($__internal_a5f053c23650bdd995eef51f674b6d88960cb58b4579c772e4caa82585869aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09276b8db7cd9965c93f568dffc1f16323d7e8502e9b96666f75589bd9a94a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09276b8db7cd9965c93f568dffc1f16323d7e8502e9b96666f75589bd9a94a1f->enter($__internal_09276b8db7cd9965c93f568dffc1f16323d7e8502e9b96666f75589bd9a94a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_09276b8db7cd9965c93f568dffc1f16323d7e8502e9b96666f75589bd9a94a1f->leave($__internal_09276b8db7cd9965c93f568dffc1f16323d7e8502e9b96666f75589bd9a94a1f_prof);

        
        $__internal_a5f053c23650bdd995eef51f674b6d88960cb58b4579c772e4caa82585869aab->leave($__internal_a5f053c23650bdd995eef51f674b6d88960cb58b4579c772e4caa82585869aab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce8babdd689bacf28cf694ff6d2b417d95e4210fa89afce9000bddeb5271a68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8babdd689bacf28cf694ff6d2b417d95e4210fa89afce9000bddeb5271a68d->enter($__internal_ce8babdd689bacf28cf694ff6d2b417d95e4210fa89afce9000bddeb5271a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f53ceedc8c3efada4dc7703578a7d8adc34a4a9cb89dc553f3b7477c97fe168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f53ceedc8c3efada4dc7703578a7d8adc34a4a9cb89dc553f3b7477c97fe168->enter($__internal_3f53ceedc8c3efada4dc7703578a7d8adc34a4a9cb89dc553f3b7477c97fe168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3f53ceedc8c3efada4dc7703578a7d8adc34a4a9cb89dc553f3b7477c97fe168->leave($__internal_3f53ceedc8c3efada4dc7703578a7d8adc34a4a9cb89dc553f3b7477c97fe168_prof);

        
        $__internal_ce8babdd689bacf28cf694ff6d2b417d95e4210fa89afce9000bddeb5271a68d->leave($__internal_ce8babdd689bacf28cf694ff6d2b417d95e4210fa89afce9000bddeb5271a68d_prof);

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
