<?php

/* WebProfilerBundle:Profiler:header.html.twig */
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
        $__internal_f8c6381d9e518a2db62d6291c98df3b09af8fa46b0dbaa482f92c19a30ef8fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c6381d9e518a2db62d6291c98df3b09af8fa46b0dbaa482f92c19a30ef8fd8->enter($__internal_f8c6381d9e518a2db62d6291c98df3b09af8fa46b0dbaa482f92c19a30ef8fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_015d2e4112a6e7019ff9d3bf3064f58bd7e016327c29b4a5d57ecbca7357227b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015d2e4112a6e7019ff9d3bf3064f58bd7e016327c29b4a5d57ecbca7357227b->enter($__internal_015d2e4112a6e7019ff9d3bf3064f58bd7e016327c29b4a5d57ecbca7357227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_f8c6381d9e518a2db62d6291c98df3b09af8fa46b0dbaa482f92c19a30ef8fd8->leave($__internal_f8c6381d9e518a2db62d6291c98df3b09af8fa46b0dbaa482f92c19a30ef8fd8_prof);

        
        $__internal_015d2e4112a6e7019ff9d3bf3064f58bd7e016327c29b4a5d57ecbca7357227b->leave($__internal_015d2e4112a6e7019ff9d3bf3064f58bd7e016327c29b4a5d57ecbca7357227b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
