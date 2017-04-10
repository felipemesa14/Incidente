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
        $__internal_3e66ee9aab9c591670a73a7ca20a1c674d50a59684639200193365ea39fcab41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e66ee9aab9c591670a73a7ca20a1c674d50a59684639200193365ea39fcab41->enter($__internal_3e66ee9aab9c591670a73a7ca20a1c674d50a59684639200193365ea39fcab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $__internal_89074d3e99d8347bfd6b9edf19504694cf028c2a7bf87fb078c13321906957e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89074d3e99d8347bfd6b9edf19504694cf028c2a7bf87fb078c13321906957e0->enter($__internal_89074d3e99d8347bfd6b9edf19504694cf028c2a7bf87fb078c13321906957e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e66ee9aab9c591670a73a7ca20a1c674d50a59684639200193365ea39fcab41->leave($__internal_3e66ee9aab9c591670a73a7ca20a1c674d50a59684639200193365ea39fcab41_prof);

        
        $__internal_89074d3e99d8347bfd6b9edf19504694cf028c2a7bf87fb078c13321906957e0->leave($__internal_89074d3e99d8347bfd6b9edf19504694cf028c2a7bf87fb078c13321906957e0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a3ae1a390d054c5e757b69283e36aef9497a85adffb916a9bab3f66b220275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a3ae1a390d054c5e757b69283e36aef9497a85adffb916a9bab3f66b220275->enter($__internal_82a3ae1a390d054c5e757b69283e36aef9497a85adffb916a9bab3f66b220275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7e54d3d1766cb20bd6b54836c4e61078e8fb83df93977da68d1b6263a2f3cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e54d3d1766cb20bd6b54836c4e61078e8fb83df93977da68d1b6263a2f3cbf->enter($__internal_a7e54d3d1766cb20bd6b54836c4e61078e8fb83df93977da68d1b6263a2f3cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
                                <div class=\"form-group\" >
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "titulo", array()), 'label');
        echo "
                                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "titulo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titulo del caso")));
        echo "
                                        </div>
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Priodad</label>
                                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => ".:Seleccione:.")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Categoria</label>
                                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Grupo</label>
                                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "grupoRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "descripcion", array()), 'label');
        echo "
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" aling =\"left\">
                                            <br>
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a7e54d3d1766cb20bd6b54836c4e61078e8fb83df93977da68d1b6263a2f3cbf->leave($__internal_a7e54d3d1766cb20bd6b54836c4e61078e8fb83df93977da68d1b6263a2f3cbf_prof);

        
        $__internal_82a3ae1a390d054c5e757b69283e36aef9497a85adffb916a9bab3f66b220275->leave($__internal_82a3ae1a390d054c5e757b69283e36aef9497a85adffb916a9bab3f66b220275_prof);

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
        return array (  139 => 58,  135 => 57,  126 => 51,  122 => 50,  113 => 44,  109 => 43,  95 => 32,  86 => 26,  77 => 20,  70 => 16,  66 => 15,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
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
                        <div class=\"row\">
                            <div class=\"form-group\">
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
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                            <label class=\"control-label\">Grupo</label>
                                            {{ form_widget(form.grupoRel,{'attr':{'class':'form-control','placeholder':'Cliente'}}) }}
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
    </div>
{% endblock %}

", "AppBundle:Caso:nuevo.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/nuevo.html.twig");
    }
}
