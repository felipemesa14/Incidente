<?php

/* AppBundle:Caso:lista.html.twig */
class __TwigTemplate_c5057f42db1b44afc0deff0bce3f09e15954154eb79b32d477e1754a6e78a32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:lista.html.twig", 1);
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
        $__internal_66722e85fb53e7cf4d2fd217bfcf36040b5fd9e03fb5208478cb8c774d7eafed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66722e85fb53e7cf4d2fd217bfcf36040b5fd9e03fb5208478cb8c774d7eafed->enter($__internal_66722e85fb53e7cf4d2fd217bfcf36040b5fd9e03fb5208478cb8c774d7eafed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $__internal_9dc9629a54d1f4d0f290669975459c82ef404de141d225740b9189d61b342eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc9629a54d1f4d0f290669975459c82ef404de141d225740b9189d61b342eb3->enter($__internal_9dc9629a54d1f4d0f290669975459c82ef404de141d225740b9189d61b342eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66722e85fb53e7cf4d2fd217bfcf36040b5fd9e03fb5208478cb8c774d7eafed->leave($__internal_66722e85fb53e7cf4d2fd217bfcf36040b5fd9e03fb5208478cb8c774d7eafed_prof);

        
        $__internal_9dc9629a54d1f4d0f290669975459c82ef404de141d225740b9189d61b342eb3->leave($__internal_9dc9629a54d1f4d0f290669975459c82ef404de141d225740b9189d61b342eb3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0a4ccaa8daea7a4967ba7a57d3265cbcfe326a12f57227a7b444cb4e9f814b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a4ccaa8daea7a4967ba7a57d3265cbcfe326a12f57227a7b444cb4e9f814b4->enter($__internal_e0a4ccaa8daea7a4967ba7a57d3265cbcfe326a12f57227a7b444cb4e9f814b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5abdd6bffacd03a4384fdd4c7e0744ef6b7c623578e676d3ee7b9135055810d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abdd6bffacd03a4384fdd4c7e0744ef6b7c623578e676d3ee7b9135055810d3->enter($__internal_5abdd6bffacd03a4384fdd4c7e0744ef6b7c623578e676d3ee7b9135055810d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Incidencias</div>
                    <div class=\"panel-body\">
                        <table id=\"lista\" class=\"table table-striped table-bordered table-condensed table-hover\">
                            <thead>
                                <tr class=\"primary\">
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Prioridad</th>
                                    <th>Categoria</th>
                                    <th>Fecha</th>
                                    <th>Ate</th>
                                    <th>Sol</th>
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
            echo "                                    <tr>
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "prioridadRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "categoriaRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td>";
            // line 31
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_detalle", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
            echo "\"<button title=\"Ver detalle\" class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </tbody>
                        </table>
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" align=\"center\">
                                <a href=\"";
        // line 44
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
        
        $__internal_5abdd6bffacd03a4384fdd4c7e0744ef6b7c623578e676d3ee7b9135055810d3->leave($__internal_5abdd6bffacd03a4384fdd4c7e0744ef6b7c623578e676d3ee7b9135055810d3_prof);

        
        $__internal_e0a4ccaa8daea7a4967ba7a57d3265cbcfe326a12f57227a7b444cb4e9f814b4->leave($__internal_e0a4ccaa8daea7a4967ba7a57d3265cbcfe326a12f57227a7b444cb4e9f814b4_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b39a3061d1f48c81b17d1f4f8816322e4c2818dbcfa70dcec30d9fc5087a4272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39a3061d1f48c81b17d1f4f8816322e4c2818dbcfa70dcec30d9fc5087a4272->enter($__internal_b39a3061d1f48c81b17d1f4f8816322e4c2818dbcfa70dcec30d9fc5087a4272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f91e86036698d77d346e665505de1b393ee551d9c75e88e1ce3d35474e1f7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f91e86036698d77d346e665505de1b393ee551d9c75e88e1ce3d35474e1f7c9->enter($__internal_3f91e86036698d77d346e665505de1b393ee551d9c75e88e1ce3d35474e1f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script>
                \$(document).ready(function () {
                    \$('#lista').DataTable();
                });
            </script>
        ";
        
        $__internal_3f91e86036698d77d346e665505de1b393ee551d9c75e88e1ce3d35474e1f7c9->leave($__internal_3f91e86036698d77d346e665505de1b393ee551d9c75e88e1ce3d35474e1f7c9_prof);

        
        $__internal_b39a3061d1f48c81b17d1f4f8816322e4c2818dbcfa70dcec30d9fc5087a4272->leave($__internal_b39a3061d1f48c81b17d1f4f8816322e4c2818dbcfa70dcec30d9fc5087a4272_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  154 => 53,  135 => 44,  129 => 40,  116 => 33,  107 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{%  block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Incidencias</div>
                    <div class=\"panel-body\">
                        <table id=\"lista\" class=\"table table-striped table-bordered table-condensed table-hover\">
                            <thead>
                                <tr class=\"primary\">
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Prioridad</th>
                                    <th>Categoria</th>
                                    <th>Fecha</th>
                                    <th>Ate</th>
                                    <th>Sol</th>
                                    <th>Tareas</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for caso in casos %}
                                    <tr>
                                        <td>{{ caso.codigoIncidenciaPk }}</td>
                                        <td>{{ caso.titulo }}</td>
                                        <td>{{ caso.prioridadRel.nombre }}</td>
                                        <td>{{ caso.categoriaRel.nombre}}</td>
                                        <td>{{ caso.fechaRegistro|date('d/m/Y H:i') }}</td>
                                        <td>{%if caso.estadoSolucionado == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td>{%if caso.estadoSolucionado == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td>
                                            <a href=\"{{ path('caso_detalle',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\"<button title=\"Ver detalle\" class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </a>
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

", "AppBundle:Caso:lista.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/lista.html.twig");
    }
}
