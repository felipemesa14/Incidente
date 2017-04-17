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
        $__internal_60adbe328964465abeb84be1fa17bcf4a377fd2e7328b50d219ed7a8f9c9fb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60adbe328964465abeb84be1fa17bcf4a377fd2e7328b50d219ed7a8f9c9fb3b->enter($__internal_60adbe328964465abeb84be1fa17bcf4a377fd2e7328b50d219ed7a8f9c9fb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $__internal_adc0139b3daffe00b287bc69b62d37b36a3ffe34ba9157d8039c2ee311966736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc0139b3daffe00b287bc69b62d37b36a3ffe34ba9157d8039c2ee311966736->enter($__internal_adc0139b3daffe00b287bc69b62d37b36a3ffe34ba9157d8039c2ee311966736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60adbe328964465abeb84be1fa17bcf4a377fd2e7328b50d219ed7a8f9c9fb3b->leave($__internal_60adbe328964465abeb84be1fa17bcf4a377fd2e7328b50d219ed7a8f9c9fb3b_prof);

        
        $__internal_adc0139b3daffe00b287bc69b62d37b36a3ffe34ba9157d8039c2ee311966736->leave($__internal_adc0139b3daffe00b287bc69b62d37b36a3ffe34ba9157d8039c2ee311966736_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d16fe072572289160611e88429576eab339a37b81c1e570a1e7dab103999b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d16fe072572289160611e88429576eab339a37b81c1e570a1e7dab103999b24->enter($__internal_4d16fe072572289160611e88429576eab339a37b81c1e570a1e7dab103999b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b5ce61d241954235c8c754b70277da0ca8dabef9d44af4037286fb1e795f100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5ce61d241954235c8c754b70277da0ca8dabef9d44af4037286fb1e795f100->enter($__internal_4b5ce61d241954235c8c754b70277da0ca8dabef9d44af4037286fb1e795f100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                        <div class=\"modal-footer\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                            </a>
                        </div>
                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        
        $__internal_4b5ce61d241954235c8c754b70277da0ca8dabef9d44af4037286fb1e795f100->leave($__internal_4b5ce61d241954235c8c754b70277da0ca8dabef9d44af4037286fb1e795f100_prof);

        
        $__internal_4d16fe072572289160611e88429576eab339a37b81c1e570a1e7dab103999b24->leave($__internal_4d16fe072572289160611e88429576eab339a37b81c1e570a1e7dab103999b24_prof);

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
        return array (  113 => 41,  106 => 37,  102 => 36,  97 => 34,  90 => 30,  81 => 24,  72 => 18,  65 => 14,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                                    {{ form_widget(form.prioridadRel,{'attr':{'class':'form-control','required':'required'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><strong>Categoria:</strong></div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    {{ form_widget(form.categoriaRel,{'attr':{'class':'form-control','required':'required'}}) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"><strong>Descripci&oacute;n:</strong></label>
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.descripcion,{'attr':{'class':'form-control'}}) }}
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

", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
