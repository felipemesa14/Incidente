<?php

/* AppBundle:Caso:lista.html.twig */
class __TwigTemplate_151b74d832247a9291c87cd455fe9ed6b055d6a040fd59751da02dbc6bdeeda5 extends Twig_Template
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
        $__internal_75c1116e5215746b77c560749def4a23e5e708c53dfb661ec08fea3dfd033d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c1116e5215746b77c560749def4a23e5e708c53dfb661ec08fea3dfd033d0d->enter($__internal_75c1116e5215746b77c560749def4a23e5e708c53dfb661ec08fea3dfd033d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c1116e5215746b77c560749def4a23e5e708c53dfb661ec08fea3dfd033d0d->leave($__internal_75c1116e5215746b77c560749def4a23e5e708c53dfb661ec08fea3dfd033d0d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b825b0c8a02b592f07912309dabbd5e49f895a89d7012f02713725afffd48423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b825b0c8a02b592f07912309dabbd5e49f895a89d7012f02713725afffd48423->enter($__internal_b825b0c8a02b592f07912309dabbd5e49f895a89d7012f02713725afffd48423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b825b0c8a02b592f07912309dabbd5e49f895a89d7012f02713725afffd48423->leave($__internal_b825b0c8a02b592f07912309dabbd5e49f895a89d7012f02713725afffd48423_prof);

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
        return array (  148 => 57,  142 => 53,  134 => 50,  125 => 44,  116 => 39,  114 => 38,  106 => 33,  97 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  40 => 3,  34 => 2,  11 => 1,);
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
