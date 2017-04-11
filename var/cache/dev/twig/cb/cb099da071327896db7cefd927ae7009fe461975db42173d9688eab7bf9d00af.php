<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b7d6f74b5dc6370b757eafa6cebd1df250a77e734207727f2f54ff762879b79f extends Twig_Template
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
        $__internal_4e449da1c639c8244394fe5c1e55489d0609def7ab34eff0b73a215fa4dae7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e449da1c639c8244394fe5c1e55489d0609def7ab34eff0b73a215fa4dae7be->enter($__internal_4e449da1c639c8244394fe5c1e55489d0609def7ab34eff0b73a215fa4dae7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_eaa1ae4614318992ac7057e1b2a102e908ca6694cbe5e70a51cd7c97f56b2eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa1ae4614318992ac7057e1b2a102e908ca6694cbe5e70a51cd7c97f56b2eab->enter($__internal_eaa1ae4614318992ac7057e1b2a102e908ca6694cbe5e70a51cd7c97f56b2eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_4e449da1c639c8244394fe5c1e55489d0609def7ab34eff0b73a215fa4dae7be->leave($__internal_4e449da1c639c8244394fe5c1e55489d0609def7ab34eff0b73a215fa4dae7be_prof);

        
        $__internal_eaa1ae4614318992ac7057e1b2a102e908ca6694cbe5e70a51cd7c97f56b2eab->leave($__internal_eaa1ae4614318992ac7057e1b2a102e908ca6694cbe5e70a51cd7c97f56b2eab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
