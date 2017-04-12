<?php

/* AppBundle:Caso:nuevo.html.twig */
class __TwigTemplate_495ef55ebfc49726850771d59646b5417c9c40b14a514463db0a77d585d84d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:nuevo.html.twig", 1);
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
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear incidencia</div>
                    <section class=\"content\">        \t
                        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asunto:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titulo del caso")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Prioridad:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Adjuntos</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"><br>
                                    <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                </div>
                            </div>
                            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "codigoRolFk", array()) == 1)) {
            // line 32
            echo "                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asignar a:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "usuarioAsignado", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Atendido:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "estadoAtendido", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucionado:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "estadoSolucionado", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                            ";
        } else {
            // line 49
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "usuarioAsignado", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "estadoSolucionado", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "estadoAtendido", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "solucion", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                            ";
        }
        // line 54
        echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            ";
        // line 60
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "codigoRolFk", array()) == 1)) {
            // line 61
            echo "                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucion:</strong></div>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "solucion", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 68
        echo "                        </div>
                        <div class=\"text-danger\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div>
                        <div class=\"modal-footer\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 76,  158 => 72,  154 => 71,  149 => 69,  146 => 68,  139 => 64,  134 => 61,  132 => 60,  126 => 57,  121 => 54,  116 => 52,  112 => 51,  108 => 50,  103 => 49,  96 => 45,  87 => 39,  80 => 35,  75 => 32,  73 => 31,  63 => 24,  54 => 18,  47 => 14,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
