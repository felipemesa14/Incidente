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
        $__internal_18b37e99bd906c4af6f50339c19705a2337a4baf06121d55c0ff06e1ecefef26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b37e99bd906c4af6f50339c19705a2337a4baf06121d55c0ff06e1ecefef26->enter($__internal_18b37e99bd906c4af6f50339c19705a2337a4baf06121d55c0ff06e1ecefef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_302b8923e1a1bf6577ea8bdd261df10019820fd3828306a5d36c9ac09bb5bc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302b8923e1a1bf6577ea8bdd261df10019820fd3828306a5d36c9ac09bb5bc14->enter($__internal_302b8923e1a1bf6577ea8bdd261df10019820fd3828306a5d36c9ac09bb5bc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b37e99bd906c4af6f50339c19705a2337a4baf06121d55c0ff06e1ecefef26->leave($__internal_18b37e99bd906c4af6f50339c19705a2337a4baf06121d55c0ff06e1ecefef26_prof);

        
        $__internal_302b8923e1a1bf6577ea8bdd261df10019820fd3828306a5d36c9ac09bb5bc14->leave($__internal_302b8923e1a1bf6577ea8bdd261df10019820fd3828306a5d36c9ac09bb5bc14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5770e306a41ac0cb5d3f3d5596f1545f26f9e7c9ccbf0405c4b10eb711c0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5770e306a41ac0cb5d3f3d5596f1545f26f9e7c9ccbf0405c4b10eb711c0ca->enter($__internal_5a5770e306a41ac0cb5d3f3d5596f1545f26f9e7c9ccbf0405c4b10eb711c0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f0ca81fbc1903c0bb039c467c9f8d72b0038bafc8d3c49c027bef1306bc63cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0ca81fbc1903c0bb039c467c9f8d72b0038bafc8d3c49c027bef1306bc63cf->enter($__internal_5f0ca81fbc1903c0bb039c467c9f8d72b0038bafc8d3c49c027bef1306bc63cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f0ca81fbc1903c0bb039c467c9f8d72b0038bafc8d3c49c027bef1306bc63cf->leave($__internal_5f0ca81fbc1903c0bb039c467c9f8d72b0038bafc8d3c49c027bef1306bc63cf_prof);

        
        $__internal_5a5770e306a41ac0cb5d3f3d5596f1545f26f9e7c9ccbf0405c4b10eb711c0ca->leave($__internal_5a5770e306a41ac0cb5d3f3d5596f1545f26f9e7c9ccbf0405c4b10eb711c0ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fde6b204dded03f4d311ae0cf1bf0ab5361a3dc2f0d09634ee1845a8c47697df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde6b204dded03f4d311ae0cf1bf0ab5361a3dc2f0d09634ee1845a8c47697df->enter($__internal_fde6b204dded03f4d311ae0cf1bf0ab5361a3dc2f0d09634ee1845a8c47697df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7662adb2841242ff08d299555f1b33d9e6a56807ecfdb3d82a6b0068a9a43094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7662adb2841242ff08d299555f1b33d9e6a56807ecfdb3d82a6b0068a9a43094->enter($__internal_7662adb2841242ff08d299555f1b33d9e6a56807ecfdb3d82a6b0068a9a43094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7662adb2841242ff08d299555f1b33d9e6a56807ecfdb3d82a6b0068a9a43094->leave($__internal_7662adb2841242ff08d299555f1b33d9e6a56807ecfdb3d82a6b0068a9a43094_prof);

        
        $__internal_fde6b204dded03f4d311ae0cf1bf0ab5361a3dc2f0d09634ee1845a8c47697df->leave($__internal_fde6b204dded03f4d311ae0cf1bf0ab5361a3dc2f0d09634ee1845a8c47697df_prof);

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
