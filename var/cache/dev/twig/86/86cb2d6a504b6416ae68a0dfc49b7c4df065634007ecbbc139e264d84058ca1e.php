<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fc56cc03328e3d8df3c43e22f6ef798ff6630e720605144e70a6f675fb162816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dd02cf9a08527ae648c5e4d2056203502487d749d17183bc43ff1250e8ac1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd02cf9a08527ae648c5e4d2056203502487d749d17183bc43ff1250e8ac1ec->enter($__internal_0dd02cf9a08527ae648c5e4d2056203502487d749d17183bc43ff1250e8ac1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_49066531dfd0c07e247cb1d98456b6d85cf2b13542c4a4a78500c4e66811b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49066531dfd0c07e247cb1d98456b6d85cf2b13542c4a4a78500c4e66811b013->enter($__internal_49066531dfd0c07e247cb1d98456b6d85cf2b13542c4a4a78500c4e66811b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dd02cf9a08527ae648c5e4d2056203502487d749d17183bc43ff1250e8ac1ec->leave($__internal_0dd02cf9a08527ae648c5e4d2056203502487d749d17183bc43ff1250e8ac1ec_prof);

        
        $__internal_49066531dfd0c07e247cb1d98456b6d85cf2b13542c4a4a78500c4e66811b013->leave($__internal_49066531dfd0c07e247cb1d98456b6d85cf2b13542c4a4a78500c4e66811b013_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34606a20f81a497db1de5de8d4a88d2ede7d6f53a4150f8816dc01c9ad425a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34606a20f81a497db1de5de8d4a88d2ede7d6f53a4150f8816dc01c9ad425a54->enter($__internal_34606a20f81a497db1de5de8d4a88d2ede7d6f53a4150f8816dc01c9ad425a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac187ce938f867c8a483a07ca14013eba4fe1ad034e6f3717d9f9f52d3349343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac187ce938f867c8a483a07ca14013eba4fe1ad034e6f3717d9f9f52d3349343->enter($__internal_ac187ce938f867c8a483a07ca14013eba4fe1ad034e6f3717d9f9f52d3349343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ac187ce938f867c8a483a07ca14013eba4fe1ad034e6f3717d9f9f52d3349343->leave($__internal_ac187ce938f867c8a483a07ca14013eba4fe1ad034e6f3717d9f9f52d3349343_prof);

        
        $__internal_34606a20f81a497db1de5de8d4a88d2ede7d6f53a4150f8816dc01c9ad425a54->leave($__internal_34606a20f81a497db1de5de8d4a88d2ede7d6f53a4150f8816dc01c9ad425a54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
