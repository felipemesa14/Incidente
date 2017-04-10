<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_2a0de785b86b4fd72453cee105d1f672f2a6381bb34c2d2dad23597e23eb4f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Login:login.html.twig", 1);
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
        $__internal_5dd549bdcf2a9a0321193234881aa19175cc497bb09bde8ea80e1928ce53ef26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd549bdcf2a9a0321193234881aa19175cc497bb09bde8ea80e1928ce53ef26->enter($__internal_5dd549bdcf2a9a0321193234881aa19175cc497bb09bde8ea80e1928ce53ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $__internal_d655e5a84db47320462da13d253d3c48d2c5d1699f4f82ea8f7053089124aad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d655e5a84db47320462da13d253d3c48d2c5d1699f4f82ea8f7053089124aad8->enter($__internal_d655e5a84db47320462da13d253d3c48d2c5d1699f4f82ea8f7053089124aad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dd549bdcf2a9a0321193234881aa19175cc497bb09bde8ea80e1928ce53ef26->leave($__internal_5dd549bdcf2a9a0321193234881aa19175cc497bb09bde8ea80e1928ce53ef26_prof);

        
        $__internal_d655e5a84db47320462da13d253d3c48d2c5d1699f4f82ea8f7053089124aad8->leave($__internal_d655e5a84db47320462da13d253d3c48d2c5d1699f4f82ea8f7053089124aad8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6524d36a655712b21f8006e631665ebb63e9b2a5a6875d74338667210a4640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6524d36a655712b21f8006e631665ebb63e9b2a5a6875d74338667210a4640->enter($__internal_fe6524d36a655712b21f8006e631665ebb63e9b2a5a6875d74338667210a4640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2382f36dd0973e08f932aa5a4b53c3e031264d3190857130d0e6ace69934c63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2382f36dd0973e08f932aa5a4b53c3e031264d3190857130d0e6ace69934c63d->enter($__internal_2382f36dd0973e08f932aa5a4b53c3e031264d3190857130d0e6ace69934c63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2382f36dd0973e08f932aa5a4b53c3e031264d3190857130d0e6ace69934c63d->leave($__internal_2382f36dd0973e08f932aa5a4b53c3e031264d3190857130d0e6ace69934c63d_prof);

        
        $__internal_fe6524d36a655712b21f8006e631665ebb63e9b2a5a6875d74338667210a4640->leave($__internal_fe6524d36a655712b21f8006e631665ebb63e9b2a5a6875d74338667210a4640_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:login.html.twig";
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
", "AppBundle:Login:login.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
