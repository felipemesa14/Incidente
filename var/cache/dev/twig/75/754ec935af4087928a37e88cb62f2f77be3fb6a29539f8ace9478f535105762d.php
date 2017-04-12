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
        $__internal_a7e4896cae1fec9df77b6289fd9174a39c1abd59cee975509ecd26b09c9dc60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e4896cae1fec9df77b6289fd9174a39c1abd59cee975509ecd26b09c9dc60d->enter($__internal_a7e4896cae1fec9df77b6289fd9174a39c1abd59cee975509ecd26b09c9dc60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6147e008b3d369c028d6c38c0636cef7efcd594667fee16f148af66303d08a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6147e008b3d369c028d6c38c0636cef7efcd594667fee16f148af66303d08a6a->enter($__internal_6147e008b3d369c028d6c38c0636cef7efcd594667fee16f148af66303d08a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e4896cae1fec9df77b6289fd9174a39c1abd59cee975509ecd26b09c9dc60d->leave($__internal_a7e4896cae1fec9df77b6289fd9174a39c1abd59cee975509ecd26b09c9dc60d_prof);

        
        $__internal_6147e008b3d369c028d6c38c0636cef7efcd594667fee16f148af66303d08a6a->leave($__internal_6147e008b3d369c028d6c38c0636cef7efcd594667fee16f148af66303d08a6a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dbf55018c9bb42592d6cbf6c5021824e2f026e50ac02b43e3a6c314d0958d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbf55018c9bb42592d6cbf6c5021824e2f026e50ac02b43e3a6c314d0958d82->enter($__internal_9dbf55018c9bb42592d6cbf6c5021824e2f026e50ac02b43e3a6c314d0958d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62062e06eb107e2c7aa29b098a5257735e15b67a693032b9e8f3d9f29f730d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62062e06eb107e2c7aa29b098a5257735e15b67a693032b9e8f3d9f29f730d69->enter($__internal_62062e06eb107e2c7aa29b098a5257735e15b67a693032b9e8f3d9f29f730d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62062e06eb107e2c7aa29b098a5257735e15b67a693032b9e8f3d9f29f730d69->leave($__internal_62062e06eb107e2c7aa29b098a5257735e15b67a693032b9e8f3d9f29f730d69_prof);

        
        $__internal_9dbf55018c9bb42592d6cbf6c5021824e2f026e50ac02b43e3a6c314d0958d82->leave($__internal_9dbf55018c9bb42592d6cbf6c5021824e2f026e50ac02b43e3a6c314d0958d82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_630a79a1c63d1b1acc8c77587fb9af938f6ab91065152f27e11a01e5e96851a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630a79a1c63d1b1acc8c77587fb9af938f6ab91065152f27e11a01e5e96851a9->enter($__internal_630a79a1c63d1b1acc8c77587fb9af938f6ab91065152f27e11a01e5e96851a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee1f4ba6792b5930a53875b7c65ce99ddf45af637b3b4beb469fe3dccc43a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1f4ba6792b5930a53875b7c65ce99ddf45af637b3b4beb469fe3dccc43a907->enter($__internal_ee1f4ba6792b5930a53875b7c65ce99ddf45af637b3b4beb469fe3dccc43a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee1f4ba6792b5930a53875b7c65ce99ddf45af637b3b4beb469fe3dccc43a907->leave($__internal_ee1f4ba6792b5930a53875b7c65ce99ddf45af637b3b4beb469fe3dccc43a907_prof);

        
        $__internal_630a79a1c63d1b1acc8c77587fb9af938f6ab91065152f27e11a01e5e96851a9->leave($__internal_630a79a1c63d1b1acc8c77587fb9af938f6ab91065152f27e11a01e5e96851a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c114c8281004b92235122af1d0830014958b254b9375bbe46a1e7ab8509c37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c114c8281004b92235122af1d0830014958b254b9375bbe46a1e7ab8509c37d->enter($__internal_4c114c8281004b92235122af1d0830014958b254b9375bbe46a1e7ab8509c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c041f0ccc3fa4a75b5ab2eb68d5a44251b167a5a4970097bd685a1c04f96177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c041f0ccc3fa4a75b5ab2eb68d5a44251b167a5a4970097bd685a1c04f96177f->enter($__internal_c041f0ccc3fa4a75b5ab2eb68d5a44251b167a5a4970097bd685a1c04f96177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c041f0ccc3fa4a75b5ab2eb68d5a44251b167a5a4970097bd685a1c04f96177f->leave($__internal_c041f0ccc3fa4a75b5ab2eb68d5a44251b167a5a4970097bd685a1c04f96177f_prof);

        
        $__internal_4c114c8281004b92235122af1d0830014958b254b9375bbe46a1e7ab8509c37d->leave($__internal_4c114c8281004b92235122af1d0830014958b254b9375bbe46a1e7ab8509c37d_prof);

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
