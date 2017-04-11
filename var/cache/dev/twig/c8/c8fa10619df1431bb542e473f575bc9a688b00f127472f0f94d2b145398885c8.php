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
        $__internal_f7a82ceddab3fb14da334b96314401c69b6b124fcf9ebdee7133d9903d2a80d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a82ceddab3fb14da334b96314401c69b6b124fcf9ebdee7133d9903d2a80d4->enter($__internal_f7a82ceddab3fb14da334b96314401c69b6b124fcf9ebdee7133d9903d2a80d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7d6d61f7d990c8101bd83681d5df5729519654428a817011b9bffa49adc951d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6d61f7d990c8101bd83681d5df5729519654428a817011b9bffa49adc951d7->enter($__internal_7d6d61f7d990c8101bd83681d5df5729519654428a817011b9bffa49adc951d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f7a82ceddab3fb14da334b96314401c69b6b124fcf9ebdee7133d9903d2a80d4->leave($__internal_f7a82ceddab3fb14da334b96314401c69b6b124fcf9ebdee7133d9903d2a80d4_prof);

        
        $__internal_7d6d61f7d990c8101bd83681d5df5729519654428a817011b9bffa49adc951d7->leave($__internal_7d6d61f7d990c8101bd83681d5df5729519654428a817011b9bffa49adc951d7_prof);

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
