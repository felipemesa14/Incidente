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
        $__internal_b680be2dca8a4662024281ee5ff01238a067c1146a06e6f66e3057e1ea8403db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b680be2dca8a4662024281ee5ff01238a067c1146a06e6f66e3057e1ea8403db->enter($__internal_b680be2dca8a4662024281ee5ff01238a067c1146a06e6f66e3057e1ea8403db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f14e1fdc6c12786b39996b144caeb6932aa412c615c1d065832d198ccc6dc19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14e1fdc6c12786b39996b144caeb6932aa412c615c1d065832d198ccc6dc19e->enter($__internal_f14e1fdc6c12786b39996b144caeb6932aa412c615c1d065832d198ccc6dc19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_b680be2dca8a4662024281ee5ff01238a067c1146a06e6f66e3057e1ea8403db->leave($__internal_b680be2dca8a4662024281ee5ff01238a067c1146a06e6f66e3057e1ea8403db_prof);

        
        $__internal_f14e1fdc6c12786b39996b144caeb6932aa412c615c1d065832d198ccc6dc19e->leave($__internal_f14e1fdc6c12786b39996b144caeb6932aa412c615c1d065832d198ccc6dc19e_prof);

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
