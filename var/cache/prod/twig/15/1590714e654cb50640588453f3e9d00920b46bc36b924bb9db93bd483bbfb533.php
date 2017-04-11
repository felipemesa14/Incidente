<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_03ea16c18fa5a2046e1b8c80706ef2e2c89bf77e91759d25990a8d032c97c86f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading primary\">Login incidencia </div>
                    <div class=\"panel-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">          
                            <label for=\"email\" class=\"col-md-4 control-label\">Usuario</label>
                            <div class=\"form-group\">
                                <div class=\"col-md-6\">
                                    <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" 
                                           value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"contraseña\" class=\"col-md-4 control-label\">Contraseña</label>
                                <div class=\"col-md-6\">
                                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Contraseña\" class=\"form-control\"
                                           name=\"password\" required>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"row form-group\">
                                <div class=\"col-md-12 col-md-offset-4\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Ingresar
                                    </button>
                                </div>
                                ";
        // line 32
        if (($context["error"] ?? null)) {
            // line 33
            echo "                                    <div class=\"col-lg-12 alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 35
        echo "                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return array (  79 => 35,  73 => 33,  71 => 32,  59 => 23,  47 => 14,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Login:login.html.twig", "/var/www/html/incidente/src/AppBundle/Resources/views/Login/login.html.twig");
    }
}
