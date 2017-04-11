<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b7d43a40824c52c1fee37adbb2eec784a27ddbf71a3ea15a83460398df480c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbf2ce0a70021ab8c47d4175c7e44aabb7825367d9d92b95aa0e1784d702dad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf2ce0a70021ab8c47d4175c7e44aabb7825367d9d92b95aa0e1784d702dad7->enter($__internal_fbf2ce0a70021ab8c47d4175c7e44aabb7825367d9d92b95aa0e1784d702dad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c9eef2be3c2eb530745b8eb55fd4aaf31e2a6584ad11acde70e36fdb6bd1705e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9eef2be3c2eb530745b8eb55fd4aaf31e2a6584ad11acde70e36fdb6bd1705e->enter($__internal_c9eef2be3c2eb530745b8eb55fd4aaf31e2a6584ad11acde70e36fdb6bd1705e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf2ce0a70021ab8c47d4175c7e44aabb7825367d9d92b95aa0e1784d702dad7->leave($__internal_fbf2ce0a70021ab8c47d4175c7e44aabb7825367d9d92b95aa0e1784d702dad7_prof);

        
        $__internal_c9eef2be3c2eb530745b8eb55fd4aaf31e2a6584ad11acde70e36fdb6bd1705e->leave($__internal_c9eef2be3c2eb530745b8eb55fd4aaf31e2a6584ad11acde70e36fdb6bd1705e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bb1a588f5c0a6da45bdfcb82245de79bb9861cbb116086599ae378861c9c771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb1a588f5c0a6da45bdfcb82245de79bb9861cbb116086599ae378861c9c771->enter($__internal_1bb1a588f5c0a6da45bdfcb82245de79bb9861cbb116086599ae378861c9c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de91919068e479ad21fe4c641601d790dfc0fedd5e466a50cb8c14241332bb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de91919068e479ad21fe4c641601d790dfc0fedd5e466a50cb8c14241332bb24->enter($__internal_de91919068e479ad21fe4c641601d790dfc0fedd5e466a50cb8c14241332bb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_de91919068e479ad21fe4c641601d790dfc0fedd5e466a50cb8c14241332bb24->leave($__internal_de91919068e479ad21fe4c641601d790dfc0fedd5e466a50cb8c14241332bb24_prof);

        
        $__internal_1bb1a588f5c0a6da45bdfcb82245de79bb9861cbb116086599ae378861c9c771->leave($__internal_1bb1a588f5c0a6da45bdfcb82245de79bb9861cbb116086599ae378861c9c771_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_785b73737aec7d10968319c68119b7b2c9708a027ad976c66f1a85cabe724056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785b73737aec7d10968319c68119b7b2c9708a027ad976c66f1a85cabe724056->enter($__internal_785b73737aec7d10968319c68119b7b2c9708a027ad976c66f1a85cabe724056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e7fd76e69e1615cb7c7d5fc12aa02722ec3daab859132c4b5812fcac74d31ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7fd76e69e1615cb7c7d5fc12aa02722ec3daab859132c4b5812fcac74d31ed->enter($__internal_1e7fd76e69e1615cb7c7d5fc12aa02722ec3daab859132c4b5812fcac74d31ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_1e7fd76e69e1615cb7c7d5fc12aa02722ec3daab859132c4b5812fcac74d31ed->leave($__internal_1e7fd76e69e1615cb7c7d5fc12aa02722ec3daab859132c4b5812fcac74d31ed_prof);

        
        $__internal_785b73737aec7d10968319c68119b7b2c9708a027ad976c66f1a85cabe724056->leave($__internal_785b73737aec7d10968319c68119b7b2c9708a027ad976c66f1a85cabe724056_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
