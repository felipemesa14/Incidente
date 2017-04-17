<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_fc56cc03328e3d8df3c43e22f6ef798ff6630e720605144e70a6f675fb162816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_ff70d57042662297a930e349f8a7a26a5429b296db656e4195ebcdcd0ed0d6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff70d57042662297a930e349f8a7a26a5429b296db656e4195ebcdcd0ed0d6e9->enter($__internal_ff70d57042662297a930e349f8a7a26a5429b296db656e4195ebcdcd0ed0d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_9704b6dbe22e11904d4173b3ca7b2992bc228bea523cb565219e8d8de5d6140f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9704b6dbe22e11904d4173b3ca7b2992bc228bea523cb565219e8d8de5d6140f->enter($__internal_9704b6dbe22e11904d4173b3ca7b2992bc228bea523cb565219e8d8de5d6140f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff70d57042662297a930e349f8a7a26a5429b296db656e4195ebcdcd0ed0d6e9->leave($__internal_ff70d57042662297a930e349f8a7a26a5429b296db656e4195ebcdcd0ed0d6e9_prof);

        
        $__internal_9704b6dbe22e11904d4173b3ca7b2992bc228bea523cb565219e8d8de5d6140f->leave($__internal_9704b6dbe22e11904d4173b3ca7b2992bc228bea523cb565219e8d8de5d6140f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38fe4d79dc9fde8fbc5afadaaddb17e97f2a5804f76497a9a4118182ed885033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fe4d79dc9fde8fbc5afadaaddb17e97f2a5804f76497a9a4118182ed885033->enter($__internal_38fe4d79dc9fde8fbc5afadaaddb17e97f2a5804f76497a9a4118182ed885033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ceba0c8e443a4fdfb60f12214fa30980d7cc558d243c18048d087501a6173ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceba0c8e443a4fdfb60f12214fa30980d7cc558d243c18048d087501a6173ce0->enter($__internal_ceba0c8e443a4fdfb60f12214fa30980d7cc558d243c18048d087501a6173ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ceba0c8e443a4fdfb60f12214fa30980d7cc558d243c18048d087501a6173ce0->leave($__internal_ceba0c8e443a4fdfb60f12214fa30980d7cc558d243c18048d087501a6173ce0_prof);

        
        $__internal_38fe4d79dc9fde8fbc5afadaaddb17e97f2a5804f76497a9a4118182ed885033->leave($__internal_38fe4d79dc9fde8fbc5afadaaddb17e97f2a5804f76497a9a4118182ed885033_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
