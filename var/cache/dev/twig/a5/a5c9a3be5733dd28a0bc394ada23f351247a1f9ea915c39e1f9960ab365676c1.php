<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_5a4eb6a1a053d6abefe6219f3d73fac5420b3ba045590d17c18387e5f383d7ed extends Twig_Template
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
        $__internal_165bc89471c26bd8b6136da43b5f40608959856db734919595cfdf58b82b7df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165bc89471c26bd8b6136da43b5f40608959856db734919595cfdf58b82b7df0->enter($__internal_165bc89471c26bd8b6136da43b5f40608959856db734919595cfdf58b82b7df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_4726c52c6b6f162c3154259a9dccf6c5bbdb216c25f72819cce61f8f08925730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4726c52c6b6f162c3154259a9dccf6c5bbdb216c25f72819cce61f8f08925730->enter($__internal_4726c52c6b6f162c3154259a9dccf6c5bbdb216c25f72819cce61f8f08925730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_165bc89471c26bd8b6136da43b5f40608959856db734919595cfdf58b82b7df0->leave($__internal_165bc89471c26bd8b6136da43b5f40608959856db734919595cfdf58b82b7df0_prof);

        
        $__internal_4726c52c6b6f162c3154259a9dccf6c5bbdb216c25f72819cce61f8f08925730->leave($__internal_4726c52c6b6f162c3154259a9dccf6c5bbdb216c25f72819cce61f8f08925730_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
