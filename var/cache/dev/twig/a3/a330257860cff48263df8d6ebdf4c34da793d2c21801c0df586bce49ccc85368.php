<?php

/* AppBundle:Caso:nuevo.html.twig */
class __TwigTemplate_1269fa995f080c822b662995766ffc4b2946a9a2436e4ac77f6546060e893822 extends Twig_Template
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
        $__internal_875450c9587a6e595fd6f8851728ba70f975e9790d12422d98b9c291a34d3f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875450c9587a6e595fd6f8851728ba70f975e9790d12422d98b9c291a34d3f07->enter($__internal_875450c9587a6e595fd6f8851728ba70f975e9790d12422d98b9c291a34d3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $__internal_508cca46697eb443c95b1b792c45060242d9df358d21faa8e25979305b1ac4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508cca46697eb443c95b1b792c45060242d9df358d21faa8e25979305b1ac4b7->enter($__internal_508cca46697eb443c95b1b792c45060242d9df358d21faa8e25979305b1ac4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_875450c9587a6e595fd6f8851728ba70f975e9790d12422d98b9c291a34d3f07->leave($__internal_875450c9587a6e595fd6f8851728ba70f975e9790d12422d98b9c291a34d3f07_prof);

        
        $__internal_508cca46697eb443c95b1b792c45060242d9df358d21faa8e25979305b1ac4b7->leave($__internal_508cca46697eb443c95b1b792c45060242d9df358d21faa8e25979305b1ac4b7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_28430f6293045651634868462573128ef98b979326554336be2611b456bd5320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28430f6293045651634868462573128ef98b979326554336be2611b456bd5320->enter($__internal_28430f6293045651634868462573128ef98b979326554336be2611b456bd5320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65b4d838f55af4ada8b5a81b552aa18c63b624082d3f100d103f8665c03fc013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b4d838f55af4ada8b5a81b552aa18c63b624082d3f100d103f8665c03fc013->enter($__internal_65b4d838f55af4ada8b5a81b552aa18c63b624082d3f100d103f8665c03fc013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear incidencia</div>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Adjuntos</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"><br>
                                    <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                </div>
                            </div>
                            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1)) {
            // line 32
            echo "                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asignar a:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "usuarioAsignado", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Atendido:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "estadoAtendido", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucionado:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "estadoSolucionado", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                            ";
        } else {
            // line 49
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "usuarioAsignado", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "estadoSolucionado", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "estadoAtendido", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "solucion", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
                            ";
        }
        // line 54
        echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            ";
        // line 60
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 60, $this->getSourceContext()); })()), "user", array()), "codigoRolFk", array()) == 1)) {
            // line 61
            echo "                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucion:</strong></div>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "solucion", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 68
        echo "                        </div>
                        <div class=\"text-danger\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                        <div class=\"modal-footer\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        
        $__internal_65b4d838f55af4ada8b5a81b552aa18c63b624082d3f100d103f8665c03fc013->leave($__internal_65b4d838f55af4ada8b5a81b552aa18c63b624082d3f100d103f8665c03fc013_prof);

        
        $__internal_28430f6293045651634868462573128ef98b979326554336be2611b456bd5320->leave($__internal_28430f6293045651634868462573128ef98b979326554336be2611b456bd5320_prof);

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
        return array (  183 => 76,  176 => 72,  172 => 71,  167 => 69,  164 => 68,  157 => 64,  152 => 61,  150 => 60,  144 => 57,  139 => 54,  134 => 52,  130 => 51,  126 => 50,  121 => 49,  114 => 45,  105 => 39,  98 => 35,  93 => 32,  91 => 31,  81 => 24,  72 => 18,  65 => 14,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                                    {{ form_widget(form.prioridadRel,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.categoriaRel,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Adjuntos</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"><br>
                                    <input type=\"file\" name=\"adjunto[]\" id=\"adjunto\" multiple />
                                </div>
                            </div>
                            {% if app.user.codigoRolFk == 1 %}
                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Asignar a:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        {{ form_widget(form.usuarioAsignado,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Atendido:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        {{ form_widget(form.estadoAtendido,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucionado:</strong></div>
                                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                        {{ form_widget(form.estadoSolucionado,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            {% else %}
                                {{ form_widget(form.usuarioAsignado, { 'attr': {'style': 'display:none'} }) }}
                                {{ form_widget(form.estadoSolucionado, { 'attr': {'style': 'display:none'} }) }}
                                {{ form_widget(form.estadoAtendido, { 'attr': {'style': 'display:none'} }) }}
                                {{ form_widget(form.solucion, { 'attr': {'style': 'display:none'} }) }}
                            {% endif %}
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.descripcion,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                            {% if app.user.codigoRolFk == 1  %}
                                <div class=\"form-group\">
                                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Solucion:</strong></div>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        {{ form_widget(form.solucion,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            {% endif %}
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

", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
