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
        $__internal_6f1e4db247b6b5b0720a9ce3dcb391a98a2a4058539ff54e94846746dd7d6a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1e4db247b6b5b0720a9ce3dcb391a98a2a4058539ff54e94846746dd7d6a4c->enter($__internal_6f1e4db247b6b5b0720a9ce3dcb391a98a2a4058539ff54e94846746dd7d6a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_1608a06ee1ec6abc90331a6ac1791847bb92045ee906fd513c5142b092fa992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1608a06ee1ec6abc90331a6ac1791847bb92045ee906fd513c5142b092fa992a->enter($__internal_1608a06ee1ec6abc90331a6ac1791847bb92045ee906fd513c5142b092fa992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_6f1e4db247b6b5b0720a9ce3dcb391a98a2a4058539ff54e94846746dd7d6a4c->leave($__internal_6f1e4db247b6b5b0720a9ce3dcb391a98a2a4058539ff54e94846746dd7d6a4c_prof);

        
        $__internal_1608a06ee1ec6abc90331a6ac1791847bb92045ee906fd513c5142b092fa992a->leave($__internal_1608a06ee1ec6abc90331a6ac1791847bb92045ee906fd513c5142b092fa992a_prof);

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
