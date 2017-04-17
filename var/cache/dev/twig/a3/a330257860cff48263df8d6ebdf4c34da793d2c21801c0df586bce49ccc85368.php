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
        $__internal_5637d811f63fad97afbdc27125a687045fe9c8c084c0c9037cd5eea3ceaab45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5637d811f63fad97afbdc27125a687045fe9c8c084c0c9037cd5eea3ceaab45b->enter($__internal_5637d811f63fad97afbdc27125a687045fe9c8c084c0c9037cd5eea3ceaab45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $__internal_77a472a8f48860f06689d5f0737f3c2c3ad7a5102eaf46196bd9a6daf2682ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a472a8f48860f06689d5f0737f3c2c3ad7a5102eaf46196bd9a6daf2682ca2->enter($__internal_77a472a8f48860f06689d5f0737f3c2c3ad7a5102eaf46196bd9a6daf2682ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5637d811f63fad97afbdc27125a687045fe9c8c084c0c9037cd5eea3ceaab45b->leave($__internal_5637d811f63fad97afbdc27125a687045fe9c8c084c0c9037cd5eea3ceaab45b_prof);

        
        $__internal_77a472a8f48860f06689d5f0737f3c2c3ad7a5102eaf46196bd9a6daf2682ca2->leave($__internal_77a472a8f48860f06689d5f0737f3c2c3ad7a5102eaf46196bd9a6daf2682ca2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4783942fa4508f7d77d34777bdfd19b54ec794d9715963030bb04e412e141d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4783942fa4508f7d77d34777bdfd19b54ec794d9715963030bb04e412e141d4b->enter($__internal_4783942fa4508f7d77d34777bdfd19b54ec794d9715963030bb04e412e141d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb711271a6a7498423192107d7013c66af00e7aea830c2e75fa5270e591a1952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb711271a6a7498423192107d7013c66af00e7aea830c2e75fa5270e591a1952->enter($__internal_eb711271a6a7498423192107d7013c66af00e7aea830c2e75fa5270e591a1952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb711271a6a7498423192107d7013c66af00e7aea830c2e75fa5270e591a1952->leave($__internal_eb711271a6a7498423192107d7013c66af00e7aea830c2e75fa5270e591a1952_prof);

        
        $__internal_4783942fa4508f7d77d34777bdfd19b54ec794d9715963030bb04e412e141d4b->leave($__internal_4783942fa4508f7d77d34777bdfd19b54ec794d9715963030bb04e412e141d4b_prof);

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
