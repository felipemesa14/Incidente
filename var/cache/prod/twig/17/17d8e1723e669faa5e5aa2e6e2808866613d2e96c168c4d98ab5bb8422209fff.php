<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_db1c965d11258313da87f84716d2c629ffaf51304c006745d9052c778064b101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45075e477501baafec645a6b544a3477e0064052717ba3e88e0ba8a71b6b8c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45075e477501baafec645a6b544a3477e0064052717ba3e88e0ba8a71b6b8c9d->enter($__internal_45075e477501baafec645a6b544a3477e0064052717ba3e88e0ba8a71b6b8c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Inicio sesion</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>
        <div class=\"container\">    
            <div id=\"loginbox\" style=\"margin-top:130px;\" class=\"mainbox col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3\">                    
                <div class=\"panel panel-primary\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Login incidencia</div>
                    </div>
                    <div style=\"padding-top:40px\" class=\"panel-body\" >
                        ";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->getSourceContext()); })())) {
            // line 21
            echo "                            <div class=\"col-lg-12 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 23
        echo "                        <form class=\"form-signin\" role=\"form\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" 
                                           value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                           name=\"password\" required>
                                </div>
                            </div>
                            <div style=\"margin-top:10px\" class=\"modal-footer\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>                     
                </div>  
            </div>
    </body>
</html>
";
        
        $__internal_45075e477501baafec645a6b544a3477e0064052717ba3e88e0ba8a71b6b8c9d->leave($__internal_45075e477501baafec645a6b544a3477e0064052717ba3e88e0ba8a71b6b8c9d_prof);

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
        return array (  67 => 29,  59 => 24,  54 => 23,  48 => 21,  46 => 20,  30 => 7,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Inicio sesion</title>
        <link href=\"{{ asset('public/css/app.css') }}\" rel=\"stylesheet\">
        <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    </head>
    <body>
        <div class=\"container\">    
            <div id=\"loginbox\" style=\"margin-top:130px;\" class=\"mainbox col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3\">                    
                <div class=\"panel panel-primary\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Login incidencia</div>
                    </div>
                    <div style=\"padding-top:40px\" class=\"panel-body\" >
                        {% if error %}
                            <div class=\"col-lg-12 alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                        <form class=\"form-signin\" role=\"form\" method=\"post\" action=\"{{ path('login') }}\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" 
                                           value=\"{{ last_username }}\" placeholder=\"Usuario\" required autofocus>
                                </div>
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                           name=\"password\" required>
                                </div>
                            </div>
                            <div style=\"margin-top:10px\" class=\"modal-footer\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>                     
                </div>  
            </div>
    </body>
</html>
", "AppBundle:Login:login.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
