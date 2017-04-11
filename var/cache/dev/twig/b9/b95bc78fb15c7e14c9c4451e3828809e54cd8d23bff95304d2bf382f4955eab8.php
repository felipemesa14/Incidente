<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6806536aa7c4fe6821329b393102054bcc7c66b23198872523ccf7dd5d84220c extends Twig_Template
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
        $__internal_52cd58b39ab5bf6aa9b2796f6e656e25f0dd97694938e83b5009c5310f2dbb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cd58b39ab5bf6aa9b2796f6e656e25f0dd97694938e83b5009c5310f2dbb1c->enter($__internal_52cd58b39ab5bf6aa9b2796f6e656e25f0dd97694938e83b5009c5310f2dbb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ec4a1ebd39920a005a06029544ac600e2edc3deaaac1c185b5b1429a0354dfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4a1ebd39920a005a06029544ac600e2edc3deaaac1c185b5b1429a0354dfa5->enter($__internal_ec4a1ebd39920a005a06029544ac600e2edc3deaaac1c185b5b1429a0354dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_52cd58b39ab5bf6aa9b2796f6e656e25f0dd97694938e83b5009c5310f2dbb1c->leave($__internal_52cd58b39ab5bf6aa9b2796f6e656e25f0dd97694938e83b5009c5310f2dbb1c_prof);

        
        $__internal_ec4a1ebd39920a005a06029544ac600e2edc3deaaac1c185b5b1429a0354dfa5->leave($__internal_ec4a1ebd39920a005a06029544ac600e2edc3deaaac1c185b5b1429a0354dfa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
