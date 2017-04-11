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
        $__internal_594aa97ec90b01bfbef557a53278ce36bc1a7771196917d8d04f15250354bdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594aa97ec90b01bfbef557a53278ce36bc1a7771196917d8d04f15250354bdb1->enter($__internal_594aa97ec90b01bfbef557a53278ce36bc1a7771196917d8d04f15250354bdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8e2e9ca51fc327814847588ff09f69eece7ae02b5e3eb4a1ad934d252072a264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2e9ca51fc327814847588ff09f69eece7ae02b5e3eb4a1ad934d252072a264->enter($__internal_8e2e9ca51fc327814847588ff09f69eece7ae02b5e3eb4a1ad934d252072a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_594aa97ec90b01bfbef557a53278ce36bc1a7771196917d8d04f15250354bdb1->leave($__internal_594aa97ec90b01bfbef557a53278ce36bc1a7771196917d8d04f15250354bdb1_prof);

        
        $__internal_8e2e9ca51fc327814847588ff09f69eece7ae02b5e3eb4a1ad934d252072a264->leave($__internal_8e2e9ca51fc327814847588ff09f69eece7ae02b5e3eb4a1ad934d252072a264_prof);

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
