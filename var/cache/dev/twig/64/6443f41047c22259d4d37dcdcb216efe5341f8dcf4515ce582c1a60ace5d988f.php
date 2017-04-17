<?php

/* TwigBundle:Exception:traces.txt.twig */
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
        $__internal_5004ae9b130bf4d46f524d7f4d28ac746b7dece4048ff9c66fae2750b714c377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5004ae9b130bf4d46f524d7f4d28ac746b7dece4048ff9c66fae2750b714c377->enter($__internal_5004ae9b130bf4d46f524d7f4d28ac746b7dece4048ff9c66fae2750b714c377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_df6138024212a720c4b080890ee5f43386a15a1db4957606f889e2fe1896c4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6138024212a720c4b080890ee5f43386a15a1db4957606f889e2fe1896c4ad->enter($__internal_df6138024212a720c4b080890ee5f43386a15a1db4957606f889e2fe1896c4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5004ae9b130bf4d46f524d7f4d28ac746b7dece4048ff9c66fae2750b714c377->leave($__internal_5004ae9b130bf4d46f524d7f4d28ac746b7dece4048ff9c66fae2750b714c377_prof);

        
        $__internal_df6138024212a720c4b080890ee5f43386a15a1db4957606f889e2fe1896c4ad->leave($__internal_df6138024212a720c4b080890ee5f43386a15a1db4957606f889e2fe1896c4ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
