<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b4738891739229abe1a1e03337328017f5034c9370bc2a8ec844c3378d625147 extends Twig_Template
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
        $__internal_f7839c73523a1f38e10f9651916058965cc10490806bd882637fa53ebff90a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7839c73523a1f38e10f9651916058965cc10490806bd882637fa53ebff90a1a->enter($__internal_f7839c73523a1f38e10f9651916058965cc10490806bd882637fa53ebff90a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_61d51934421fcfd6d52b16db3b7a7daf99c33cbe383ee8ec904f26db1f4ddc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d51934421fcfd6d52b16db3b7a7daf99c33cbe383ee8ec904f26db1f4ddc08->enter($__internal_61d51934421fcfd6d52b16db3b7a7daf99c33cbe383ee8ec904f26db1f4ddc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f7839c73523a1f38e10f9651916058965cc10490806bd882637fa53ebff90a1a->leave($__internal_f7839c73523a1f38e10f9651916058965cc10490806bd882637fa53ebff90a1a_prof);

        
        $__internal_61d51934421fcfd6d52b16db3b7a7daf99c33cbe383ee8ec904f26db1f4ddc08->leave($__internal_61d51934421fcfd6d52b16db3b7a7daf99c33cbe383ee8ec904f26db1f4ddc08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/incidente/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
