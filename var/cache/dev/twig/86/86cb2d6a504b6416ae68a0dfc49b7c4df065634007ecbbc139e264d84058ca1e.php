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
        $__internal_f7df604ce1d4f73708abdded176c36ddd72e6a07fac3889f16c5f6a00ab2bb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7df604ce1d4f73708abdded176c36ddd72e6a07fac3889f16c5f6a00ab2bb9e->enter($__internal_f7df604ce1d4f73708abdded176c36ddd72e6a07fac3889f16c5f6a00ab2bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3c342b6c2c4e186e94fbc3205dc20d7d973d3c94b861ce5afb0619f4dc5583b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c342b6c2c4e186e94fbc3205dc20d7d973d3c94b861ce5afb0619f4dc5583b6->enter($__internal_3c342b6c2c4e186e94fbc3205dc20d7d973d3c94b861ce5afb0619f4dc5583b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7df604ce1d4f73708abdded176c36ddd72e6a07fac3889f16c5f6a00ab2bb9e->leave($__internal_f7df604ce1d4f73708abdded176c36ddd72e6a07fac3889f16c5f6a00ab2bb9e_prof);

        
        $__internal_3c342b6c2c4e186e94fbc3205dc20d7d973d3c94b861ce5afb0619f4dc5583b6->leave($__internal_3c342b6c2c4e186e94fbc3205dc20d7d973d3c94b861ce5afb0619f4dc5583b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e758dc63e88fd6e967b1e5d63ad9372f84986ace3f146b2add2f17144923b92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e758dc63e88fd6e967b1e5d63ad9372f84986ace3f146b2add2f17144923b92a->enter($__internal_e758dc63e88fd6e967b1e5d63ad9372f84986ace3f146b2add2f17144923b92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c1cff055bf9b8ae6eaf40f9277df7c25456098ca91e4d1344ca49b3f7448e990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cff055bf9b8ae6eaf40f9277df7c25456098ca91e4d1344ca49b3f7448e990->enter($__internal_c1cff055bf9b8ae6eaf40f9277df7c25456098ca91e4d1344ca49b3f7448e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c1cff055bf9b8ae6eaf40f9277df7c25456098ca91e4d1344ca49b3f7448e990->leave($__internal_c1cff055bf9b8ae6eaf40f9277df7c25456098ca91e4d1344ca49b3f7448e990_prof);

        
        $__internal_e758dc63e88fd6e967b1e5d63ad9372f84986ace3f146b2add2f17144923b92a->leave($__internal_e758dc63e88fd6e967b1e5d63ad9372f84986ace3f146b2add2f17144923b92a_prof);

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
