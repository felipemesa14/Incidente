<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_03ea16c18fa5a2046e1b8c80706ef2e2c89bf77e91759d25990a8d032c97c86f extends Twig_Template
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
        if (($context["error"] ?? null)) {
            // line 21
            echo "                            <div class=\"col-lg-12 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  64 => 29,  56 => 24,  51 => 23,  45 => 21,  43 => 20,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Login:login.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
