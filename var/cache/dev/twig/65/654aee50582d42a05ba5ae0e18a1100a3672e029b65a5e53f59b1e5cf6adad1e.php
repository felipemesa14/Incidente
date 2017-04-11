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
        $__internal_ba82f78cda48909e11c9b31f4d6b970f7e4287baa38670a484633f12c77d0b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba82f78cda48909e11c9b31f4d6b970f7e4287baa38670a484633f12c77d0b2d->enter($__internal_ba82f78cda48909e11c9b31f4d6b970f7e4287baa38670a484633f12c77d0b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3cb83f2889309d54feca566c60b622027f8f543469e8a3c5ade2fa635ba5194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb83f2889309d54feca566c60b622027f8f543469e8a3c5ade2fa635ba5194b->enter($__internal_3cb83f2889309d54feca566c60b622027f8f543469e8a3c5ade2fa635ba5194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ba82f78cda48909e11c9b31f4d6b970f7e4287baa38670a484633f12c77d0b2d->leave($__internal_ba82f78cda48909e11c9b31f4d6b970f7e4287baa38670a484633f12c77d0b2d_prof);

        
        $__internal_3cb83f2889309d54feca566c60b622027f8f543469e8a3c5ade2fa635ba5194b->leave($__internal_3cb83f2889309d54feca566c60b622027f8f543469e8a3c5ade2fa635ba5194b_prof);

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
