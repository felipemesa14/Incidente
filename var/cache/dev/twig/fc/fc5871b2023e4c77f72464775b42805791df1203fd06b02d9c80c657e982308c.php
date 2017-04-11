<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f2faed3949dcf5f65a5f55637457fb4e4f73d99cb9e7d010ecdc9b2140450a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_788fcc3f296d8acb756bd91452976ad01c5d728792f09308121f256a819a2488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788fcc3f296d8acb756bd91452976ad01c5d728792f09308121f256a819a2488->enter($__internal_788fcc3f296d8acb756bd91452976ad01c5d728792f09308121f256a819a2488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_802cd795f6a74ae52232dfc2f8552feec5dc6b11b68ad0322398cd8afe89a40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802cd795f6a74ae52232dfc2f8552feec5dc6b11b68ad0322398cd8afe89a40f->enter($__internal_802cd795f6a74ae52232dfc2f8552feec5dc6b11b68ad0322398cd8afe89a40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788fcc3f296d8acb756bd91452976ad01c5d728792f09308121f256a819a2488->leave($__internal_788fcc3f296d8acb756bd91452976ad01c5d728792f09308121f256a819a2488_prof);

        
        $__internal_802cd795f6a74ae52232dfc2f8552feec5dc6b11b68ad0322398cd8afe89a40f->leave($__internal_802cd795f6a74ae52232dfc2f8552feec5dc6b11b68ad0322398cd8afe89a40f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b68678edfd2c808c7f3e69113c42e52a35cd00199ea2327f533409467c09d6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68678edfd2c808c7f3e69113c42e52a35cd00199ea2327f533409467c09d6a7->enter($__internal_b68678edfd2c808c7f3e69113c42e52a35cd00199ea2327f533409467c09d6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f09ec927dd08cfeb141559fc251c5c512cc2a43253b982307447a102b34680f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f09ec927dd08cfeb141559fc251c5c512cc2a43253b982307447a102b34680f->enter($__internal_2f09ec927dd08cfeb141559fc251c5c512cc2a43253b982307447a102b34680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f09ec927dd08cfeb141559fc251c5c512cc2a43253b982307447a102b34680f->leave($__internal_2f09ec927dd08cfeb141559fc251c5c512cc2a43253b982307447a102b34680f_prof);

        
        $__internal_b68678edfd2c808c7f3e69113c42e52a35cd00199ea2327f533409467c09d6a7->leave($__internal_b68678edfd2c808c7f3e69113c42e52a35cd00199ea2327f533409467c09d6a7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc76920ff6c5ce7c4fa678410c3eea26884005e2b254a7907917034845baf5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc76920ff6c5ce7c4fa678410c3eea26884005e2b254a7907917034845baf5c4->enter($__internal_fc76920ff6c5ce7c4fa678410c3eea26884005e2b254a7907917034845baf5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5994ef4e431c9e8478241a52a057a6e0ab781f2f5a669c60bd1d9da3ae4761fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5994ef4e431c9e8478241a52a057a6e0ab781f2f5a669c60bd1d9da3ae4761fd->enter($__internal_5994ef4e431c9e8478241a52a057a6e0ab781f2f5a669c60bd1d9da3ae4761fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5994ef4e431c9e8478241a52a057a6e0ab781f2f5a669c60bd1d9da3ae4761fd->leave($__internal_5994ef4e431c9e8478241a52a057a6e0ab781f2f5a669c60bd1d9da3ae4761fd_prof);

        
        $__internal_fc76920ff6c5ce7c4fa678410c3eea26884005e2b254a7907917034845baf5c4->leave($__internal_fc76920ff6c5ce7c4fa678410c3eea26884005e2b254a7907917034845baf5c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
