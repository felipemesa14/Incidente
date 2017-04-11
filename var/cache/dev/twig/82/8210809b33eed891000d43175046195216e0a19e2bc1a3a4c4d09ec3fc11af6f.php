<?php

/* AppBundle:Login:registrar.html.twig */
class __TwigTemplate_06d97014b876ecdeca6f868bdbbd3fef58dd0c2d39a7c0442f9d201667c87893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Login:registrar.html.twig", 1);
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
        $__internal_a53a8fd11acf4a95f03d7d8463bdb6800960734471a02b93b90297359b70e3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53a8fd11acf4a95f03d7d8463bdb6800960734471a02b93b90297359b70e3a0->enter($__internal_a53a8fd11acf4a95f03d7d8463bdb6800960734471a02b93b90297359b70e3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:registrar.html.twig"));

        $__internal_2a213e0bc79b07182fa1f5521ee0f139b8adbdfedcea2d7aa2445cb5b252adb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a213e0bc79b07182fa1f5521ee0f139b8adbdfedcea2d7aa2445cb5b252adb7->enter($__internal_2a213e0bc79b07182fa1f5521ee0f139b8adbdfedcea2d7aa2445cb5b252adb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:registrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53a8fd11acf4a95f03d7d8463bdb6800960734471a02b93b90297359b70e3a0->leave($__internal_a53a8fd11acf4a95f03d7d8463bdb6800960734471a02b93b90297359b70e3a0_prof);

        
        $__internal_2a213e0bc79b07182fa1f5521ee0f139b8adbdfedcea2d7aa2445cb5b252adb7->leave($__internal_2a213e0bc79b07182fa1f5521ee0f139b8adbdfedcea2d7aa2445cb5b252adb7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4fe3b004103376ef736b3a7d6faeeca1b25dc472115a2aa3108bf29d1835d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fe3b004103376ef736b3a7d6faeeca1b25dc472115a2aa3108bf29d1835d09->enter($__internal_f4fe3b004103376ef736b3a7d6faeeca1b25dc472115a2aa3108bf29d1835d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21bb13983dace996266f238b7475de6e10ea199369184b73a8fbbdbff0cba146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bb13983dace996266f238b7475de6e10ea199369184b73a8fbbdbff0cba146->enter($__internal_21bb13983dace996266f238b7475de6e10ea199369184b73a8fbbdbff0cba146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Registrar usuario</div>
                    <div class=\"panel-body\">
                        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "nombre", array()), 'label');
        echo "
                                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre completo")));
        // line 14
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "apellido", array()), 'label');
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "apellido", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido completo")));
        // line 19
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electronico")));
        // line 26
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "telefono", array()), 'label');
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono")));
        // line 31
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label>Nombre de usuario</label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        // line 38
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        // line 44
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        // line 48
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Rol de usuario</label>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "rolRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rol")));
        // line 55
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Cliente</label>
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "clienteRel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cliente")));
        // line 60
        echo "
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                            </div>
                        </div>
                        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_21bb13983dace996266f238b7475de6e10ea199369184b73a8fbbdbff0cba146->leave($__internal_21bb13983dace996266f238b7475de6e10ea199369184b73a8fbbdbff0cba146_prof);

        
        $__internal_f4fe3b004103376ef736b3a7d6faeeca1b25dc472115a2aa3108bf29d1835d09->leave($__internal_f4fe3b004103376ef736b3a7d6faeeca1b25dc472115a2aa3108bf29d1835d09_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  155 => 65,  148 => 60,  146 => 59,  140 => 55,  138 => 54,  130 => 48,  128 => 47,  123 => 44,  121 => 43,  114 => 38,  112 => 37,  104 => 31,  102 => 30,  98 => 29,  93 => 26,  91 => 25,  87 => 24,  80 => 19,  78 => 18,  74 => 17,  69 => 14,  67 => 13,  63 => 12,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Registrar usuario</div>
                    <div class=\"panel-body\">
                        {{ form_start(form) }}
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_label(form.nombre)}}
                                {{ form_widget(form.nombre,{'attr':{'class':'form-control',
                                                        'placeholder':'Nombre completo'}}) }}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_label(form.apellido)}}
                                {{ form_widget(form.apellido,{'attr':{'class':'form-control',
                                                        'placeholder':'Apellido completo'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_label(form.email)}}
                                {{ form_widget(form.email,{'attr':{'class':'form-control',
                                                        'placeholder':'Correo electronico'}}) }}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_label(form.telefono)}}
                                {{ form_widget(form.telefono,{'attr':{'class':'form-control',
                                                        'placeholder':'Telefono'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <label>Nombre de usuario</label>
                                {{ form_widget(form.username,{'attr':{'class':'form-control',
                                                        'placeholder':'Nombre de Usuario'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_row(form.plainPassword.first,{'attr':{'class':'form-control',
                                                        'placeholder':'Contraseña'}}) }}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                {{ form_row(form.plainPassword.second,{'attr':{'class':'form-control',
                                                        'placeholder':'Contraseña'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Rol de usuario</label>
                                {{ form_widget(form.rolRel,{'attr':{'class':'form-control',
                                                        'placeholder':'Rol'}}) }}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <label>Cliente</label>
                                {{ form_widget(form.clienteRel,{'attr':{'class':'form-control',
                                                        'placeholder':'Cliente'}}) }}
                            </div>
                        </div>
                        <div class=\"row form-group\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                {{ form_widget(form.guardar,{'attr':{'class':'btn btn-primary'}}) }}
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "AppBundle:Login:registrar.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/registrar.html.twig");
    }
}
