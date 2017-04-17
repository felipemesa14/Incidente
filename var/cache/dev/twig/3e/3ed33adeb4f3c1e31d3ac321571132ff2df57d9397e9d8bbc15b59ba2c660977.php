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
        $__internal_149b3f85ee44578fb0c86daa09f1d993c0ff7e308e60576dd19cc3e36c94f06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149b3f85ee44578fb0c86daa09f1d993c0ff7e308e60576dd19cc3e36c94f06c->enter($__internal_149b3f85ee44578fb0c86daa09f1d993c0ff7e308e60576dd19cc3e36c94f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $__internal_d9e45cdffa09c47f2aa39fe81a3014fe829a445a3bdb47fcb51e3ec61f4b2851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e45cdffa09c47f2aa39fe81a3014fe829a445a3bdb47fcb51e3ec61f4b2851->enter($__internal_d9e45cdffa09c47f2aa39fe81a3014fe829a445a3bdb47fcb51e3ec61f4b2851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149b3f85ee44578fb0c86daa09f1d993c0ff7e308e60576dd19cc3e36c94f06c->leave($__internal_149b3f85ee44578fb0c86daa09f1d993c0ff7e308e60576dd19cc3e36c94f06c_prof);

        
        $__internal_d9e45cdffa09c47f2aa39fe81a3014fe829a445a3bdb47fcb51e3ec61f4b2851->leave($__internal_d9e45cdffa09c47f2aa39fe81a3014fe829a445a3bdb47fcb51e3ec61f4b2851_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f727e2be1f57d66188174e7ed04f4b1212a07f3190e02bc9957a9f903a560b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f727e2be1f57d66188174e7ed04f4b1212a07f3190e02bc9957a9f903a560b6->enter($__internal_3f727e2be1f57d66188174e7ed04f4b1212a07f3190e02bc9957a9f903a560b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_165cd9a1b8788e37939356230bc0281b029db82db1b66025531e86aaf119d79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165cd9a1b8788e37939356230bc0281b029db82db1b66025531e86aaf119d79e->enter($__internal_165cd9a1b8788e37939356230bc0281b029db82db1b66025531e86aaf119d79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Incidencias</div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"lista\" class=\"table table-striped table-condensed table-hover\">
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casos"]) || array_key_exists("casos", $context) ? $context["casos"] : (function () { throw new Twig_Error_Runtime('Variable "casos" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caso"]) {
            // line 30
            echo "                                        <tr>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "titulo", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "prioridadRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "categoriaRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "descripcion", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                            <td>";
            // line 38
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                            <td style=\"text-align: center\">
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_detalle", array("codigoIncidencia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
            echo "\">
                                                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_152_new_window.png"), "html", null, true);
            echo "\" width=20 height=20 title=\"Detalle\">
                                                </a>
                                            </td>
                                            <td style=\"text-align: center\">
                                                ";
            // line 45
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->getSourceContext()); })()), "user", array()), "rolRel", array()), "nombre", array()) == "ROLE_USER") && (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0))) {
                // line 46
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidencia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_151_edit.png"), "html", null, true);
                echo "\" width=20 height=20 title=\"Editar\">    
                                                    </a>
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 49
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "rolRel", array()), "nombre", array()) == "ROLE_ADMIN")) {
                // line 50
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_editar", array("codigoIncidencia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_151_edit.png"), "html", null, true);
                echo "\" width=20 height=20 title=\"Editar\">    
                                                    </a>
                                                ";
            }
            // line 54
            echo "                                            </td>
                                            <td style=\"text-align: center\">
                                                ";
            // line 56
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->getSourceContext()); })()), "user", array()), "rolRel", array()), "nombre", array()) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0))) {
                // line 57
                echo "                                                    <input type=\"checkbox\" name=\"ChkSeleccionar[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
                echo "\" />
                                                ";
            }
            // line 59
            echo "                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"text-danger\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new Twig_Error_Runtime('Variable "mensaje" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
                        <div class=\"modal-footer\">                            
                            <div class=\"btn-group\">
                                <a class=\"btn btn-default btn-sm\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidencia" => 0));
        echo "\">Nuevo</a>
                                <div class=\"btn-group\">
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "BtnEliminar", array()), 'widget', array("attr" => array("class" => "btn btn-danger btn-sm")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            ";
        
        $__internal_165cd9a1b8788e37939356230bc0281b029db82db1b66025531e86aaf119d79e->leave($__internal_165cd9a1b8788e37939356230bc0281b029db82db1b66025531e86aaf119d79e_prof);

        
        $__internal_3f727e2be1f57d66188174e7ed04f4b1212a07f3190e02bc9957a9f903a560b6->leave($__internal_3f727e2be1f57d66188174e7ed04f4b1212a07f3190e02bc9957a9f903a560b6_prof);

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
        return array (  211 => 75,  203 => 70,  198 => 68,  192 => 65,  187 => 62,  179 => 59,  173 => 57,  171 => 56,  167 => 54,  161 => 51,  156 => 50,  154 => 49,  149 => 47,  144 => 46,  142 => 45,  135 => 41,  131 => 40,  122 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  87 => 30,  83 => 29,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        {{ form_start(form, { 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate'} }) }}
        {{ form_errors(form) }}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Listado de Incidencias</div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table id=\"lista\" class=\"table table-striped table-condensed table-hover\">
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
                                                <a href=\"{{ path('caso_detalle',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                    <img src=\"{{ asset('imagenes/bootstrap/glyphicons_152_new_window.png') }}\" width=20 height=20 title=\"Detalle\">
                                                </a>
                                            </td>
                                            <td style=\"text-align: center\">
                                                {% if app.user.rolRel.nombre == \"ROLE_USER\" and caso.estadoAtendido == 0 %}
                                                    <a href=\"{{ path('caso_nuevo',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                        <img src=\"{{ asset('imagenes/bootstrap/glyphicons_151_edit.png') }}\" width=20 height=20 title=\"Editar\">    
                                                    </a>
                                                {% elseif app.user.rolRel.nombre == \"ROLE_ADMIN\"  %}
                                                    <a href=\"{{ path('caso_editar',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                        <img src=\"{{ asset('imagenes/bootstrap/glyphicons_151_edit.png') }}\" width=20 height=20 title=\"Editar\">    
                                                    </a>
                                                {% endif  %}
                                            </td>
                                            <td style=\"text-align: center\">
                                                {% if app.user.rolRel.nombre == \"ROLE_ADMIN\" or caso.estadoSolucionado == 0 %}
                                                    <input type=\"checkbox\" name=\"ChkSeleccionar[]\" value=\"{{ caso.codigoIncidenciaPk }}\" />
                                                {% endif  %}
                                            </td>
                                        </tr>
                                    {% endfor%}
                                </tbody>
                            </table>
                        </div>
                        <div class=\"text-danger\">{{ mensaje }}</div>
                        <div class=\"modal-footer\">                            
                            <div class=\"btn-group\">
                                <a class=\"btn btn-default btn-sm\" href=\"{{ path('caso_nuevo',{'codigoIncidencia':0}) }}\">Nuevo</a>
                                <div class=\"btn-group\">
                                    {{ form_widget(form.BtnEliminar, { 'attr': {'class': 'btn btn-danger btn-sm'} }) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ form_end(form) }}
                </div>
            {% endblock %}

", "AppBundle:Caso:lista.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/lista.html.twig");
    }
}
