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
        $__internal_c093acaac3e231995c0946aa8b47bd6096c165a91fc874735998eb7e17a1813f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c093acaac3e231995c0946aa8b47bd6096c165a91fc874735998eb7e17a1813f->enter($__internal_c093acaac3e231995c0946aa8b47bd6096c165a91fc874735998eb7e17a1813f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $__internal_b0de04abb8da271501121cce69459b03c54faa85c6c661918738699d8643349f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0de04abb8da271501121cce69459b03c54faa85c6c661918738699d8643349f->enter($__internal_b0de04abb8da271501121cce69459b03c54faa85c6c661918738699d8643349f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c093acaac3e231995c0946aa8b47bd6096c165a91fc874735998eb7e17a1813f->leave($__internal_c093acaac3e231995c0946aa8b47bd6096c165a91fc874735998eb7e17a1813f_prof);

        
        $__internal_b0de04abb8da271501121cce69459b03c54faa85c6c661918738699d8643349f->leave($__internal_b0de04abb8da271501121cce69459b03c54faa85c6c661918738699d8643349f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b684468457d5752a69e56c1198055f8fc989ac1aa73518bc44a305c6aa5a863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b684468457d5752a69e56c1198055f8fc989ac1aa73518bc44a305c6aa5a863->enter($__internal_2b684468457d5752a69e56c1198055f8fc989ac1aa73518bc44a305c6aa5a863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf364a7f72e745cb0dd82dc0106220565479c26653ef3eb6847d31a90ccafbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf364a7f72e745cb0dd82dc0106220565479c26653ef3eb6847d31a90ccafbf2->enter($__internal_bf364a7f72e745cb0dd82dc0106220565479c26653ef3eb6847d31a90ccafbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["casos"]) || array_key_exists("casos", $context) ? $context["casos"] : (function () { throw new Twig_Error_Runtime('Variable "casos" does not exist.', 28, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caso"]) {
            // line 29
            echo "                                    <tr>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "titulo", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "prioridadRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "categoriaRel", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "descripcion", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td>";
            // line 37
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0)) {
                echo "  No ";
            } else {
                echo "  Si  ";
            }
            echo "</td>
                                        <td style=\"text-align: center\">
                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_detalle", array("codigoIncidencia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_152_new_window.png"), "html", null, true);
            echo "\" width=20 height=20 title=\"Detalle\">
                                            </a>
                                        </td>
                                        <td style=\"text-align: center\">
                                            ";
            // line 44
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoAtendido", array()) == 0))) {
                // line 45
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidencia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()))), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagenes/bootstrap/glyphicons_151_edit.png"), "html", null, true);
                echo "\" width=20 height=20 title=\"Editar\">    
                                                </a>
                                            ";
            }
            // line 49
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 2)) {
                // line 50
                echo "                                                <a href=\"";
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
            echo "                                        </td>
                                        <td style=\"text-align: center\">
                                            ";
            // line 56
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 2) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "estadoSolucionado", array()) == 0))) {
                // line 57
                echo "                                                <input type=\"checkbox\" name=\"ChkSeleccionar[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["caso"], "codigoIncidenciaPk", array()), "html", null, true);
                echo "\" />
                                            ";
            }
            // line 59
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
                        </table>
                        <div class=\"text-danger\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) || array_key_exists("mensaje", $context) ? $context["mensaje"] : (function () { throw new Twig_Error_Runtime('Variable "mensaje" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
                        <div class=\"modal-footer\">                            
                            <div class=\"btn-group\">
                                <a class=\"btn btn-default btn-sm\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_nuevo", array("codigoIncidencia" => 0));
        echo "\">Nuevo</a>
                                <div class=\"btn-group\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), "BtnEliminar", array()), 'widget', array("attr" => array("class" => "btn btn-danger btn-sm")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            ";
        
        $__internal_bf364a7f72e745cb0dd82dc0106220565479c26653ef3eb6847d31a90ccafbf2->leave($__internal_bf364a7f72e745cb0dd82dc0106220565479c26653ef3eb6847d31a90ccafbf2_prof);

        
        $__internal_2b684468457d5752a69e56c1198055f8fc989ac1aa73518bc44a305c6aa5a863->leave($__internal_2b684468457d5752a69e56c1198055f8fc989ac1aa73518bc44a305c6aa5a863_prof);

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
        return array (  211 => 74,  203 => 69,  198 => 67,  192 => 64,  188 => 62,  180 => 59,  174 => 57,  172 => 56,  168 => 54,  162 => 51,  157 => 50,  154 => 49,  148 => 46,  143 => 45,  141 => 44,  134 => 40,  130 => 39,  121 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  86 => 29,  82 => 28,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
                                            <a href=\"{{ path('caso_detalle',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                <img src=\"{{ asset('imagenes/bootstrap/glyphicons_152_new_window.png') }}\" width=20 height=20 title=\"Detalle\">
                                            </a>
                                        </td>
                                        <td style=\"text-align: center\">
                                            {% if app.user.codigoRolFk == 1 and caso.estadoAtendido == 0 %}
                                                <a href=\"{{ path('caso_nuevo',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                    <img src=\"{{ asset('imagenes/bootstrap/glyphicons_151_edit.png') }}\" width=20 height=20 title=\"Editar\">    
                                                </a>
                                            {% endif  %}
                                            {% if app.user.codigoRolFk == 2 %}
                                                <a href=\"{{ path('caso_editar',{'codigoIncidencia':caso.codigoIncidenciaPk}) }}\">
                                                    <img src=\"{{ asset('imagenes/bootstrap/glyphicons_151_edit.png') }}\" width=20 height=20 title=\"Editar\">    
                                                </a>
                                            {% endif  %}
                                        </td>
                                        <td style=\"text-align: center\">
                                            {% if app.user.codigoRolFk == 2 or caso.estadoSolucionado == 0 %}
                                                <input type=\"checkbox\" name=\"ChkSeleccionar[]\" value=\"{{ caso.codigoIncidenciaPk }}\" />
                                            {% endif  %}
                                        </td>
                                    </tr>
                                {% endfor%}
                            </tbody>
                        </table>
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
