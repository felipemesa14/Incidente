<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_888f27eb7af6e59fa92765d171caa7b2af850451ea2ef278f32054df4e62f6ca extends Twig_Template
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
        $__internal_150ee43e361dea69c2819e7907c0844f77d891343ef1dca1f5ef08ebb2ca7d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150ee43e361dea69c2819e7907c0844f77d891343ef1dca1f5ef08ebb2ca7d17->enter($__internal_150ee43e361dea69c2819e7907c0844f77d891343ef1dca1f5ef08ebb2ca7d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_636202f741ed8ccd6762ebeb7e4ba6ac82b9ba4bfed44f2caad5c1df28afaff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636202f741ed8ccd6762ebeb7e4ba6ac82b9ba4bfed44f2caad5c1df28afaff7->enter($__internal_636202f741ed8ccd6762ebeb7e4ba6ac82b9ba4bfed44f2caad5c1df28afaff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_150ee43e361dea69c2819e7907c0844f77d891343ef1dca1f5ef08ebb2ca7d17->leave($__internal_150ee43e361dea69c2819e7907c0844f77d891343ef1dca1f5ef08ebb2ca7d17_prof);

        
        $__internal_636202f741ed8ccd6762ebeb7e4ba6ac82b9ba4bfed44f2caad5c1df28afaff7->leave($__internal_636202f741ed8ccd6762ebeb7e4ba6ac82b9ba4bfed44f2caad5c1df28afaff7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
