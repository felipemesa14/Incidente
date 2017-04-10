<?php

/* AppBundle:Caso:CrearIncidencia.html.twig */
class __TwigTemplate_733c2c305782dc4d2d59a0f2e83762105b295648d5531d053dc9daeb73abe482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Caso:CrearIncidencia.html.twig", 1);
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
        $__internal_40e21cd7885a3e86128a39ce24f4a12cabe0597e119b678a73f27d02b049803e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e21cd7885a3e86128a39ce24f4a12cabe0597e119b678a73f27d02b049803e->enter($__internal_40e21cd7885a3e86128a39ce24f4a12cabe0597e119b678a73f27d02b049803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:CrearIncidencia.html.twig"));

        $__internal_7ac21797dcbb0aacfcabaaf98d1a9385677372b2edcb1b22167e204c5b2cf465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac21797dcbb0aacfcabaaf98d1a9385677372b2edcb1b22167e204c5b2cf465->enter($__internal_7ac21797dcbb0aacfcabaaf98d1a9385677372b2edcb1b22167e204c5b2cf465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Caso:CrearIncidencia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e21cd7885a3e86128a39ce24f4a12cabe0597e119b678a73f27d02b049803e->leave($__internal_40e21cd7885a3e86128a39ce24f4a12cabe0597e119b678a73f27d02b049803e_prof);

        
        $__internal_7ac21797dcbb0aacfcabaaf98d1a9385677372b2edcb1b22167e204c5b2cf465->leave($__internal_7ac21797dcbb0aacfcabaaf98d1a9385677372b2edcb1b22167e204c5b2cf465_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2448946e4eb5f1067f02b28b466e149e15fcfdb4db84d21e4463ff5e9fc0863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2448946e4eb5f1067f02b28b466e149e15fcfdb4db84d21e4463ff5e9fc0863->enter($__internal_c2448946e4eb5f1067f02b28b466e149e15fcfdb4db84d21e4463ff5e9fc0863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6d67590e5e8b85ca0db00006d22a9f7e8ddcd6e59cce9d91c4c7fa7409f9af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d67590e5e8b85ca0db00006d22a9f7e8ddcd6e59cce9d91c4c7fa7409f9af2->enter($__internal_c6d67590e5e8b85ca0db00006d22a9f7e8ddcd6e59cce9d91c4c7fa7409f9af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear Caso</div>
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
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "prioridadRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => ".:Seleccione:.")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Cliente</label>
                                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "clienteRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        echo "
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Categoria</label>
                                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "categoriaRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Grupo</label>
                                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "grupoRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        echo "
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Asignar A</label>
                                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "usuarioAsignado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
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
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "descripcion", array()), 'label');
        echo "
                                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" aling =\"left\">
                                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
                                            </div>
                                        </div>
                                    </div>
                                                <div class=\"text-danger\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), 'errors');
        echo "</div>
                                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c6d67590e5e8b85ca0db00006d22a9f7e8ddcd6e59cce9d91c4c7fa7409f9af2->leave($__internal_c6d67590e5e8b85ca0db00006d22a9f7e8ddcd6e59cce9d91c4c7fa7409f9af2_prof);

        
        $__internal_c2448946e4eb5f1067f02b28b466e149e15fcfdb4db84d21e4463ff5e9fc0863->leave($__internal_c2448946e4eb5f1067f02b28b466e149e15fcfdb4db84d21e4463ff5e9fc0863_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Caso:CrearIncidencia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 64,  144 => 63,  136 => 58,  128 => 53,  124 => 52,  110 => 41,  103 => 37,  94 => 31,  87 => 27,  78 => 21,  70 => 16,  66 => 15,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Crear Caso</div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"form-group\">
                                {{ form_start(form) }}
                                    <div class=\"form-group\" >
                                        <div class=\"form-group\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_label(form.titulo)}}
                                                {{ form_widget(form.titulo,{'attr':{'class':'form-control','placeholder':'Titulo del caso'}}) }}
                                                
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Priodad</label>
                                                {{ form_widget(form.prioridadRel,{'attr':{'class':'form-control','placeholder':'.:Seleccione:.'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Cliente</label>
                                                {{ form_widget(form.clienteRel,{'attr':{'class':'form-control','placeholder':'Cliente'}}) }}
                                            </div>
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
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <label class=\"control-label\">Asignar A</label>
                                                {{ form_widget(form.usuarioAsignado,{'attr':{'class':'form-control','placeholder':'Categoria'}}) }}
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
                                                {{form_widget(form.guardar,{'attr':{'class':'btn btn-primary'}}) }}
                                                <button type=\"button\" class=\"btn btn-default\">Volver</button>
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

", "AppBundle:Caso:CrearIncidencia.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Caso/CrearIncidencia.html.twig");
    }
}
