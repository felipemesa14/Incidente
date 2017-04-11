<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55ba22b45aa9681caf3d2e36ae2f4a7bfc806886bb0ae41645a398b9e5dd7fda extends Twig_Template
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
        $__internal_2b103cbdd69f5e58890b81607e7f3115cca22c71a2265a0dcfe5d0d48bcf47f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b103cbdd69f5e58890b81607e7f3115cca22c71a2265a0dcfe5d0d48bcf47f3->enter($__internal_2b103cbdd69f5e58890b81607e7f3115cca22c71a2265a0dcfe5d0d48bcf47f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_470d605cbfdb03906112fef8a1c2fa92ad0cad6313a5a1fd3e77df6c8f7a2aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470d605cbfdb03906112fef8a1c2fa92ad0cad6313a5a1fd3e77df6c8f7a2aa6->enter($__internal_470d605cbfdb03906112fef8a1c2fa92ad0cad6313a5a1fd3e77df6c8f7a2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2b103cbdd69f5e58890b81607e7f3115cca22c71a2265a0dcfe5d0d48bcf47f3->leave($__internal_2b103cbdd69f5e58890b81607e7f3115cca22c71a2265a0dcfe5d0d48bcf47f3_prof);

        
        $__internal_470d605cbfdb03906112fef8a1c2fa92ad0cad6313a5a1fd3e77df6c8f7a2aa6->leave($__internal_470d605cbfdb03906112fef8a1c2fa92ad0cad6313a5a1fd3e77df6c8f7a2aa6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
