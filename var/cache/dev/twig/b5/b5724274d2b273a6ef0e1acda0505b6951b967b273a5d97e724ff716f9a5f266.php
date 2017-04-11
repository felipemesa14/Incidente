<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_39e4af74ddafa397702f82c0bfb5e14a8f87a1fdd122999f03d9475c2b3d2b1a extends Twig_Template
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
        $__internal_4d8df2c8d9da6a15d3af05b211d4cd13955d6122ebd094610e8c18ed0e8db767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8df2c8d9da6a15d3af05b211d4cd13955d6122ebd094610e8c18ed0e8db767->enter($__internal_4d8df2c8d9da6a15d3af05b211d4cd13955d6122ebd094610e8c18ed0e8db767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_665963c9232a187830c07add5028882ab2a860370ee9c7816f71aa180737fd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665963c9232a187830c07add5028882ab2a860370ee9c7816f71aa180737fd68->enter($__internal_665963c9232a187830c07add5028882ab2a860370ee9c7816f71aa180737fd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_4d8df2c8d9da6a15d3af05b211d4cd13955d6122ebd094610e8c18ed0e8db767->leave($__internal_4d8df2c8d9da6a15d3af05b211d4cd13955d6122ebd094610e8c18ed0e8db767_prof);

        
        $__internal_665963c9232a187830c07add5028882ab2a860370ee9c7816f71aa180737fd68->leave($__internal_665963c9232a187830c07add5028882ab2a860370ee9c7816f71aa180737fd68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
