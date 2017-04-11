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
        $__internal_f6d17f99a445c3a1eae0452c7c8a3f315d85e4f4fbe9662213e0d616277c958f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d17f99a445c3a1eae0452c7c8a3f315d85e4f4fbe9662213e0d616277c958f->enter($__internal_f6d17f99a445c3a1eae0452c7c8a3f315d85e4f4fbe9662213e0d616277c958f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c6e06bd952b7dbee1abf0ce15564df77408b9337d5ec864135aeaad28fb50e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e06bd952b7dbee1abf0ce15564df77408b9337d5ec864135aeaad28fb50e1b->enter($__internal_c6e06bd952b7dbee1abf0ce15564df77408b9337d5ec864135aeaad28fb50e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d17f99a445c3a1eae0452c7c8a3f315d85e4f4fbe9662213e0d616277c958f->leave($__internal_f6d17f99a445c3a1eae0452c7c8a3f315d85e4f4fbe9662213e0d616277c958f_prof);

        
        $__internal_c6e06bd952b7dbee1abf0ce15564df77408b9337d5ec864135aeaad28fb50e1b->leave($__internal_c6e06bd952b7dbee1abf0ce15564df77408b9337d5ec864135aeaad28fb50e1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed80d7128b6dfbe0c272b7644be0769e94be4a28946c21d7985af7018ee1ad39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed80d7128b6dfbe0c272b7644be0769e94be4a28946c21d7985af7018ee1ad39->enter($__internal_ed80d7128b6dfbe0c272b7644be0769e94be4a28946c21d7985af7018ee1ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee6391f2761dda11c59f5cc2eeecd3716bc68350e14e85229877cbd6f26f2c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6391f2761dda11c59f5cc2eeecd3716bc68350e14e85229877cbd6f26f2c62->enter($__internal_ee6391f2761dda11c59f5cc2eeecd3716bc68350e14e85229877cbd6f26f2c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee6391f2761dda11c59f5cc2eeecd3716bc68350e14e85229877cbd6f26f2c62->leave($__internal_ee6391f2761dda11c59f5cc2eeecd3716bc68350e14e85229877cbd6f26f2c62_prof);

        
        $__internal_ed80d7128b6dfbe0c272b7644be0769e94be4a28946c21d7985af7018ee1ad39->leave($__internal_ed80d7128b6dfbe0c272b7644be0769e94be4a28946c21d7985af7018ee1ad39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_294dd5e2ce2393fbf94947d04923efe087f14ac7708a0307fe5c0e29d5631e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294dd5e2ce2393fbf94947d04923efe087f14ac7708a0307fe5c0e29d5631e0b->enter($__internal_294dd5e2ce2393fbf94947d04923efe087f14ac7708a0307fe5c0e29d5631e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5e8c30bffcbbf896ba282ec25f7e207dc95e5069f6719065ea11b87a4d96beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e8c30bffcbbf896ba282ec25f7e207dc95e5069f6719065ea11b87a4d96beb->enter($__internal_a5e8c30bffcbbf896ba282ec25f7e207dc95e5069f6719065ea11b87a4d96beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5e8c30bffcbbf896ba282ec25f7e207dc95e5069f6719065ea11b87a4d96beb->leave($__internal_a5e8c30bffcbbf896ba282ec25f7e207dc95e5069f6719065ea11b87a4d96beb_prof);

        
        $__internal_294dd5e2ce2393fbf94947d04923efe087f14ac7708a0307fe5c0e29d5631e0b->leave($__internal_294dd5e2ce2393fbf94947d04923efe087f14ac7708a0307fe5c0e29d5631e0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39894bd94dd67feb5d56c567fb6f2e80cddcb227fb51acee38dbbfb5e8cce9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39894bd94dd67feb5d56c567fb6f2e80cddcb227fb51acee38dbbfb5e8cce9df->enter($__internal_39894bd94dd67feb5d56c567fb6f2e80cddcb227fb51acee38dbbfb5e8cce9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38a349e952c29e1103819ffb0cef9e0c23895ce2f4f5b7d6f75ad173d48b32fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a349e952c29e1103819ffb0cef9e0c23895ce2f4f5b7d6f75ad173d48b32fd->enter($__internal_38a349e952c29e1103819ffb0cef9e0c23895ce2f4f5b7d6f75ad173d48b32fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_38a349e952c29e1103819ffb0cef9e0c23895ce2f4f5b7d6f75ad173d48b32fd->leave($__internal_38a349e952c29e1103819ffb0cef9e0c23895ce2f4f5b7d6f75ad173d48b32fd_prof);

        
        $__internal_39894bd94dd67feb5d56c567fb6f2e80cddcb227fb51acee38dbbfb5e8cce9df->leave($__internal_39894bd94dd67feb5d56c567fb6f2e80cddcb227fb51acee38dbbfb5e8cce9df_prof);

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
