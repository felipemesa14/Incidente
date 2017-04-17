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
        $__internal_2cf29290cf98f6c4b780cdaca3ae8d151f431e7a248e5be1510015600cc0d657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf29290cf98f6c4b780cdaca3ae8d151f431e7a248e5be1510015600cc0d657->enter($__internal_2cf29290cf98f6c4b780cdaca3ae8d151f431e7a248e5be1510015600cc0d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0b18d4e3ec0fc5e850ef520f453f7a770840e9269eea59679da2f8674e8bfbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b18d4e3ec0fc5e850ef520f453f7a770840e9269eea59679da2f8674e8bfbb9->enter($__internal_0b18d4e3ec0fc5e850ef520f453f7a770840e9269eea59679da2f8674e8bfbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2cf29290cf98f6c4b780cdaca3ae8d151f431e7a248e5be1510015600cc0d657->leave($__internal_2cf29290cf98f6c4b780cdaca3ae8d151f431e7a248e5be1510015600cc0d657_prof);

        
        $__internal_0b18d4e3ec0fc5e850ef520f453f7a770840e9269eea59679da2f8674e8bfbb9->leave($__internal_0b18d4e3ec0fc5e850ef520f453f7a770840e9269eea59679da2f8674e8bfbb9_prof);

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
