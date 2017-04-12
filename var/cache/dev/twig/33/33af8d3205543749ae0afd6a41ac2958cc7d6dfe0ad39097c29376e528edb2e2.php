<?php

/* AppBundle:Caso:detalle.html.twig */
class __TwigTemplate_dfdc7e44c8f33bd20e9dd7af7530da94c8f7cf7e1a4e0cc4554309e50e258b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:detalle.html.twig", 1);
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
        $__internal_0c4a7d8796615b087ba309234e979f31ec58e7b6cd0fe81db2cc44ebea622270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4a7d8796615b087ba309234e979f31ec58e7b6cd0fe81db2cc44ebea622270->enter($__internal_0c4a7d8796615b087ba309234e979f31ec58e7b6cd0fe81db2cc44ebea622270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $__internal_f9972c5ea6d188175e2e24a13b7055cbf8c8d75a6a66e4cf9b64511bad71f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9972c5ea6d188175e2e24a13b7055cbf8c8d75a6a66e4cf9b64511bad71f939->enter($__internal_f9972c5ea6d188175e2e24a13b7055cbf8c8d75a6a66e4cf9b64511bad71f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4a7d8796615b087ba309234e979f31ec58e7b6cd0fe81db2cc44ebea622270->leave($__internal_0c4a7d8796615b087ba309234e979f31ec58e7b6cd0fe81db2cc44ebea622270_prof);

        
        $__internal_f9972c5ea6d188175e2e24a13b7055cbf8c8d75a6a66e4cf9b64511bad71f939->leave($__internal_f9972c5ea6d188175e2e24a13b7055cbf8c8d75a6a66e4cf9b64511bad71f939_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c25e7d70f193d7218a1eea9085121534df10ec58ec20bab05ec08670b21f5188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25e7d70f193d7218a1eea9085121534df10ec58ec20bab05ec08670b21f5188->enter($__internal_c25e7d70f193d7218a1eea9085121534df10ec58ec20bab05ec08670b21f5188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a52f71cb6d11f40c0709f46a99a5677017f460f8b487c225ed26d55a3aad94fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52f71cb6d11f40c0709f46a99a5677017f460f8b487c225ed26d55a3aad94fa->enter($__internal_a52f71cb6d11f40c0709f46a99a5677017f460f8b487c225ed26d55a3aad94fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Detalle incidencia</div>
                    <div class=\"panel-body\">
                        <div class=\"box-body table-responsive no-padding\">
                            <div class=\"form-group col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"primary\"><strong>Id:</strong></td>
                                            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 15, $this->getSourceContext()); })()), "codigoIncidenciaPk", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Titulo:</strong></td>
                                            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 19, $this->getSourceContext()); })()), "titulo", array()), "html", null, true);
        echo "</td>
                                        </tr> 
                                        <tr>
                                            <td class=\"active\"><strong>Categoria:</strong></td>
                                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 23, $this->getSourceContext()); })()), "categoriaRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>                     
                                        <tr>
                                            <td class=\"active\"><strong>Prioridad:</strong></td>
                                            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 27, $this->getSourceContext()); })()), "prioridadRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"form-group col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"active\"><strong>Cliente:</strong></td>
                                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 37, $this->getSourceContext()); })()), "clienteRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha registro:</strong></td>
                                            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 41, $this->getSourceContext()); })()), "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Descripci&oacute;n:</strong></td>
                                            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 45, $this->getSourceContext()); })()), "descripcion", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha soluci&oacute;n:</strong></td>
                                            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 49, $this->getSourceContext()); })()), "fechaSolucion", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"form-group col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"active\"><strong>Soluci&oacute;n:</strong></td>
                                            <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 59, $this->getSourceContext()); })()), "solucion", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Comentarios</div>
                    <div class=\"panel-body\">
                        <div class=\"box-body table-responsive no-padding\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Usuario</th>
                                        <th>Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["arDetalleComentario"]);
        foreach ($context['_seq'] as $context["_key"] => $context["arDetalleComentario"]) {
            // line 81
            echo "                                        <tr>
                                            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "fechaRegistro", array()), "Y/m/d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "username", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "comentario", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arDetalleComentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "     
                                </tbody>
                            </table>
                        </div>
                        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "comentario", array()), 'label');
        echo "</label>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "comentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Registrar su comentario")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                    </div>
                    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        ";
        
        $__internal_a52f71cb6d11f40c0709f46a99a5677017f460f8b487c225ed26d55a3aad94fa->leave($__internal_a52f71cb6d11f40c0709f46a99a5677017f460f8b487c225ed26d55a3aad94fa_prof);

        
        $__internal_c25e7d70f193d7218a1eea9085121534df10ec58ec20bab05ec08670b21f5188->leave($__internal_c25e7d70f193d7218a1eea9085121534df10ec58ec20bab05ec08670b21f5188_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 106,  208 => 101,  204 => 100,  195 => 94,  191 => 93,  185 => 90,  179 => 86,  170 => 84,  166 => 83,  162 => 82,  159 => 81,  155 => 80,  131 => 59,  118 => 49,  111 => 45,  104 => 41,  97 => 37,  84 => 27,  77 => 23,  70 => 19,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Detalle incidencia</div>
                    <div class=\"panel-body\">
                        <div class=\"box-body table-responsive no-padding\">
                            <div class=\"form-group col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"primary\"><strong>Id:</strong></td>
                                            <td>{{arIncidencia.codigoIncidenciaPk}}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Titulo:</strong></td>
                                            <td>{{arIncidencia.titulo}}</td>
                                        </tr> 
                                        <tr>
                                            <td class=\"active\"><strong>Categoria:</strong></td>
                                            <td>{{arIncidencia.categoriaRel.nombre}}</td>
                                        </tr>                     
                                        <tr>
                                            <td class=\"active\"><strong>Prioridad:</strong></td>
                                            <td>{{arIncidencia.prioridadRel.nombre}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"form-group col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"active\"><strong>Cliente:</strong></td>
                                            <td>{{arIncidencia.clienteRel.nombre}}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha registro:</strong></td>
                                            <td>{{arIncidencia.fechaRegistro | date('d/m/Y H:i')}}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Descripci&oacute;n:</strong></td>
                                            <td>{{arIncidencia.descripcion}}</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha soluci&oacute;n:</strong></td>
                                            <td>{{arIncidencia.fechaSolucion | date('d/m/Y H:i')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"form-group col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"active\"><strong>Soluci&oacute;n:</strong></td>
                                            <td>{{arIncidencia.solucion}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Comentarios</div>
                    <div class=\"panel-body\">
                        <div class=\"box-body table-responsive no-padding\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Usuario</th>
                                        <th>Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for arDetalleComentario in arDetalleComentario %}
                                        <tr>
                                            <td>{{arDetalleComentario.fechaRegistro| date('Y/m/d H:i')}}</td>
                                            <td>{{arDetalleComentario.username}}</td>
                                            <td>{{arDetalleComentario.comentario}}</td>
                                        </tr>
                                    {% endfor %}     
                                </tbody>
                            </table>
                        </div>
                        {{ form_start(form, { 'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate'} })  }}
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">{{ form_label(form.comentario)}}</label>
                                {{ form_widget(form.comentario,{'attr':{'class':'form-control','placeholder':'Registrar su comentario'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            {{form_widget(form.guardar,{'attr':{'class':'btn btn-primary'}}) }}
                            <a href=\"{{path('caso_lista')}}\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        {% endblock %}

", "AppBundle:Caso:detalle.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/detalle.html.twig");
    }
}
