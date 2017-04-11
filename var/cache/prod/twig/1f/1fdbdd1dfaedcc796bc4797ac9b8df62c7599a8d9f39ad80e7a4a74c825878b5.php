<?php

/* AppBundle:Caso:nuevo.html.twig */
class __TwigTemplate_3828aa6c8d5e1df44954a75c8447170f3dc7eb39781f5afd8cfb86fe185a930b extends Twig_Template
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
        $__internal_57c07331ca73f25852fc21cafd1391f2044be75b9b88404748909b0a036ce471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c07331ca73f25852fc21cafd1391f2044be75b9b88404748909b0a036ce471->enter($__internal_57c07331ca73f25852fc21cafd1391f2044be75b9b88404748909b0a036ce471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c07331ca73f25852fc21cafd1391f2044be75b9b88404748909b0a036ce471->leave($__internal_57c07331ca73f25852fc21cafd1391f2044be75b9b88404748909b0a036ce471_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c705c112adf89bd0ba74b93221d5f205ff44497309f6364ce185fc77f97e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c705c112adf89bd0ba74b93221d5f205ff44497309f6364ce185fc77f97e0f->enter($__internal_80c705c112adf89bd0ba74b93221d5f205ff44497309f6364ce185fc77f97e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear incidencia</div>
                    <div class=\"panel-body\">
                        <div class=\"row form-group\">
                            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
                            <div class=\"form-group\" >
                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "titulo", array()), 'label');
        echo "
                                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titulo del caso")));
        echo "
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Priodad</label>
                                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => ".:Seleccione:.")));
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Categoria</label>
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Grupo</label>
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "grupoRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        echo "
                                    </div>
                                </div>
                                ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1)) {
            // line 33
            echo "                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Asignar a</label>
                                            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "usuarioAsignado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "estado")));
            echo "
                                        </div>
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado</label>
                                            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "estadoSolucionado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "estado")));
            echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado solucionado</label>
                                            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "estadoAtendido", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "estado")));
            echo "
                                        </div>                                        
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado atendido</label>
                                            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "solucion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "solucion")));
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 54
        echo "                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label for=\"adjunto\">Adjuntos</label>
                                        <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "descripcion", array()), 'label');
        echo "
                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" aling =\"left\">
                                        <br>
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                        <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                            <button type=\"button\" class=\"btn btn-default\">Volver</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-danger\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_80c705c112adf89bd0ba74b93221d5f205ff44497309f6364ce185fc77f97e0f->leave($__internal_80c705c112adf89bd0ba74b93221d5f205ff44497309f6364ce185fc77f97e0f_prof);

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
        return array (  166 => 77,  162 => 76,  153 => 70,  149 => 69,  140 => 63,  136 => 62,  126 => 54,  119 => 50,  112 => 46,  103 => 40,  96 => 36,  91 => 33,  89 => 32,  83 => 29,  76 => 25,  67 => 19,  60 => 15,  56 => 14,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear incidencia</div>
                    <div class=\"panel-body\">
                        <div class=\"row form-group\">
                            {{ form_start(form) }}
                            <div class=\"form-group\" >
                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        {{ form_label(form.titulo)}}
                                        {{ form_widget(form.titulo,{'attr':{'class':'form-control','placeholder':'Titulo del caso'}})}}
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Priodad</label>
                                        {{ form_widget(form.prioridadRel,{'attr':{'class':'form-control','placeholder':'.:Seleccione:.'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Categoria</label>
                                        {{ form_widget(form.categoriaRel,{'attr':{'class':'form-control','placeholder':'Categoria'}}) }}
                                    </div>
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label class=\"control-label\">Grupo</label>
                                        {{ form_widget(form.grupoRel,{'attr':{'class':'form-control','placeholder':'Cliente'}}) }}
                                    </div>
                                </div>
                                {% if app.user.codigoRolFk == 1 %}
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Asignar a</label>
                                            {{ form_widget(form.usuarioAsignado,{'attr':{'class':'form-control','placeholder':'estado'}}) }}
                                        </div>
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado</label>
                                            {{ form_widget(form.estadoSolucionado,{'attr':{'class':'form-control','placeholder':'estado'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado solucionado</label>
                                            {{ form_widget(form.estadoAtendido,{'attr':{'class':'form-control','placeholder':'estado'}}) }}
                                        </div>                                        
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Estado atendido</label>
                                            {{ form_widget(form.solucion,{'attr':{'class':'form-control','placeholder':'solucion'}}) }}
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"form-group\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label for=\"adjunto\">Adjuntos</label>
                                        <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        {{ form_label(form.descripcion)}}
                                        {{ form_widget(form.descripcion,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" aling =\"left\">
                                        <br>
                                        {{form_widget(form.guardar,{'attr':{'class':'btn btn-primary'}}) }}
                                        <a href=\"{{path('caso_lista')}}\">
                                            <button type=\"button\" class=\"btn btn-default\">Volver</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-danger\">{{ form_errors(form)}}</div>
                            {{ form_end(form)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
