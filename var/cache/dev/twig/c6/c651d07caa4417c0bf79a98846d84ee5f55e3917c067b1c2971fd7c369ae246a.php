<?php

/* base.html.twig */
class __TwigTemplate_5d62cafbbc88a9fa4cff75ce337df80f884869ab3374bb766fe546606c0b7288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fedaec1a4414ad4030e1f3e32014e9535038ec85a716c1bab36de0398d071987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedaec1a4414ad4030e1f3e32014e9535038ec85a716c1bab36de0398d071987->enter($__internal_fedaec1a4414ad4030e1f3e32014e9535038ec85a716c1bab36de0398d071987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a0ed7378b18a66984e2fca6763ce6280fa2fbb45c923cc8b463fb2e8bcd82b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ed7378b18a66984e2fca6763ce6280fa2fbb45c923cc8b463fb2e8bcd82b92->enter($__internal_a0ed7378b18a66984e2fca6763ce6280fa2fbb45c923cc8b463fb2e8bcd82b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"app\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#app-navbar-collapse\">
                            <span class=\"sr-only\">Toggle Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                            Incidencia</a>

                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "nombre", array()), "html", null, true);
        echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
                                            Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</html>
";
        
        $__internal_fedaec1a4414ad4030e1f3e32014e9535038ec85a716c1bab36de0398d071987->leave($__internal_fedaec1a4414ad4030e1f3e32014e9535038ec85a716c1bab36de0398d071987_prof);

        
        $__internal_a0ed7378b18a66984e2fca6763ce6280fa2fbb45c923cc8b463fb2e8bcd82b92->leave($__internal_a0ed7378b18a66984e2fca6763ce6280fa2fbb45c923cc8b463fb2e8bcd82b92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_daeac164bd8aa055b7ac167f9e296ecd5f0858801a58683586fd5ef1ab220567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daeac164bd8aa055b7ac167f9e296ecd5f0858801a58683586fd5ef1ab220567->enter($__internal_daeac164bd8aa055b7ac167f9e296ecd5f0858801a58683586fd5ef1ab220567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5de8c42ed8c70c3d0f55c8a5f08148c531edb32f11ce52ae20623fed4433a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5de8c42ed8c70c3d0f55c8a5f08148c531edb32f11ce52ae20623fed4433a5d->enter($__internal_f5de8c42ed8c70c3d0f55c8a5f08148c531edb32f11ce52ae20623fed4433a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_f5de8c42ed8c70c3d0f55c8a5f08148c531edb32f11ce52ae20623fed4433a5d->leave($__internal_f5de8c42ed8c70c3d0f55c8a5f08148c531edb32f11ce52ae20623fed4433a5d_prof);

        
        $__internal_daeac164bd8aa055b7ac167f9e296ecd5f0858801a58683586fd5ef1ab220567->leave($__internal_daeac164bd8aa055b7ac167f9e296ecd5f0858801a58683586fd5ef1ab220567_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cadbc64745bf367262b6f3d6b6334e74bd6fdca3886a3a9c7d60b4111c598946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadbc64745bf367262b6f3d6b6334e74bd6fdca3886a3a9c7d60b4111c598946->enter($__internal_cadbc64745bf367262b6f3d6b6334e74bd6fdca3886a3a9c7d60b4111c598946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b488ff17e75b2736f29c2a9bdfd33636b05be8038b682b83a56d235d9b5b08bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b488ff17e75b2736f29c2a9bdfd33636b05be8038b682b83a56d235d9b5b08bd->enter($__internal_b488ff17e75b2736f29c2a9bdfd33636b05be8038b682b83a56d235d9b5b08bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_b488ff17e75b2736f29c2a9bdfd33636b05be8038b682b83a56d235d9b5b08bd->leave($__internal_b488ff17e75b2736f29c2a9bdfd33636b05be8038b682b83a56d235d9b5b08bd_prof);

        
        $__internal_cadbc64745bf367262b6f3d6b6334e74bd6fdca3886a3a9c7d60b4111c598946->leave($__internal_cadbc64745bf367262b6f3d6b6334e74bd6fdca3886a3a9c7d60b4111c598946_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5713772ba3ee9d24173a91940b333f6eddc62679b7b8ec57df5ed6bdd13c9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5713772ba3ee9d24173a91940b333f6eddc62679b7b8ec57df5ed6bdd13c9d5->enter($__internal_f5713772ba3ee9d24173a91940b333f6eddc62679b7b8ec57df5ed6bdd13c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b6338fb8eb0c00a2e2a3465b2d1cb46d17828e8b03e28374cb4183b9cde336b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6338fb8eb0c00a2e2a3465b2d1cb46d17828e8b03e28374cb4183b9cde336b->enter($__internal_2b6338fb8eb0c00a2e2a3465b2d1cb46d17828e8b03e28374cb4183b9cde336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_2b6338fb8eb0c00a2e2a3465b2d1cb46d17828e8b03e28374cb4183b9cde336b->leave($__internal_2b6338fb8eb0c00a2e2a3465b2d1cb46d17828e8b03e28374cb4183b9cde336b_prof);

        
        $__internal_f5713772ba3ee9d24173a91940b333f6eddc62679b7b8ec57df5ed6bdd13c9d5->leave($__internal_f5713772ba3ee9d24173a91940b333f6eddc62679b7b8ec57df5ed6bdd13c9d5_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc3fc4dcc695b59c65384c71fc107dbeca26bcf6cbf7ba4260db2080ccba8d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3fc4dcc695b59c65384c71fc107dbeca26bcf6cbf7ba4260db2080ccba8d0a->enter($__internal_cc3fc4dcc695b59c65384c71fc107dbeca26bcf6cbf7ba4260db2080ccba8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_740c61b47de2e54ee7b5684bf312e9120d4ad01b9efca9befbda2317da0032e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740c61b47de2e54ee7b5684bf312e9120d4ad01b9efca9befbda2317da0032e4->enter($__internal_740c61b47de2e54ee7b5684bf312e9120d4ad01b9efca9befbda2317da0032e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    ";
        
        $__internal_740c61b47de2e54ee7b5684bf312e9120d4ad01b9efca9befbda2317da0032e4->leave($__internal_740c61b47de2e54ee7b5684bf312e9120d4ad01b9efca9befbda2317da0032e4_prof);

        
        $__internal_cc3fc4dcc695b59c65384c71fc107dbeca26bcf6cbf7ba4260db2080ccba8d0a->leave($__internal_cc3fc4dcc695b59c65384c71fc107dbeca26bcf6cbf7ba4260db2080ccba8d0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  176 => 58,  165 => 56,  156 => 55,  140 => 7,  131 => 6,  113 => 5,  102 => 62,  99 => 58,  97 => 55,  82 => 43,  74 => 38,  59 => 26,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Incidencias{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('public/css/app.css') }}\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"app\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#app-navbar-collapse\">
                            <span class=\"sr-only\">Toggle Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('caso_lista') }}\">
                            Incidencia</a>

                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\">
                                    {{ app.user.nombre }}
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"{{ path('logout') }}\">
                                            Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
    {% block body %}

    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('public/js/app.js') }}\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    {% endblock %}
</html>
", "base.html.twig", "/var/www/html/incidente/app/Resources/views/base.html.twig");
    }
}
