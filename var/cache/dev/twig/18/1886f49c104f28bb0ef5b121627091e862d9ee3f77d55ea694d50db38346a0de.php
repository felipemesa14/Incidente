<?php

/* Login/login.html.twig */
class __TwigTemplate_84ce863c04c5351ad0c543e5b14c97f0bd7b210ee8233c1b9a55844605d03082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Login/login.html.twig", 1);
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
        $__internal_cdf8fb0f11790246e001a19ba3ad09b9b78ef0e23cf22a0d8e1f67a82ee5683a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf8fb0f11790246e001a19ba3ad09b9b78ef0e23cf22a0d8e1f67a82ee5683a->enter($__internal_cdf8fb0f11790246e001a19ba3ad09b9b78ef0e23cf22a0d8e1f67a82ee5683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/login.html.twig"));

        $__internal_ab39884cfe5e5966744f1c99b44ec690da93787322e47143dae1ef211025ee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39884cfe5e5966744f1c99b44ec690da93787322e47143dae1ef211025ee1b->enter($__internal_ab39884cfe5e5966744f1c99b44ec690da93787322e47143dae1ef211025ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf8fb0f11790246e001a19ba3ad09b9b78ef0e23cf22a0d8e1f67a82ee5683a->leave($__internal_cdf8fb0f11790246e001a19ba3ad09b9b78ef0e23cf22a0d8e1f67a82ee5683a_prof);

        
        $__internal_ab39884cfe5e5966744f1c99b44ec690da93787322e47143dae1ef211025ee1b->leave($__internal_ab39884cfe5e5966744f1c99b44ec690da93787322e47143dae1ef211025ee1b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc680eb2622e6da2efcf53cbf94e69da9cf88f76980c7212407cbb0c1c9a994c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc680eb2622e6da2efcf53cbf94e69da9cf88f76980c7212407cbb0c1c9a994c->enter($__internal_cc680eb2622e6da2efcf53cbf94e69da9cf88f76980c7212407cbb0c1c9a994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d0041ad4d2e7afcc71bab4856487b8cc5c0feea6282566c2b1d209b29cef17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0041ad4d2e7afcc71bab4856487b8cc5c0feea6282566c2b1d209b29cef17d->enter($__internal_1d0041ad4d2e7afcc71bab4856487b8cc5c0feea6282566c2b1d209b29cef17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Login Casos AppSoga</div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"\">          
                            <label for=\"email\" class=\"col-md-4 control-label\">Usuario</label>
                            <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <input id=\"username\" type=\"text\" class=\"form-control\" name=\"username\"
                                       placeholder=\"Usuario\" required autofocus>
                            </div>
                            </div>
                            <div class=\"form-group\">
                            <label for=\"contraseña\" class=\"col-md-4 control-label\">Contraseña</label>
                            <div class=\"col-md-6\">
                                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                       name=\"password\" required>
                            </div>
                            </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Ingresar
                            </button>
                        </div>
                    </div>
                </form>
                    </div>
            </div>
        </div>
       </div>
    </div>
";
        
        $__internal_1d0041ad4d2e7afcc71bab4856487b8cc5c0feea6282566c2b1d209b29cef17d->leave($__internal_1d0041ad4d2e7afcc71bab4856487b8cc5c0feea6282566c2b1d209b29cef17d_prof);

        
        $__internal_cc680eb2622e6da2efcf53cbf94e69da9cf88f76980c7212407cbb0c1c9a994c->leave($__internal_cc680eb2622e6da2efcf53cbf94e69da9cf88f76980c7212407cbb0c1c9a994c_prof);

    }

    public function getTemplateName()
    {
        return "Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Login Casos AppSoga</div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"\">          
                            <label for=\"email\" class=\"col-md-4 control-label\">Usuario</label>
                            <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <input id=\"username\" type=\"text\" class=\"form-control\" name=\"username\"
                                       placeholder=\"Usuario\" required autofocus>
                            </div>
                            </div>
                            <div class=\"form-group\">
                            <label for=\"contraseña\" class=\"col-md-4 control-label\">Contraseña</label>
                            <div class=\"col-md-6\">
                                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                       name=\"password\" required>
                            </div>
                            </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Ingresar
                            </button>
                        </div>
                    </div>
                </form>
                    </div>
            </div>
        </div>
       </div>
    </div>
{% endblock %}
", "Login/login.html.twig", "/var/www/html/incidente/app/Resources/views/Login/login.html.twig");
    }
}
