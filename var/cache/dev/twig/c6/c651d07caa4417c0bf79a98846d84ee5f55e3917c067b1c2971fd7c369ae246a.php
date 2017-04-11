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
        $__internal_8a3616f410d92a3396978d80b449261b9cb068868101b35c05914b99867ea3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3616f410d92a3396978d80b449261b9cb068868101b35c05914b99867ea3df->enter($__internal_8a3616f410d92a3396978d80b449261b9cb068868101b35c05914b99867ea3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6e1a20d92f8585d8af407ba871ee65ebad33f9cee15719303502db65fd915a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1a20d92f8585d8af407ba871ee65ebad33f9cee15719303502db65fd915a6c->enter($__internal_6e1a20d92f8585d8af407ba871ee65ebad33f9cee15719303502db65fd915a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8a3616f410d92a3396978d80b449261b9cb068868101b35c05914b99867ea3df->leave($__internal_8a3616f410d92a3396978d80b449261b9cb068868101b35c05914b99867ea3df_prof);

        
        $__internal_6e1a20d92f8585d8af407ba871ee65ebad33f9cee15719303502db65fd915a6c->leave($__internal_6e1a20d92f8585d8af407ba871ee65ebad33f9cee15719303502db65fd915a6c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59b2f2b36f0c3ed1fb86707a245c7768615a76cf44688d5410cf69f60f763c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b2f2b36f0c3ed1fb86707a245c7768615a76cf44688d5410cf69f60f763c2d->enter($__internal_59b2f2b36f0c3ed1fb86707a245c7768615a76cf44688d5410cf69f60f763c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deebd7cb07be9a2d469af53e34b85854e37a5abc8343e0f56cc2c70651ecde5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deebd7cb07be9a2d469af53e34b85854e37a5abc8343e0f56cc2c70651ecde5f->enter($__internal_deebd7cb07be9a2d469af53e34b85854e37a5abc8343e0f56cc2c70651ecde5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_deebd7cb07be9a2d469af53e34b85854e37a5abc8343e0f56cc2c70651ecde5f->leave($__internal_deebd7cb07be9a2d469af53e34b85854e37a5abc8343e0f56cc2c70651ecde5f_prof);

        
        $__internal_59b2f2b36f0c3ed1fb86707a245c7768615a76cf44688d5410cf69f60f763c2d->leave($__internal_59b2f2b36f0c3ed1fb86707a245c7768615a76cf44688d5410cf69f60f763c2d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff5bb12e91e26d088a18226cbe4c23ed275be3c210abcbf48b6e50062d252c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5bb12e91e26d088a18226cbe4c23ed275be3c210abcbf48b6e50062d252c00->enter($__internal_ff5bb12e91e26d088a18226cbe4c23ed275be3c210abcbf48b6e50062d252c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5be2e8df002f461babbf12ee12c2358936404c72ab68df2c3f2e6835236ea99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be2e8df002f461babbf12ee12c2358936404c72ab68df2c3f2e6835236ea99e->enter($__internal_5be2e8df002f461babbf12ee12c2358936404c72ab68df2c3f2e6835236ea99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_5be2e8df002f461babbf12ee12c2358936404c72ab68df2c3f2e6835236ea99e->leave($__internal_5be2e8df002f461babbf12ee12c2358936404c72ab68df2c3f2e6835236ea99e_prof);

        
        $__internal_ff5bb12e91e26d088a18226cbe4c23ed275be3c210abcbf48b6e50062d252c00->leave($__internal_ff5bb12e91e26d088a18226cbe4c23ed275be3c210abcbf48b6e50062d252c00_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2d2be2986b22533f6198e613ed00d62b50fa3254e3800e0b605967fc36bd82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d2be2986b22533f6198e613ed00d62b50fa3254e3800e0b605967fc36bd82a->enter($__internal_c2d2be2986b22533f6198e613ed00d62b50fa3254e3800e0b605967fc36bd82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc4da45492a19c889e30b014e8cb5ac554d03b24859c5a69fcbd9dc48ec74079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4da45492a19c889e30b014e8cb5ac554d03b24859c5a69fcbd9dc48ec74079->enter($__internal_dc4da45492a19c889e30b014e8cb5ac554d03b24859c5a69fcbd9dc48ec74079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_dc4da45492a19c889e30b014e8cb5ac554d03b24859c5a69fcbd9dc48ec74079->leave($__internal_dc4da45492a19c889e30b014e8cb5ac554d03b24859c5a69fcbd9dc48ec74079_prof);

        
        $__internal_c2d2be2986b22533f6198e613ed00d62b50fa3254e3800e0b605967fc36bd82a->leave($__internal_c2d2be2986b22533f6198e613ed00d62b50fa3254e3800e0b605967fc36bd82a_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f28e1a716a27c10f5f42cff53fbed9e9c3f620ad5491e26ed9614a82f92d8597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28e1a716a27c10f5f42cff53fbed9e9c3f620ad5491e26ed9614a82f92d8597->enter($__internal_f28e1a716a27c10f5f42cff53fbed9e9c3f620ad5491e26ed9614a82f92d8597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97bf6a9e476e6d85a5e920da3f3aa57666dcca0b6da40a8f9d68f35bc84184a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bf6a9e476e6d85a5e920da3f3aa57666dcca0b6da40a8f9d68f35bc84184a2->enter($__internal_97bf6a9e476e6d85a5e920da3f3aa57666dcca0b6da40a8f9d68f35bc84184a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    ";
        
        $__internal_97bf6a9e476e6d85a5e920da3f3aa57666dcca0b6da40a8f9d68f35bc84184a2->leave($__internal_97bf6a9e476e6d85a5e920da3f3aa57666dcca0b6da40a8f9d68f35bc84184a2_prof);

        
        $__internal_f28e1a716a27c10f5f42cff53fbed9e9c3f620ad5491e26ed9614a82f92d8597->leave($__internal_f28e1a716a27c10f5f42cff53fbed9e9c3f620ad5491e26ed9614a82f92d8597_prof);

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
