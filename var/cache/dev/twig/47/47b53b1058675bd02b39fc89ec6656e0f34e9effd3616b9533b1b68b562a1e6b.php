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
        $__internal_fa8cc331ef0e66141dfdcf3d8a87adbf08132373941d4227c58a04a7de760643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8cc331ef0e66141dfdcf3d8a87adbf08132373941d4227c58a04a7de760643->enter($__internal_fa8cc331ef0e66141dfdcf3d8a87adbf08132373941d4227c58a04a7de760643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_8e476b679b958e9f3424774ce85b2450a63c2dc4e5d26df1277a5c4eef2789c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e476b679b958e9f3424774ce85b2450a63c2dc4e5d26df1277a5c4eef2789c8->enter($__internal_8e476b679b958e9f3424774ce85b2450a63c2dc4e5d26df1277a5c4eef2789c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_fa8cc331ef0e66141dfdcf3d8a87adbf08132373941d4227c58a04a7de760643->leave($__internal_fa8cc331ef0e66141dfdcf3d8a87adbf08132373941d4227c58a04a7de760643_prof);

        
        $__internal_8e476b679b958e9f3424774ce85b2450a63c2dc4e5d26df1277a5c4eef2789c8->leave($__internal_8e476b679b958e9f3424774ce85b2450a63c2dc4e5d26df1277a5c4eef2789c8_prof);

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
