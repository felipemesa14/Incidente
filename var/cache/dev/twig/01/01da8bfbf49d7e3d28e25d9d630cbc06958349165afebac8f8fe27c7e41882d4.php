<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_058ee9f49795ae6a90ca55a15c1cdceb985f531d3049154a1f588142421d6800 extends Twig_Template
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
        $__internal_7385b6761577b7d940d8de5a815ac0069ecfcb14b027d984178fb84787605a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7385b6761577b7d940d8de5a815ac0069ecfcb14b027d984178fb84787605a79->enter($__internal_7385b6761577b7d940d8de5a815ac0069ecfcb14b027d984178fb84787605a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb8e7a4cc6d433ef79ab83592237ceba20a530c34ebd47d2103f71915d7ff333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8e7a4cc6d433ef79ab83592237ceba20a530c34ebd47d2103f71915d7ff333->enter($__internal_fb8e7a4cc6d433ef79ab83592237ceba20a530c34ebd47d2103f71915d7ff333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7385b6761577b7d940d8de5a815ac0069ecfcb14b027d984178fb84787605a79->leave($__internal_7385b6761577b7d940d8de5a815ac0069ecfcb14b027d984178fb84787605a79_prof);

        
        $__internal_fb8e7a4cc6d433ef79ab83592237ceba20a530c34ebd47d2103f71915d7ff333->leave($__internal_fb8e7a4cc6d433ef79ab83592237ceba20a530c34ebd47d2103f71915d7ff333_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
