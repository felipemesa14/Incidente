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
        $__internal_354fd6692fcf9b230b36af22b6a79a2d1369b8c61cb8251aa3a25ac12f5b957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354fd6692fcf9b230b36af22b6a79a2d1369b8c61cb8251aa3a25ac12f5b957c->enter($__internal_354fd6692fcf9b230b36af22b6a79a2d1369b8c61cb8251aa3a25ac12f5b957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b48032fa2bd174f662caae06fc684d81b1bbe344cb90be4cdcf8e4fb1f8bbb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48032fa2bd174f662caae06fc684d81b1bbe344cb90be4cdcf8e4fb1f8bbb1f->enter($__internal_b48032fa2bd174f662caae06fc684d81b1bbe344cb90be4cdcf8e4fb1f8bbb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_354fd6692fcf9b230b36af22b6a79a2d1369b8c61cb8251aa3a25ac12f5b957c->leave($__internal_354fd6692fcf9b230b36af22b6a79a2d1369b8c61cb8251aa3a25ac12f5b957c_prof);

        
        $__internal_b48032fa2bd174f662caae06fc684d81b1bbe344cb90be4cdcf8e4fb1f8bbb1f->leave($__internal_b48032fa2bd174f662caae06fc684d81b1bbe344cb90be4cdcf8e4fb1f8bbb1f_prof);

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
