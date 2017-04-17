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
        $__internal_8318e85ad5de0477d52d171127a066377c03d22249a73cc928e9eeecfd7cc05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8318e85ad5de0477d52d171127a066377c03d22249a73cc928e9eeecfd7cc05f->enter($__internal_8318e85ad5de0477d52d171127a066377c03d22249a73cc928e9eeecfd7cc05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $__internal_4199794faa4c463f8f505775e2a5a8a407a77fc2f0116b4c0b91aedbd3f123df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4199794faa4c463f8f505775e2a5a8a407a77fc2f0116b4c0b91aedbd3f123df->enter($__internal_4199794faa4c463f8f505775e2a5a8a407a77fc2f0116b4c0b91aedbd3f123df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8318e85ad5de0477d52d171127a066377c03d22249a73cc928e9eeecfd7cc05f->leave($__internal_8318e85ad5de0477d52d171127a066377c03d22249a73cc928e9eeecfd7cc05f_prof);

        
        $__internal_4199794faa4c463f8f505775e2a5a8a407a77fc2f0116b4c0b91aedbd3f123df->leave($__internal_4199794faa4c463f8f505775e2a5a8a407a77fc2f0116b4c0b91aedbd3f123df_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e37af19a5cab42d9b0ba1f298140b5658b07035df655adbe5521f8224372c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e37af19a5cab42d9b0ba1f298140b5658b07035df655adbe5521f8224372c5e->enter($__internal_5e37af19a5cab42d9b0ba1f298140b5658b07035df655adbe5521f8224372c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ef05889a4bd4d70a031afb6b93e1197cf6ec445f3ea37d3eaf3616a85824b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef05889a4bd4d70a031afb6b93e1197cf6ec445f3ea37d3eaf3616a85824b1b->enter($__internal_2ef05889a4bd4d70a031afb6b93e1197cf6ec445f3ea37d3eaf3616a85824b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            ";
        // line 49
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 49, $this->getSourceContext()); })()), "fechaSolucion", array()))) {
            // line 50
            echo "                                            <td></td>
                                            ";
        } else {
            // line 52
            echo "                                            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 52, $this->getSourceContext()); })()), "fechaSolucion", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                            ";
        }
        // line 54
        echo "                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"form-group col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody>
                                        <tr>
                                            <td class=\"active\"><strong>Soluci&oacute;n:</strong></td>
                                            <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 63, $this->getSourceContext()); })()), "solucion", array()), "html", null, true);
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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["arDetalleComentario"]);
        foreach ($context['_seq'] as $context["_key"] => $context["arDetalleComentario"]) {
            // line 85
            echo "                                        <tr>
                                            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "fechaRegistro", array()), "Y/m/d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "username", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "comentario", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arDetalleComentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "     
                                </tbody>
                            </table>
                        </div>
                        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->getSourceContext()); })()), "comentario", array()), 'label');
        echo "</label>
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), "comentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Registrar su comentario")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                    </div>
                    ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        ";
        
        $__internal_2ef05889a4bd4d70a031afb6b93e1197cf6ec445f3ea37d3eaf3616a85824b1b->leave($__internal_2ef05889a4bd4d70a031afb6b93e1197cf6ec445f3ea37d3eaf3616a85824b1b_prof);

        
        $__internal_5e37af19a5cab42d9b0ba1f298140b5658b07035df655adbe5521f8224372c5e->leave($__internal_5e37af19a5cab42d9b0ba1f298140b5658b07035df655adbe5521f8224372c5e_prof);

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
        return array (  226 => 110,  218 => 105,  214 => 104,  205 => 98,  201 => 97,  195 => 94,  189 => 90,  180 => 88,  176 => 87,  172 => 86,  169 => 85,  165 => 84,  141 => 63,  130 => 54,  124 => 52,  120 => 50,  118 => 49,  111 => 45,  104 => 41,  97 => 37,  84 => 27,  77 => 23,  70 => 19,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
                                            {% if (arIncidencia.fechaSolucion is null) %}
                                            <td></td>
                                            {% else %}
                                            <td>{{arIncidencia.fechaSolucion | date('d/m/Y H:i')}}</td>
                                            {% endif %}
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
