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
        $__internal_0f9b021efbfd5b6141b69c77b43972fd58731ef96fcea7667a7c6ae64f37c20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9b021efbfd5b6141b69c77b43972fd58731ef96fcea7667a7c6ae64f37c20d->enter($__internal_0f9b021efbfd5b6141b69c77b43972fd58731ef96fcea7667a7c6ae64f37c20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6c23d1909e4cfe869211674e7708fd95eafb436a20758d0018da43b99ca2f215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c23d1909e4cfe869211674e7708fd95eafb436a20758d0018da43b99ca2f215->enter($__internal_6c23d1909e4cfe869211674e7708fd95eafb436a20758d0018da43b99ca2f215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_0f9b021efbfd5b6141b69c77b43972fd58731ef96fcea7667a7c6ae64f37c20d->leave($__internal_0f9b021efbfd5b6141b69c77b43972fd58731ef96fcea7667a7c6ae64f37c20d_prof);

        
        $__internal_6c23d1909e4cfe869211674e7708fd95eafb436a20758d0018da43b99ca2f215->leave($__internal_6c23d1909e4cfe869211674e7708fd95eafb436a20758d0018da43b99ca2f215_prof);

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
