<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_2a0de785b86b4fd72453cee105d1f672f2a6381bb34c2d2dad23597e23eb4f8d extends Twig_Template
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
        $__internal_a9ae295dfbd448a873e177dbfc003ccf8cf427f3d7fdeca3956522c65f4ac899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ae295dfbd448a873e177dbfc003ccf8cf427f3d7fdeca3956522c65f4ac899->enter($__internal_a9ae295dfbd448a873e177dbfc003ccf8cf427f3d7fdeca3956522c65f4ac899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $__internal_be958e6b32bae15b4c76628db7bfb98644a3522d679445aabaaaae313f4b1d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be958e6b32bae15b4c76628db7bfb98644a3522d679445aabaaaae313f4b1d2a->enter($__internal_be958e6b32bae15b4c76628db7bfb98644a3522d679445aabaaaae313f4b1d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

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
    <body class=\"hold-transition login-page\">
        <div class=\"container\" aling=\"center\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading primary\">Login incidencia </div>
                        <div class=\"panel-body\">
                            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-md-4 control-label\">Usuario</label>
                                    <div class=\"col-md-6\">
                                        <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" 
                                               value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"contraseña\" class=\"col-md-4 control-label\">Contraseña</label>
                                    <div class=\"col-md-6\">
                                        <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                               name=\"password\" required>
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-md-12 col-md-offset-4\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Ingresar
                                        </button>
                                    </div>
                                    ";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "                                        <div class=\"col-lg-12 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 44
        echo "                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_a9ae295dfbd448a873e177dbfc003ccf8cf427f3d7fdeca3956522c65f4ac899->leave($__internal_a9ae295dfbd448a873e177dbfc003ccf8cf427f3d7fdeca3956522c65f4ac899_prof);

        
        $__internal_be958e6b32bae15b4c76628db7bfb98644a3522d679445aabaaaae313f4b1d2a->leave($__internal_be958e6b32bae15b4c76628db7bfb98644a3522d679445aabaaaae313f4b1d2a_prof);

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
        return array (  87 => 44,  81 => 42,  79 => 41,  60 => 25,  52 => 20,  48 => 19,  33 => 7,  25 => 1,);
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
    <body class=\"hold-transition login-page\">
        <div class=\"container\" aling=\"center\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading primary\">Login incidencia </div>
                        <div class=\"panel-body\">
                            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"{{ path('login') }}\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"col-md-4 control-label\">Usuario</label>
                                    <div class=\"col-md-6\">
                                        <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" 
                                               value=\"{{ last_username }}\" placeholder=\"Usuario\" required autofocus>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"contraseña\" class=\"col-md-4 control-label\">Contraseña</label>
                                    <div class=\"col-md-6\">
                                        <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                               name=\"password\" required>
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-md-12 col-md-offset-4\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            Ingresar
                                        </button>
                                    </div>
                                    {% if error %}
                                        <div class=\"col-lg-12 alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                    {% endif %}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
", "AppBundle:Login:login.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
