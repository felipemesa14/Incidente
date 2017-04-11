<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_903f34b43153651b1ba72dbf922bc200b2b476ca122bb880bc86666112de9166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903f34b43153651b1ba72dbf922bc200b2b476ca122bb880bc86666112de9166->enter($__internal_903f34b43153651b1ba72dbf922bc200b2b476ca122bb880bc86666112de9166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_76363404137c2622c49cd9176fb1699be7f478c10e630ee5127455a89e59067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76363404137c2622c49cd9176fb1699be7f478c10e630ee5127455a89e59067a->enter($__internal_76363404137c2622c49cd9176fb1699be7f478c10e630ee5127455a89e59067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_903f34b43153651b1ba72dbf922bc200b2b476ca122bb880bc86666112de9166->leave($__internal_903f34b43153651b1ba72dbf922bc200b2b476ca122bb880bc86666112de9166_prof);

        
        $__internal_76363404137c2622c49cd9176fb1699be7f478c10e630ee5127455a89e59067a->leave($__internal_76363404137c2622c49cd9176fb1699be7f478c10e630ee5127455a89e59067a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a20cf4d5e5b88b8350f1c1acd893c6ba2d66180889c8a3496144b8e7fd1cfc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20cf4d5e5b88b8350f1c1acd893c6ba2d66180889c8a3496144b8e7fd1cfc5e->enter($__internal_a20cf4d5e5b88b8350f1c1acd893c6ba2d66180889c8a3496144b8e7fd1cfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_746a979f41be45dbeb550d5bc68c3f52ed17fd5905b53db306d63e8e2151c050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746a979f41be45dbeb550d5bc68c3f52ed17fd5905b53db306d63e8e2151c050->enter($__internal_746a979f41be45dbeb550d5bc68c3f52ed17fd5905b53db306d63e8e2151c050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_746a979f41be45dbeb550d5bc68c3f52ed17fd5905b53db306d63e8e2151c050->leave($__internal_746a979f41be45dbeb550d5bc68c3f52ed17fd5905b53db306d63e8e2151c050_prof);

        
        $__internal_a20cf4d5e5b88b8350f1c1acd893c6ba2d66180889c8a3496144b8e7fd1cfc5e->leave($__internal_a20cf4d5e5b88b8350f1c1acd893c6ba2d66180889c8a3496144b8e7fd1cfc5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3eb960aa09434be65c307074a38868172a80dd678bf3d4c66361872da49ed1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3eb960aa09434be65c307074a38868172a80dd678bf3d4c66361872da49ed1f->enter($__internal_b3eb960aa09434be65c307074a38868172a80dd678bf3d4c66361872da49ed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_643f9ef14195c313ae6abb76a599067fd539942a578c8ec2666eaf172c877f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643f9ef14195c313ae6abb76a599067fd539942a578c8ec2666eaf172c877f02->enter($__internal_643f9ef14195c313ae6abb76a599067fd539942a578c8ec2666eaf172c877f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_643f9ef14195c313ae6abb76a599067fd539942a578c8ec2666eaf172c877f02->leave($__internal_643f9ef14195c313ae6abb76a599067fd539942a578c8ec2666eaf172c877f02_prof);

        
        $__internal_b3eb960aa09434be65c307074a38868172a80dd678bf3d4c66361872da49ed1f->leave($__internal_b3eb960aa09434be65c307074a38868172a80dd678bf3d4c66361872da49ed1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe92b5c8a374d40d24959c94e4111efa7a3dda2660dc7d8a64ee6f4afd913894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe92b5c8a374d40d24959c94e4111efa7a3dda2660dc7d8a64ee6f4afd913894->enter($__internal_fe92b5c8a374d40d24959c94e4111efa7a3dda2660dc7d8a64ee6f4afd913894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b14de1a5ff056b232d39638d2d2bf2fd8f20023f49ceabec40017befd1024076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14de1a5ff056b232d39638d2d2bf2fd8f20023f49ceabec40017befd1024076->enter($__internal_b14de1a5ff056b232d39638d2d2bf2fd8f20023f49ceabec40017befd1024076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b14de1a5ff056b232d39638d2d2bf2fd8f20023f49ceabec40017befd1024076->leave($__internal_b14de1a5ff056b232d39638d2d2bf2fd8f20023f49ceabec40017befd1024076_prof);

        
        $__internal_fe92b5c8a374d40d24959c94e4111efa7a3dda2660dc7d8a64ee6f4afd913894->leave($__internal_fe92b5c8a374d40d24959c94e4111efa7a3dda2660dc7d8a64ee6f4afd913894_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
