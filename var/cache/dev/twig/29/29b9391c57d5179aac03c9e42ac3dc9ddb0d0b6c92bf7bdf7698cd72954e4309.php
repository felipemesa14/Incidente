<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e26efcbe1c826448e0c1aaecbfa1b3e2d894c90c41fa359da6d9141e7f631d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e5a258d60713a649347796c9997125ea5a05b5f571b22ddcc63478754d005397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a258d60713a649347796c9997125ea5a05b5f571b22ddcc63478754d005397->enter($__internal_e5a258d60713a649347796c9997125ea5a05b5f571b22ddcc63478754d005397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cb860c47ba8d613e53aff1a240c118535cb2ca20b26ddc3df22eb2f5a9abba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb860c47ba8d613e53aff1a240c118535cb2ca20b26ddc3df22eb2f5a9abba57->enter($__internal_cb860c47ba8d613e53aff1a240c118535cb2ca20b26ddc3df22eb2f5a9abba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a258d60713a649347796c9997125ea5a05b5f571b22ddcc63478754d005397->leave($__internal_e5a258d60713a649347796c9997125ea5a05b5f571b22ddcc63478754d005397_prof);

        
        $__internal_cb860c47ba8d613e53aff1a240c118535cb2ca20b26ddc3df22eb2f5a9abba57->leave($__internal_cb860c47ba8d613e53aff1a240c118535cb2ca20b26ddc3df22eb2f5a9abba57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_baab96b874b407b782351a8c1bd301fcaae84a240d785c1a903003237f81ed0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baab96b874b407b782351a8c1bd301fcaae84a240d785c1a903003237f81ed0e->enter($__internal_baab96b874b407b782351a8c1bd301fcaae84a240d785c1a903003237f81ed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c0c1b2172925112a5157de1220b5fc39756193e00809c09963a9bdf66bb4143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0c1b2172925112a5157de1220b5fc39756193e00809c09963a9bdf66bb4143->enter($__internal_9c0c1b2172925112a5157de1220b5fc39756193e00809c09963a9bdf66bb4143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9c0c1b2172925112a5157de1220b5fc39756193e00809c09963a9bdf66bb4143->leave($__internal_9c0c1b2172925112a5157de1220b5fc39756193e00809c09963a9bdf66bb4143_prof);

        
        $__internal_baab96b874b407b782351a8c1bd301fcaae84a240d785c1a903003237f81ed0e->leave($__internal_baab96b874b407b782351a8c1bd301fcaae84a240d785c1a903003237f81ed0e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_914763440051aea5f539fb401d8d1c578e15ed0ac3854140a30fb56ef05b4447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914763440051aea5f539fb401d8d1c578e15ed0ac3854140a30fb56ef05b4447->enter($__internal_914763440051aea5f539fb401d8d1c578e15ed0ac3854140a30fb56ef05b4447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4de54ab216201f568a4a7b00ae22710fd5664280a65cc87c23832d2121185341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de54ab216201f568a4a7b00ae22710fd5664280a65cc87c23832d2121185341->enter($__internal_4de54ab216201f568a4a7b00ae22710fd5664280a65cc87c23832d2121185341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4de54ab216201f568a4a7b00ae22710fd5664280a65cc87c23832d2121185341->leave($__internal_4de54ab216201f568a4a7b00ae22710fd5664280a65cc87c23832d2121185341_prof);

        
        $__internal_914763440051aea5f539fb401d8d1c578e15ed0ac3854140a30fb56ef05b4447->leave($__internal_914763440051aea5f539fb401d8d1c578e15ed0ac3854140a30fb56ef05b4447_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c6592f76c294a1217df5f30f89175d3c6b8945b9a64beb3d2e15575431642c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6592f76c294a1217df5f30f89175d3c6b8945b9a64beb3d2e15575431642c2->enter($__internal_4c6592f76c294a1217df5f30f89175d3c6b8945b9a64beb3d2e15575431642c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2a5d84d4b0efa933937ca4d9609aa3487796b28bfd32c820038141e3151221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5d84d4b0efa933937ca4d9609aa3487796b28bfd32c820038141e3151221b->enter($__internal_d2a5d84d4b0efa933937ca4d9609aa3487796b28bfd32c820038141e3151221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d2a5d84d4b0efa933937ca4d9609aa3487796b28bfd32c820038141e3151221b->leave($__internal_d2a5d84d4b0efa933937ca4d9609aa3487796b28bfd32c820038141e3151221b_prof);

        
        $__internal_4c6592f76c294a1217df5f30f89175d3c6b8945b9a64beb3d2e15575431642c2->leave($__internal_4c6592f76c294a1217df5f30f89175d3c6b8945b9a64beb3d2e15575431642c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
