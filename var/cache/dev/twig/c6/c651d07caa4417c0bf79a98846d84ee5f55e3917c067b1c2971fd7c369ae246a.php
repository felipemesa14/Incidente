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
        $__internal_a5f9be81e94899866c0405f4a32edfbf0c3860301ac72e5053b2c0c821af946d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f9be81e94899866c0405f4a32edfbf0c3860301ac72e5053b2c0c821af946d->enter($__internal_a5f9be81e94899866c0405f4a32edfbf0c3860301ac72e5053b2c0c821af946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dd6dc9295563f4fc2c5326582c5b1fd40b3dc3df85c943a8f2aef4391d636411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6dc9295563f4fc2c5326582c5b1fd40b3dc3df85c943a8f2aef4391d636411->enter($__internal_dd6dc9295563f4fc2c5326582c5b1fd40b3dc3df85c943a8f2aef4391d636411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <a class=\"navbar-brand\" href=\"\">
                            Casos
                        </a>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\"><span class=\"caret\"></span>
                                </a>

                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
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
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
</html>
";
        
        $__internal_a5f9be81e94899866c0405f4a32edfbf0c3860301ac72e5053b2c0c821af946d->leave($__internal_a5f9be81e94899866c0405f4a32edfbf0c3860301ac72e5053b2c0c821af946d_prof);

        
        $__internal_dd6dc9295563f4fc2c5326582c5b1fd40b3dc3df85c943a8f2aef4391d636411->leave($__internal_dd6dc9295563f4fc2c5326582c5b1fd40b3dc3df85c943a8f2aef4391d636411_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d89066e250037d459c0db0f1af5d66b0ca727bfade1dcacfdd9c67561cc8870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d89066e250037d459c0db0f1af5d66b0ca727bfade1dcacfdd9c67561cc8870->enter($__internal_8d89066e250037d459c0db0f1af5d66b0ca727bfade1dcacfdd9c67561cc8870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4c3e2fec11752897d37f4227c942a7b318019d22ba2e81079ee3924600c0059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c3e2fec11752897d37f4227c942a7b318019d22ba2e81079ee3924600c0059->enter($__internal_e4c3e2fec11752897d37f4227c942a7b318019d22ba2e81079ee3924600c0059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_e4c3e2fec11752897d37f4227c942a7b318019d22ba2e81079ee3924600c0059->leave($__internal_e4c3e2fec11752897d37f4227c942a7b318019d22ba2e81079ee3924600c0059_prof);

        
        $__internal_8d89066e250037d459c0db0f1af5d66b0ca727bfade1dcacfdd9c67561cc8870->leave($__internal_8d89066e250037d459c0db0f1af5d66b0ca727bfade1dcacfdd9c67561cc8870_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_049de2f67563e9ef18d7ce4d96f55c7f8bf50e333c726f801599643036ab759a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049de2f67563e9ef18d7ce4d96f55c7f8bf50e333c726f801599643036ab759a->enter($__internal_049de2f67563e9ef18d7ce4d96f55c7f8bf50e333c726f801599643036ab759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c7a3f184da6e3c80b81b135c2deebb0708e2e052af761b0ccbcd5caeafd04aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a3f184da6e3c80b81b135c2deebb0708e2e052af761b0ccbcd5caeafd04aa5->enter($__internal_c7a3f184da6e3c80b81b135c2deebb0708e2e052af761b0ccbcd5caeafd04aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_c7a3f184da6e3c80b81b135c2deebb0708e2e052af761b0ccbcd5caeafd04aa5->leave($__internal_c7a3f184da6e3c80b81b135c2deebb0708e2e052af761b0ccbcd5caeafd04aa5_prof);

        
        $__internal_049de2f67563e9ef18d7ce4d96f55c7f8bf50e333c726f801599643036ab759a->leave($__internal_049de2f67563e9ef18d7ce4d96f55c7f8bf50e333c726f801599643036ab759a_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1be45dcd1cd28fe7d67e6d90ff49624f30899b030a3a9e7baa91f0d637a207f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1be45dcd1cd28fe7d67e6d90ff49624f30899b030a3a9e7baa91f0d637a207f->enter($__internal_f1be45dcd1cd28fe7d67e6d90ff49624f30899b030a3a9e7baa91f0d637a207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9ddd6cc25879793a39e3b9232b01892680f1d193968a35b3ad51805ca77af60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ddd6cc25879793a39e3b9232b01892680f1d193968a35b3ad51805ca77af60->enter($__internal_c9ddd6cc25879793a39e3b9232b01892680f1d193968a35b3ad51805ca77af60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9ddd6cc25879793a39e3b9232b01892680f1d193968a35b3ad51805ca77af60->leave($__internal_c9ddd6cc25879793a39e3b9232b01892680f1d193968a35b3ad51805ca77af60_prof);

        
        $__internal_f1be45dcd1cd28fe7d67e6d90ff49624f30899b030a3a9e7baa91f0d637a207f->leave($__internal_f1be45dcd1cd28fe7d67e6d90ff49624f30899b030a3a9e7baa91f0d637a207f_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d46b76c6805487c5fd6211fa4544fd3e314604b4919f0a38eee47e89c84734b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46b76c6805487c5fd6211fa4544fd3e314604b4919f0a38eee47e89c84734b9->enter($__internal_d46b76c6805487c5fd6211fa4544fd3e314604b4919f0a38eee47e89c84734b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5f68ab5c0290d01231e797364866d43f7aaa7fda3660f7c30cf225cd416c82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f68ab5c0290d01231e797364866d43f7aaa7fda3660f7c30cf225cd416c82d->enter($__internal_e5f68ab5c0290d01231e797364866d43f7aaa7fda3660f7c30cf225cd416c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script src=\"//cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\"></script>
    ";
        
        $__internal_e5f68ab5c0290d01231e797364866d43f7aaa7fda3660f7c30cf225cd416c82d->leave($__internal_e5f68ab5c0290d01231e797364866d43f7aaa7fda3660f7c30cf225cd416c82d_prof);

        
        $__internal_d46b76c6805487c5fd6211fa4544fd3e314604b4919f0a38eee47e89c84734b9->leave($__internal_d46b76c6805487c5fd6211fa4544fd3e314604b4919f0a38eee47e89c84734b9_prof);

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
        return array (  175 => 55,  166 => 54,  149 => 53,  133 => 7,  124 => 6,  106 => 5,  94 => 60,  91 => 54,  89 => 53,  75 => 42,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
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
                        <a class=\"navbar-brand\" href=\"\">
                            Casos
                        </a>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\"><span class=\"caret\"></span>
                                </a>

                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"{{ path('login') }}\">
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
    {% block body %}{% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('public/js/app.js') }}\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script src=\"//cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\"></script>
    {% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/html/incidente/app/Resources/views/base.html.twig");
    }
}
