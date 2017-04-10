<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_d9fc170db502fdbe40aeb6295dbbb7913b549dc715619293b74e03f57758d049 extends Twig_Template
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
        $__internal_11bf244a9f9145f172b7f25448b4a9ecb2aa31f25bfcba7528d696860f71d92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bf244a9f9145f172b7f25448b4a9ecb2aa31f25bfcba7528d696860f71d92a->enter($__internal_11bf244a9f9145f172b7f25448b4a9ecb2aa31f25bfcba7528d696860f71d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_34270d0a4c03ea192b61384a8f241f8be6960d2d511090b59b60ce6f237163ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34270d0a4c03ea192b61384a8f241f8be6960d2d511090b59b60ce6f237163ff->enter($__internal_34270d0a4c03ea192b61384a8f241f8be6960d2d511090b59b60ce6f237163ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_11bf244a9f9145f172b7f25448b4a9ecb2aa31f25bfcba7528d696860f71d92a->leave($__internal_11bf244a9f9145f172b7f25448b4a9ecb2aa31f25bfcba7528d696860f71d92a_prof);

        
        $__internal_34270d0a4c03ea192b61384a8f241f8be6960d2d511090b59b60ce6f237163ff->leave($__internal_34270d0a4c03ea192b61384a8f241f8be6960d2d511090b59b60ce6f237163ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
