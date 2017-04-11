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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56309e740806226f5161bd52e3fcbb7683aaa50e770d9b2962f4a024c4cfa6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56309e740806226f5161bd52e3fcbb7683aaa50e770d9b2962f4a024c4cfa6d1->enter($__internal_56309e740806226f5161bd52e3fcbb7683aaa50e770d9b2962f4a024c4cfa6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $__internal_bbc44bed7a7d92a6f7c2d6a02440c9c1a120ce22384546bf314028fe85f2ef57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc44bed7a7d92a6f7c2d6a02440c9c1a120ce22384546bf314028fe85f2ef57->enter($__internal_bbc44bed7a7d92a6f7c2d6a02440c9c1a120ce22384546bf314028fe85f2ef57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56309e740806226f5161bd52e3fcbb7683aaa50e770d9b2962f4a024c4cfa6d1->leave($__internal_56309e740806226f5161bd52e3fcbb7683aaa50e770d9b2962f4a024c4cfa6d1_prof);

        
        $__internal_bbc44bed7a7d92a6f7c2d6a02440c9c1a120ce22384546bf314028fe85f2ef57->leave($__internal_bbc44bed7a7d92a6f7c2d6a02440c9c1a120ce22384546bf314028fe85f2ef57_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_79b0042355001a35973bca58ba9c25047ea7f1bf6aa8dec195e6df666a8170da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b0042355001a35973bca58ba9c25047ea7f1bf6aa8dec195e6df666a8170da->enter($__internal_79b0042355001a35973bca58ba9c25047ea7f1bf6aa8dec195e6df666a8170da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ad902d26b20e8f288e536490a1d612f168eaa3b0302da2a4c61a0620c933b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad902d26b20e8f288e536490a1d612f168eaa3b0302da2a4c61a0620c933b6d->enter($__internal_9ad902d26b20e8f288e536490a1d612f168eaa3b0302da2a4c61a0620c933b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0)) {
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
            echo "\"
                                               <button title=\"Ver detalle\" class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </a>
                                            ";
            // line 38
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1)) {
                // line 39
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\"
                                               <button title=\"Editar\" class=\"btn btn-success\">
                                                    <i class=\"glyphicon glyphicon-edit\"></i>
                                                </button>
                                            </a>
                                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_eliminar", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\"
                                               <button title=\"Editar\" class=\"btn btn-danger\">
                                                    <i class=\"glyphicon glyphicon-remove\"></i>
                                                </button>
                                            </a>
                                            ";
            }
            // line 50
            echo "                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                        </tbody>
                                    </table>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" align=\"center\">
                                            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidenciaPk" => 0));
        echo "\">
                                                <button class=\"btn btn-success\">Nuevo</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        
        $__internal_9ad902d26b20e8f288e536490a1d612f168eaa3b0302da2a4c61a0620c933b6d->leave($__internal_9ad902d26b20e8f288e536490a1d612f168eaa3b0302da2a4c61a0620c933b6d_prof);

        
        $__internal_79b0042355001a35973bca58ba9c25047ea7f1bf6aa8dec195e6df666a8170da->leave($__internal_79b0042355001a35973bca58ba9c25047ea7f1bf6aa8dec195e6df666a8170da_prof);

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
        return array (  157 => 57,  151 => 53,  143 => 50,  134 => 44,  125 => 39,  123 => 38,  115 => 33,  106 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  75 => 24,  71 => 23,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
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
                                        <td>{%if caso.estadoAtendido == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td>{%if caso.estadoSolucionado == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td>
                                            <a href=\"{{ path('caso_detalle',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\"
                                               <button title=\"Ver detalle\" class=\"btn btn-primary\">
                                                    <i class=\"glyphicon glyphicon-book\"></i>
                                                </button>
                                            </a>
                                            {% if app.user.codigoRolFk == 1 %}
                                            <a href=\"{{ path('caso_nuevo',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\"
                                               <button title=\"Editar\" class=\"btn btn-success\">
                                                    <i class=\"glyphicon glyphicon-edit\"></i>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('caso_eliminar',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\"
                                               <button title=\"Editar\" class=\"btn btn-danger\">
                                                    <i class=\"glyphicon glyphicon-remove\"></i>
                                                </button>
                                            </a>
                                            {% endif  %}
                                            </td>
                                        </tr>
                                        {% endfor%}
                                        </tbody>
                                    </table>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" align=\"center\">
                                            <a href=\"{{ path('caso_nuevo',{'codigoIncidenciaPk':0}) }}\">
                                                <button class=\"btn btn-success\">Nuevo</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endblock %}

", "AppBundle:Caso:lista.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/lista.html.twig");
    }
}
