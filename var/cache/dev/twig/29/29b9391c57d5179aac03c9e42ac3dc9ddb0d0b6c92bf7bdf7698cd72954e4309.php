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
        $__internal_5d120af0d81ecadbbf8d04be6225635dc9ba065956213ef2b7d48168d992f7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d120af0d81ecadbbf8d04be6225635dc9ba065956213ef2b7d48168d992f7a2->enter($__internal_5d120af0d81ecadbbf8d04be6225635dc9ba065956213ef2b7d48168d992f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_268841f4a02470bdd1ec5ebb032f6a8e8de3832919fcdf216de4a6c232796853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268841f4a02470bdd1ec5ebb032f6a8e8de3832919fcdf216de4a6c232796853->enter($__internal_268841f4a02470bdd1ec5ebb032f6a8e8de3832919fcdf216de4a6c232796853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d120af0d81ecadbbf8d04be6225635dc9ba065956213ef2b7d48168d992f7a2->leave($__internal_5d120af0d81ecadbbf8d04be6225635dc9ba065956213ef2b7d48168d992f7a2_prof);

        
        $__internal_268841f4a02470bdd1ec5ebb032f6a8e8de3832919fcdf216de4a6c232796853->leave($__internal_268841f4a02470bdd1ec5ebb032f6a8e8de3832919fcdf216de4a6c232796853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54c2f2cc9031b5f5804fd107233977c2625bfdd9ce31f1340c0d1cf5739f26eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c2f2cc9031b5f5804fd107233977c2625bfdd9ce31f1340c0d1cf5739f26eb->enter($__internal_54c2f2cc9031b5f5804fd107233977c2625bfdd9ce31f1340c0d1cf5739f26eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0d7802b84ea30b3fe11a943db7dbb18da1b7f1d02f19b18b8f7f460f1be5c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d7802b84ea30b3fe11a943db7dbb18da1b7f1d02f19b18b8f7f460f1be5c25->enter($__internal_c0d7802b84ea30b3fe11a943db7dbb18da1b7f1d02f19b18b8f7f460f1be5c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c0d7802b84ea30b3fe11a943db7dbb18da1b7f1d02f19b18b8f7f460f1be5c25->leave($__internal_c0d7802b84ea30b3fe11a943db7dbb18da1b7f1d02f19b18b8f7f460f1be5c25_prof);

        
        $__internal_54c2f2cc9031b5f5804fd107233977c2625bfdd9ce31f1340c0d1cf5739f26eb->leave($__internal_54c2f2cc9031b5f5804fd107233977c2625bfdd9ce31f1340c0d1cf5739f26eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe11ee64f770f7bdf00d105b914f186e1a3607f39bb142c77bedf2876d01af73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe11ee64f770f7bdf00d105b914f186e1a3607f39bb142c77bedf2876d01af73->enter($__internal_fe11ee64f770f7bdf00d105b914f186e1a3607f39bb142c77bedf2876d01af73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcf86a97fd6cab5a998506fd4491b1832dab8b03908603091e4d1d847f995f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf86a97fd6cab5a998506fd4491b1832dab8b03908603091e4d1d847f995f45->enter($__internal_dcf86a97fd6cab5a998506fd4491b1832dab8b03908603091e4d1d847f995f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_dcf86a97fd6cab5a998506fd4491b1832dab8b03908603091e4d1d847f995f45->leave($__internal_dcf86a97fd6cab5a998506fd4491b1832dab8b03908603091e4d1d847f995f45_prof);

        
        $__internal_fe11ee64f770f7bdf00d105b914f186e1a3607f39bb142c77bedf2876d01af73->leave($__internal_fe11ee64f770f7bdf00d105b914f186e1a3607f39bb142c77bedf2876d01af73_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_455d40739b2d23a3af7d6592f2200dfb1e4c54ba2739918f39c7f109dc764a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455d40739b2d23a3af7d6592f2200dfb1e4c54ba2739918f39c7f109dc764a5e->enter($__internal_455d40739b2d23a3af7d6592f2200dfb1e4c54ba2739918f39c7f109dc764a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d11526236d761d2d1980c6d78174d6769ce4cd1c3f098f8e057a6629a98c19e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11526236d761d2d1980c6d78174d6769ce4cd1c3f098f8e057a6629a98c19e8->enter($__internal_d11526236d761d2d1980c6d78174d6769ce4cd1c3f098f8e057a6629a98c19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d11526236d761d2d1980c6d78174d6769ce4cd1c3f098f8e057a6629a98c19e8->leave($__internal_d11526236d761d2d1980c6d78174d6769ce4cd1c3f098f8e057a6629a98c19e8_prof);

        
        $__internal_455d40739b2d23a3af7d6592f2200dfb1e4c54ba2739918f39c7f109dc764a5e->leave($__internal_455d40739b2d23a3af7d6592f2200dfb1e4c54ba2739918f39c7f109dc764a5e_prof);

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
