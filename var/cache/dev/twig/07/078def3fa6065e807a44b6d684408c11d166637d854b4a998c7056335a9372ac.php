<?php

/* AppBundle:Caso:editarAdmin.html.twig */
class __TwigTemplate_5a9b2e0255d66e3931be2483fba2dce42f373752314d19a2064072c1f2d3fe86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:editarAdmin.html.twig", 1);
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
        $__internal_266f483fe2dc9cc89966203f590270cfd0797b3fa0c0e4a1862a1743976f41ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266f483fe2dc9cc89966203f590270cfd0797b3fa0c0e4a1862a1743976f41ad->enter($__internal_266f483fe2dc9cc89966203f590270cfd0797b3fa0c0e4a1862a1743976f41ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:editarAdmin.html.twig"));

        $__internal_f376dd4df7cc6e9e3215c9eba9a559d09f8fb1c4196d15572b5dbbf372b8d83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f376dd4df7cc6e9e3215c9eba9a559d09f8fb1c4196d15572b5dbbf372b8d83b->enter($__internal_f376dd4df7cc6e9e3215c9eba9a559d09f8fb1c4196d15572b5dbbf372b8d83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:editarAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266f483fe2dc9cc89966203f590270cfd0797b3fa0c0e4a1862a1743976f41ad->leave($__internal_266f483fe2dc9cc89966203f590270cfd0797b3fa0c0e4a1862a1743976f41ad_prof);

        
        $__internal_f376dd4df7cc6e9e3215c9eba9a559d09f8fb1c4196d15572b5dbbf372b8d83b->leave($__internal_f376dd4df7cc6e9e3215c9eba9a559d09f8fb1c4196d15572b5dbbf372b8d83b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_874d307d24ace4a812be6a38194a26b382dd576c9441bda19de561c7ebf36aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874d307d24ace4a812be6a38194a26b382dd576c9441bda19de561c7ebf36aa1->enter($__internal_874d307d24ace4a812be6a38194a26b382dd576c9441bda19de561c7ebf36aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16b80b98081100e0cfadf88c297512480333c78772a67dac4ea21a8466a7bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b80b98081100e0cfadf88c297512480333c78772a67dac4ea21a8466a7bfee->enter($__internal_16b80b98081100e0cfadf88c297512480333c78772a67dac4ea21a8466a7bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Editar incidencia</div>
                    <section class=\"content\">        \t
                        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asunto:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titulo del caso")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Prioridad:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asignar a:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "usuarioAsignado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Atendido:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "estadoAtendido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucionado:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "estadoSolucionado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucion:</strong></div>
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "solucion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"text-danger\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                        <div class=\"modal-footer\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        
        $__internal_16b80b98081100e0cfadf88c297512480333c78772a67dac4ea21a8466a7bfee->leave($__internal_16b80b98081100e0cfadf88c297512480333c78772a67dac4ea21a8466a7bfee_prof);

        
        $__internal_874d307d24ace4a812be6a38194a26b382dd576c9441bda19de561c7ebf36aa1->leave($__internal_874d307d24ace4a812be6a38194a26b382dd576c9441bda19de561c7ebf36aa1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:editarAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  138 => 57,  134 => 56,  129 => 54,  122 => 50,  113 => 44,  104 => 38,  97 => 34,  88 => 28,  81 => 24,  72 => 18,  65 => 14,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Editar incidencia</div>
                    <section class=\"content\">        \t
                        {{ form_start(form, { 'attr': {'class': 'form-horizontal'} }) }}
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asunto:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.titulo,{'attr':{'class':'form-control','placeholder':'Titulo del caso'}})}}
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Prioridad:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.prioridadRel,{'attr':{'class':'form-control','required':'required'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.categoriaRel,{'attr':{'class':'form-control','required':'required'}}) }}
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asignar a:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.usuarioAsignado,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Atendido:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.estadoAtendido,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucionado:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.estadoSolucionado,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.descripcion,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucion:</strong></div>
                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                    {{ form_widget(form.solucion,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"text-danger\">{{ form_errors(form)}}</div>
                        <div class=\"modal-footer\">
                            {{form_widget(form.guardar,{'attr':{'class':'btn btn-primary'}}) }}
                            <a href=\"{{path('caso_lista')}}\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                        {{ form_end(form)}}
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{% endblock %}



", "AppBundle:Caso:editarAdmin.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/editarAdmin.html.twig");
    }
}
