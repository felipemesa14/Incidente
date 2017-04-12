<?php

/* AppBundle:Caso:detalle.html.twig */
class __TwigTemplate_a51f99a2ef3b2c33070992a9cfe7cfb1d5e71fbfc0ed412992c4f606dc2d4838 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "codigoIncidenciaPk", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Titulo:</strong></td>
                                            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "titulo", array()), "html", null, true);
        echo "</td>
                                        </tr> 
                                        <tr>
                                            <td class=\"active\"><strong>Categoria:</strong></td>
                                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "categoriaRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>                     
                                        <tr>
                                            <td class=\"active\"><strong>Prioridad:</strong></td>
                                            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "prioridadRel", array()), "nombre", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "clienteRel", array()), "nombre", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha registro:</strong></td>
                                            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "fechaRegistro", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Descripci&oacute;n:</strong></td>
                                            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "descripcion", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td class=\"active\"><strong>Fecha soluci&oacute;n:</strong></td>
                                            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "fechaSolucion", array()), "d/m/Y H:i"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["arIncidencia"] ?? null), "solucion", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label class=\"control-label\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "comentario", array()), 'label');
        echo "</label>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "comentario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Registrar su comentario")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        ";
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
        return array (  198 => 106,  190 => 101,  186 => 100,  177 => 94,  173 => 93,  167 => 90,  161 => 86,  152 => 84,  148 => 83,  144 => 82,  141 => 81,  137 => 80,  113 => 59,  100 => 49,  93 => 45,  86 => 41,  79 => 37,  66 => 27,  59 => 23,  52 => 19,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Caso:detalle.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/detalle.html.twig");
    }
}
