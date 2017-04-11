<?php

/* base.html.twig */
class __TwigTemplate_1af31290166fec2c4acf04f390fe5a6fb4dd1660eab8d071e87138023f2d46d8 extends Twig_Template
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
        $__internal_38801d2ac740f0da0806c1fd3764b418172c80c2f4d3451d336c19fc57b89c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38801d2ac740f0da0806c1fd3764b418172c80c2f4d3451d336c19fc57b89c8f->enter($__internal_38801d2ac740f0da0806c1fd3764b418172c80c2f4d3451d336c19fc57b89c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_38801d2ac740f0da0806c1fd3764b418172c80c2f4d3451d336c19fc57b89c8f->leave($__internal_38801d2ac740f0da0806c1fd3764b418172c80c2f4d3451d336c19fc57b89c8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2041c6a70af8053e342d1acb765db467d68da20eb8e25da7a27f7bca2ce70e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2041c6a70af8053e342d1acb765db467d68da20eb8e25da7a27f7bca2ce70e6->enter($__internal_d2041c6a70af8053e342d1acb765db467d68da20eb8e25da7a27f7bca2ce70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_d2041c6a70af8053e342d1acb765db467d68da20eb8e25da7a27f7bca2ce70e6->leave($__internal_d2041c6a70af8053e342d1acb765db467d68da20eb8e25da7a27f7bca2ce70e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f29d157a629711cfb300826695a22e567fff123568653d14466db1e5ad98b396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29d157a629711cfb300826695a22e567fff123568653d14466db1e5ad98b396->enter($__internal_f29d157a629711cfb300826695a22e567fff123568653d14466db1e5ad98b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_f29d157a629711cfb300826695a22e567fff123568653d14466db1e5ad98b396->leave($__internal_f29d157a629711cfb300826695a22e567fff123568653d14466db1e5ad98b396_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_82339cff6bd3763a9312ca2d08e90daa3df9da5084743f4692456ca41d5e4994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82339cff6bd3763a9312ca2d08e90daa3df9da5084743f4692456ca41d5e4994->enter($__internal_82339cff6bd3763a9312ca2d08e90daa3df9da5084743f4692456ca41d5e4994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_82339cff6bd3763a9312ca2d08e90daa3df9da5084743f4692456ca41d5e4994->leave($__internal_82339cff6bd3763a9312ca2d08e90daa3df9da5084743f4692456ca41d5e4994_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c181986aea920be3bed603881dc0192d7e8156c1faad8883526efdd31d9302bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c181986aea920be3bed603881dc0192d7e8156c1faad8883526efdd31d9302bb->enter($__internal_c181986aea920be3bed603881dc0192d7e8156c1faad8883526efdd31d9302bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    ";
        
        $__internal_c181986aea920be3bed603881dc0192d7e8156c1faad8883526efdd31d9302bb->leave($__internal_c181986aea920be3bed603881dc0192d7e8156c1faad8883526efdd31d9302bb_prof);

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
        return array (  158 => 59,  152 => 58,  144 => 56,  138 => 55,  125 => 7,  119 => 6,  107 => 5,  99 => 62,  96 => 58,  94 => 55,  79 => 43,  71 => 38,  56 => 26,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
