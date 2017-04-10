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
        $__internal_1a510bfc7f15f971fb58542138e4ad00f68d5cb5e5daf5bc8d520272173386ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a510bfc7f15f971fb58542138e4ad00f68d5cb5e5daf5bc8d520272173386ee->enter($__internal_1a510bfc7f15f971fb58542138e4ad00f68d5cb5e5daf5bc8d520272173386ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $__internal_349374b85e848c86ab237e718c150e67cc8afb0abafebca68b8f4f7e0e21430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349374b85e848c86ab237e718c150e67cc8afb0abafebca68b8f4f7e0e21430e->enter($__internal_349374b85e848c86ab237e718c150e67cc8afb0abafebca68b8f4f7e0e21430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:detalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a510bfc7f15f971fb58542138e4ad00f68d5cb5e5daf5bc8d520272173386ee->leave($__internal_1a510bfc7f15f971fb58542138e4ad00f68d5cb5e5daf5bc8d520272173386ee_prof);

        
        $__internal_349374b85e848c86ab237e718c150e67cc8afb0abafebca68b8f4f7e0e21430e->leave($__internal_349374b85e848c86ab237e718c150e67cc8afb0abafebca68b8f4f7e0e21430e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac78178c023b25ce109840025e2c8f720d75c9defcc9c39bb0ace208441658b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac78178c023b25ce109840025e2c8f720d75c9defcc9c39bb0ace208441658b->enter($__internal_4ac78178c023b25ce109840025e2c8f720d75c9defcc9c39bb0ace208441658b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eb128c75f8f695c1ee8c32879ad59a7cff5e2aa7f44a900916ddbabd5a7240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb128c75f8f695c1ee8c32879ad59a7cff5e2aa7f44a900916ddbabd5a7240e->enter($__internal_8eb128c75f8f695c1ee8c32879ad59a7cff5e2aa7f44a900916ddbabd5a7240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Detalle incidencia</div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"box-body table-responsive no-padding\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody><tr>
                                            <td><strong>N° incidencia:</strong></td>
                                            <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 14, $this->getSourceContext()); })()), "codigoIncidenciaPk", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Titulo:</strong></td>
                                            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 18, $this->getSourceContext()); })()), "titulo", array()), "html", null, true);
        echo "</td>
                                        </tr> 
                                        <tr>
                                            <td><strong>Categoria:</strong></td>
                                            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 22, $this->getSourceContext()); })()), "categoriaRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>                     
                                        <tr>
                                            <td><strong>Prioridad:</strong></td>
                                            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 26, $this->getSourceContext()); })()), "prioridadRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cliente:</strong></td>
                                            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 30, $this->getSourceContext()); })()), "clienteRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fecha registro:</strong></td>
                                            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 34, $this->getSourceContext()); })()), "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Descripci&oacute;n:</strong></td>
                                            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 38, $this->getSourceContext()); })()), "descripcion", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fecha soluci&oacute;n:</strong></td>
                                            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 42, $this->getSourceContext()); })()), "fechaSolucion", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Soluci&oacute;n:</strong></td>
                                            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["arIncidencia"]) || array_key_exists("arIncidencia", $context) ? $context["arIncidencia"] : (function () { throw new Twig_Error_Runtime('Variable "arIncidencia" does not exist.', 46, $this->getSourceContext()); })()), "solucion", array()), "html", null, true);
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["arDetalleComentario"]);
        foreach ($context['_seq'] as $context["_key"] => $context["arDetalleComentario"]) {
            // line 68
            echo "                                        <tr>
                                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "fechaRegistro", array()), "Y/m/d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "username", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arDetalleComentario"], "comentario", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arDetalleComentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "     
                                </tbody>
                            </table>
                        </div>
                        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'form_start');
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "comentario", array()), 'label');
        echo "</label>
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "comentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Registrar su comentario")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-default\">Volver</button>
                                </a>
                            </div>
                        </div>
                        ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_8eb128c75f8f695c1ee8c32879ad59a7cff5e2aa7f44a900916ddbabd5a7240e->leave($__internal_8eb128c75f8f695c1ee8c32879ad59a7cff5e2aa7f44a900916ddbabd5a7240e_prof);

        
        $__internal_4ac78178c023b25ce109840025e2c8f720d75c9defcc9c39bb0ace208441658b->leave($__internal_4ac78178c023b25ce109840025e2c8f720d75c9defcc9c39bb0ace208441658b_prof);

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
        return array (  202 => 92,  194 => 87,  190 => 86,  182 => 81,  178 => 80,  172 => 77,  166 => 73,  157 => 71,  153 => 70,  149 => 69,  146 => 68,  142 => 67,  118 => 46,  111 => 42,  104 => 38,  97 => 34,  90 => 30,  83 => 26,  76 => 22,  69 => 18,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
                        <div class=\"form-group\">
                            <div class=\"box-body table-responsive no-padding\">
                                <table width=\"100%\" class=\"table table-condensed table-bordered\">
                                    <tbody><tr>
                                            <td><strong>N° incidencia:</strong></td>
                                            <td>{{arIncidencia.codigoIncidenciaPk}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Titulo:</strong></td>
                                            <td>{{arIncidencia.titulo}}</td>
                                        </tr> 
                                        <tr>
                                            <td><strong>Categoria:</strong></td>
                                            <td>{{arIncidencia.categoriaRel.nombre}}</td>
                                        </tr>                     
                                        <tr>
                                            <td><strong>Prioridad:</strong></td>
                                            <td>{{arIncidencia.prioridadRel.nombre}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cliente:</strong></td>
                                            <td>{{arIncidencia.clienteRel.nombre}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fecha registro:</strong></td>
                                            <td>{{arIncidencia.fechaRegistro | date('d/m/Y H:i')}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Descripci&oacute;n:</strong></td>
                                            <td>{{arIncidencia.descripcion}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fecha soluci&oacute;n:</strong></td>
                                            <td>{{arIncidencia.fechaSolucion | date('d/m/Y H:i')}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Soluci&oacute;n:</strong></td>
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
                        {{ form_start(form) }}
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">{{ form_label(form.comentario)}}</label>
                                {{ form_widget(form.comentario,{'attr':{'class':'form-control','placeholder':'Registrar su comentario'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
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
            </div>
        </div>
    {% endblock %}

", "AppBundle:Caso:detalle.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/detalle.html.twig");
    }
}
