<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_a54eaf6fa26fec981f4c31b1373e24e2f9692f59c92dc07b9b0efb97b0b4503c extends Twig_Template
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
        $__internal_ea5c98c159b4ca0029abf217b1cf7d8bda3a81c2b1ca19898774d471c0be6641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5c98c159b4ca0029abf217b1cf7d8bda3a81c2b1ca19898774d471c0be6641->enter($__internal_ea5c98c159b4ca0029abf217b1cf7d8bda3a81c2b1ca19898774d471c0be6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        $__internal_5ec2eaf67e5dd945838c6c0453144b4544ed98a978ef0592d016587e04fe19ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec2eaf67e5dd945838c6c0453144b4544ed98a978ef0592d016587e04fe19ec->enter($__internal_5ec2eaf67e5dd945838c6c0453144b4544ed98a978ef0592d016587e04fe19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 4, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            $this->loadTemplate("@Twig/Exception/traces.xml.twig", "TwigBundle:Exception:exception.xml.twig", 6)->display(array("exception" => $context["e"]));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_ea5c98c159b4ca0029abf217b1cf7d8bda3a81c2b1ca19898774d471c0be6641->leave($__internal_ea5c98c159b4ca0029abf217b1cf7d8bda3a81c2b1ca19898774d471c0be6641_prof);

        
        $__internal_5ec2eaf67e5dd945838c6c0453144b4544ed98a978ef0592d016587e04fe19ec->leave($__internal_5ec2eaf67e5dd945838c6c0453144b4544ed98a978ef0592d016587e04fe19ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  50 => 7,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{% include '@Twig/Exception/traces.xml.twig' with { 'exception': e } only %}
    </exception>
{% endfor %}
</error>
", "TwigBundle:Exception:exception.xml.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.xml.twig");
    }
}
