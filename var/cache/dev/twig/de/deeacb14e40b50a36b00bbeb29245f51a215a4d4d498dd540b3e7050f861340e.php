<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_152add7017a3c163423a8c9f00cef224679404ab1534275f78385620d823f8d1 extends Twig_Template
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
        $__internal_d127f6d27ecab9c1cfafc291d73eb0a7725e4f87b98bf10ae5d28b866c45d4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d127f6d27ecab9c1cfafc291d73eb0a7725e4f87b98bf10ae5d28b866c45d4a2->enter($__internal_d127f6d27ecab9c1cfafc291d73eb0a7725e4f87b98bf10ae5d28b866c45d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        $__internal_f22661e2189d17c1a28bb9d4637f146db111144a42444e2bc36b491f56f9042e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22661e2189d17c1a28bb9d4637f146db111144a42444e2bc36b491f56f9042e->enter($__internal_f22661e2189d17c1a28bb9d4637f146db111144a42444e2bc36b491f56f9042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 1, $this->getSourceContext()); })()), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "line", array());
            echo "
";
        }
        
        $__internal_d127f6d27ecab9c1cfafc291d73eb0a7725e4f87b98bf10ae5d28b866c45d4a2->leave($__internal_d127f6d27ecab9c1cfafc291d73eb0a7725e4f87b98bf10ae5d28b866c45d4a2_prof);

        
        $__internal_f22661e2189d17c1a28bb9d4637f146db111144a42444e2bc36b491f56f9042e->leave($__internal_f22661e2189d17c1a28bb9d4637f146db111144a42444e2bc36b491f56f9042e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "TwigBundle:Exception:trace.txt.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
