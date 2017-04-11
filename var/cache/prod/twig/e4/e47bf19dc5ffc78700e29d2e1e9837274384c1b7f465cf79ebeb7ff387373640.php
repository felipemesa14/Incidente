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
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"form-group\">
                                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                <div class=\"form-group\" >
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "titulo", array()), 'label');
        echo "
                                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titulo del caso")));
        echo "
                                        </div>
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Priodad</label>
                                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => ".:Seleccione:.")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Categoria</label>
                                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Grupo</label>
                                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "grupoRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label for=\"adjunto\">Adjuntos</label>
                                            <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "descripcion", array()), 'label');
        echo "
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" aling =\"left\">
                                            <br>
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-danger\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div>
                                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                            </div>
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
        return array (  121 => 58,  117 => 57,  108 => 51,  104 => 50,  95 => 44,  91 => 43,  77 => 32,  68 => 26,  59 => 20,  52 => 16,  48 => 15,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
