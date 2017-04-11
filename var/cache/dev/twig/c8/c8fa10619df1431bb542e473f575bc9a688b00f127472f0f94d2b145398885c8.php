<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c3ff0b881ee53f22207d57e2732504f15fb3239345e266bb97b9ffafaee77f2e extends Twig_Template
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
        $__internal_ebbafc6f62e22d41f3c98dc1cfe2eaab7e83bc490874a6de5d08b537fecb9e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbafc6f62e22d41f3c98dc1cfe2eaab7e83bc490874a6de5d08b537fecb9e05->enter($__internal_ebbafc6f62e22d41f3c98dc1cfe2eaab7e83bc490874a6de5d08b537fecb9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_45c758776730023eb6633739ebfe22ee92caa8e91d22d77471b74ddc1d71d153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c758776730023eb6633739ebfe22ee92caa8e91d22d77471b74ddc1d71d153->enter($__internal_45c758776730023eb6633739ebfe22ee92caa8e91d22d77471b74ddc1d71d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_ebbafc6f62e22d41f3c98dc1cfe2eaab7e83bc490874a6de5d08b537fecb9e05->leave($__internal_ebbafc6f62e22d41f3c98dc1cfe2eaab7e83bc490874a6de5d08b537fecb9e05_prof);

        
        $__internal_45c758776730023eb6633739ebfe22ee92caa8e91d22d77471b74ddc1d71d153->leave($__internal_45c758776730023eb6633739ebfe22ee92caa8e91d22d77471b74ddc1d71d153_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
