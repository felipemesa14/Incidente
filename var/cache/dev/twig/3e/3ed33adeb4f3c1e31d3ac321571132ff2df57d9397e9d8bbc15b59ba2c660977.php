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
        $__internal_b27eea51af3170e0bdaaed129febc65e3aa266f054d60dd1fdf155b54abbf50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27eea51af3170e0bdaaed129febc65e3aa266f054d60dd1fdf155b54abbf50d->enter($__internal_b27eea51af3170e0bdaaed129febc65e3aa266f054d60dd1fdf155b54abbf50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $__internal_f28f22b236699cd8296b171a1a7d3eb9fdd65b3f1d76f65ebf08d8666a1f4672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28f22b236699cd8296b171a1a7d3eb9fdd65b3f1d76f65ebf08d8666a1f4672->enter($__internal_f28f22b236699cd8296b171a1a7d3eb9fdd65b3f1d76f65ebf08d8666a1f4672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27eea51af3170e0bdaaed129febc65e3aa266f054d60dd1fdf155b54abbf50d->leave($__internal_b27eea51af3170e0bdaaed129febc65e3aa266f054d60dd1fdf155b54abbf50d_prof);

        
        $__internal_f28f22b236699cd8296b171a1a7d3eb9fdd65b3f1d76f65ebf08d8666a1f4672->leave($__internal_f28f22b236699cd8296b171a1a7d3eb9fdd65b3f1d76f65ebf08d8666a1f4672_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d039e011612d2d8bf171ce71d63fcc01a1355a32ddf2345ee51785482ea7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d039e011612d2d8bf171ce71d63fcc01a1355a32ddf2345ee51785482ea7a4->enter($__internal_30d039e011612d2d8bf171ce71d63fcc01a1355a32ddf2345ee51785482ea7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_255fef2b015246b1b48f364eddb74a3d2d723b82b7a14c65c0bfc70d0264e820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255fef2b015246b1b48f364eddb74a3d2d723b82b7a14c65c0bfc70d0264e820->enter($__internal_255fef2b015246b1b48f364eddb74a3d2d723b82b7a14c65c0bfc70d0264e820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <th>Asunto</th>
                                    <th>Prioridad</th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Fecha</th>
                                    <th>Ate</th>
                                    <th>Sol</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casos"]) || array_key_exists("casos", $context) ? $context["casos"] : (function () { throw new Twig_Error_Runtime('Variable "casos" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caso"]) {
            // line 27
            echo "                                    <tr>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "titulo", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "prioridadRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "categoriaRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "descripcion", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td>";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td style=\"text-align: center\">
                                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_detalle", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_152_new_window.png"), "html", null, true);
            echo "\" width=20 height=20 title=\"Detalle\">
                                            </a>
                                        </td>
                                        <td style=\"text-align: center\">
                                            ";
            // line 42
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0))) {
                // line 43
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_151_edit.png"), "html", null, true);
                echo "\" width=20 height=20 title=\"Editar\">    
                                                </a>
                                            ";
            }
            // line 47
            echo "                                        </td>
                                        <td style=\"text-align: center\">
                                            ";
            // line 49
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0))) {
                // line 50
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_eliminar", array("codigoIncidenciaPk" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\">
                                                    <span class=\"glyphicon glyphicon-trash\"></span>
                                                </a>
                                            ";
            }
            // line 54
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </tbody>
                        </table>
                        <div class=\"modal-footer\">
                            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidenciaPk" => 0));
        echo "\">
                                <button class=\"btn btn-primary\">Nuevo</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_255fef2b015246b1b48f364eddb74a3d2d723b82b7a14c65c0bfc70d0264e820->leave($__internal_255fef2b015246b1b48f364eddb74a3d2d723b82b7a14c65c0bfc70d0264e820_prof);

        
        $__internal_30d039e011612d2d8bf171ce71d63fcc01a1355a32ddf2345ee51785482ea7a4->leave($__internal_30d039e011612d2d8bf171ce71d63fcc01a1355a32ddf2345ee51785482ea7a4_prof);

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
        return array (  173 => 60,  168 => 57,  160 => 54,  152 => 50,  150 => 49,  146 => 47,  140 => 44,  135 => 43,  133 => 42,  126 => 38,  122 => 37,  113 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  74 => 26,  49 => 3,  40 => 2,  11 => 1,);
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
                                    <th>Asunto</th>
                                    <th>Prioridad</th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Fecha</th>
                                    <th>Ate</th>
                                    <th>Sol</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for caso in casos %}
                                    <tr>
                                        <td>{{ caso.codigoIncidenciaPk }}</td>
                                        <td>{{ caso.titulo }}</td>
                                        <td>{{ caso.prioridadRel.nombre }}</td>
                                        <td>{{ caso.categoriaRel.nombre}}</td>
                                        <td>{{ caso.descripcion}}</td>
                                        <td>{{ caso.fechaRegistro|date('d/m/Y H:i') }}</td>
                                        <td>{%if caso.estadoAtendido == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td>{%if caso.estadoSolucionado == 0 %}  No {%else%}  Si  {% endif %}</td>
                                        <td style=\"text-align: center\">
                                            <a href=\"{{ path('caso_detalle',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\">
                                                <img src=\"{{ asset('imagenes/bootstrap/glyphicons_152_new_window.png') }}\" width=20 height=20 title=\"Detalle\">
                                            </a>
                                        </td>
                                        <td style=\"text-align: center\">
                                            {% if app.user.codigoRolFk == 1 or caso.estadoSolucionado == 0 %}
                                                <a href=\"{{ path('caso_nuevo',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\">
                                                    <img src=\"{{ asset('imagenes/bootstrap/glyphicons_151_edit.png') }}\" width=20 height=20 title=\"Editar\">    
                                                </a>
                                            {% endif  %}
                                        </td>
                                        <td style=\"text-align: center\">
                                            {% if app.user.codigoRolFk == 1 or caso.estadoSolucionado == 0 %}
                                                <a href=\"{{ path('caso_eliminar',{'codigoIncidenciaPk':caso.codigoIncidenciaPk}) }}\">
                                                    <span class=\"glyphicon glyphicon-trash\"></span>
                                                </a>
                                            {% endif  %}
                                        </td>
                                    </tr>
                                {% endfor%}
                            </tbody>
                        </table>
                        <div class=\"modal-footer\">
                            <a href=\"{{ path('caso_nuevo',{'codigoIncidenciaPk':0}) }}\">
                                <button class=\"btn btn-primary\">Nuevo</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}

", "AppBundle:Caso:lista.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/lista.html.twig");
    }
}
