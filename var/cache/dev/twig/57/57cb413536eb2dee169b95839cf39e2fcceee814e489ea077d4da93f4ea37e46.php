<?php

/* AppBundle:Caso:Lista.html.twig */
class __TwigTemplate_39a808c87515b5feed15141ebdbb7d269752b1df60cdc6c1eb57fc63afa9cc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:Lista.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fedc762535555744949e1e569bdd937c95de701534e96e09e6f72c689ab80d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fedc762535555744949e1e569bdd937c95de701534e96e09e6f72c689ab80d6->enter($__internal_9fedc762535555744949e1e569bdd937c95de701534e96e09e6f72c689ab80d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:Lista.html.twig"));

        $__internal_4b7cd9e21bcd22ca1e95af6fce8bcdd3729a72c5c07cdb140185e4fbe2bd8287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7cd9e21bcd22ca1e95af6fce8bcdd3729a72c5c07cdb140185e4fbe2bd8287->enter($__internal_4b7cd9e21bcd22ca1e95af6fce8bcdd3729a72c5c07cdb140185e4fbe2bd8287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:Lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fedc762535555744949e1e569bdd937c95de701534e96e09e6f72c689ab80d6->leave($__internal_9fedc762535555744949e1e569bdd937c95de701534e96e09e6f72c689ab80d6_prof);

        
        $__internal_4b7cd9e21bcd22ca1e95af6fce8bcdd3729a72c5c07cdb140185e4fbe2bd8287->leave($__internal_4b7cd9e21bcd22ca1e95af6fce8bcdd3729a72c5c07cdb140185e4fbe2bd8287_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eb379cd4691f026c81fce8e25cecb208a79366d1dfdc29541afd6db6c85a13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb379cd4691f026c81fce8e25cecb208a79366d1dfdc29541afd6db6c85a13a->enter($__internal_4eb379cd4691f026c81fce8e25cecb208a79366d1dfdc29541afd6db6c85a13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ee75b8218bb3c6a3a78a518b9f947c857d31e2b6cfe7bfa108aebe7b3850728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee75b8218bb3c6a3a78a518b9f947c857d31e2b6cfe7bfa108aebe7b3850728->enter($__internal_8ee75b8218bb3c6a3a78a518b9f947c857d31e2b6cfe7bfa108aebe7b3850728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Casos</div>
                    <div class=\"panel-body\">
                            <table id=\"lista\" class=\"table table-striped table-bordered table-condensed table-hover\">
                                <thead>
                                    <tr class=\"primary\">
                                        <th>Numero Caso</th>
                                        <th>Titulo</th>
                                        <th>Cliente</th>
                                        <th>Usuario</th>
                                        <th>Prioridad</th>
                                        <th>Fecha</th>
                                        <th>Categoria</th>
                                        <th>Tareas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casos"]) || array_key_exists("casos", $context) ? $context["casos"] : (function () { throw new Twig_Error_Runtime('Variable "casos" does not exist.', 23, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caso"]) {
            // line 24
            echo "                                        <tr>
                                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "titulo", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "clienteRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "usuario", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "prioridadRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "categoriaRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                            <td><button class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                </tbody>
                            </table>
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" align=\"center\">
                                <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo");
        echo "\">
                                    <input type=\"button\" class=\"btn btn-success\" value=\"Nuevo\"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_8ee75b8218bb3c6a3a78a518b9f947c857d31e2b6cfe7bfa108aebe7b3850728->leave($__internal_8ee75b8218bb3c6a3a78a518b9f947c857d31e2b6cfe7bfa108aebe7b3850728_prof);

        
        $__internal_4eb379cd4691f026c81fce8e25cecb208a79366d1dfdc29541afd6db6c85a13a->leave($__internal_4eb379cd4691f026c81fce8e25cecb208a79366d1dfdc29541afd6db6c85a13a_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc87faaf44705a59c2d3ab286ac32887de544c403775711988e40d008a5c24d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc87faaf44705a59c2d3ab286ac32887de544c403775711988e40d008a5c24d1->enter($__internal_dc87faaf44705a59c2d3ab286ac32887de544c403775711988e40d008a5c24d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_855f8679e4b73084988b89c44c78dfeebe4974a782c0652b90016db05dfa5aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855f8679e4b73084988b89c44c78dfeebe4974a782c0652b90016db05dfa5aca->enter($__internal_855f8679e4b73084988b89c44c78dfeebe4974a782c0652b90016db05dfa5aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "            <script>
                \$(document).ready(function () {
                    \$('#lista').DataTable();
                });
            </script>
        ";
        
        $__internal_855f8679e4b73084988b89c44c78dfeebe4974a782c0652b90016db05dfa5aca->leave($__internal_855f8679e4b73084988b89c44c78dfeebe4974a782c0652b90016db05dfa5aca_prof);

        
        $__internal_dc87faaf44705a59c2d3ab286ac32887de544c403775711988e40d008a5c24d1->leave($__internal_dc87faaf44705a59c2d3ab286ac32887de544c403775711988e40d008a5c24d1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:Lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  141 => 51,  122 => 42,  116 => 38,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{%  block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Casos</div>
                    <div class=\"panel-body\">
                            <table id=\"lista\" class=\"table table-striped table-bordered table-condensed table-hover\">
                                <thead>
                                    <tr class=\"primary\">
                                        <th>Numero Caso</th>
                                        <th>Titulo</th>
                                        <th>Cliente</th>
                                        <th>Usuario</th>
                                        <th>Prioridad</th>
                                        <th>Fecha</th>
                                        <th>Categoria</th>
                                        <th>Tareas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for caso in casos %}
                                        <tr>
                                            <td>{{ caso.codigoIncidenciaPk }}</td>
                                            <td>{{ caso.titulo }}</td>
                                            <td>{{ caso.clienteRel.nombre }}</td>
                                            <td>{{ caso.usuario }}</td>
                                            <td>{{ caso.prioridadRel.nombre }}</td>
                                            <td>{{ caso.fechaRegistro|date('d/m/Y H:i') }}</td>
                                            <td>{{ caso.categoriaRel.nombre}}</td>
                                            <td><button class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {% endfor%}
                                </tbody>
                            </table>
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" align=\"center\">
                                <a href=\"{{ path('caso_nuevo')}}\">
                                    <input type=\"button\" class=\"btn btn-success\" value=\"Nuevo\"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}
        {% block javascripts %}
            <script>
                \$(document).ready(function () {
                    \$('#lista').DataTable();
                });
            </script>
        {% endblock %}



", "AppBundle:Caso:Lista.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/Lista.html.twig");
    }
}
