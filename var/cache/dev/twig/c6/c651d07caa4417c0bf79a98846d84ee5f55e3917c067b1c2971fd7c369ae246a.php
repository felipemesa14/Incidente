<?php

/* base.html.twig */
class __TwigTemplate_5d62cafbbc88a9fa4cff75ce337df80f884869ab3374bb766fe546606c0b7288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6702446ea6065a7b0e911cff85b5a62dd4604de5eefe38516870e8b0855fae0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6702446ea6065a7b0e911cff85b5a62dd4604de5eefe38516870e8b0855fae0b->enter($__internal_6702446ea6065a7b0e911cff85b5a62dd4604de5eefe38516870e8b0855fae0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_961c8947b38bc566695ac6820633e9a59045b8636faf0dc362a0acbfcf6b3906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961c8947b38bc566695ac6820633e9a59045b8636faf0dc362a0acbfcf6b3906->enter($__internal_961c8947b38bc566695ac6820633e9a59045b8636faf0dc362a0acbfcf6b3906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"app\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#app-navbar-collapse\">
                            <span class=\"sr-only\">Toggle Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("caso_lista");
        echo "\">
                            Incidencia</a>

                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->getSourceContext()); })()), "user", array()), "nombre", array()), "html", null, true);
        echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
                                            Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</html>
";
        
        $__internal_6702446ea6065a7b0e911cff85b5a62dd4604de5eefe38516870e8b0855fae0b->leave($__internal_6702446ea6065a7b0e911cff85b5a62dd4604de5eefe38516870e8b0855fae0b_prof);

        
        $__internal_961c8947b38bc566695ac6820633e9a59045b8636faf0dc362a0acbfcf6b3906->leave($__internal_961c8947b38bc566695ac6820633e9a59045b8636faf0dc362a0acbfcf6b3906_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ba6fc68796bf7c35aae123ee35c4ec7c1d7844014349850a8a2656d89be02e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba6fc68796bf7c35aae123ee35c4ec7c1d7844014349850a8a2656d89be02e8->enter($__internal_3ba6fc68796bf7c35aae123ee35c4ec7c1d7844014349850a8a2656d89be02e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e4c005bc10a2e47e8445efba776b1a9ee89de9067b95b1e610909ab52c4bb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4c005bc10a2e47e8445efba776b1a9ee89de9067b95b1e610909ab52c4bb0c->enter($__internal_8e4c005bc10a2e47e8445efba776b1a9ee89de9067b95b1e610909ab52c4bb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Incidencias";
        
        $__internal_8e4c005bc10a2e47e8445efba776b1a9ee89de9067b95b1e610909ab52c4bb0c->leave($__internal_8e4c005bc10a2e47e8445efba776b1a9ee89de9067b95b1e610909ab52c4bb0c_prof);

        
        $__internal_3ba6fc68796bf7c35aae123ee35c4ec7c1d7844014349850a8a2656d89be02e8->leave($__internal_3ba6fc68796bf7c35aae123ee35c4ec7c1d7844014349850a8a2656d89be02e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c826555534b55a747995211fd16f640ac06993ec1b4b77fe51cb4e880d52762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c826555534b55a747995211fd16f640ac06993ec1b4b77fe51cb4e880d52762->enter($__internal_0c826555534b55a747995211fd16f640ac06993ec1b4b77fe51cb4e880d52762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3258c4aa9c01d719e4edf25fc0f4b43baadbf5f91691260d8e8519a6fe6e2941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3258c4aa9c01d719e4edf25fc0f4b43baadbf5f91691260d8e8519a6fe6e2941->enter($__internal_3258c4aa9c01d719e4edf25fc0f4b43baadbf5f91691260d8e8519a6fe6e2941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_3258c4aa9c01d719e4edf25fc0f4b43baadbf5f91691260d8e8519a6fe6e2941->leave($__internal_3258c4aa9c01d719e4edf25fc0f4b43baadbf5f91691260d8e8519a6fe6e2941_prof);

        
        $__internal_0c826555534b55a747995211fd16f640ac06993ec1b4b77fe51cb4e880d52762->leave($__internal_0c826555534b55a747995211fd16f640ac06993ec1b4b77fe51cb4e880d52762_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9eab7e245ba9853b62a4ab163c1fc5711d5ef955662d9f1100ebe92fc994cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eab7e245ba9853b62a4ab163c1fc5711d5ef955662d9f1100ebe92fc994cbd->enter($__internal_d9eab7e245ba9853b62a4ab163c1fc5711d5ef955662d9f1100ebe92fc994cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02ea802238da1cb797d0d5ff25ffb5cfb316d9370eb53c10173c5ccf62696fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ea802238da1cb797d0d5ff25ffb5cfb316d9370eb53c10173c5ccf62696fbd->enter($__internal_02ea802238da1cb797d0d5ff25ffb5cfb316d9370eb53c10173c5ccf62696fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_02ea802238da1cb797d0d5ff25ffb5cfb316d9370eb53c10173c5ccf62696fbd->leave($__internal_02ea802238da1cb797d0d5ff25ffb5cfb316d9370eb53c10173c5ccf62696fbd_prof);

        
        $__internal_d9eab7e245ba9853b62a4ab163c1fc5711d5ef955662d9f1100ebe92fc994cbd->leave($__internal_d9eab7e245ba9853b62a4ab163c1fc5711d5ef955662d9f1100ebe92fc994cbd_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccb718117af6dcd1f27f90523d15b2723fb5eaf111796e6d2f167d51aa89fad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb718117af6dcd1f27f90523d15b2723fb5eaf111796e6d2f167d51aa89fad1->enter($__internal_ccb718117af6dcd1f27f90523d15b2723fb5eaf111796e6d2f167d51aa89fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_795224b06c30607094edec4ad62defada263410428906cdc739908dfcf31c2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795224b06c30607094edec4ad62defada263410428906cdc739908dfcf31c2ca->enter($__internal_795224b06c30607094edec4ad62defada263410428906cdc739908dfcf31c2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    ";
        
        $__internal_795224b06c30607094edec4ad62defada263410428906cdc739908dfcf31c2ca->leave($__internal_795224b06c30607094edec4ad62defada263410428906cdc739908dfcf31c2ca_prof);

        
        $__internal_ccb718117af6dcd1f27f90523d15b2723fb5eaf111796e6d2f167d51aa89fad1->leave($__internal_ccb718117af6dcd1f27f90523d15b2723fb5eaf111796e6d2f167d51aa89fad1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  176 => 58,  165 => 56,  156 => 55,  140 => 7,  131 => 6,  113 => 5,  102 => 62,  99 => 58,  97 => 55,  82 => 43,  74 => 38,  59 => 26,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Incidencias{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('public/css/app.css') }}\" rel=\"stylesheet\">
            <link href=\"//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\"
                  integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"app\">
            <nav class=\"navbar navbar-inverse navbar-static-top\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#app-navbar-collapse\">
                            <span class=\"sr-only\">Toggle Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ path('caso_lista') }}\">
                            Incidencia</a>

                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            &nbsp;
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                   aria-expanded=\"false\">
                                    {{ app.user.nombre }}
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li>
                                        <a href=\"{{ path('logout') }}\">
                                            Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>
    {% block body %}

    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('public/js/app.js') }}\"></script>
        <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    {% endblock %}
</html>
", "base.html.twig", "/var/www/html/incidente/app/Resources/views/base.html.twig");
    }
}
