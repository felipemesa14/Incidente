<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e26efcbe1c826448e0c1aaecbfa1b3e2d894c90c41fa359da6d9141e7f631d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_509e31ccd7cb57542e2fab1863f75b6cc7c8bda790d5438c85ec231af921bf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509e31ccd7cb57542e2fab1863f75b6cc7c8bda790d5438c85ec231af921bf77->enter($__internal_509e31ccd7cb57542e2fab1863f75b6cc7c8bda790d5438c85ec231af921bf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_595a01cd52e7e8541ec7e60be015c7ff8a24c9cecdc79d6ecf14a096e1bb0a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595a01cd52e7e8541ec7e60be015c7ff8a24c9cecdc79d6ecf14a096e1bb0a44->enter($__internal_595a01cd52e7e8541ec7e60be015c7ff8a24c9cecdc79d6ecf14a096e1bb0a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509e31ccd7cb57542e2fab1863f75b6cc7c8bda790d5438c85ec231af921bf77->leave($__internal_509e31ccd7cb57542e2fab1863f75b6cc7c8bda790d5438c85ec231af921bf77_prof);

        
        $__internal_595a01cd52e7e8541ec7e60be015c7ff8a24c9cecdc79d6ecf14a096e1bb0a44->leave($__internal_595a01cd52e7e8541ec7e60be015c7ff8a24c9cecdc79d6ecf14a096e1bb0a44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1901a505ead4532940b2dd7af2ef2af3c71fa2db5e6e3b6f27ab4c2d60f46e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1901a505ead4532940b2dd7af2ef2af3c71fa2db5e6e3b6f27ab4c2d60f46e45->enter($__internal_1901a505ead4532940b2dd7af2ef2af3c71fa2db5e6e3b6f27ab4c2d60f46e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_946f9778b25a0bc7c36e3c9d2b306429dc9b0b8a1faf382e706f1d671c93454a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946f9778b25a0bc7c36e3c9d2b306429dc9b0b8a1faf382e706f1d671c93454a->enter($__internal_946f9778b25a0bc7c36e3c9d2b306429dc9b0b8a1faf382e706f1d671c93454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_946f9778b25a0bc7c36e3c9d2b306429dc9b0b8a1faf382e706f1d671c93454a->leave($__internal_946f9778b25a0bc7c36e3c9d2b306429dc9b0b8a1faf382e706f1d671c93454a_prof);

        
        $__internal_1901a505ead4532940b2dd7af2ef2af3c71fa2db5e6e3b6f27ab4c2d60f46e45->leave($__internal_1901a505ead4532940b2dd7af2ef2af3c71fa2db5e6e3b6f27ab4c2d60f46e45_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2b6f11ecf7673f81bdf94672bdd3fff46bfd92f94d12264aa2acbd981584b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b6f11ecf7673f81bdf94672bdd3fff46bfd92f94d12264aa2acbd981584b48->enter($__internal_a2b6f11ecf7673f81bdf94672bdd3fff46bfd92f94d12264aa2acbd981584b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e6f737089e32573e3eafda9dbcc5bb3751ab8083ebdfe9e8e34aab76f5f9fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6f737089e32573e3eafda9dbcc5bb3751ab8083ebdfe9e8e34aab76f5f9fc5->enter($__internal_4e6f737089e32573e3eafda9dbcc5bb3751ab8083ebdfe9e8e34aab76f5f9fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4e6f737089e32573e3eafda9dbcc5bb3751ab8083ebdfe9e8e34aab76f5f9fc5->leave($__internal_4e6f737089e32573e3eafda9dbcc5bb3751ab8083ebdfe9e8e34aab76f5f9fc5_prof);

        
        $__internal_a2b6f11ecf7673f81bdf94672bdd3fff46bfd92f94d12264aa2acbd981584b48->leave($__internal_a2b6f11ecf7673f81bdf94672bdd3fff46bfd92f94d12264aa2acbd981584b48_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1ea0a5b8c17b11f7e5814dfcc1cf4cf3bcc36b1daa1edc0a38f2f1f69cc7da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ea0a5b8c17b11f7e5814dfcc1cf4cf3bcc36b1daa1edc0a38f2f1f69cc7da7->enter($__internal_a1ea0a5b8c17b11f7e5814dfcc1cf4cf3bcc36b1daa1edc0a38f2f1f69cc7da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_911edc40948ed2e004d808fa99a2fe158ff5f93be9baa85c5336fb1c463c16c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911edc40948ed2e004d808fa99a2fe158ff5f93be9baa85c5336fb1c463c16c7->enter($__internal_911edc40948ed2e004d808fa99a2fe158ff5f93be9baa85c5336fb1c463c16c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_911edc40948ed2e004d808fa99a2fe158ff5f93be9baa85c5336fb1c463c16c7->leave($__internal_911edc40948ed2e004d808fa99a2fe158ff5f93be9baa85c5336fb1c463c16c7_prof);

        
        $__internal_a1ea0a5b8c17b11f7e5814dfcc1cf4cf3bcc36b1daa1edc0a38f2f1f69cc7da7->leave($__internal_a1ea0a5b8c17b11f7e5814dfcc1cf4cf3bcc36b1daa1edc0a38f2f1f69cc7da7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
