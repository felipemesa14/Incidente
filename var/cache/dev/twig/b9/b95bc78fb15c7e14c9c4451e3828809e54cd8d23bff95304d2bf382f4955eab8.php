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
        $__internal_5ba3b0ff6d8685beb804cb758348fd5affd465626b7dd88d7562cf16bffb940f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba3b0ff6d8685beb804cb758348fd5affd465626b7dd88d7562cf16bffb940f->enter($__internal_5ba3b0ff6d8685beb804cb758348fd5affd465626b7dd88d7562cf16bffb940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e78141ff3a6f492b353972e4ad0223c8f65b146fc1c278c5096e94805cf88dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78141ff3a6f492b353972e4ad0223c8f65b146fc1c278c5096e94805cf88dd3->enter($__internal_e78141ff3a6f492b353972e4ad0223c8f65b146fc1c278c5096e94805cf88dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_5ba3b0ff6d8685beb804cb758348fd5affd465626b7dd88d7562cf16bffb940f->leave($__internal_5ba3b0ff6d8685beb804cb758348fd5affd465626b7dd88d7562cf16bffb940f_prof);

        
        $__internal_e78141ff3a6f492b353972e4ad0223c8f65b146fc1c278c5096e94805cf88dd3->leave($__internal_e78141ff3a6f492b353972e4ad0223c8f65b146fc1c278c5096e94805cf88dd3_prof);

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
