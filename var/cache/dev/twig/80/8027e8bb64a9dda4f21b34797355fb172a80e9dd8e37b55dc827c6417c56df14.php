<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_83d61fffa1b169b85100f2f43f754929faccc61f672ae9b875df00875f66627a extends Twig_Template
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
        $__internal_127d17f357f4945b39bae04ef7acdb9b95723ef506ebbe480e8a30e336c54189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127d17f357f4945b39bae04ef7acdb9b95723ef506ebbe480e8a30e336c54189->enter($__internal_127d17f357f4945b39bae04ef7acdb9b95723ef506ebbe480e8a30e336c54189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7289a192cb857a4b39ae041800935dab3259385cf6277d3def6b0e20a63d1feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7289a192cb857a4b39ae041800935dab3259385cf6277d3def6b0e20a63d1feb->enter($__internal_7289a192cb857a4b39ae041800935dab3259385cf6277d3def6b0e20a63d1feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_127d17f357f4945b39bae04ef7acdb9b95723ef506ebbe480e8a30e336c54189->leave($__internal_127d17f357f4945b39bae04ef7acdb9b95723ef506ebbe480e8a30e336c54189_prof);

        
        $__internal_7289a192cb857a4b39ae041800935dab3259385cf6277d3def6b0e20a63d1feb->leave($__internal_7289a192cb857a4b39ae041800935dab3259385cf6277d3def6b0e20a63d1feb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
