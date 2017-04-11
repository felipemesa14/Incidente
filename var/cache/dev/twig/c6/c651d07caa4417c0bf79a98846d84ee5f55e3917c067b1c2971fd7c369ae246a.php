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
        $__internal_62284fdae0019aa1dbfad4dcbb2c59572092caf0dd7152d594d7bd8d995f7089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62284fdae0019aa1dbfad4dcbb2c59572092caf0dd7152d594d7bd8d995f7089->enter($__internal_62284fdae0019aa1dbfad4dcbb2c59572092caf0dd7152d594d7bd8d995f7089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7c85d9c520d4a8e323748451d066267a5e0ccbf9768c0d8ea155cfe0c08c9b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c85d9c520d4a8e323748451d066267a5e0ccbf9768c0d8ea155cfe0c08c9b12->enter($__internal_7c85d9c520d4a8e323748451d066267a5e0ccbf9768c0d8ea155cfe0c08c9b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_62284fdae0019aa1dbfad4dcbb2c59572092caf0dd7152d594d7bd8d995f7089->leave($__internal_62284fdae0019aa1dbfad4dcbb2c59572092caf0dd7152d594d7bd8d995f7089_prof);

        
        $__internal_7c85d9c520d4a8e323748451d066267a5e0ccbf9768c0d8ea155cfe0c08c9b12->leave($__internal_7c85d9c520d4a8e323748451d066267a5e0ccbf9768c0d8ea155cfe0c08c9b12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8c42c7a778c98dc2873ea88f69cf66de559535cc0109352077642562d81c2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c42c7a778c98dc2873ea88f69cf66de559535cc0109352077642562d81c2d4->enter($__internal_a8c42c7a778c98dc2873ea88f69cf66de559535cc0109352077642562d81c2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9463791d8537d0587260a2859884a1eefb668b00b8d2c7bff14a6e88f825c715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9463791d8537d0587260a2859884a1eefb668b00b8d2c7bff14a6e88f825c715->enter($__internal_9463791d8537d0587260a2859884a1eefb668b00b8d2c7bff14a6e88f825c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_9463791d8537d0587260a2859884a1eefb668b00b8d2c7bff14a6e88f825c715->leave($__internal_9463791d8537d0587260a2859884a1eefb668b00b8d2c7bff14a6e88f825c715_prof);

        
        $__internal_a8c42c7a778c98dc2873ea88f69cf66de559535cc0109352077642562d81c2d4->leave($__internal_a8c42c7a778c98dc2873ea88f69cf66de559535cc0109352077642562d81c2d4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7e219ed8f4a7ef11bee3b9ce20842c708f8307afff8addf96f3789f9b4ee9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e219ed8f4a7ef11bee3b9ce20842c708f8307afff8addf96f3789f9b4ee9c8->enter($__internal_f7e219ed8f4a7ef11bee3b9ce20842c708f8307afff8addf96f3789f9b4ee9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_853559145cbfbf29dd0e2a68ebd3a6fa4219d813b3f7d7d5114e588755f17b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853559145cbfbf29dd0e2a68ebd3a6fa4219d813b3f7d7d5114e588755f17b96->enter($__internal_853559145cbfbf29dd0e2a68ebd3a6fa4219d813b3f7d7d5114e588755f17b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_853559145cbfbf29dd0e2a68ebd3a6fa4219d813b3f7d7d5114e588755f17b96->leave($__internal_853559145cbfbf29dd0e2a68ebd3a6fa4219d813b3f7d7d5114e588755f17b96_prof);

        
        $__internal_f7e219ed8f4a7ef11bee3b9ce20842c708f8307afff8addf96f3789f9b4ee9c8->leave($__internal_f7e219ed8f4a7ef11bee3b9ce20842c708f8307afff8addf96f3789f9b4ee9c8_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_934420c9e43216bbe30d41d363ba6238073b6a993996176704873326e75f3f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934420c9e43216bbe30d41d363ba6238073b6a993996176704873326e75f3f7a->enter($__internal_934420c9e43216bbe30d41d363ba6238073b6a993996176704873326e75f3f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7395d142868eb0398b2ae2f49c86a39f4bcf894c8ea8109596e33d69373126e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7395d142868eb0398b2ae2f49c86a39f4bcf894c8ea8109596e33d69373126e3->enter($__internal_7395d142868eb0398b2ae2f49c86a39f4bcf894c8ea8109596e33d69373126e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_7395d142868eb0398b2ae2f49c86a39f4bcf894c8ea8109596e33d69373126e3->leave($__internal_7395d142868eb0398b2ae2f49c86a39f4bcf894c8ea8109596e33d69373126e3_prof);

        
        $__internal_934420c9e43216bbe30d41d363ba6238073b6a993996176704873326e75f3f7a->leave($__internal_934420c9e43216bbe30d41d363ba6238073b6a993996176704873326e75f3f7a_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c77431c9477a36d1eaa8866069a50e3b5b8baccef37db2f85e445969c05fedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c77431c9477a36d1eaa8866069a50e3b5b8baccef37db2f85e445969c05fedb->enter($__internal_9c77431c9477a36d1eaa8866069a50e3b5b8baccef37db2f85e445969c05fedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f59cfe756952e2d3de3fde671caf7ff04e9b1958df8063566ae4e0aec431165d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59cfe756952e2d3de3fde671caf7ff04e9b1958df8063566ae4e0aec431165d->enter($__internal_f59cfe756952e2d3de3fde671caf7ff04e9b1958df8063566ae4e0aec431165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    ";
        
        $__internal_f59cfe756952e2d3de3fde671caf7ff04e9b1958df8063566ae4e0aec431165d->leave($__internal_f59cfe756952e2d3de3fde671caf7ff04e9b1958df8063566ae4e0aec431165d_prof);

        
        $__internal_9c77431c9477a36d1eaa8866069a50e3b5b8baccef37db2f85e445969c05fedb->leave($__internal_9c77431c9477a36d1eaa8866069a50e3b5b8baccef37db2f85e445969c05fedb_prof);

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
